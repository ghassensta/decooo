@extends('auth.appauth')
@section('authcontent')
<div class="card-body">
    <!-- Logo -->
    <div class="app-brand justify-content-center mb-4 mt-2">
      <a href="index.html" class="app-brand-link gap-2">
        <span class="app-brand-logo demo">
          <img src="{{ asset('assets/images/logo.png') }}" width="150" alt="">
        </span>
      </a>
    </div>

    <!-- /Logo -->
    <h4 class="mb-1 pt-2">Bienvenue à Home Deco 👋</h4>
    <p class="mb-4">Créez votre compte</p>

    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('register') }}">
      @csrf
      <div class="mb-3">
        <input type="hidden" name="role" value="client">
        <label for="name" class="form-label">Nom</label>
        <input
          type="text"
          id="name"
          class="form-control @error('name') is-invalid @enderror"
          name="name"
          value="{{ old('name') }}"
          required
          autocomplete="name"
          autofocus
        />
        @error('name')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input
          type="email"
          id="email"
          class="form-control @error('email') is-invalid @enderror"
          name="email"
          value="{{ old('email') }}"
          required
          autocomplete="email"
        />
        @error('email')
        <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
      <div class="mb-3 form-password-toggle">
        <div class="d-flex justify-content-between">
          <label class="form-label" for="password">Mot de passe</label>
        </div>
        <div class="input-group input-group-merge">
          <input
            type="password"
            id="password"
            class="form-control @error('password') is-invalid @enderror"
            name="password"
            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            required
            autocomplete="new-password"
          />
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
        </div>
      </div>
      <div class="mb-3">
        <label for="password-confirm" class="form-label">Confirmer le mot de passe</label>
        <input
          type="password"
          id="password-confirm"
          class="form-control"
          name="password_confirmation"
          placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
          required
          autocomplete="new-password"
        />
      </div>
      <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">S'inscrire</button>
      </div>
    </form>
    <p class="text-center">
        <span>Déjà un compte?</span>
        <a href="{{ route('login') }}">
            <span>Connectez-vous ici</span>
        </a>
    </p>

  </div>
@endsection
