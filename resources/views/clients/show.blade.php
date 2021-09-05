@extends('layouts.app')

@section('content')

<h1> {{$client -> client_name }}</h1>
<h2>{{ $client->email }}</h2>

<ul>

<h3>Owned cars:</h3>

@forelse ($client->carModels as $model)
<li>
    {{ $model['model'] }}
</li>
@empty
<p>No cars found</p>
@endforelse
</ul>

@endsection