<?php

    class Modulo extends Asignatura{
        private $codigo = null;

        function __construct($nombre,$numerocreditos,$codigo)
        {
            parent::__construct($nombre,$numerocreditos);
            $this->codigo = $codigo;
        }

        function getCodigo(){
            return $this->codigo;
        }
        function setCodigo($nuevocod){
            $this->codigo = $nuevocod;
        }

        function __toString(){

            return "Datos del MODULO: <br>" .
                "<br>Nombre modulo : " . $this->getNombre() . 
                "<br>Numero creditos: " . $this->getNumeroCreditos() . 
                "<br>Codigo del modulo: " . $this->codigo;
    
        }

    }//fin de clase

    