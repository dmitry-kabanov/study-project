<?php
/**
 * Created by JetBrains PhpStorm.
 * User: dima
 * Date: 5/5/11
 * Time: 11:11 PM
 * To change this template use File | Settings | File Templates.
 */

include 'Mail.php';

$recipients = 'kabanovdmitry@gmail.com';

$headers = array(
  'From' => 'kabanovdmitry@gmail.com',
  'To' => 'kabanovdmitry@yandex.ru',
  'Subject' => 'Test message',
);

$body = 'Hello Rustam!'.PHP_EOL.'How are you?'.PHP_EOL;

$params = array(
  'host' => 'ssl://smtp.google.com',
  'port' => 465,
  'auth' => true,
  'user' => 'kabanovdmitry@gmail.com',
  'password' => 'ueukbpbheq',
  'timeout' => 5,
  
);

$mail = Mail::factory('smtp', $params);

$result = $mail->send($recipients, $headers, $body);

if (Pear::isError($result))
{
    print $result->getMessage().PHP_EOL;
}
