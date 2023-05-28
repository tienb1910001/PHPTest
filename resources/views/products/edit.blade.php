@extends('layouts.master')
@section('content')
@component('layouts.components.title')
edit page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12 ">
      <form action="{{route('products.update',$product->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="put" />
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="code">Mã sản phẩm</label>
          <input type="text" class="form-control " id="code"  name="code"
            value="{{$product->code}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">Tên</label>
          <input type="text" class="form-control " id="name" name="name"
            value="{{$product->name}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="price">Giá</label>
          <input type="number" class="form-control " id="price"  name="price"
            value="{{$product->price}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="image">Hình ảnh</label>
          <input type="text" class="form-control " id="image" name="image"
            value="{{$product->image}}">
        </div>
        
        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase  font-weight-bold m-2">
            Lưu
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection