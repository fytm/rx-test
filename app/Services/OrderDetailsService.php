<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class OrderDetailsService
{

    public static function get_order($id)
    {
        // $orders_query = $db->prepare("SELECT * FROM `Order` WHERE id = ?");
        // $orders_query->execute($id);
        // $result = $orders_query->fetchAll();
        $results = DB::select('SELECT * FROM `Order` WHERE id = ?', [$id]);
        return json_encode($results, JSON_PRETTY_PRINT, 30);
    }

    public static function get_orders()
    {
        // $orders_query = $db->prepare("SELECT * FROM `Order`");
        // $orders_query->execute();
        // $result = $orders_query->fetchAll();
        $results = DB::select('SELECT * FROM `Order`');
        return json_encode($results, JSON_PRETTY_PRINT, 30);
    }

}