@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Labot izglītību</h2>

        <form method="POST" action="{{ route('education.update', $education) }}">
            @csrf
            @method('PUT')

            <input type="text" name="school_name" placeholder="Skola" value="{{ $education->school_name }}">

            <input type="text" name="school_location" placeholder="Atrašanās vieta" value="{{ $education->school_location }}">

            <input type="text" name="degree" placeholder="Izglītības pakāpe" value="{{ $education->degree }}">

            <input type="text" name="field_of_study" placeholder="Nozare" value="{{ $education->field_of_study }}">

            <input type="date" name="graduation_start_date" placeholder="Mācību sākums" value="{{ $education->graduation_start_date }}">

            <input type="date" name="graduation_end_date" placeholder="Mācību beigas" value="{{ $education->graduation_end_date }}">

            <input type="submit" value="Saglabāt izmaiņas">

        </form>

    </div>

@endsection
