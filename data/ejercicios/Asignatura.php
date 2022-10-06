<?php

    /* 
    CONCEPTOS:
    -Sobrescritura(metodos)
        -> mismo nombre con mismo numero de parametros, diferente comportamiento

            -->Clase figura -> metodo calcular_area
            -->Clase circulo -> metodo calcular_area
            -->Clase cuadrado -> metodo calcular_area

    -Sobrecarga(metodos)
        ->el mismo nombre con diferente numero de parametros

    -sobrecarga (constructores)
    diferentes constructores con el msmo numero de parametros

    -Polimorfismo : objeto que se comporta como otro
        - casting
        -sobrescritura
        -sobrecarga
        -ligadura dinamica



    PHP:

    -Si existe sobrescritura
    -No existe sobrecarga de metodos
    -No hay sobrecarga de constructores
    -Si hay polimorfismo (sobrescritura)
    -public, private, protected, por defecto public


    NOTACION: 
    Nombre Clases :UpperCamelCase
    Nombre metodos: lowerCamelCase
    java : this.atributo
    php : $this->atributo

    */
    
    //clase asignatura
    class Asignatura
    {
        private $nombre = null;
        private $numcreditos = null;

        private static $ciclo = null ;

        function __construct($nombre,$numcreditos)
        {
            $this-> $nombre = $nombre;
            $this->numcreditos = $numcreditos;

        }

        function getNombre(){//esto es un getter
            return $this->nombre;
        }
        function setNombre($nombre){//esto es un setter
            $this->nombre = $nombre;
        }

            function getNumeroCreditos(){
               return $this->numcreditos;
            }
            
            
            function setNumeroCreditos($numcreditos){
                $this->numcreditos = $numcreditos;
            }

            static function getCiclo(){
                return self::$ciclo;
             }
             
             
            static function setCiclo($nomciclo){
                 self::$ciclo = $nomciclo;
             }

               function __toString(){

                    return "Datos de la Asignatura : <br>" .
                        "<br>Nombre asignatura : " .  $this->nombre . 
                        "<br>Numero creditos: " .$this->numcreditos;
                }        
    
    }//fin clase 

