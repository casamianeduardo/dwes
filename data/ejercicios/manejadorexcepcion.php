<?php
    class MiExcepcion extends Exception{
        public function errorPersonalizado(){
            $menserror= " Informacion del error: "
                . "<br>Mensaje del error: " . $this->getMessage()
                . "<br>Fichero del error: " . $this->getFile()
                . "<br>Linea en la que se produce el error: " . $this->getLine();
                return $menserror;
        }

    }
