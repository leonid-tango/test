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

    /**
     * @return bool
     */
    public function sessionStart()
    {
         return session_start();
    }

    /**
     * @param $sessionName
     * @param $data
     * @return mixed
     */
    public function createSession($sessionName, $data)
    {
        if (!isset($_SESSION[$sessionName])) {
            $_SESSION[$sessionName] = $data;
        }
        return $_SESSION;
    }

    /**
     * clear all session data
     */
    public function sessionDestroy()
    {
        session_destroy();
    }

}