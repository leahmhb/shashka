<?php
function get_abilties(){
    global $db;
    $query = 'SELECT * FROM abilities
              ORDER BY ability_name';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_positive_abilties(){
    global $db;
    $query = 'SELECT * FROM abilities
   						WHERE postive = "yes";
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}

function get_negative_abilties(){
    global $db;
    $query = 'SELECT * FROM abilities
   						WHERE negative = yes;
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}
