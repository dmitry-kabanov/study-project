<?php

class Cookie
{
    private $created;
    private $userid;
    private $version;

    private $td;

    static $cypher = 'blowfish';
    static $mode = 'cfb';
    static $key = 'Choose more reliable key';

    static $cookiename = 'USERAUTH';
    static $myversion = '1';

    static $expiration = '600';
    static $warning = '300';
    static $glue = '|';

    public function __construct($userid = false)
    {
        $this->td = mcrypt_module_open(self::$cypher, '', self::$mode, '');
        if ($userid) {
            $this->userid = $userid;
            return;
        }
        else {
            if (array_key_exists(self::$cookiename, $_COOKIE)) {
                var_dump($_COOKIE[self::$cookiename]);
                $buffer = $this->_unpackage($_COOKIE[self::$cookiename]);
            }
            else {
                throw new AuthException('No cookie file');
            }
        }
    }
    
    public function set()
    {
        $cookie = $this->_package();
        setcookie(self::$cookiename, $cookie);
    }

    public function validate()
    {
        if (!$this->version || !$this->created || !$this->userid) {
            throw new AuthException('Wrong formatted cookie file');
        }

        if ($this->version != self::$myversion) {
            throw new AuthException('Version mismatch');
        }

        if (time() - $this->created > self::$expiration) {
            throw new AuthException('Cookie expired');
        }
        else if (time() - $this->created > self::$warning) {
            $this->set();
        }
    }

    public function logout()
    {
        setcookie(self::$cookiename, '', 0);
    }

    private function _package()
    {
        $parts = array(self::$myversion, time(), $this->userid);
        $cookie = implode(self::$glue, $parts);
        return $this->_encrypt($cookie);
    }

    private function _unpackage($cookie)
    {
        $buffer = $this->_decrypt($cookie);
        list($this->version, $this->created, $this->userid) = explode(self::$glue, $buffer);
        if ($this->version != self::$myversion || !$this->created || !$this->userid)
        {
            throw new AuthException();
        }
    }

    private function _encrypt($plaintext)
    {
        $iv = mcrypt_create_iv(mcrypt_enc_get_iv_size($this->td), MCRYPT_RAND);
        mcrypt_generic_init($this->td, $this->key, $iv);
        $crypttext = mcrypt_generic($this->td, $plaintext);
        mcrypt_generic_deinit($this->td);
        return $iv.$crypttext;
    }

    private function _decrypt($crypttext)
    {
        var_dump($crypttext);
        exit;
        $ivsize = mcrypt_enc_get_iv_size($this->td);
        $iv = substr($crypttext, 0, $ivsize);
        $crypttext = substr($crypttext, $ivsize);
        mcrypt_generic_init($this->td, self::$key, $iv);
        $plaintext = mdecrypt_generic($this->td, $crypttext);
        mcrypt_generic_deinit($this->td);
        return $plaintext;
    }

    private function _reissue()
    {
        $this->created = time();
    }
}
