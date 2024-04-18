<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class MembreController extends Controller
{
    // function index(Request $req){
    //     return $req->file('file')->store('img');
    // }
    function List()
    {
        $data = Customer::all();
        return view('list', compact('data'));
    }
    function delete($id)
    {
        $data = Customer::find($id);
        $data->delete();
        return back();
    }
    function showdata($id)
    {
        $data = Customer::find($id);
        return view('edit', compact('data'));
    }
    function update(Request $req)
    {
        $data = Customer::find($req->id);
        $data->id = $req->id;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->save();
        return redirect("list");

    }

    public function showForm(){
        return view('add');
    }
    public function storeData(Request $req){
        Customer::create($req->all());
        // return redirect('/list');
        return redirect()->route('list');
    }
}
