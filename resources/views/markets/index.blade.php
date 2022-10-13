@extends('layouts.base')
@section('title', 'Market')
@section('container')
    <main class="container">
        <h1 class="alert alert-success text-center"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;Markets list</h1>
            <div class="row">
            @foreach($markets as $market)
                <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$market ->name}}</h5>
                        <div class="row">
                            <div class="col-6"><h6>ID:</h6></div>
                            <div class="col-6"><p>{{$market ->id}}</p></div>
                            <div class="col-6"><h6>Value:</h6></div>
                            <div class="col-6"><p>${{number_format($market ->value,0,',','’')}}</p></div>
                            <div class="col-6"><h6>Address:</h6></div>
                            <div class="col-6"><p>{{$market ->address}}</p></div>
                            <div class="col-6"><h6>Employees Quantity:</h6></div>
                            <div class="col-6"><p>{{$market ->employees_quantity}}</p></div>
                            <div class="col-6"><h6>Occupancy rate:</h6></div>
                            <div class="col-6"><p>{{$market ->occupancy_rate}}%</p></div>
                            <div class="col-6"><h6>Status:</h6></div>
                            <div class="col-6"><p>{{$estat=$market ->status==1?'True':'False'}}</p></div>
                            <div class="col-6"><a href="{{route('markets.edit',$market)}}" class="btn btn-primary">Edit</a></div>
                            <div class="col-6"><form action="{{route('markets.destroy',$market)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('¿Delete {{$market ->name}} {{$market ->address}}?')">
                                </form></div>

                        </div>

                    </div>
                </div>
                </div>
            @endforeach
            </div>
        <section class="row">
            <div class="col d-grid">
                <a href="/markets/create" class="btn btn-success text-center">Create new Market</a>
            </div>
        </section>
    </main>

@endsection

