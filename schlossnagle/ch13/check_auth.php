<?php

function check_auth()
{
    //try {
        $cookie = new Cookie();
        $cookie->validate();
    //}
    //catch (AuthException $e) {
    //    header('Location: login.php?originating_uri='.$_SERVER['REQUEST_URI']);
    //}
}
