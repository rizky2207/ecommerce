@extends('admin.layouts.template')
@section('title-das')
Edit Category
@endsection
@section('content')

<div class="content-overlay"></div>
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('updatecategory') }}" method="POST"
                            enctype="multipart/form-data" class="col s12">
                            @csrf
                            <input type="hidden" value="{{ $category_info->id }}" name="category_id">
                                <div class="col">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Category Name</label>
                                            <div class="controls">
                                                <input placeholder="Electronics" name="category_name" id="category_name" type="text"class="form-control @error('category_name') is-invalid @enderror" value="{{ old('category_name',$category_info->category_name) }}">
                                                @error('category_name')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>   
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Edit Category</button>
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
