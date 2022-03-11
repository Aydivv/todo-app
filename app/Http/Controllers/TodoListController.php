<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    //
    public function index(){
        return view('welcome', ['listItems' => ListItem::all()]);
    }

    public function saveItem(Request $request)
    {
        $newItem = new ListItem;
        $newItem->name = $request->listItem;
        $newItem->isComplete = 0;
        $newItem->save();

        return redirect('/');
    }

    public function completeItem($id)
    {
        $newItem = new ListItem;
        
        return redirect('/');
    }
}