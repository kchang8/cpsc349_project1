<?php
    include 'petscripts.php';
    $db = new PetDatabase('localhost','San','1234','petdatabasetest');
    echo "we made it";
    $db->create_tables();

?>