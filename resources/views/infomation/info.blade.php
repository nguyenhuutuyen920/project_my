@extends('layouts.index')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $p)
        
    @endforeach
    <div class="info">
        <h1>{{ $p->title }}</h1>
        <a href="{{ route('infomation.infomation',$) }}">infomation</a>
    </div>
</body>
</html>
@endsection