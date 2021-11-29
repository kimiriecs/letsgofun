<?php

namespace App\Http\Controllers\Api\V1\Site\Order;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\V1\Site\BaseApiSiteController as BaseApiSiteController;

class UserOrderApiController extends BaseApiSiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function currentUserOrders()
    {
        // $user = Auth::user();
        // $orders = $user->orders()->where('user_id', $user->id)->get();
        // return $orders;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function userOrders($user_id)
    // {
    //   $orders = Order::where('user_id', $user_id)
    //                   ->with(['user', 'status'])
    //                   ->get();
    //   return $orders;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function authorOfOrder($id)
    {
        //! eager load
        // $orders = Order::with('user')->get();
        // return $orders;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $orders = Order::with(['user', 'status'])
                      ->where('user_id', $id)
                      ->orderBy('created_at', 'desc')
                      ->orderBy('digit', 'desc')
                      ->get();
      return $orders;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
