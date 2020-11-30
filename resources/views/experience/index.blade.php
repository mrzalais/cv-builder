@extends('layouts.app')

@section('content')
    <h2>Darba pieredze</h2>
    @foreach($experiences as $e)
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    {{ $e->name }}
                    {{ $e->job_title }}
                    {{ $e->type }}
                    ({{ $e->start_date }}  -
                    {{ $e->end_date}})
                </h4>
                <a class="btn btn-sm btn-primary" href=" {{ route('experience.edit', $e) }}" role="button">Labot</a>
                <form method="POST" action=" {{ route('experience.destroy', $e) }}" style="display: inline">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Dzēst" class="btn btn-sm btn-danger" onclick="return confirm('Tiešām dzēst?')">
                </form>
            </div>
        </div>
    @endforeach
    <a class="btn btn-primary mt-4" href=" {{route('education.index')}}" role="button">Iepriekšējā sadaļa</a>
    <a class="btn btn-primary mt-4" href=" {{route('experience.create')}}" role="button">Pievienot pieredzi</a>
    <a class="btn btn-primary mt-4" href=" {{route('skill.index')}}" role="button">Nākamā sadaļa</a>
@endsection
