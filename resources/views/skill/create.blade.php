@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Prasmes un sasniegumi</h2>

        <form method="POST" action="/skill">
            @csrf

            <x-input name="description" placeholder="Apraksts"></x-input>
            <x-input name="type" placeholder="Veids"></x-input>

            <x-submit></x-submit>

        </form>

    </div>

@endsection
