@extends('layouts.app')

@section('content')
    <h2>Pamatdati</h2>
    @if($user)
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                {{ $user->name }}
                {{ $user->surname }}
                {{ $user->email }}
                {{ $user->phone }}
            </h4>
            <a class="btn btn-sm btn-primary" href="{{ route('userinfo.edit', $user) }}">Labot</a>
            <form method="POST" action=" {{ route('userinfo.destroy', $user) }}" style="display: inline">
                @csrf
                @method('DELETE')
                <input type="submit" value="Dzēst" class="btn btn-sm btn-danger"
                       onclick="return confirm('Tiešām dzēst?')">
            </form>
        </div>
    </div>
    <a class="btn btn-primary mt-4" href=" {{route('education.index')}}" role="button">Nākamā sadaļa</a>
    @else
        <a class="btn btn-primary mt-4" href=" {{route('userinfo.create')}}" role="button">Pievienot pamatdatus</a>
        <a class="btn btn-primary mt-4" href=" {{route('education.index')}}" role="button">Nākamā sadaļa</a>
    @endif
@endsection
