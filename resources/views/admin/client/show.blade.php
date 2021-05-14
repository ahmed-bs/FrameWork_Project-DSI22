@extends('layouts.admin')

@section('main')
<h3><i class="fas fa-id-card"></i> Details about client : <strong>{{ $client->nom.' '.$client->prenom }}</strong></h3>
<div class="card" style="width: 38rem;">
    <div class="card-body">
        <h5 class="card-title"><i class="fas fa-user"></i> <strong>{{  $client->nom.' '.$client->prenom }}</strong></h5>
        <ul class="list-group list-group-flush">Details:
            <li class="list-group-item"><i class="fas fa-phone"></i> {{ $client->telephone }}</li>
            <li class="list-group-item"> <i class="fas fa-map-marked-alt"></i>{{ $client->adresse }}</li>
        </ul>
        <hr>
        <a href="#" class="btn btn-warning" title="Edit user {{ $client->nom.' '.$client->prenom  }}"><i class="fas fa-user-edit"></i></a>
        <a href="#" class="btn btn-danger" title="Delete user {{ $client->nom.' '.$client->prenom }}"><i class="fas fa-user-slash"></i></a>
    </div>
  </div>
   
@endsection