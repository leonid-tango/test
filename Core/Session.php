<?php
/**
 * Created by PhpStorm.
 * User: leonid
 * Date: 11/9/15
 * Time: 1:31 AM
 */

namespace Core;


class Session
{

    public function __construct()
    {
        if (!isset($_SESSION)) {
            $this->sessionStart();
        }
    }

    public function sessionStart()
    {
        session_start();
    }

    public function createSession($sessionName, $data)
    {
        if (!isset($_SESSION[$sessionName])) {
            $_SESSION[$sessionName] = $data;
        }
        return $_SESSION;
    }

    public function sessionDestroy()
    {
        session_destroy();
    }

}