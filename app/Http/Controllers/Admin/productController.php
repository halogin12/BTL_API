<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\products;
class productController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return products::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requestData = new products;
        $requestData->id = $request->id;
        $requestData->categories_id = $request->categories_id;
        $requestData->brand_id = $request->brand_id;
        $requestData->user_id = $request->user_id;
        $requestData->name = $request->name;
        $requestData->avatar = $request->avatar;
        $requestData->price = $request->price;
        $requestData->quantity = $request->quantity;
        $requestData->description = $request->description;
        $requestData->save();
        return 'Thêm thành công';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return products::all()->where('id',$id);
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
        $update = products::where('id',$id)
            ->update([
                    'categories_id' => $request->categories_id,
                    'brand_id' => $request->brand_id,
                    'user_id' => $request->user_id,
                    'name' => $request->name,
                    'avatar' => $request->avatar,
                    'price' => $request->price,
                    'avatar' => $request->avatar,
                    'quantity' => $request->quantity,
                    'description' =>$request->description
            ]);
            return 'Sửa thành công';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = products::find($id)->delete();
        return 'Xoá thành công';
    }
}
