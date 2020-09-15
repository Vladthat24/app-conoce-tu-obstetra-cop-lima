<?php

    header("content-type: image/png");

    $imagen= imagecreate(50,50);
    $color_fondo=imagecolorallocate($image,129,23,45);
    $color_text=imagecolorallocate($image,255,255,255);
 
    function generar_caracteres($chars,$length){
       
        $captcha= null;
        for($i=0;$i<$length;$i++){
            $rand=rand(0,count($chars)-1);
            $captcha.=$chars[$rand];
        }
        return $captcha;
    }

    $captcha= generar_caracteres(array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h'),4);
    setcookie('captcha',sha1($captcha),time()+60*3);
    imagettftext($image,22,3,15,35,$color_text,"arial.ttf",$captcha);
    imagepng($imagen);
   
?>