@extends('layouts.admin')

@section('main')
@if (session('storePanier'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storePanier') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updatePanier'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updatePanier') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<h3><div class="text-info"><i class="fas fa-id-card"></i>Details about Panier :</div> <strong>{{ $panier->id}}</strong></h3>
<div class="card" style="width: 38rem;">
    <div class="card-body">
        <h5 class="card-title"><i class="fas fa-user-check"></i> <strong>{{  $panier->id}}</strong></h5>
        <ul class="list-group list-group-flush">Details:
            <li class="list-group-item"> <i class="fas fa-at"></i>{{ $panier->nbrArticle }}</li>
            <li class="list-group-item"><i class="fas fa-mobile-alt"></i> {{ $panier->totalPrix }}</li>
         
        </ul>
        <hr>
        <a href="{{ route('paniers.edit', ['panier' => $panier->id]) }}" class="btn btn-warning" title="Edit panier{{ $panier->id }}">
            <i class="fas fa-user-check"></i></a>
            <a href="#" class="btn btn-danger" title="Delete user {{ $panier->id }}"
                onclick="event.preventDefault(); document.querySelector('#delete-panier-form').submit()"
                ><i class="fas fa-user-slash"></i></a>
            <form action="{{ route('paniers.destroy', ['panier' => $panier->id]) }}" method="post" id="delete-panier-form">@csrf @method('DELETE')</form>
       </div>
  </div>

@endsection
