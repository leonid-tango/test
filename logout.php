<?php
/**
 * Created by PhpStorm.
 * User: leonid
 * Date: 11/4/15
 * Time: 10:43 PM
 */
session_start();
session_destroy();
header('Location: index.php');