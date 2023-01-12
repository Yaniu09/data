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
                    
                    <form action="{{ route('vendor.store') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-4">
                            <label for="inputEmail4">Designated Office/Person Name</label>
                            <input type="text" class="form-control"  placeholder="Name" name="party">
                            </div>
                            <div class="form-group col-md-4">
                            <label for="inputPassword4">Purpose </label>
                            <input type="text" class="form-control" placeholder="Purpose" name="purpose">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Type</label>
                                <select id="inputState" class="form-control" name="sector_code">
                                <option selected disabled >Choose a Type</option>
                                    <option value="Agreenment">Agreenment</option>
                                    <option value="Agreenment">Letter</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputState">Business Sector</label>
                                <select id="inputState" class="form-control" name="sector_code">
                                <option selected disabled >Choose a Sector</option>
                                    @foreach ($sector as $sectors)

                                    <option value="{{ $sectors->code }}"  >{{ $sectors->name }}</option>

                                    @endforeach
                                </select>
                            </div>
                            <input type="hidden" id="custId" name="lno" value="{{ $sectors->code }}/23" >
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Get Number</button>
                    </form>

                    
                
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
