<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function index (){
        $clients = Client::all();
        return view('clients.index', ['clients' => $clients]);
    }

    public function add (){
        return view('clients.add');
    }

    public function save (Request $request){
        // dd($request->first_name);
        $data = $request->validate([
            'first_name' => 'required',
            'lastname' => 'required',
            'user_name' => 'required',
            'age' => 'required|numeric',
        ]);

        // Saving clients into database
        $newClient = Client::create($data);
        return redirect(route('clients.index'));  
    }

    public function edit (Client $client){
        return view('clients.update', ['client' => $client]);
        // dd($client);
    }

    public function update (Client $client, Request $request){
        $data = $request->validate([
            'first_name' => 'required',
            'lastname' => 'required',
            'user_name' => 'required',
            'age' => 'required|numeric',
        ]);

        $client->update($data);
        return redirect(route('clients.index'))->with('success', 'Client updated successfully');
    }

    public function destroy (Client $client){
        $client->delete();
        return redirect(route('clients.index'))->with('success', 'Client deleted successfully');
    }
}
