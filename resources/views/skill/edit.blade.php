@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Labot prasmes vai sasniegumus</h2>

        <form method="POST" action="{{ route('skill.update', $skill) }}">
            @csrf
            @method('PUT')

            <input type="text" name="description" placeholder="Apraksts" value="{{ $skill->description }}">

            <input type="text" name="type" placeholder="Veids" value="{{ $skill->type }}">

            <input type="submit" value="Saglabāt izmaiņas">

        </form>

    </div>

@endsection
