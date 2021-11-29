<?php

namespace App\Http\Controllers\Api\V1\Site\Order;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Api\V1\Site\BaseApiSiteController as BaseApiSiteController;

class OrderApiController extends BaseApiSiteController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allItems = Order::all();

        return $allItems;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        $dataToStore = [
          'name' => $request->name,
          'digit' => $request->digit,
          'description' => $request->description,
          'order_status_id' => $request->order_status_id,
          'user_id' => $user->id
        ];
        $itemToStore = Order::create( $dataToStore );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $itemToShow = Order::where('id', $id)->get();

        // if (!$itemToShow) {
        //     return
        // }

        return $itemToShow;
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
        $itemToUpdate = Order::findOrFail($id);
        $dataToUpdate = $request->all();
        $itemToUpdate->update($dataToUpdate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //SoftDeletes - $itemTodelete остается в базе данных
      // $itemTodelete = Order::destroy($id);
      $itemTodelete = Order::find($id);
      $itemTodelete->delete();

      //ForceDelete - $itemTodelete полностью удаляется из базы данных
      //$itemTodelete = Order::find($id)->ForceDelete();
    }
}
