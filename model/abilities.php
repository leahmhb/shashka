<?php
function get_abilties(){
    global $db;
    $query = 'SELECT * FROM abilities
              ORDER BY ability_name';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}