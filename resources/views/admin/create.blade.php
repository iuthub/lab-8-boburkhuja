@extends('layouts.admin')
@section('content')
    @include('partials.errors')
<div class="row">
    <div class="col-md-12 text-center">
        <form action="{{route('admin.create')}}" method="post">
            <div class="form-group">
                <label for="title"><strong>Title</strong></label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title">
            </div>
            <div class="form-group">
                <label for="content"><strong>Content</strong></label>
                <input
                    type="text"
                    class="form-control"
                    name="content"
                    id="content">
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
