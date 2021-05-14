@extends('layouts.admin')

@section('main')

    <h3><i class="fas fa-users"></i> Clients list</h3>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col"><i class="fas fa-user"></i> Name</th>
            <th scope="col"><i class="fas fa-at"></i> Email</th>
           
            <th scope="col"><i class="fas fa-cogs"></i> Opérations</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($clients as $key => $client)
            <tr>
              <th scope="row">{{ $key }}</th>
              <td>{{ $client->nom.' '.$client->prenom }}</td>
              <td>{{ $client->email }}</td>
              <td>
                  <a href="{{ route('clients.show', ['client' => $client->id]) }}" class="btn btn-info" title="Show details about {{ $client->nom.' '.$client->prenom }}"><i class="fas fa-user-tag"></i></a>
                  <a href="#" class="btn btn-warning" title="Edit user {{ $client->nom.' '.$client->nom  }}"><i class="fas fa-user-edit"></i></a>
                  <a href="#" class="btn btn-danger" title="Delete user {{ $client->nom.' '.$client->nom  }}"><i class="fas fa-user-slash"></i></a>
              </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="mx-auto"  style="width: 200px;">
        {{ $clients->links() }}
    </div>
@endsection