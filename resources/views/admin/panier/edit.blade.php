@extends('layouts.admin')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-edit"></i> Edit Paniers: <strong>{{ $panier->id}}</strong></legend>
        <form action="{{ route('paniers.update', ['panier' => $panier->id]) }}" method="post">
            @method('PUT')
            @include('admin.panier.form')
        </form>
    </fieldset>
@endsection
