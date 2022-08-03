<?php
    function debug($data, $is_exit=false){
        echo "<pre style='background: #FFFFFF; color: #000000;'>";
        print_r($data);
        echo "</pre>";
        if($is_exit){
            exit;
        }
    }

    function setFlash($key, $msg){
        if(!isset($_SESSION)){
            session_start();
        }
        $_SESSION[$key] = $msg;
    }

    function flash(){
        if(isset($_SESSION['success']) && !empty($_SESSION['success'])){
            echo "<p class='alert alert-success'>".$_SESSION['success']."</p>";
            unset($_SESSION['success']);
        }
        if(isset($_SESSION['error']) && !empty($_SESSION['error'])){
            echo "<p class='alert alert-danger'>".$_SESSION['error']."</p>";
            unset($_SESSION['error']);

        }
        if(isset($_SESSION['warning']) && !empty($_SESSION['warning'])){
            echo "<p class='alert alert-warning'>".$_SESSION['warning']."</p>";
            unset($_SESSION['warning']);
        }
    }
    
function redirect($path, $session_key = null, $session_message = null){
        if($session_key !==  null){
            setFlash($session_key, $session_message);
        }
        header('location: '.$path);
        exit;
    }

   function randomString($length = 100){
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $leng = strlen($chars);
        $random = '';

        for($i=0; $i<$length; $i++){
            $posn = rand(0,$leng-1);
            $random .= $chars[$posn];
        }
        return $random;
    }

    function sanitize($str){
        $str = strip_tags($str);    // html tags remove
        $str = rtrim($str);
        return $str;            // mysqli_real_escape_string();
    }
      

?>