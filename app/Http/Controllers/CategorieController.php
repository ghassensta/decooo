<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoriespages = Categorie::all();

        return view('admin.categorie.index', compact('categoriespages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {  //edd($request->all());
        $imageName = null;
        if ($request->hasFile('imagecat')) {
                $file = $request->file('imagecat');
            $imageName = time() . rand(1, 100) . '.' . $file->extension();
            $file->move(public_path('catgeiresimages'), $imageName);
            } else {
                return redirect()->back()->with('error', 'Le fichier téléchargé n\'est pas valide.');
            }

        Categorie::create([
            'name' => $request->name,
            'imagecat' => $imageName,
        ]);

        return redirect()->route('categories.index')->with('success', 'Catégorie créée avec succès');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrFail($id);
        return view('admin.categorie.edit', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $categorie = Categorie::findOrFail($id);

        // Mise à jour du nom de la catégorie
        $categorie->update([
            'name' => $request->name,
        ]);

        if ($request->hasFile('imagecat')) {
            if ($categorie->imagecat) {
                $oldImagePath = public_path('catgeiresimages/' . $categorie->imagecat);
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $file = $request->file('imagecat');
            $imageName = time() . rand(1, 100) . '.' . $file->extension();
            $file->move(public_path('catgeiresimages'), $imageName);

            $categorie->update([
                'imagecat' => $imageName,
            ]);
        }

        return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès');
    }
}
