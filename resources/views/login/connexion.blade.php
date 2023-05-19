@extends('base')

@section("titre", "connectez-vous")

@section('contenu')
    <h2 class="text-center">Page de connexion</h2>
    <center>
        <form action="" method="post">
            @csrf                                             
            <div class="mb-3 form-group form-group w-50">
                <input class="form-control" type="text" name="email" id="" placeholder="Login...">
            </div>                                   
            <div class="mb-3 form-group form-group w-50">
                <input class="form-control" type="password" name="mdp" id="" placeholder="Password...">
            </div> 
            <div class="mb-2">
                vous n'avez pas de compter : <a href="{{ route('login.inscription')}}">Inscrivez-vous</a>
            </div>                                   
            <button type="submit" class="btn btn-primary w-25 mb-3">Se connecter</button>            
        </form>
    </center>
@endsection