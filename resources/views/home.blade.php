@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                        <table class="table table-striped">
                       
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Catergory</th>
                                </tr>
                            </thead>
                           
                            <tbody>
                                @foreach ($v as $vendors)
                                <tr>
                              
                                    <th scope="row">{{ $vendors->id }}</th>
                                        <td>{{ $vendors->name }}</td>
                                        <td>{{ $vendors->phone }}</td>
                                        <td>{{ $vendors->email }}</td>
                                        <td>{{ $vendors->category->name }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
