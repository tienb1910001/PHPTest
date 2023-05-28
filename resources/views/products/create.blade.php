@extends('layouts.master')
@section('content')
    @component('layouts.components.title')
        create page
    @endcomponent
    <div class="container mt-3">
        <div class="d-flex flex-row">
            <div class="col-12 px-0">
                <form action="{{ route('products.store') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="form-group ">
                        <label class="text-uppercase font-weight-bold" for="code">Mã sản phẩm</label>
                        <input type="text" class="form-control " id="code" name="code">
                    </div>
                    <div class="form-group ">
                        <label class="text-uppercase font-weight-bold" for="name">Tên</label>
                        <input type="text" class="form-control " id="name" name="name">
                    </div>
                    <div class="form-group ">
                        <label class="text-uppercase font-weight-bold" for="price">Giá</label>
                        <input type="number" class="form-control " id="price" name="price">
                    </div>
                    <div class="form-group ">
                        <label class="text-uppercase font-weight-bold" for="image">Hình ảnh</label>
                        <input type="url" class="form-control " id="image" name="image">

                    </div>

                    <div class="form-group ">
                        <button type="submit" class="btn btn-warning text-uppercase  font-weight-bold m-2">
                            Lưu
                        </button>
                    </div>
            </div>
        </div>
    </div>
@endsection
