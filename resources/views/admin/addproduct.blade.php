@extends('admin.layouts.template')
@section('title-das')
Add Product
@endsection
@section('content')

<div class="content-overlay"></div>
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('storeproduct') }}" method="POST"
                            enctype="multipart/form-data" class="col s12">
                            @csrf
                                
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <div class="controls">
                                                <input placeholder="Electronics" name="product_name" id="product_name" type="text"class="form-control @error('product_name') is-invalid @enderror" value="{{ old('product_name') }}">
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
                                                <input placeholder="12" name="price" id="price" type="number"class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}">
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
                                                <input placeholder="100" name="quantity" id="quantity" type="number"class="form-control @error('quantity') is-invalid @enderror" value="{{ old('quantity') }}">
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
                                                <textarea class="form-control" id="product_short_des" name="product_short_des" rows="3" placeholder="Label in Textarea"></textarea>
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
                                                <textarea class="form-control" id="product_long_des" name="product_long_des" rows="3" placeholder="Label in Textarea"></textarea>
                                                @error('product_long_des')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Category</label>
                                            <div class="controls">
                                                <select class="custom-select" id="product_category_id" name="product_category_id">
                                                    <option selected>Select Category</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('product_category_id')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Sub Category</label>
                                            <div class="controls">
                                                <select class="custom-select" id="product_subcategory_id" name="product_subcategory_id">
                                                    <option selected>Select Product Sub Category</option>
                                                    @foreach ($subcategories as $subcategory)
                                                    <option value="{{ $subcategory->id }}">{{ $subcategory->subcategory_name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('product_subcategory_id')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">Upload Image Product</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="product_img" name="product_img">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    
                           
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Add Product</button>
                                        {{-- <a href="" class="btn btn-danger"><i class="feather icon-corner-up-left"></i> Kembali</a> --}}
                                    </div>
                            </form>

                        </div>
                    </div>
                </section>

            </div>


</div>

   
@endsection
