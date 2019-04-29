@extends('layouts.admin')
@section('content')
@include('partials.errors')
<div class="row">
    <div class="col-md-12 text-center">
        <form action="{{route('admin.update')}}" method="post">
            <div class="form-group">
                <label for="title"><strong>Title</strong></label>
                <input
                    type="text"
                    class="form-control"
                    name="title"
                    id="title"
                    value="{{$post['title']}}">
            </div>
            <div class="form-group">
                <label for="content"><strong>Content</strong></label>
                <input
                    type="text"
                    class="form-control"
                    name="content"
                    id="content"
                    value="{{$post['content']}}">
            </div>
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$postId}}">
            <button type="submit" class="btn btn-info">Submit</button>
        </form>
    </div>
</div>
@endsection
