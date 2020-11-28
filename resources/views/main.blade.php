@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>CV būvētājs</h2>

        <a class="btn btn-primary" href=" {{ route('userdetails.create') }}" role="button">Sākt</a>

    </div>

@endsection
