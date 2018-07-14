<?php

namespace App\Http\Controllers;

use App\Client;
use App\Http\Resources\Client as ClientResource;

class ClientController extends Controller
{
    public function show ($id)
    {
        return new ClientResource(Client::find($id));
    }

    public function index()
    {
        return ClientResource::collection(Client::with('sales'));
    }

    public function store(Request $request)
    {
        $client = Client::create([
            'id' => $request->id,
            'rfc' => $request->rfc,
            'businessName' => $request->businessName,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'discount' => $request->discount,
        ]);

        return new ClientResource($client);
    }

    public function update(Request $request, Client $client)
    {
        $client->update($request->only(['title', 'description']));

        return new ClientResource($client);
    }

    public function destroy(Client $client)
    {
        $client->delete();

        return response()->json(null, 204);
    }
}
