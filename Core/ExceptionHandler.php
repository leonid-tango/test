<?php
/**
 * Created by PhpStorm.
 * User: leonid
 * Date: 11/9/15
 * Time: 8:39 AM
 */

namespace Core;


class ExceptionHandler
{

    public function notFound($userName)
    {
        return 'not found user ' . $userName;
    }

    /**
     * @param array $data
     * @return array
     */
    public function notEnoughData(array $data)
    {
        $userErrors =[];
        foreach ($data as $key => $value ) {
            if (!$value) {
                if ($key == 'repeat_password') {
                    continue;
                }
                $userErrors[$key] = preg_replace("(_)"," ", $key);
            }
        }
        return $userErrors;
    }


    public function notEqual($pass, $secondPass)
    {
        $equal = true;
        if ($pass !== $secondPass) {
            $equal = false;
        }
        return $equal;
    }

    public function notEnoughChars(array $data)
    {
        $goodLength = true;
        foreach ($data as $minLength => $val) {
            if (count($val) < count($minLength)) {
                $goodLength = false;
                break;
            }
        }
        return $goodLength;
    }

}