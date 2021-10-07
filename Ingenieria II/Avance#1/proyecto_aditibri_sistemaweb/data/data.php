<?php

class Data{

    public $server;
    public $user;
    public $password;
    public $db;
    public $connection;
    public $isActive;

    /*Constructor*/
    public function __construct() //lo nuevo de php 
    {
        $hostName = gethostname();

        switch ($hostName) {
            case "PC-01": //Office's PC //en caso de haber otra
                $this->isActive = false;
                $this->server = "localhost";
                $this->user = "root";
                $this->password = "1234";
                $this->db = "dbemascota";
                break;
            case "Heyner": //laptop's PC //Nombre de mi ordenador john-VM
                $this->isActive = false;
                $this->server = "localhost";
                $this->user = "root";
                $this->password = "";
                $this->db = "dbaditibri";
                break;

            default: //Hosting
                $this->isActive = false;
                $this->server = "x.x.x.x";
                $this->user = "xxxxxxx";
                $this->password = "xxxxxxx";
                $this->db = "xxxxxxxxxx";
                break;
        }
    }

}