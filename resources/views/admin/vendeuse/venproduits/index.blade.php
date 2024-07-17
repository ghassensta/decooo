@extends('admin.vendeuse.layouts.app')

@section('content')

@if (session('success'))
<div id="message" class="alert alert-success">
    {{ session('success') }}
</div>
@endif
@if (session('erreur'))
<div id="message" class="alert alert-danger">
    {{ session('erreur') }}
</div>
@endif
<script>
setTimeout(function() {
    var message = document.getElementById('message');
    if (message) {
        message.style.display = 'none';
    }
}, 2000);
</script>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-xxl-end mb-2" data-bs-toggle="modal" data-bs-target="#createProductModal">
    Ajouter Produit
</button>

<!-- Modal -->
<div class="modal fade" id="createProductModal" tabindex="-1" aria-labelledby="createProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createProductModalLabel">Ajouter Produit</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('vendeuseproduits.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom du produit</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <input type="hidden" name="ridrectto" value="1">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Prix</label>
                        <input type="number" class="form-control" id="price" name="prix" required>
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantité</label>
                        <input type="number" class="form-control" id="quantity" name="quantite" required>
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Catégorie</label>
                        <select class="form-control" id="category_id" name="categorie_id" required>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="images" class="form-label">Images du produit</label>
                        <input type="file" class="form-control" id="images" name="images[]" multiple>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Product Table -->
<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Description</th>
                <th scope="col">Prix (DT)</th>
                <th scope="col">Quantité</th>
                <th scope="col">Catégorie</th>
                <th scope="col">Statut</th>
                <th scope="col">Images</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($products->isEmpty())
                <tr>
                    <td colspan="9" class="text-center">Aucun produit disponible</td>
                </tr>
            @else
                @foreach($products as $product)
                <tr>
                    <th scope="row">{{ $product->id }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ \Illuminate\Support\Str::limit($product->description, 40) }}</td>
                    <td>{{ $product->prix }}</td>
                    <td>{{ $product->quantite }}</td>
                    <td>{{ $product->categorie->name }}</td>
                    <td>
                            <input type="checkbox" data-toggle="switchbutton" disabled readonly  name="statut" {{ $product->statut ? 'checked' : '' }} data-onstyle="primary" data-offstyle="secondary" >
                    </td>
                    <td>
                        @foreach($product->image as $image)
                            <img src="{{ asset('images/' . $image->path) }}" alt="Image" width="50" height="50">
                        @endforeach
                    </td>
                    <td>
                        <!-- Actions like edit and delete can be added here -->
                        <a href="{{ route('vendeuseproduits.edit', $product->id) }}" class="btn btn-warning btn-sm">Editer</a>
                        <form action="{{ route('vendeuseproduits.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script>
// Any custom JavaScript if needed
</script>
@endsection
