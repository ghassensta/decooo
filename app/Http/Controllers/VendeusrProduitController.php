<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;
class VendeusrProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request)
    {   //dd($request);
        $produits = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'prix' => $request->prix,
            'quantite' => $request->quantite,
            'categorie_id' => $request->categorie_id,
            'user_id' => Auth::user()->id,
            'statut' => $request->has('statut') ? 1 : 0,
        ]);

        if ($request->hasfile('images')) {
            foreach ($request->file('images') as $file) {
                $name = time() . rand(1, 100) . '.' . $file->extension();
                $file->move(public_path('images'), $name);
                $produits->image()->create(['path' => $name]);
            }
        }
        return redirect()->back()->with('success', 'Produit a ete creè avec succès');

    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Categorie::all();
        return view('admin.vendeuse.edit', compact('product', 'categories'));
    }

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
            'statut' => $request->has('statut') ? 1 : 0,
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

        return redirect()->back()->with('success', 'Produit mis à jour avec succès');
    }

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
        return redirect()->back()->with('success', 'Produit supprimé avec succès');
    }
}
