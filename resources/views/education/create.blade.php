@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Izglītība</h2>

        <form method="POST" action="/education">
            @csrf

            <x-input name="school_name" placeholder="Skola"></x-input>
            <x-input name="school_location" placeholder="Atrašanās vieta"></x-input>
            <x-input name="degree" placeholder="Izglītības pakāpe"></x-input>
            <x-input name="field_of_study" placeholder="Nozare"></x-input>
            <x-input name="graduation_start_date" placeholder="Mācību sākums" type="date"></x-input>
            <x-input name="graduation_end_date" placeholder="Mācību beigas" type="date"></x-input>

            <x-submit></x-submit>

        </form>

    </div>



@endsection
