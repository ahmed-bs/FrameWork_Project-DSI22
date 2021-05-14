@extends('layouts.admin')

@section('main')
<h3><div class="text-info"><i class="fas fa-id-card"></i>Details about client :</div> <strong>{{ $client->nom.' '.$client->prenom }}</strong></h3>
<div class="card" style="width: 38rem;">
    <div class="card-body">
        <h5 class="card-title"><i class="fas fa-user-check"></i> <strong>{{  $client->nom.' '.$client->prenom }}</strong></h5>
        <ul class="list-group list-group-flush">Details:
            <li class="list-group-item"> <i class="fas fa-at"></i>{{ $client->email }}</li>
            <li class="list-group-item"><i class="fas fa-mobile-alt"></i> {{ $client->telephone }}</li>
            <li class="list-group-item"> <i class="fas fa-map-marker"></i>{{ $client->adresse }}</li>
        </ul>
        <hr>
        <a href="#" class="btn btn-warning" title="Edit user {{ $client->nom.' '.$client->prenom  }}"><i class="fas fa-user-check"></i></a>
        <a href="#" class="btn btn-danger" title="Delete user {{ $client->nom.' '.$client->prenom }}"><i class="fas fa-user-check"></i></a>
    </div>
  </div>
   
@endsection