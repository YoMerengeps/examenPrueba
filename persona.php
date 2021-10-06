<?php

class persona{
    public $nombre;
    public $peso;
    public $altura;
    public $IMC;

    public function calcularIMC (){
        $IMC = ($this->peso / $this->altura **2);
        echo('El IMC de '. $this->nombre . ' es de : ' . $IMC . ', lo cual puede considerarse como: ');
        if ($IMC < 18.5){
            echo ('Delgadez o bajo peso');
        } else if ($IMC >= 18.5 && $IMC <=24.9){
            echo ('Normal');
        } else if ($IMC > 24.9 && $IMC <=29.9){
            echo ('Sobrepeso');
        } else {
            echo ('Obesidad');
        }
    }



}