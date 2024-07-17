@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Editer Produit</h2>
    <form method="POST" action="{{ route('produits.update', $product->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nom du produit</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prix</label>
            <input type="number" class="form-control" id="price" name="prix" value="{{ $product->prix }}" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantité</label>
            <input type="number" class="form-control" id="quantity" name="quantite" value="{{ $product->quantite }}" required>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Catégorie</label>
            <select class="form-control" id="category_id" name="categorie_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $product->categorie_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="images" class="form-label">Images du produit</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
            <div class="mt-3">
                @foreach($product->image as $image)
                    <img src="{{ asset('images/' . $image->path) }}" alt="Image" width="50" height="50">
                @endforeach
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
