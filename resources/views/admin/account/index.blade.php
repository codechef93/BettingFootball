@extends('layouts.admin.base')
@section('content')
    <div class="content">

        <div class="row">
            <div class="col-xl-12 col-sm-6">
                <div class="card card-body">
                    <h5><b>Account List</b></h5>
                    <div class="card-body text-center">
                        <table class="table datatable-pagination">
                            <thead>
                            <tr>
                                <th>Email Address</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Create at</th>
                                <th>Numer of Bettings</th>
                                <th>Score</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->firstname}}</td>
                                    <td>{{$user->lastname}}</td>
                                    <td>{{$user->create_date}}</td>
                                    <td>7 bettings</td>
                                    <td>32</td>
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

