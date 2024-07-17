@extends('admin.layouts.app')

@section('content')
<div class="container mt-4">
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

    <!-- Formulaire de recherche -->
    <form method="GET" action="{{ route('collaborateurs.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Rechercher un collaborateur" value="{{ request()->query('search') }}">
            <button class="btn btn-primary" type="submit">Rechercher</button>
        </div>
    </form>

    <a href="#" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createModal">Ajouter Collaborateur</a>

    <table class="table table-striped table-bordered mt-4">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Date</th>
                <th scope="col">Nom & Prénom</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @if($clients->isEmpty())
                <tr>
                    <td colspan="6" class="text-center">Aucun collaborateur disponible</td>
                </tr>
            @else
                @foreach($clients as $client)
                <tr>
                    <th scope="row">{{ $client->id }}</th>
                    <td>{{ $client->created_at ? $client->created_at->format('d-m-Y') : '' }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->role }}</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal" data-id="{{ $client->id }}" data-name="{{ $client->name }}" data-email="{{ $client->email }}">Editer</button>
                        <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $client->id }}">Supprimer</button>
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>

    <!-- Liens de pagination -->
    <div class="d-flex justify-content-center mt-4">
        {{ $clients->appends(request()->query())->links() }}
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="createForm" method="POST" action="{{ route('collaborateurs.store') }}">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="createModalLabel">Ajouter Collaborateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="createName" class="form-label">Nom & Prénom</label>
                        <input type="text" class="form-control" id="createName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="createEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="createEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="createPassword" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="createPassword" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="createPasswordConfirmation" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="createPasswordConfirmation" name="password_confirmation" required>
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

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="editForm" method="POST" action="">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Editer le collaborateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="editName" class="form-label">Nom & Prénom</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPassword" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control" id="editPassword" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="editPasswordConfirmation" class="form-label">Confirmer le mot de passe</label>
                        <input type="password" class="form-control" id="editPasswordConfirmation" name="password_confirmation">
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

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form id="deleteForm" method="POST" action="">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Supprimer le collaborateur</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûr de vouloir supprimer ce collaborateur ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var editModal = document.getElementById('editModal');
    editModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');
        var name = button.getAttribute('data-name');
        var email = button.getAttribute('data-email');

        var form = editModal.querySelector('form');
        form.action = '/collaborateurs/' + id;

        form.querySelector('#editName').value = name;
        form.querySelector('#editEmail').value = email;
    });

    var deleteModal = document.getElementById('deleteModal');
    deleteModal.addEventListener('show.bs.modal', function(event) {
        var button = event.relatedTarget;
        var id = button.getAttribute('data-id');

        var form = deleteModal.querySelector('form');
        form.action = '/collaborateurs/' + id;
    });
});
</script>
@endsection
