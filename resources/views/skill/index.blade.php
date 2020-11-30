@extends('layouts.app')
@section('content')
    <h2>Prasmes</h2>
    @foreach($skills as $skill)
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    {{ $skill->description }}
                    {{ $skill->type }}
                </h4>
                <a class="btn btn-sm btn-primary" href=" {{ route('skill.edit', $skill) }}" role="button">Labot</a>
                <form method="POST" action=" {{ route('skill.destroy', $skill) }}" style="display: inline">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Dzēst" class="btn btn-sm btn-danger" onclick="return confirm('Tiešām dzēst?')">
                </form>
            </div>
        </div>
    @endforeach
    <a class="btn btn-primary mt-4" href=" {{route('experience.index')}}" role="button">Iepriekšējā sadaļa</a>
    <a class="btn btn-primary mt-4" href=" {{route('skill.create')}}" role="button">Pievienot prasmi</a>
@endsection
