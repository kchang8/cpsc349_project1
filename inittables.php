<?php
    include 'scripts/petscripts.php';
    //Replace these values for whatever your login info/database info is

    $db = new PetDatabase('localhost','kailiec','1234','PetDatabase');
    
    $db->init_tables();

?>