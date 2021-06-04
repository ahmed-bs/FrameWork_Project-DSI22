@extends('layouts.admin')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i> Add new paiement</legend>
        <form action="{{ route('paiements.store') }}" method="post">
        @include('admin.paiement.form')
        </form>
    </fieldset>
@endsection