<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Requests\ItemRequest;

class ItemsController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        $item = new Item();
        return view('items.create', compact('item'));
    }

    public function store(ItemRequest $request)
    {
        Item::create($request->validated());
        return redirect('items')->with('success','Item created successfully!');
    }

    public function show(Item $item)
    {
        return view('items.show', compact('item'));
    }

    public function edit(Item $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(ItemRequest $request, Item $item)
    {
        $item->update($request->validated());
        return redirect('items')->with('success','Item edited successfully!');
    }

    public function destroy(Item $item)
    {

        if ($item->issuances()->count() > 0) {
            return redirect('items')->with('error', 'Cannot delete item ' . $item->name);
        } else {
            $item->delete();
            return redirect('items')->with('success', 'Item deleted successfully!');
        }
        $item->delete();
        return redirect('items/')->with('success','Item deleted successfully!');
    }
}
