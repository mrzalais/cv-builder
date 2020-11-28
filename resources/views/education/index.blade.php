@extends('layouts.app')

@section('content')

    <h2>Izglītība</h2>

    @foreach($education as $e)

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">
                    {{ $e->degree }}
                    {{ $e->school_name }}
                    ({{ $e->graduation_start_date }}  -
                    {{ $e->graduation_end_date}})
                </h4>

                <a class="btn btn-sm btn-primary" href=" {{ route('education.edit', $e) }}" role="button">Edit</a>

                <form method="POST" action=" {{ route('education.destroy', $e) }}" style="display: inline">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="Delete" class="btn btn-sm btn-danger" onclick="return confirm('Tiešām dzēst?')">
                </form>
            </div>
        </div>

    @endforeach

    <a class="btn btn-primary mt-4" href=" {{route('education.create')}}" role="button">Pievienot vēl izglītību</a>
    <a class="btn btn-primary mt-4" href=" {{route('experience.create')}}" role="button">Darba pieredze</a>

@endsection
