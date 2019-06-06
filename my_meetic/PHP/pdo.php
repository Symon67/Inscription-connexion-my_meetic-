<?php
class database {
protected function db() {

    try
    {
        $db = new PDO("mysql:host=localhost;dbname=my_meetic;charset=utf8mb4", "root",'', [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return $db;
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
      }
}
?>
