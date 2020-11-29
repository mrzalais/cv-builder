@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Prasmes un sasniegumi</h2>

        <form method="POST" action="/skill">
            @csrf

            <input type="text" name="description" placeholder="Apraksts">

            <input type="text" name="type" placeholder="Veids">

            <input type="submit" value="Ievadīt">

        </form>

        <a class="btn btn-primary mt-4" href=" {{route('skill.create')}}" role="button">Nākamais</a>

    </div>

@endsection
