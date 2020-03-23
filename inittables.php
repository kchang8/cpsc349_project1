<?php
    include 'scripts/petscripts.php';
    //Replace these values for whatever your login info/database info is

    $db = new PetDatabase('localhost','root','0','petdatabase2');
    
    $db->init_tables();

?>