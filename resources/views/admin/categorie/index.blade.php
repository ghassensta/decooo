@extends('admin.layouts.app')

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
    var successMessage = document.getElementById('message');
    if (successMessage) {
        successMessage.style.display = 'none';
    }
}, 2000);
</script>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary float-xxl-end mb-2" data-bs-toggle="modal" data-bs-target="#createCategorieModal">
    Ajouter Catégorie
</button>

<!-- Modal for creating category -->
<div class="modal fade" id="createCategorieModal" tabindex="-1" aria-labelledby="createCategorieModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createCategorieModalLabel">Ajouter Catégorie</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom de la catégorie</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="imagecat" class="form-label">Image</label>
                        <input type="file" class="form-control" id="imagecat" name="imagecat" accept="image/*" required>
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
                <th scope="col">Image</th>
                <th scope="col">Date de création</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @if($categories->isEmpty())
                <tr>
                    <td colspan="5" class="text-center">Aucune catégorie disponible</td>
                </tr>
            @else
                @foreach($categories as $categorie)
                <tr>
                    <th scope="row">{{ $categorie->id }}</th>
                    <td>{{ $categorie->name }}</td>
                    <td><img src="{{ asset('catgeiresimages/' . $categorie->imagecat) }}" alt="{{ $categorie->name }}" width="50"></td>
                    <td>{{ $categorie->created_at?->format('d-m-Y') }}</td>
                    <td>
                        <button type="button" class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editCategorieModal{{ $categorie->id }}">Editer</button>
                        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>

                <!-- Modal for editing category -->
                <div class="modal fade" id="editCategorieModal{{ $categorie->id }}" tabindex="-1" aria-labelledby="editCategorieModalLabel{{ $categorie->id }}" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editCategorieModalLabel{{ $categorie->id }}">Editer Catégorie</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" action="{{ route('categories.update', $categorie->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="imagecat" class="form-label">Image</label>
                                        <input type="file" class="form-control" id="imagecat" name="imagecat" accept="image/*">

                                    </div>
                                    <div class="mb-3">
                                        <img src="{{ asset('catgeiresimages/' . $categorie->imagecat) }}" style="height:50px" alt="">
                                    </div>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nom de la catégorie</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ $categorie->name }}" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
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
