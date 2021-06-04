
@extends('layouts.admin')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-edit"></i> Edit Paiement: <strong>{{ $paiement ->numero_montant }} </strong></legend>
        <form action="{{ route('paiements.update', ['paiement' => $paiement->id]) }}" method="post">
            @method('PUT')
            @include('admin.paiement.form')
        </form>
    </fieldset>
@endsection
