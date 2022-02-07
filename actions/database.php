<?php

try{
    $db = new PDO ('mysql:host = localhost; dbname=forum;charset=utf8;', 'root','');
}catch(Exeption $e){
    die('une erreur à été trouvée'. $e->getMessage());
}
