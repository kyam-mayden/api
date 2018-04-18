<?php

/**
 * @return PDO
 */
function connectDatabase():PDO {
    $db = new PDO('mysql:host=127.0.0.1; dbname=mufcAPI', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

$db = connectDatabase();


function get_player($name, $db)
{

}