@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Labot darba pieredzes datus</h2>
        <form method="POST" action="{{ route('experience.update', $experience) }}">
            @csrf
            @method('PUT')

            <x-input name="name" placeholder="Darba vieta" value="{{ $experience->name }}"></x-input>
            <x-input name="job_title" placeholder="Atrašanās vieta" value="{{ $experience->job_title }}"></x-input>
            <x-input name="type" placeholder="Veids" value="{{ $experience->type }}"></x-input>
            <x-input name="start_date" type="date" placeholder="Sākums" value="{{ $experience->start_date }}"></x-input>
            <x-input name="end_date" type="date" placeholder="Beigas" value="{{ $experience->end_date }}"></x-input>

            <x-submit></x-submit>
        </form>
    </div>
@endsection
