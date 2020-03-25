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
            $query = "CREATE TABLE `$this->petDatabase`.`owners` ( `ID` INT NOT NULL AUTO_INCREMENT , `fname` VARCHAR(64) NOT NULL ";
            $query.= ", `lname` VARCHAR(64) NOT NULL , `city` VARCHAR(64) NOT NULL , `state` VARCHAR(64) NOT NULL  , `age` INT NOT NULL , `email` VARCHAR(254) NOT NULL ,`bio` VARCHAR(254) ";
            $query.= "NOT NULL , `password` VARCHAR(254) NOT NULL , `gender` VARCHAR(4) NOT NULL,`image` MEDIUMBLOB NULL DEFAULT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
            echo $query;
            $this->conn->query($query);
            
            $query =    "CREATE TABLE `$this->petDatabase`.`pets` ( `ID` INT NOT NULL AUTO_INCREMENT, `OwnerID` INT NOT NULL, `Name` ";
            $query .=   "varchar(64) NOT NULL, `Species` varchar(64) NOT NULL, `Breed` varchar(64) NOT NULL, `Age` int(11) NOT NULL, ";
            $query .=   "`gender` VARCHAR(4) NOT NULL, `Bio` varchar(512) NOT NULL,`image` MEDIUMBLOB NULL DEFAULT NULL, PRIMARY KEY (`ID`)) ENGINE=InnoDB;";

            $this->conn->query($query);

            $query = "CREATE TABLE `$this->petDatabase`.`playdates` ( `PetID_creator` int(11) NOT NULL, `OwnerID_creator` ";
            $query.= "int(11) NOT NULL, `PetID_responder` int(11) NULL, `OwnerID_responder` int(11) NULL, `Time` DATETIME  NOT NULL, ";
            $query.= "`State` varchar(4) NOT NULL, `City` varchar(64) NOT NULL, `status` varchar(32) NOT NULL DEFAULT 'Pending' ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
            $this->conn->query($query);
            
            $query = "CREATE TABLE `$this->petDatabase`.`playdateads` (`ID` INT NOT NULL AUTO_INCREMENT, `PetID_creator` int(11) NOT NULL, `OwnerID_creator` ";
            $query.= "int(11) NOT NULL, `Time` DATETIME  NOT NULL, ";
            $query.= "`State` varchar(4) NOT NULL, `City` varchar(64) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
            $this->conn->query($query);
        }

        //THIS IS A DEBUG FUNCTION, NOT INTENDED FOR PRODUCTION
        function populate_table(){

        }

    }

?>