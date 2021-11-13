@extends('furniture.layout')
@section('content')

    <div class="card">
        <div class="card-header">Furniture Page</div>
        <div class="card-body">

            <form action="{{ url('furniture/' .$furniture->id) }}" method="post">
                {!! csrf_field() !!}
                @method("PATCH")
                <input type="hidden" name="id" id="id" value="{{$furniture->id}}" id="id" />
                <label>Name</label></br>
                <input type="text" name="name" id="name" value="{{$furniture->name}}" class="form-control"></br>
                <label>Product Code</label></br>
                <input type="text" name="product_code" id="product_code" value="{{$furniture->product_code}}" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="price" value="{{$furniture->price}}" class="form-control"></br>
                <label>Avatar</label></br>
                <input type="file" name="avatar id="avatar" value="{{$furniture->avatar}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
