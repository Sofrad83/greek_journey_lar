@extends('default')

@section('page-title')
CREER MON COMPTE
@endsection

@section('background-img'){{URL::asset('img/greek/carousel-register.png')}}@endsection

@section('content')
    <x-auth-card>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input id="name" class="form form-control form-custom" placeholder="Pseudo" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input id="email" class="form form-control form-custom" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input id="password" class="form form-control form-custom"
                                type="password"
                                name="password"
                                placeholder="Mot de passe"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input id="password_confirmation" class="form form-control form-custom"
                                type="password"
                                placeholder="Confirmez mot de passe"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <div class="mt-4">
                    <button class="btn btn-warning w-100" type="submit">Créer mon compte</button>
                </div>
            </div>
        </form>
    </x-auth-card>
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col text-center">
                Déjà un compte ?
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col text-center">
                <a href="{{route('login')}}" class="btn btn-sm btn-warning">Se connecter</a>
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
