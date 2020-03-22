<?php

    /*
    These should be all of the pet queries we need. Hopefully.

    */
    class PetDatabase{
        public $dbhost;
        public $dbuser;
        public $dbpassword;
        public $petDatabase;
        public $conn;

        function __construct($dbhost, $dbuser, $dbpassword,$petDatabase){
            $this->dbhost = $dbhost;
            $this->dbuser = $dbuser;
            $this->dbpassword = $dbpassword;
            $this->petDatabase = $petDatabase;
            $this->conn = new mysqli($dbhost,$dbuser,$dbpassword,$petDatabase) or die("Connection failed %s\n". $conn->error);
        }

        function get_db(){
            return $this->petDatabase;  
        }


        //THIS IS A DEBUG FUNCTION, NOT INTENDED FOR PRODUCTION
        function create_tables(){
            $query = "CREATE TABLE IF NOT EXISTS `$this->petDatabase`.`owners` ( `ID` INT NOT NULL AUTO_INCREMENT , `fname` VARCHAR(64) NOT NULL ";
            $query.= ", `lname` VARCHAR(64) NOT NULL , `city` VARCHAR(64) NOT NULL , `age` INT NOT NULL , `email` VARCHAR(254) ";
            $query.= "NOT NULL , `password` VARCHAR(254) NOT NULL , `gender` VARCHAR(4) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
            echo $query;
            $this->conn->query($query);
            //CREATE TABLE `petdatabase`.`playdates` ( `PetID_creator` INT NOT NULL , `OwnerID_creator` INT NOT NULL , `PetID_responder` INT NULL , `OwnerID_responder` INT NULL , `Time` DATE NOT NULL , `State` VARCHAR NOT NULL , `City` INT NOT NULL , `Confirmed` BOOLEAN NOT NULL DEFAULT FALSE ) ENGINE = InnoDB;
        }

        //THIS IS A DEBUG FUNCTION, NOT INTENDED FOR PRODUCTION
        function populate_table(){

        }

        function login($username,$password){

        }

        function add_user($fname,$lname,$gender,$city, $age, $email, $password){

        }

        function add_pet(){

        }

        function make_ad($petname, $time){
            //SELECT the User's info from the session data using a SQL query

            //SELECT the user's current_confirmed playdates, make sure none of them are within the hour of this playdate

            //If there is no conflict, INSERT, the playdate info into the playdate table, with a "looking" tag

        }

        function request_playdate(){}

        function confirm_playdate(){}

        function get_playdates()   {} 


    }


?>