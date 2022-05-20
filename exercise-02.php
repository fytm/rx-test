<?php

require_once "db.php";

function get_order($id)
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM `Order` WHERE id = ?");
    $orders_query->execute($id);
    $result = $orders_query->fetchAll();

    return json_encode($result, JSON_PRETTY_PRINT, 30);
}

function get_orders()
{
    global $db;
    $orders_query = $db->prepare("SELECT * FROM `Order`");
    $orders_query->execute();
    $result = $orders_query->fetchAll();

    return json_encode($result, JSON_PRETTY_PRINT, 30);
}

function get_order_with_details($id)
{
    global $db;
    $orders_query = $db->prepare("SELECT *
    FROM `Order`
    INNER JOIN `OrderDetail`
    ON `OrderDetail`.OrderId = `Order`.Id WHERE `Order`.Id = :id LIMIT 1");
    $orders_query->bindParam(":id", $id);
    $orders_query->execute();
    $result = $orders_query->fetchAll();
    return json_encode($result[0] ?? [], JSON_PRETTY_PRINT, 30);
}

//echo get_orders(32);

echo get_order_with_details(10248);
