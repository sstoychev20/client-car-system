@extends('layouts.app')

@section('content')

<div>
    <h1>Update car</h1>
</div>

<div>
    <form action="/cars/{{$car->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="card-body">
        <div class="form-group">
            <input type="text" class="form-control" name="client_id" value="{{ $car->client_id }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="licence_no" value="{{ $car->licence_no }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="vin" value="{{$car->vin}}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="model" value="{{$car->model}}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="make" value="{{$car->make}}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="date" value="{{$car->date}}">
            </div>
            <button type="submit">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection