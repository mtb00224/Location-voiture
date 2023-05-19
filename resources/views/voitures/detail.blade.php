@extends('base')

@section("titre", "detail-voiture")

@section('contenu')
    <div class="detail-voiture">
        <img src="" alt="Image ici" srcset="">
        <h3>Marque : </h3>
        <h3>Caractéristique : </h3>
        <ul>
            <li>Point 1 </li>
            <li>Point 2 </li>
            <li>Point 3 </li>
        </ul>
        <h3>Description : </h3>
        <p>
            Je suis le detail de la voiture
        </p>
        <div class="lien-detail-voiture">
            <a href="" class="btn">Louer</a>
            <a href="" class="btn">Acheter</a>
        </div>
    </div>
@endsection