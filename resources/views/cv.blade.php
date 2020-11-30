<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>CV</title>

    <style>
        body {
            font-size: 17px;
        }

        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .container {
            width: 70%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
<div class="container">
    <section class="heading">
        <h2>{{ $user->data->name }} {{ $user->data->surname }}</h2>
        <p>Email: {{ $user->data->email }}</p>
        <p>Phone: {{ $user->data->phone }}</p>

        <h2 class="sum">Apraksts</h2>

        <p>{{ $user->data->summary }}</p>
    </section>

    <section class="work">
        <h2>Darba pieredze</h2>

        @foreach($user->experiences as $work)
            <h3>Amats: {{$work->job_title}}</h3>
            <p>Kur: {{$work->name}}</p>
            <p>No {{ $work->start_date }} līdz {{ $work->end_date }}</p>
        @endforeach
    </section>

    <section class="skills">
        <h2>Prasmes</h2>
        @foreach($user->skills as $skill)
            <h4> {{$skill->type}}</h4>
            <p> {{$skill->description}}</p>
        @endforeach
    </section>
</div>
</body>
</html>
