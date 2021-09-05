@extends('layouts.app')

@section('content')
<div>
    <h1>Clients</h1>
</div>

@if(Auth::user())
<div>
    <a href="clients/create" class="btn  btn-success">Add new client </a>
    <br>
    <br>
</div>
@else
<p>
    Please log in to add new client
</p>
@endif


<div>
    @foreach($clients as $client)

    <div>

       
            <a href="clients/ {{ $client->id }}/edit" class="btn  btn-info">Edit</a>

                <form action="/clients/{{$client->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn  btn-danger" type="submit"> 
                        Delete
                    </button>
                </form>
                <br>
            

        

       
    </div>

    <a href="/clients/{{$client->id}}" class="btn btn-outline-secondary"> {{ $client->client_name }} </a>
    <p>{{ $client->email }}</p>
    <hr>
    @endforeach
    
</div>
@endsection