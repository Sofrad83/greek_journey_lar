@extends('default')

@section('page-title')
SE CONNECTER
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-login.png')}}@endsection

@section('content')
    <x-auth-card>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-input id="email" class="form form-control form-custom" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="form form-control form-custom"
                                placeholder="Mot de passe"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="mt-3">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">Rester connecté ?</span>
                </label>
            </div>

            {{-- <div class="mt-2">
                @if (Route::has('password.request'))
                    <a class="text-gold" href="{{ route('password.request') }}">
                        Mot de passe oublié ?
                    </a>
                @endif
            </div> --}}

            <div class="mt-4">
                <button class="btn btn-warning w-100" type="submit">Se connecter</button>
            </div>
        </form>
    </x-auth-card>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                Pas de compte ?
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col text-center">
                <a href="{{route('register')}}" class="btn btn-sm btn-warning">Créer mon compte</a>
            </div>
        </div>
    </div>
@endsection

@section('custom_css')

@endsection

@section('scripts')
<script>
    var csrf = "{{ csrf_token() }}";
</script>
@endsection

