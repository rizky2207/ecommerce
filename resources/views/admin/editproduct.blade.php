@extends('admin.layouts.template')
@section('title-das')
Edit Product
@endsection
@section('content')

<div class="content-overlay"></div>
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('updateproduct') }}" method="POST"
                            enctype="multipart/form-data" class="col s12">
                            @csrf
                                
                                    <input type="hidden" value="{{ $productinfo->id }}" name="id">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <div class="controls">
                                                <input  name="product_name" id="product_name" type="text"class="form-control @error('product_name') is-invalid @enderror" value="{{ old('product_name',$productinfo->product_name) }}">
                                                @error('product_name')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Price</label>
                                            <div class="controls">
                                                <input  name="price" id="price" type="number"class="form-control @error('price') is-invalid @enderror" value="{{ old('price',$productinfo->price) }}">
                                                @error('price')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Quantity</label>
                                            <div class="controls">
                                                <input placeholder="100" name="quantity" id="quantity" type="number"class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity',$productinfo->quantity) }}">
                                                @error('quantity')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Short Descrription</label>
                                            <div class="controls">
                                                <textarea class="form-control" id="product_short_des" name="product_short_des" rows="3" placeholder="Label in Textarea">{{ $productinfo->product_short_des }}</textarea>
                                                @error('product_short_des')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Long Description</label>
                                            <div class="controls">
                                                <textarea class="form-control" id="product_long_des" name="product_long_des" rows="3" placeholder="Label in Textarea">{{ $productinfo->product_long_des }}</textarea>
                                                @error('product_long_des')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                           
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Edit Product</button>
                                        {{-- <a href="" class="btn btn-danger"><i class="feather icon-corner-up-left"></i> Kembali</a> --}}
                                    </div>
                            </form>

                        </div>
                    </div>
                </section>

            </div>


</div>

   
@endsection
