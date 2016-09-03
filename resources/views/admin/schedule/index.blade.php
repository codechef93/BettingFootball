@extends('layouts.admin.base')
@section('content')
<div class="content">

    <!-- Vertical cards view -->
    <div class="pt-2 mb-3">
        <div class="text-center text-md-left mb-3 mb-md-0">
            <a href="/admin/schedule/register" class="btn btn-primary btn-lg">Register</a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-sm-6">
            <div class="card">
                <div class="card-body text-center">
                    <table class="table datatable-pagination">
                        <thead>
                        <tr>
                            <th>Schedule Name</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Number of Matches</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @for ($i=0; $i<15; $i++)
                        <tr>
                            <td><a href="/admin/schedule/edit/{{$i+1}}">Round {{$i+1}} Match</a></td>
                            <td>16 Sep 2019</td>
                            <td>21 Sep 2019</td>
                            <td>7 Matches</td>
                            <td>Pending</td>
                        </tr>
                        @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection

