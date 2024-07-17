<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class VendeuseController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function vendeuselogin()
     {
        return view('admin.vendeuse.layouts.login');
     }

     public function vendeusehome(){
    $vendeuse=Product::where('user_id',Auth::user()->id)->where('statut',1)->count();
        return view('admin.vendeuse.home',['vendeuse'=>$vendeuse]);
    }
         public function index()
    {
        $products=Product::where('user_id',Auth::user()->id)->get();

        return view('admin.vendeuse.venproduits.index',["products"=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function collaborateurindex(Request $request)
    {
        $search = $request->input('search');

        $clients = User::where('role', 'vendeuse')->when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%")
                         ->orWhere('email', 'like', "%{$search}%");
        })->paginate(10);

        return view('admin.collaborateur.index', compact('clients', 'search'));
    }

    public function storecollaborateur(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'vendeuse',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Collaborateur créé avec succès');
    }

    public function editcollaborateur($id)
    {
        $client = User::findOrFail($id);
        return response()->json($client);
    }

    public function updatecollaborateur(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|min:6|confirmed',
        ]);

        $client = User::findOrFail($id);
        $data = $request->only(['name', 'email']);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $client->update($data);

        return redirect()->route('collaborateurs.index')->with('success', 'Client mis à jour avec succès.');
    }
    
    public function destroycollaborateur($id)
    {
        $client = User::findOrFail($id);
        $client->delete();

        return redirect()->route('collaborateurs.index')->with('success', 'Client supprimé avec succès.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produits = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'prix' => $request->prix,
            'quantite' => $request->quantite,
            'categorie_id' => $request->categorie_id,
            'statut' => 0,
        ]);

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('images'), $name);
                $produits->image()->create(['path' => $name]);
            }
        }

        return redirect()->route('produits.index')->with('success', 'Produit créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'prix' => $request->prix,
            'quantite' => $request->quantite,
            'categorie_id' => $request->categorie_id,
            'user_id' => Auth::user()->id,
            'statut' =>0,
        ]);

        if ($request->hasfile('images')) {
            foreach ($product->images as $image) {
                $imagePath = public_path('images/' . $image->path);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
                $image->delete();
            }

            foreach ($request->file('images') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('images'), $name);
                $product->images()->create(['path' => $name]);
            }
        }

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        foreach ($product->image as $image) {
            $imagePath = public_path('images/' . $image->path);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
            $image->delete();
        }
        $product->delete();
        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès');
    }
}
