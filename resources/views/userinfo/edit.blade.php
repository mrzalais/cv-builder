@extends('layouts.app')

@section('content')

    <div class="container">

        <h2>Ievadi informāciju par sevi</h2>

        <form method="POST" action="{{ route('userinfo.update', $user->id) }} ">
            @csrf
            @method('PUT')

            <x-input name="name" placeholder="Vārds" value="{{ $user->name }}"></x-input>
            <x-input name="surname" placeholder="Uzvārds" value="{{ $user->surname }}"></x-input>
            <x-input name="email" type="email" placeholder="E-pasts" value="{{ $user->email }}"></x-input>
            <x-input name="phone" placeholder="Tālrunis" value="{{ $user->phone }}"></x-input>
            <x-input name="address" placeholder="Adrese" value="{{ $user->address }}"></x-input>
            <x-textarea name="summary" placeholder="Kopsavilkums" value="{{ $user->summary }}"></x-textarea>

            <x-submit></x-submit>

        </form>

    </div>

@endsection
