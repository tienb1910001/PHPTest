@extends('layouts.master')
@section('content')
@component('layouts.components.title')
index page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">Mã Sản Phẩm</th>
            <th scope="col" class="">Tên</th>
            <th scope="col" class="">Giá</th>
            <th scope="col" class="">Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @foreach($product as $pro)
          <tr class="text-center">
            <th scope="row">{{$pro->id}}</th>
            <td>{{$pro->code}}</td>
            <td>{{$pro->name}}</td>
            <td>{{$pro->price}}</td>
            <td class="d-flex align-items-center justify-content-around">
              <form action="{{route('products.show',$pro->id)}}" method="get">
                <button class="btn btn-sm btn-primary ">
                  <i class="far fa-eye"></i>
                </button>
              </form>
              <form action="{{route('products.edit',$pro->id)}}" method="get">
                <button class="btn btn-sm btn-warning ">
                  <i class="fas fa-edit"></i>
                </button>
              </form>
              <form action="{{route('products.destroy',$pro->id)}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger ">
                  <i class="fas fa-trash"></i>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">{{$product->links()}}</div>
    </div>
  </div>
</div>
@endsection