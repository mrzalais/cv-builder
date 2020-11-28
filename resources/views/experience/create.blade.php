@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Darba pieredze</h2>

        <form method="POST" action="/experience">
            @csrf

            <input type="text" name="name" placeholder="Nosaukums">

            <input type="text" name="job_title" placeholder="Amats">

            <input type="text" name="type" placeholder="Pilna/nepilna slodze">

            <input type="date" name="start_date" placeholder="Sākums">

            <input type="date" name="end_date" placeholder="Beigas">

            <input type="submit" value="Ievadīt darba pieredzi">

        </form>

    </div>

@endsection
