<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function create(Request $req) {

        // TODO: Check if all pizzas id's exists, etc...

        $order = new Order;

        $order->ticket_number = uniqid();
        $order->items_detail = $req->getContent();
        
        $order->save();

        return response()->json($order->ticket_number, 200);
    }

    public function getByTicket($ticketNumber) {
        return Order::where('ticket_number', $ticketNumber);
    }
}
