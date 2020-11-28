@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Izglītība</h2>

        <form method="POST" action="/education">
            @csrf

            <input type="text" name="school_name" placeholder="Skola">

            <input type="text" name="school_location" placeholder="Atrašanās vieta">

            <input type="text" name="degree" placeholder="Izglītības pakāpe">

            <input type="text" name="field_of_study" placeholder="Nozare">

            <input type="date" name="graduation_start_date" placeholder="Mācību sākums">

            <input type="date" name="graduation_end_date" placeholder="Mācību beigas">

            <input type="submit" value="Ievadīt izglītību">

        </form>

    </div>



@endsection
