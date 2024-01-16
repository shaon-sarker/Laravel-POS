<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $date = date('d-F-Y');
        $today_paid = Order::where('order_date',$date)->sum('pay');
        $total_paid = Order::sum('pay');
        $total_due = Order::sum('due'); 
        $completeorder = Order::where('order_status','complete')->get(); 
        $pendingorder = Order::where('order_status','pending')->get(); 
        return view('index',compact('today_paid','total_paid','total_due','completeorder','pendingorder'));
    }
}
