@extends('layouts.admin')

@section('main')
@if (session('deletePanier'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deletePanier') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<a href="{{ route('paniers.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Add new panier</a>
<div class="text-info"><h3><i class="fas fa-users"></i> paniers list</h3></div>
 <br>

    <table class="table table-bordered">
        <thead>
          <tr class="table-info">
            <th scope="col"><i class="fas fa-key"></i> Key</th>
            <th scope="col"><i class="fas fa-user-check"></i>nbrArticle</th>
            <th scope="col"><i class="fas fa-envelope-open-text"></i> totalPrix</th>

            <th scope="col"><i class="fas fa-cogs"></i> Opérations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($paniers as $key => $panier)
            <tr>
              <th scope="row">{{ $key }}</th>
              <td>{{ $panier->nbrArticle }}</td>
              <td>{{ $panier->totalPrix }}</td>
              <td>
                  <a href="{{ route('paniers.show', ['panier' => $panier->id]) }}" class="btn btn-info" title="Show details about {{ $panier->nom.' '.$panier->prenom }}">
                  <i class="fas fa-user-tag"></i></a>
                  <a href="{{ route('paniers.edit', ['panier' => $panier->id]) }}" class="btn btn-warning" title="Edit panier{{ $panier->nom.' '.$panier->prenom  }}" >
                    <i class="fas fa-user-check"></i></a>
                    <a href="#" class="btn btn-danger" title="Delete panier {{ $panier->nom.' '.$panier->prenom  }}"
                        onclick="event.preventDefault(); document.querySelector('#delete-panier-form').submit()"
                        ><i class="fas fa-user-slash"></i></a>
                    <form action="{{ route('paniers.destroy', ['panier' => $panier->id]) }}" method="post" id="delete-panier-form">@csrf @method('DELETE')</form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mx-auto"  style="width: 200px;">
        {{ $paniers->links() }}
    </div>

@endsection
