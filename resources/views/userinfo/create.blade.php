@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Ievadi informāciju par sevi</h2>

        <form method="POST" action="/userinfo">
            @csrf

            <x-input name="name" placeholder="Vārds"></x-input>
            <x-input name="surname" placeholder="Uzvārds"></x-input>
            <x-input name="email" type="email" placeholder="E-pasts"></x-input>
            <x-input name="phone" placeholder="Tālrunis"></x-input>
            <x-input name="address" placeholder="Adrese"></x-input>
            <x-textarea name="summary" placeholder="Kopsavilkums"></x-textarea>

            <x-submit></x-submit>

        </form>

    </div>

@endsection
