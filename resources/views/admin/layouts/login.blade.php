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
    <h4 class="mb-1 pt-2">Administrateur login 👋</h4>
    <p class="mb-4">Connectez-vous à votre compte </p>

    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('login') }}">
      @csrf
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
          autofocus
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
          <a href="auth-forgot-password-basic.html">
            <small>Mot de passe oublié?</small>
          </a>
        </div>
        <div class="input-group input-group-merge">
          <input
            type="password"
            id="password"
            class="form-control @error('password') is-invalid @enderror"
            name="password"
            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
            required
            autocomplete="current-password"
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
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
          <label class="form-check-label" for="remember">
            {{ __('Souvenez-vous de moi') }}
          </label>
        </div>
      </div>
      <div class="mb-3">
        <button class="btn btn-primary d-grid w-100" type="submit">Connecter</button>
      </div>
    </form>
  </div>
@endsection
