<?php
/**
 * Manejo de sesiones
 */
class Session{

    public function __construct() { }

    public function init(){
        @session_start();
    }

    public function set($varSesion, $valor){
        $_SESSION[$varSesion] = $valor;
    }

    public function get($varSesion){
        return $_SESSION[$varSesion];
    }

    public function destroy(){
        session_unset();
        session_destroy();
    }
}