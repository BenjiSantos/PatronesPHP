<?php

class PatronSingleton {
	
    // Contenedor de la instancia del singleton
    private static $instancia;
    private $value;
 
    // Un constructor privado evita la creación de un nuevo objeto
    private function __construct() {
    }
 
    // método singleton
    public static function singleton()
    {
        if (!isset(self::$instancia)) {
            self::$instancia = new PatronSingleton;
        } 
        return self::$instancia;
    }
	
   public function setValue($msg)
   {
      $this->$value = $msg;
   }
   
   public function getValue()
   {
      return $this->$value;
   }
    // Evita que el objeto se pueda clonar
    public function __clone()
    {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }
}

