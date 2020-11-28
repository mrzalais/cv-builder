@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Ievadi informāciju par sevi</h2>

        <div>
            @if(session()->has('errors'))

                @foreach($errors->all() as $e)

                    <div class="alert alert-danger" role="alert">
                        <p>{{ $e }}</p>
                    </div>
                @endforeach

            @endif
        </div>

        <form method="POST" action="/userdetails">
            @csrf

            <input type="text" name="name" placeholder="Vārds">

            <input type="text" name="surname" placeholder="Uzvārds">

            <input type="text" name="email" placeholder="E-pasts">

            <input type="text" name="phone" placeholder="Tālrunis">

            <input type="text" name="address" placeholder="Adrese">

            <input type="submit" value="Submit">

        </form>

    </div>



@endsection
