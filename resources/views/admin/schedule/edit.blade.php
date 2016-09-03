@extends('layouts.admin.base')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Schedule Setting</h5>
            <form method="post">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name:</label>
                            <div class="input-group">
                                <input type="hidden" name="sid" value="0" placeholder="Schedule Name">
                                <input type="text" class="form-control" placeholder="Schedule Name">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Schedule Period:</label>
                            <div class="input-group">
                                <input type="text" name="daterange" class="form-control daterange-left" value="01/01/2015 - 01/31/2015">
                                <span class="input-group-append">
                                    <span class="input-group-text"><i class="icon-calendar22"></i></span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round legitRipple" style="margin-right: 40px;">
                        <b><i class="icon-reading"></i></b> Save
                    </button>
                    <a class="btn btn-light btn-labeled btn-labeled-left rounded-round ml-25 legitRipple" href="/team/">
                        <b><i class="icon-undo"></i></b> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
    <div class="pt-2 mb-3">
        <div class="text-center text-md-left mb-3 mb-md-0">
            <h5 class="mb-3">Matche List</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body text-center border-top-2 border-top-green">
                    <form method="post" action="/admin/schedule/match/save">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img class="rounded-circle" src="{{asset("admin/global_assets/images/placeholders/cover.jpg")}}" width="170" height="170" alt="">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                            <select data-placeholder="Select Team" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="AK">bournemouth</option>
                                                <option value="HI">Asenal</option>
                                                <option value="CA">Burley</option>
                                                <option value="OR">Liverpool</option>
                                                <option value="WA">Manchester United</option>
                                                <option value="AZ">Manchester City</option>
                                                <option value="CO">MiddlesBrough</option>
                                                <option value="WY">South Ampton</option>
                                                <option value="AL">Stroke City</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img class="rounded-circle" src="{{asset("admin/global_assets/images/placeholders/cover.jpg")}}" width="170" height="170" alt="">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                            <select data-placeholder="Select Team" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="AK">bournemouth</option>
                                                <option value="HI">Asenal</option>
                                                <option value="CA">Burley</option>
                                                <option value="OR">Liverpool</option>
                                                <option value="WA">Manchester United</option>
                                                <option value="AZ">Manchester City</option>
                                                <option value="CO">MiddlesBrough</option>
                                                <option value="WY">South Ampton</option>
                                                <option value="AL">Stroke City</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round legitRipple">
                                <b><i class="icon-reading"></i></b> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
        </div>
        @for ($i = 0; $i < 10; $i++)
        <div class="col-xl-6">
            <div class="card" >
                <div class="card-body text-center border-top-2 border-top-pink">
                    <form method="post" action="/admin/schedule/match/save/{{$i}}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img class="rounded-circle" src="{{asset("admin/global_assets/images/team/Manchester United.jpg")}}" width="170" height="170" alt="">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                            <select data-placeholder="Select Team" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="AK">bournemouth</option>
                                                <option value="HI">Asenal</option>
                                                <option value="CA">Burley</option>
                                                <option value="OR">Liverpool</option>
                                                <option selected="selected" value="WA">Manchester United</option>
                                                <option value="AZ">Manchester City</option>
                                                <option value="CO">MiddlesBrough</option>
                                                <option value="WY">South Ampton</option>
                                                <option value="AL">Stroke City</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <img class="rounded-circle" src="{{asset("admin/global_assets/images/team/Manchester City.png")}}" width="170" height="170" alt="">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                            <select data-placeholder="Select Team" class="form-control form-control-select2" data-fouc>
                                                <option></option>
                                                <option value="AK">bournemouth</option>
                                                <option value="HI">Asenal</option>
                                                <option value="CA">Burley</option>
                                                <option value="OR">Liverpool</option>
                                                <option value="WA">Manchester United</option>
                                                <option selected="selected" value="AZ">Manchester City</option>
                                                <option value="CO">MiddlesBrough</option>
                                                <option value="WY">South Ampton</option>
                                                <option value="AL">Stroke City</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round legitRipple">
                                <b><i class="icon-reading"></i></b> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>
@endsection