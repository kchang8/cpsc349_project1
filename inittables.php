<?php
    include 'scripts/petscripts.php';
    //Replace these values for whatever your login info/database info is

    $db = new PetDatabase('localhost','San','1234','petdatabasetest');
    
    $db->init_tables();

?>
