@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Labot prasmes vai sasniegumus</h2>
        <form method="POST" action="{{ route('skill.update', $skill) }}">
            @csrf
            @method('PUT')

            <x-input name="description" placeholder="Apraksts" value="{{ $skill->description }}"></x-input>
            <x-input name="type" placeholder="Veids" value="{{ $skill->type }}"></x-input>

            <x-submit></x-submit>
        </form>
    </div>
@endsection
