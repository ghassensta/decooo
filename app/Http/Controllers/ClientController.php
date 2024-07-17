<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        $clients = User::where('role','client')->when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('email', 'like', "%{$search}%");
        })->paginate(10);

        return view('admin.clients.index', compact('clients', 'search'));
    }

    public function edit($id)
    {
        $client = User::findOrFail($id);
        return response()->json($client);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $client = User::findOrFail($id);
        $client->update($request->all());

        return redirect()->route('clients.index')->with('success', 'Client mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $client = User::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès.');
    }
}
