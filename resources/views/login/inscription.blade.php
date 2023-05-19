@extends('base')

@section("titre", "inscrivez-vous")

@section('contenu')
    <h2 class="text-center">Page d'inscription</h2>
    
    <center>
        <form action="" method="post">
            @csrf           
            <div class="mb-3 form-group w-50">
                <input class="form-control" type="text" name="nom" id="" placeholder="votre nom...">
            </div>                       
            <div class="mb-3 form-group form-group w-50">
                <input class="form-control" type="text" name="prenom" id="" placeholder="votre prenom...">
            </div>                       
            <div class="mb-3 form-group form-group w-50">
                <input class="form-control" type="text" name="email" id="" placeholder="votre email...">
            </div>                                   
            <div class="mb-3 form-group form-group w-50">
                <input class="form-control" type="text" name="telephone" id="" placeholder="votre number phone...">
            </div>                       
            <div class="mb-3 form-group form-group w-50">
                <input class="form-control" type="date" name="age" id="" placeholder="votre date de naissance...">
            </div>
            <div class="mb-3 form-group form-group w-50">
                <input class="form-control" type="password" name="mdp_1" id="" placeholder="votre mot de pass...">
            </div>  
            <div class="mb-3 form-group form-group w-50">
                <input class="form-control" type="password" name="mdp_2" id="" placeholder="confirmation mot de pass...">
            </div>     
            <button type="submit" class="btn btn-primary w-25 mb-3">S'inscrire</button>            
        </form>
    </center>   
@endsection