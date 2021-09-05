@extends('layouts.app')

@section('content')

<div>
    <h1>Create car</h1>
</div>

<div>
    <form action="/cars" method="POST">
    @csrf
        <div class="card-body">
        <div class="form-group">
            <input type="text" class="form-control" name="client_id" placeholder="Client id...">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="licence_no" placeholder="Licence number...">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="vin" placeholder="VIN..">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="model" placeholder="Model..">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="make" placeholder="Make..">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="date" placeholder="Date">
            </div>
            <button type="submit">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection