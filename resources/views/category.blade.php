@extends('app')

{{--@section('style')
    <style>
    </style>
@endsection--}}

@section('content')
    <div class="container mt-5">
        <div class="card w-50 bg-light">
            <div class="card-body">
                <div class="form-group mb-3">
                    <label for="category">Category</label>
                    <select class="form-control" id="category" name="category">
                        @foreach($categories as $category)
                            <option value="{{$category->name}}" data-value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="sub_category">Sub-Category</label>
                    <select class="form-control" id="sub_category" name="sub_category">
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="item">Items</label>
                    <select class="form-control" id="item" name="item">
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>
    </div>
@endsection
