@extends('furniture.layout')
@section('content')

    <div class="card">
        <div class="card-header">Furniture Page</div>
        <div class="card-body">

            <form action="{{ url('furniture') }}" method="post">
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Product Code</label></br>
                <input type="text" name="product_code" id="product_code" class="form-control"></br>
                <label>Price</label></br>
                <input type="text" name="price" id="price" class="form-control"></br>
                <label>Avatar</label></br>
                <input type="file" name="avatar" id="avatar" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>

        </div>
    </div>

@stop
