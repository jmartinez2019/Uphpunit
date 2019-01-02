<?php
require_once('Email.php');

class varios
{

    public function _constructor(){
      echo "ready";
    }

    public function sumar($a, $b)
    {
        return $a+$b;
    }

    public function Arreglo(){
      $arr = [4,2,5,2];
    return $arr;

    }

    public function valor($string){
return $string;

    }

    public function inf(){
    return 4552/0;

   }

    public function ins(){
      $a = Email::class;
    return $a;

    }





    }


    ?>
