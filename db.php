<?php

try {
    $db = new PDO("sqlite:northwind.sqlite", null, null);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $pe) {
    die("Could not connect to the database :" . $pe->getMessage());
}