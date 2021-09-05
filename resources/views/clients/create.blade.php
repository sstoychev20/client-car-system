@extends('layouts.app')

@section('content')

<div>
    <h1>Create client</h1>
</div>
     
    <form action="/clients" method="POST">
    @csrf
        <div class="card-body">
        <div class="form-group">
            <input type="text" class="form-control" name="make" placeholder="Make...">
            </div>
            <div class="form-group">
            <input type="text" class="form-control"  name="model" placeholder="Model..">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="client_name" placeholder="Client name..">
            </div>
            <div class="form-group">
            <input type="text" class="form-control"  name="license_number" placeholder="License number..">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="year" placeholder="Year..">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="telephone" placeholder="Phone..">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="reg_data" placeholder="Reg date..">
            </div>
            <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email..">
            </div>
            <button type="submit">
                Submit
            </button>
        </div>
    </form>
</div>

@endsection