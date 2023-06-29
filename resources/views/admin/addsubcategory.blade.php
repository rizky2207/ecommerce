@extends('admin.layouts.template')
@section('title-das')
Add Sub Category
@endsection
@section('content')

<div class="content-overlay"></div>
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('storesubcategory') }}" method="POST"
                            enctype="multipart/form-data" class="col s12">
                            @csrf
                                <div class="col">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sub Category Name</label>
                                            <div class="controls">
                                                <input placeholder="Electronics" name="subcategory_name" id="subcategory_name" type="text"class="form-control @error('subcategory_name') is-invalid @enderror" value="{{ old('subcategory_name') }}">
                                                @error('subcategory_name')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Category</label>
                                            <div class="controls">
                                                <select class="custom-select" id="category_id" name="category_id">
                                                    <option selected>Open this menu</option>
                                                    @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                        
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Add Sub Category</button>
                                        {{-- <a href="" class="btn btn-danger"><i class="feather icon-corner-up-left"></i> Kembali</a> --}}
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </section>

            </div>


</div>

   
@endsection
