<?php

class Conexao
{
    private static $user = "aula06";
    private static $pass = "aula06";
    private static $dns = "pgsql:host=localhost;dbname=aula06";
    private static $instance = null;
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    // se instancia e'nula faz conexao de banco, quando fazer conextao a instancia ja nao sera nula entao nao vai se conectar de novo
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new PDO(self::$dns, self::$user, self::$pass);
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
