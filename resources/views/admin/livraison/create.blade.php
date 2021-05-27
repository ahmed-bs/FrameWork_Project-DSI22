@extends('layouts.admin')

@section('main')
    <fieldset>
        <legend><i class="fas fa-user-plus"></i> Add new livraison</legend>
        <form action="{{ route('livraisons.store') }}" method="post">
        @include('admin.livraison.form')
        </form>
    </fieldset>
@endsection
