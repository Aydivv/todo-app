<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ListItem;

class TodoListController extends Controller
{
    //
    public function index(){
        return view('welcome', ['listItems' => ListItem::where('isComplete',0)->get()]);
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
        $item = ListItem::find($id);
        $item->isComplete = 1;
        $item->save();

        return redirect('/');
    }
}