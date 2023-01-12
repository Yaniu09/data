@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                    @if (session('alert-' . $msg))
                        <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                            {{ session('alert-' . $msg) }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th>Letter No</th>
                                <th>Party</th>
                                <th>Purpose</th>
                                <th>Sector Code</th>
                                <th>Created At</th>
                            </thead>
                            <tbody>
                                @foreach ($numbers as $number)
                                    <tr>
                                        <td>{{ $number->lno }}</td>
                                        <td>{{ $number->party }}</td>
                                        <td>{{ $number->purpose }}</td>
                                        <td>{{ $number->sector_code }}</td>
                                        <td>{{ $number->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $numbers->links() }}
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <form action="{{ route('vendor.store') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="inputEmail4">Designated Office/Person Name</label>
                                    <input type="text" class="form-control" placeholder="Name" name="party">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Purpose </label>
                                    <input type="text" class="form-control" placeholder="Purpose" name="purpose">
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">Type</label>
                                    <select id="inputState" class="form-control" name="type">
                                        <option selected disabled>Choose a Type</option>
                                        <option value="AG">Agreenment</option>
                                        <option value="L">Letter</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputState">Business Sector</label>
                                    <select id="inputState" class="form-control" name="sector_code">
                                        <option selected disabled>Choose a Sector</option>
                                        @foreach ($sector as $sectors)
                                            <option value="{{ $sectors->code }}">{{ $sectors->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- <input type="hidden" id="custId" name="lno" value="{{ $sectors->code }}/23"> --}}
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
