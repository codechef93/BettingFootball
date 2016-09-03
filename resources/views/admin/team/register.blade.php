@extends('layouts.admin.base')
@section('content')
<div class="content">
    <div class="card">
        <div class="card-body">
            <h5 class="mb-3">Team Register</h5>
            <form method="post">
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label font-weight-semibold">Team Name:</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" name="team_name" placeholder="team name">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-2 col-form-label font-weight-semibold">Single file upload:</label>
                    <div class="col-lg-10">
                        <input type="file" name="" class="file-input" data-fouc>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-left rounded-round legitRipple">
                        <b><i class="icon-reading"></i></b> Save
                    </button>
                    <a class="btn btn-light btn-labeled btn-labeled-left rounded-round ml-25 legitRipple" href="/admin/team/">
                        <b><i class="icon-undo"></i></b> Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection