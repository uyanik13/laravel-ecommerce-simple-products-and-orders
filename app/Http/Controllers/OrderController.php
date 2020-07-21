<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index(Request $request)
      {

        //$collection = DB::table('orders')->where('order_at',Carbon::now()->format('d-m-Y'))->paginate(15)->toArray();
        $collection = DB::table('orders')->paginate(15)->toArray();

        return $collection;

      }


      public function AllOrderPrice(Request $request)
      {

        //$collection = Order::all();
        //$collection = Order::where('order_at',Carbon::now()->format('d-m-Y'));
        $collection = DB::table('orders')->get();
        $allOrderSum = number_format($collection->sum('price'),2);

        return $allOrderSum;

      }

      public function WhoSpendMostMoneyDaily()
      {
        $userList = User::orderBy('user_total_debt', 'desc')->get();

        return $userList->toArray();

      }
        public function WhoSpendMostMoneyWeekly()
        {
          $userList = User::orderBy('user_total_debt', 'desc')->get();

          return $userList->toArray();
        }

      public function WhoSpendMostMoneyMonthly( )
      {
        $userList = User::orderBy('user_total_debt', 'desc')->get();

        return $userList->toArray();
      }

      public function top10BestSellingProducts(Request $request)
      {
        $result = Order::selectRaw("product_id,count(id) as top10Products")
          ->groupBy('product_id')
          ->orderBy('top10Products','DESC')
          ->limit('10')
          ->get();


        return $result->toArray();
      }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
