<?php

Class Session
{
    private static function init() {
        if (session_status() != PHP_SESSION_ACTIVE)
            session_start();
    }

    public static function isLoggedIn(){
        if(self::get('login')) {
            return true;
        }
        return false;
    }

    public static function tt() {
        return 'hi';
    }
    public static function set($key, $value){
        self::init();
        $_SESSION[$key] = $value;
    }

    public static function get($key,$item = NULL){
        self::init();
        if (isset($_SESSION[$key])) {
            if(isset($item) && isset($_SESSION[$key][$item])) {
                return $_SESSION[$key][$item];
            }
    
            return $_SESSION[$key];
        } 
        return NULL; //not found
    }

    public static function destroy(){
        session_destroy();
    }
}