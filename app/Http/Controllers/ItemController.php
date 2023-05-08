<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;


class ItemController extends Controller
{
    //

    public function deleted(){
        $deleted_item = Item::onlyTrashed()->get();

        return $deleted_item;
    }

    public function create(){
        return view('inventory.create');
    }

    public function index(){
        return view('inventory.index' , [
            "items" => Item::all()
        ]);
    }

    public function store(Request $request){
        $item = new Item();
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->save();

        return redirect()->route('item.index');
    }

    public function show($id){
        return view('inventory.show' , [ 'item' => Item::findOrFail($id) ]);
    }

    public function edit($id){
        return view('inventory.edit' , ['item' => Item::findOrFail($id)]);
    }

    public function update($id , Request $request){
        $item = Item::findOrFail($id);
        $item->name = $request->name;
        $item->price = $request->price;
        $item->stock = $request->stock;
        $item->update();

        return redirect()->route('item.index');
    }

    public function destory($id){
        $item = Item::findOrFail($id);
        $item->delete();

        return redirect()->route('item.index');
    }


}
