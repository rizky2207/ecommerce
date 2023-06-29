@extends('admin.layouts.template')
@section('title-das')
All Sub Category    
@endsection
@section('content')

   <div class="content-overlay"></div>
            <div class="content-body">
                <!-- Description -->
                <section id="description" class="card">
                    <div class="card-header d-flex">
                        <h4 class="card-title">All Sub Category</h4>
                        <a href="" class="btn btn-sm btn-primary"><i class="feather icon-plus-circle"></i> Tambah</a>
                    </div>
                    <div class="card-content">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table zero-configuration" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Sub Category Name</th>
                                            <th>Category</th>
                                            <th>Product</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allsubcategories as $subcategory)
                                        <tr>
                                            <td>{{ $subcategory->id }}</td>
                                            <td>{{ $subcategory->subcategory_name }}</td>
                                            <td>{{ $subcategory->category_name }}</td>
                                            <td>{{ $subcategory->product_count }}</td>
                                            <td>
                                                <a href="{{ route('editsubcat',$subcategory->id) }}" class="btn btn-primary">Edit</a>
                                                <a href="{{ route('deletesubcat',$subcategory->id) }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </section>
         </div>
    </div>


    {{-- @stop
    @section('script')

<script>

            // ini vendor data
            (function() {
                    loadDataTable();
                })();

                function loadDataTable() {
                    $(document).ready(function () {
                        if ($.fn.DataTable.isDataTable('#myTable')) {
                            $('#myTable').DataTable().destroy();
                        }

                        $('#myTable').DataTable({
                            // "scrollX": true,
                            // "autoWidth": true,
                            processing: true,
                            serverSide: true,
                            ajax: {
                        url: "{{ route('dashboard.data') }}",
                        type: "GET",
                            },
                            columns: [
                                {
                        data:"DT_RowIndex",
                        name:"DT_RowIndex"
                    },
                    {
                            data: 'name',
                            name: 'name'
                        },

                        {
                            data: 'email',
                            name: 'email'
                        },

                        
                        {
                            data: 'action',
                            name: 'action'
                        },

                            ],
                            order: [
                                [0, 'asc']
                            ]
                        });
                    });
                }

                function deleteConfirm(id) {
                    Swal.fire({
                        title: 'Konfirmasi',
                        text: 'Apakah Anda yakin ingin menghapus data ini?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Ya',
                        cancelButtonText: 'Batal',
                        dangerMode: true,
                    }).then((result) => {
                        // alert(result.isConfirmed);
                        if (result.isConfirmed == true) {
                            // Jika pengguna mengklik "Ya"
                            var deleteUrl = "{{ url('deleteuser') }}/" + id;

                            // Lakukan request AJAX untuk menghapus data
                            $.ajax({
                                url: deleteUrl,
                                type: 'GET',
                                data: {
                                    _method: 'GET',
                                    _token: '{{ csrf_token() }}'
                                },
                                success: function (response) {
                                    Swal.fire('Sukses', 'Data berhasil dihapus', 'success').then(() => {
                                        // Lakukan reload halaman setelah penghapusan data
                                        location.reload();
                                    });
                                },
                                error: function (xhr) {
                                    Swal.fire('Error', 'Terjadi kesalahan saat menghapus data', 'error');
                                }
                            });
                        } else {
                            // Jika pengguna mengklik "Batal" atau menutup sweetalert
                            Swal.fire('Dibatalkan', 'Data tidak dihapus', 'info');
                        }
                    });
                }




            </script>
 --}}

@endsection