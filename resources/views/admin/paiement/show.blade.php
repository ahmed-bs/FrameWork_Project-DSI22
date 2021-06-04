@extends('layouts.admin')

@section('main')
@if (session('storePaiement'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('storePaiement') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('updatePaiement'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('updatePaiement') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<h3><div class="text-info"><i class="fas fa-id-card"></i>Details about Paiement:</div> <strong>{{ $paiement->numero_montant}}</strong></h3>
<div class="card" style="width: 38rem;">
    <div class="card-body">
        <h5 class="card-title"><i class="fas fa-user-check"></i> <strong>{{  $paiement->numero_montant }}</strong></h5>
        <ul class="list-group list-group-flush">Details:
            <li class="list-group-item"> <i class="fas fa-at"></i>{{ $paiement->numero_montant}}</li>
            <li class="list-group-item"><i class="fas fa-mobile-alt"></i> {{ $paiement->montant }}</li>
            <li class="list-group-item"> <i class="fas fa-map-marker"></i>{{ $paiement->date_paiement }}</li>
   <li class="list-group-item"> <i class="fas fa-map-marker"></i>{{ $paiement->date_expiration }}</li>

        </ul>
        <hr>
        <a href="{{ route('paiements.edit', ['paiement' => $paiement->id]) }}" class="btn btn-warning" title="Edit paiement{{ $paiement->numero_montant  }}">
            <i class="fas fa-user-check"></i></a>
            <a href="#" class="btn btn-danger" title="Delete Paiement {{ $paiement->numero_montant }}"
                onclick="event.preventDefault(); document.querySelector('#delete-paiement-form').submit()"
                ><i class="fas fa-user-slash"></i></a>
            <form action="{{ route('paiements.destroy', ['paiement' => $paiement->id]) }}" method="post" id="delete-paiement-form">@csrf @method('DELETE')</form>
       </div>
  </div>

@endsection