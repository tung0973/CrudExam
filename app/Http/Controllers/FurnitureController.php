<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    
    public function index()
    {
        $furniture = Furniture::all();
        return view ('furniture.index')->with('furniture', $furniture);
    }


    public function create()
    {
        return view('furniture.create');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        Furniture::create($input);
        return redirect('furniture')->with('flash_message', 'Furniture Addedd!');
    }


    public function show($id)
    {
        $furniture = Furniture::find($id);
        return view('furniture.show')->with('furniture', $furniture);
    }


    public function edit($id)
    {
        $furniture = Furniture::find($id);
        return view('furniture.edit')->with('furniture', $furniture);
    }


    public function update(Request $request, $id)
    {
        $contact = Furniture::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('furniture')->with('flash_message', 'Furniture Updated!');
    }


    public function destroy($id)
    {
        Furniture::destroy($id);
        return redirect('furniture')->with('flash_message', 'Furniture deleted!');
    }
}
