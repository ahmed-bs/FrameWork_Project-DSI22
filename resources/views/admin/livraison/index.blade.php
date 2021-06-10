@extends('layouts.admin')

@section('main')
@if (session('deleteLivraison'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('deleteLivraison') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<br>
<br>
<a href="{{ route('livraisons.create') }}" class="btn btn-outline-primary float-right"><i class="fas fa-user-plus"></i> Add new livraison</a>
<div class="text-info"><h3><i class="fas fa-shuttle-van"></i> livraisons list</h3></div>
 <br>

    <table class="table table-bordered">
        <thead>
          <tr class="table-info">
            <th scope="col"><i class="fas fa-key"></i> Key</th>
            <th scope="col"><i class="far fa-calendar-alt"></i>date</th>
            <th scope="col"><i class="fas fa-envelope-open-text"></i> description</th>

            <th scope="col"><i class="fas fa-cogs"></i> Opérations</th>
          </tr>
        </thead>
        <tbody>
            @foreach($livraisons as $key => $livraison)
            <tr>
              <th scope="row">{{ $key }}</th>
              <td>{{ $livraison->date_livraison }}</td>
              <td>{{ $livraison->description }}</td>
              
              <td>
                  <a href="{{ route('livraisons.show', ['livraison' => $livraison->id]) }}" class="btn btn-info" title="Show details about {{ $livraison->date_livraison.' '.$livraison->description }}">
                  <i class="fas fa-user-tag"></i></a>
                  <a href="{{ route('livraisons.edit', ['livraison' => $livraison->id]) }}" class="btn btn-warning" title="Edit livraison{{ $livraison->date_livraison.' '.$livraison->description  }}" >
                    <i class="fas fa-user-check"></i></a>
                    <a href="#" class="btn btn-danger" title="Delete livraison {{ $livraison->date_livraison.' '.$livraison->description  }}"
                        onclick="event.preventDefault(); document.querySelector('#delete-livraison-form').submit()"
                        ><i class="fas fa-user-slash"></i></a>
                    <form action="{{ route('livraisons.destroy', ['livraison' => $livraison->id]) }}" method="post" id="delete-livraison-form">@csrf @method('DELETE')</form>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mx-auto"  style="width: 200px;">
        {{ $livraisons->links() }}
    </div>

@endsection
