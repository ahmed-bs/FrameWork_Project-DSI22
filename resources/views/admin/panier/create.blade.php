@extends('layouts.admin')

@section('main')
    <fieldset>
        <legend><i class="fas fa-shopping-cart"></i> Add new Paniers</legend>
        <form action="{{ route('paniers.store') }}" method="post">
        @include('admin.panier.form')
        </form>
    </fieldset>
@endsection
