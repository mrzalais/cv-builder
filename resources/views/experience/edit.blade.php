@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Labot darba pieredzes datus</h2>

        <form method="POST" action="{{ route('experience.update', $experience) }}">
            @csrf
            @method('PUT')

            <input type="text" name="name" placeholder="Darba vieta" value="{{ $experience->name }}">

            <input type="text" name="job_title" placeholder="Atrašanās vieta" value="{{ $experience->job_title }}">

            <input type="text" name="type" placeholder="Izglītības pakāpe" value="{{ $experience->type }}">

            <input type="date" name="start_date" placeholder="Mācību sākums" value="{{ $experience->start_date }}">

            <input type="date" name="end_date" placeholder="Mācību beigas" value="{{ $experience->end_date }}">

            <input type="submit" value="Saglabāt izmaiņas">

        </form>

    </div>

@endsection
