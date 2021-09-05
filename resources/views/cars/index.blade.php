@extends('layouts.app')

@section('content')
<div>
    <h1>Cars</h1>
</div>

@if(Auth::user())
<div>
    <a href="cars/create" class="btn  btn-success">Add new car </a>
    <br>
    <br>
</div>
@else
<p>
    Please log in to add new car
</p>
@endif



<div>
    @foreach($cars as $car)
    <div>
   
    <a href="cars/ {{ $car->id }}/edit" class="btn  btn-info">Edit</a>

        <form action="/cars/{{$car->id}}" method="POST">
            @csrf
            @method('delete')
            <button class="btn  btn-danger" type="submit"> 
                Delete
            </button>
        </form>

       


        


    </div>
    <span>Founded: {{ $car->date }}</span>
    <h2>{{ $car->model }}</h2>
    <p>{{ $car->make }}</p>
    <hr>
    @endforeach
</div>
@endsection