@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Labot izglītību</h2>

        <form method="POST" action="{{ route('education.update', $education) }}">
            @csrf
            @method('PUT')

            <x-input name="school_name" placeholder="Skola" value="{{ $education->school_name }}"></x-input>
            <x-input name="school_location" placeholder="Atrašanās vieta" value="{{ $education->school_location }}"></x-input>
            <x-input name="degree" placeholder="Izglītības pakāpe" value="{{ $education->degree }}"></x-input>
            <x-input name="field_of_study" placeholder="Nozare" value="{{ $education->field_of_study }}"></x-input>
            <x-input name="graduation_start_date" placeholder="Mācību sākums" type="date" value="{{ $education->graduation_start_date }}"></x-input>
            <x-input name="graduation_end_date" placeholder="Mācību beigas" type="date" value="{{ $education->graduation_end_date }}"></x-input>

            <x-submit></x-submit>

        </form>

    </div>

@endsection
