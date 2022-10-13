
@extends('layouts.base')
@section('title', 'Edit Market')
@section('container')
    <main class="container">
        <h1 class="alert alert-success text-center"><i class="fa fa-shower" aria-hidden="true"></i> &nbsp;Edit Market</h1>
        <form method="POST" action="{{route('markets.update',$market)}}">
            @csrf
            @method('PATCH')
            <?php
            ?>
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="name"
                               aria-describedby="name" value="{{old('name',$market->name) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="value" class="form-label">Value</label>
                        <input type="number" class="form-control" name="value" id="value"
                               aria-describedby="value" value="{{old('value',$market->value) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" id="address"
                               aria-describedby="address" value="{{old('address',$market->address) }}">
                    </div>
                </div>

                <div class="col-6">
                    <div class="mb-3">
                        <label for="employees_quantity" class="form-label">Employees quantity</label>
                        <input type="number" class="form-control" name="employees_quantity" id="employees_quantity"
                               aria-describedby="employees_quantity" value="{{old('employees_quantity',$market->employees_quantity) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="occupancy_rate" class="form-label">Occupancy rate</label>
                        <input type="number" class="form-control" name="occupancy_rate" id="occupancy_rate"
                               aria-describedby="occupancy_rate" value="{{old('occupancy_rate',$market->occupancy_rate) }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        @if($market->status==1)
                            <div class="form-check">
                                <input name="status" class="form-check-input" type="checkbox" value="" id="status" checked>
                                @else
                                    <input name="status" class="form-check-input" type="checkbox" value="" id="status">
                                @endif
                                <label class="form-check-label" for="status">
                                    Status
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </main>
@endsection
