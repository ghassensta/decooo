
@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Editer Catégorie</h2>
    <form method="POST" action="{{ route('categories.update', $categorie->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nom de la catégorie</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $categorie->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
