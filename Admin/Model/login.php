<?php
    class Login{
        function __construct()
        {
            
        }

        function logAdmin($user, $password)
        {
            $select = "SELECT user FROM admin WHERE user = '$user' AND password = '$password'";
            $db=new connect();
            $result = $db->getItem($select);
            return $result;
        }
    }
?>