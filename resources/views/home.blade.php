@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>№</th>
                            <th>Order Date</th>
                            <th>Car Number</th>
                            <th>Client</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>02.02.2023</td>
                                <td>AE9005OI</td>
                                <td>Kurileh Karina</td>
                                <td>4500 $</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
