@extends('layouts.admin')
@section('content')
@if (Session::has('info'))
<div class="row">
    <div class="col-md-12">
        <p class="alert alert-info">
            {{Session::get('info')}}
        </p>
    </div>
</div>
@endif
<div class="row">
    <div class="col-md-12 text-center">
        <div class="form-group">
            <a href="{{route('admin.create')}}" class="btn btn-success">New Post</a>
        </div>
    </div>
</div>
<hr>
@foreach($posts as $post)
<div class="row">
    <div class="col-md-12 text-center">
        <p><strong>{{$post['title']}}</strong> <a href="{{route('admin.edit',['id'=>array_search($post,$posts)])}}">Edit</a></p>
    </div>
</div>
@endforeach
@endsection
