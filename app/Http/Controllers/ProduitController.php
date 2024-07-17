<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;
use Illuminate\Support\Facades\Auth;

class ProduitController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories = Categorie::all();
        return view('admin.produits.index', compact('products', 'categories'));
    }

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
        if ($request->ridrectto=="1"){
            return redirect()->back()->with('success', 'Produit mis à jour avec succès');
        }else{
        return redirect()->route('produits.index')->with('success', 'Produit créé avec succès');
        }
    }

    public function show($id)
    {
        $produit = Product::findOrFail($id);
        $produitsMemeCategorie = Product::where('categorie_id', $produit->categorie_id)
                                        ->where('id', '!=', $produit->id)
                                        ->get();

        return view('admin.produits.show', compact('produit', 'produitsMemeCategorie'));
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Categorie::all();
        return view('admin.produits.edit', compact('product', 'categories'));
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

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès');
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
        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès');
    }

    public function updateStatus(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->update(['statut' => $request->has('statut') ? 1 : 0]);
        if($request->toback==1){
            return redirect()->back()->with('success', 'Statut du produit mis à jour avec succès');
        }else{
        return redirect()->route('produits.index')->with('success', 'Statut du produit mis à jour avec succès');
    }
    }
}
