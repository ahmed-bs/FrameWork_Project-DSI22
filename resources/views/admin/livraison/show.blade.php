@extends('layouts.admin')

@section('main')
@if (session('storeLivraison'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storeLivraison') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updateLivraison'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updateLivraison') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<h3><div class="text-info"><i class="fas fa-shuttle-van"></i>Details about livraison :</div> <strong>{{ $livraison->date_livraison }}</strong></h3>
<div class="card" style="width: 38rem;">
    <div class="card-body">
        <h5 class="card-title"><i class="far fa-calendar-alt"></i> <strong>{{  $livraison->date_livraison}}</strong></h5>
        <ul class="list-group list-group-flush">Details:
            <li class="list-group-item"> <i class="fas fa-envelope-open-text"></i>{{ $livraison->description }}</li>
            <li class="list-group-item"> <i class="fas fa-shopping-basket"></i>{{ $livraison->commande_id }}</li>
        </ul>
        <hr>
        <a href="{{ route('livraisons.edit', ['livraison' => $livraison->id]) }}" class="btn btn-warning" title="Edit livraison{{ $livraison->date_livraison }}">
            <i class="fas fa-user-check"></i></a>
            <a href="#" class="btn btn-danger" title="Delete user {{ $livraison->date_livraison }}"
                onclick="event.preventDefault(); document.querySelector('#delete-livraison-form').submit()"
                ><i class="fas fa-user-slash"></i></a>
            <form action="{{ route('livraisons.destroy', ['livraison' => $livraison->id]) }}" method="post" id="delete-livraison-form">@csrf @method('DELETE')</form>
       </div>
  </div>

@endsection
