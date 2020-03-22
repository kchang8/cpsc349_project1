<?php
    include 'scripts/petscripts.php';
    //Replace these values for whatever your login info/database info is
    $dbhost = 'localhost';
    $dbuser = 'San';
    $dbpassword = '1234';
    $petDatabase = 'petdatabase';

    $db = new PetDatabase('localhost','San','1234','petdatabasetest');
    
    $db->create_tables();

?>