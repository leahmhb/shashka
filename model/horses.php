<?php
function get_horses(){
    global $db;
    $query = 'SELECT * FROM horses
              ORDER BY grade';
    $statement = $db->prepare($query);
    $statement->execute();
    return $statement;
}