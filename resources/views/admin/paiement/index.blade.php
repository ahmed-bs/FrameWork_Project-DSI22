@extends('layouts.admin')

@section('main')
@if (session('deletePaiement'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deletePaiement') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<a href="{{ route('paiements.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Add new  Paiement</a>
<div class="text-info"><h3><i class="fas fa-users"></i>Paiement list</h3></div>
 <br>

    <table class="table table-bordered">
        <thead>
          <tr class="table-info">
            <th scope="col"><i class="fas fa-key"></i> Key</th>
            <th scope="col"><i class="fas fa-user-check"></i>numero_montant</th>
            <th scope="col"><i class="fas fa-envelope-open-text"></i>montant</th>
<th scope="col"><i class="fas fa-user-check"></i>date_paiement</th>

            <th scope="col"><i class="fas fa-cogs"></i> Opérations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($paiements as $key => $paiement)
            <tr>
              <th scope="row">{{ $key }}</th>
              <td>{{ $paiement->numero_montant}}</td>
              <td>{{ $paiement->montant }}</td>
  <td>{{ $paiement->date_paiement }}</td>

              <td>
                  <a href="{{ route('paiements.show', ['paiement' => $paiement->id]) }}" class="btn btn-info" title="Show details about {{ $paiement->numero_montant}}">
                  <i class="fas fa-user-tag"></i></a>
                  <a href="{{ route('paiements.edit', ['paiement' => $paiement->id]) }}" class="btn btn-warning" title="Edit paiement{{ $paiement->numero_montant  }}" >
                    <i class="fas fa-user-check"></i></a>
                    <a href="#" class="btn btn-danger" title="Delete paiement{{ $paiement->numero_montant }}"
                        onclick="event.preventDefault(); document.querySelector('#delete-paiement-form').submit()"
                        ><i class="fas fa-user-slash"></i></a>
                    <form action="{{ route('paiements.destroy', ['paiement' => $paiement->id]) }}" method="post" id="delete-paiement-form">@csrf @method('DELETE')</form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mx-auto"  style="width: 200px;">
        {{ $paiements->links() }}
    </div>

@endsection