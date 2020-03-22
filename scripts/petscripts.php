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
        function init_tables(){
            $query = "DROP TABLE IF EXISTS 'owners'; CREATE TABLE `owners` ( `ID` INT NOT NULL AUTO_INCREMENT , `fname` VARCHAR(64) NOT NULL ";
            $query.= ", `lname` VARCHAR(64) NOT NULL , `city` VARCHAR(64) NOT NULL , `age` INT NOT NULL , `email` VARCHAR(254) ";
            $query.= "NOT NULL , `password` VARCHAR(254) NOT NULL , `gender` VARCHAR(4) NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
            echo $query;
            $this->conn->query($query);
            $query =    "DROP TABLE IF EXISTS 'pets'; CREATE TABLE `pets` ( `ID` int(11) NOT NULL, `OwnerID` int(11) NOT NULL, `Name` ";
            $query .=   "varchar(64) NOT NULL, `Species` varchar(64) NOT NULL, `Breed` varchar(64) NOT NULL, `Age` int(11) NOT NULL, ";
            $query .=   "`Bio` varchar(512) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
            $this->conn->query($query);
            $query = "DROP TABLE IF EXISTS 'playdates'; CREATE TABLE `playdates` ( `PetID_creator` int(11) NOT NULL, `OwnerID_creator` ";
            $query.= "int(11) NOT NULL, `PetID_responder` int(11) NOT NULL, `OwnerID_responder` int(11) NOT NULL, `Time` date NOT NULL, ";
            $query.= "`State` varchar(4) NOT NULL, `City` int(64) NOT NULL, `Confirmed` tinyint(1) NOT NULL DEFAULT 0 ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
            $this->conn->query($query);
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