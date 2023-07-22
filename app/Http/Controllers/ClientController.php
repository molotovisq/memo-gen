<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::where('deleted', '!=', 1)->get();
        return view('clients.clients',[
            'clients' => $clients
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = City::all();
        $states = State::all();

        return view('clients.create',[
            'states' => $states,
            'cities' => $cities
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form_data = $request->form;

        unset($form_data['state']);

        $created_client = Client::create($form_data);
        return response()->json(['client_id' => $created_client->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {

        return view('clients.view',[
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        $cities = City::all();
        $states = State::all();

        return view('clients.edit',[
            'client' => $client,
            'states' => $states,
            'cities' => $cities
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $form_data = $request->form;
        unset($form_data['state']);
        unset($form_data['_token']);

        $updated_client = Client::where('id', '=', $client->id)->update($form_data);

        return response()->json(['client_id' => $client->id, 'data' => $form_data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
            $client_slug = $client->name . " " . $client->cpf;
            $client_id = $client->id;

            $client->update(['deleted' => 1]);
            return response()->json(['message' => 'Deletando o cliente: "' . $client_slug . '" ID: ' . $client_id], 200);
    }
}
