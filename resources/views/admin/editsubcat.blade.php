@extends('admin.layouts.template')
@section('title-das')
Edit Sub Category
@endsection
@section('content')

<div class="content-overlay"></div>
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('updatesubcat') }}" method="POST"
                            enctype="multipart/form-data" class="col s12">
                            @csrf
                                <input type="hidden" value="{{ $subcatinfo->id }}" name="subcatid">
                                <div class="col">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Sub Category Name</label>
                                            <div class="controls">
                                                <input  name="subcategory_name" id="subcategory_name" type="text"class="form-control @error('subcategory_name') is-invalid @enderror" value="{{ old('subcategory_name',$subcatinfo->subcategory_name) }}">
                                                @error('subcategory_name')
                                                <span class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                        
                                    
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Update Sub Category</button>
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
