@extends('layouts.master')
@section('content')
@component('layouts.components.title')
show page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead class="">
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Mã sản phẩm</th>
            <th scope="col" class="">Tên</th>
            <th scope="col" class="">Giá</th>
            <th scope="col" class="">Hình ảnh</th>
            
          </tr>
        </thead>
        <tbody>
          <tr class="text-center">
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->code}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td><img src="{{$product->image}}" alt="" style="width: 50%"></td>

            <td class="d-flex border-0 align-items-center">
              <form action="{{route('products.edit',$product->id)}}" method="get">
                <button class="btn btn-sm btn-warning mx-2 rounded-0">
                  <i class="fas fa-edit"></i>
                </button>
              </form>
              <form action="{{route('products.destroy',$product->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger mx-2 rounded-0">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
