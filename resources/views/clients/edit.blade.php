@extends('layouts.app')

@section('content')

<div>
    <h1>Update client</h1>
</div>

<div>
    <form action="/clients/{{$client->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="card-body">
        <div class="form-group">
            <input type="text" class="form-control" name="make" value="{{ $client->make }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="model" value="{{ $client->model }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="client_name" value="{{ $client->client_name }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="license_number" value="{{ $client->license_number }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="year" value="{{ $client->year }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="telephone" value="{{ $client->telephone }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="reg_data" value="{{ $client->reg_data }}">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="email" value="{{ $client->email }}">
            </div>
            <button type="submit">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection