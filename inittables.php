<?php
    include 'scripts/petscripts.php';
    include 'scripts/Database_constants.php';
    //Replace these values for whatever your login info/database info is

    $db = new PetDatabase($dbHost,$dbUsername,$dbPass,$dbName);
    
    $db->init_tables();

?>
