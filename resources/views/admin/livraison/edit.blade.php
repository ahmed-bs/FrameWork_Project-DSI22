@extends('layouts.admin')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-edit"></i> Edit livraison: <strong>{{ $livraison->date_livraison }}</strong></legend>
        <form action="{{ route('livraisons.update', ['livraison' => $livraison->id]) }}" method="post">
            @method('PUT')
            @include('admin.livraison.form')
        </form>
    </fieldset>
@endsection
