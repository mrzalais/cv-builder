@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Darba pieredze</h2>

        <form method="POST" action="/experience">
            @csrf

            <x-input name="name" placeholder="Darba vieta"></x-input>
            <x-input name="job_title" placeholder="Amats"></x-input>
            <x-input name="type" placeholder="Pilna/nepilna slodze"></x-input>
            <x-input name="start_date" type="date" placeholder="Sākums"></x-input>
            <x-input name="end_date" type="date" placeholder="Beigas"></x-input>

            <x-submit></x-submit>

        </form>

    </div>

@endsection
