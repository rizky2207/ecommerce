@extends('admin.layouts.template')
@section('title-das')
Edit Product Image
@endsection
@section('content')

<div class="content-overlay"></div>
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <form action="{{ route('updateproductimg') }}" method="POST"
                            enctype="multipart/form-data" class="col s12">
                            @csrf
                                    <div class="row mb-3">
                                        <label class="col-sm2 col-form-label" for="basic-default-name">Previous Image</label>
                                        <div class="col-sm-10">
                                             <img src="{{ asset($productinfo->product_img) }}" alt="">
                                        </div>
                                    </div>

                                    <input type="hidden" value="{{ $productinfo->id }}" name="id">
                                    <div class="col-lg-6 col-md-12">
                                        <fieldset class="form-group">
                                            <label for="basicInputFile">Upload New Image</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="product_img" name="product_img">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </fieldset>
                                    </div>
                                    
                           
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary">Update Product Image</button>
                                        {{-- <a href="" class="btn btn-danger"><i class="feather icon-corner-up-left"></i> Kembali</a> --}}
                                    </div>
                            </form>

                        </div>
                    </div>
                </section>

            </div>


</div>

   
@endsection
