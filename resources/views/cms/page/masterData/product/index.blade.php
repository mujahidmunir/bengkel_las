@extends('cms.layouts.master')

@push('cmstitle')
CMS | PRODUK
@endpush

@push('cmscss')
<link rel="stylesheet" href="{{ asset('assets/cms/assets/bundles/datatables/datatables.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('assets/cms/assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/cms/assets/css/searchTable.css') }}">

<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css" id="theme-styles">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<link rel="stylesheet" href="{{ asset('assets/cms/assets/bundles/summernote/summernote-bs4.css') }}">
<style>
    .dataTables_filter {
        display: none;
    }

</style>
@endpush

@section('cmscontent')
<div class="section-body">
    <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
            <h4 class="page-title m-b-0">Data Produk</h4>
        </li>
        <li class="breadcrumb-item">
            <a href="#">
                <i data-feather="home"></i></a>
        </li>
        <li class="breadcrumb-item">CMS</li>
        <li class="breadcrumb-item">Data Produk</li>
    </ul>
    <div class="row">
        <div class="col-12">

            <div class="card" id="card-form">
                <div class="card-header">
                    <h4>Tambah Produk</h4>
                </div>

                <div class="buttons">
                    <a href="#" class="btn pull-right btn-icon icon-left btn-primary"
                        style="margin-top: 5px; margin-bottom: 10px" id="tambah-produk"><i
                            class="far fa-plus-square"></i> Tambah</a>
                    <a href="#" class="btn pull-right btn-icon icon-left btn-danger"
                        style="margin-top: 5px; margin-bottom: 10px;" id="tutup-form"><i class="fas fa-times"></i>
                        Tutup</a>
                </div>

                <div class="card-body">
                    @include('cms.page.form.product')
                </div>
            </div>
            <div class="card" id="card-tabel">
                <div class="card-header">
                    <h4>Tabel Produk</h4>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped  dt-responsive nowrap" id="productTable" cellspacing="0"
                            style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>Nama</th>
                                    <th>Harga</th>
                                    <th>Gambar</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

@endsection

@push('cmsjs')

@include('cms.page.modals.product.edit')

<script src="https://cdn.jsdelivr.net/npm/css3-mediaqueries-js@1.0.0/css3-mediaqueries.js"></script>
<script src="{{ asset('assets/cms/assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}">
</script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/fc-3.2.5/r-2.2.2/datatables.min.js">
</script>
<script src="{{ asset('assets/cms/assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>

<script src="{{ asset('assets/cms/assets/js/datatable.js') }}"></script>

<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>

<script src="{{ asset('assets/cms/assets/bundles/summernote/summernote-bs4.js') }}"></script>

<script src="{{ asset('assets/cms/assets/js/page/ckeditor.js') }}"></script>
<script>
    function hanyaAngka(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }

    function harusHuruf(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) && charCode > 32)
            return false;
        return true;
    }

    function loadPreview(input, id) {
        id = id || '#preview_img';
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }

    }

    function loadPreviewEdit(input, id) {
        id = id || '#preview_img_edit';
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(id)
                    .attr('src', e.target.result)
                    .width(200)
                    .height(150);
            };

            reader.readAsDataURL(input.files[0]);
        }

    }


    $('.uang').mask('000.000.000.000.000', {
        reverse: true
    });
    let timer;

    document.addEventListener('input', e => {
        const el = e.target;

        if (el.matches('[data-color]')) {
            clearTimeout(timer);
            timer = setTimeout(() => {
                document.documentElement.style.setProperty(`--color-${el.dataset.color}`, el.value);
            }, 100);
        }
    });

    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function reset() {
            let default_img = 'https://www.w3adda.com/wp-content/uploads/2019/09/No_Image-128.png';
            $('input').val('');
            $("#preview_img").attr('src', default_img);

        }

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 10000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        $("#tutup-form").hide();
        $("#data-master").hide();
        $("#tambah-produk").on('click', function (e) {
            $("#tambah-produk").hide();
            $("#card-tabel").hide();
            $("#data-master").show();
            $("#tutup-form").show();
            $("#data-master").style.setProperty('--animate-duration', '.5s');

        });

        $("#tutup-form").on('click', function (e) {
            $("#data-master").hide();
            $("#tutup-form").hide();
            $("#card-tabel").show();
            $("#tambah-produk").show();
        });

        $('#data-master').on('submit', function (e) {
            e.preventDefault();
            $('#simpan-data').html("Menyimpan...");
            $('#simpan-data').attr('disabled', true);
            let data = $("#data-master").serialize();
            let datax = new FormData(this);
            console.log(data);

            $.ajax({
                type: "post",
                url: "{{url('cms/product/createOrUpdate')}}",
                data: datax,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    $("#jenis_menuHelp").html("");
                    $('#simpan-data').html("Simpan");
                    $('#simpan-data').removeAttr('disabled');
                    if (response.status == 1) {

                        let oTable = $('#productTable').dataTable();
                        oTable.fnDraw(false);

                        $("#data-master").hide();
                        $("#tutup-form").hide();
                        $("#card-tabel").show();
                        $("#tambah-produk").show();

                        reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Menambah Produk!',
                        });
                    } else if (response.status == 2) {
                        Toast.fire({
                            icon: 'error',
                            title: 'Gagal Menambah Produk !'
                        })
                    } else if (response.status == 3) {
                        Toast.fire({
                            icon: 'warning',
                            title: 'Produk Telah Tersedia !'
                        })
                    }
                },
                error: function (e) {
                    $("#jenis_menuHelp").html("");
                    $('#simpan-data').html(`SIMPAN <i class="far fa-save"></i></button>`);
                    $('#simpan-data').removeAttr('disabled');
                    Toast.fire({
                        icon: 'error',
                        title: 'Gagal menyimpan data !'
                    });
                }
            });
        });

        $(this).on('click', '#button_delete', function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            Swal.fire({
                title: 'Peringatan',
                text: "Apakah anda yakin akan menghapus data ?",
                icon: 'warning',
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonClass: 'btn btn-danger btn-lg mr-2',
                cancelButtonClass: 'btn btn-primary btn-lg',
                confirmButtonText: 'Hapus <i class="fe fe-trash"></i> <br>',
                cancelButtonText: 'Batal <i class="fe fe-close"> </i>'
            }).then((result) => {
                if (result.value) {
                    $.ajax({
                        type: "GET",
                        url: `{{url('cms/product/delete')}}/${id}`,
                        data: {
                            _token: '{{csrf_token()}}'
                        },
                        dataType: "json",
                        success: function (response) {
                            if (response.status == 1) {
                                let oTable = $('#productTable').dataTable();
                                oTable.fnDraw(false);
                                reset();
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Berhasil',
                                    text: 'Berhasil Menghapus Produk!',
                                });
                            } else if (response.status == 2) {
                                Toast.fire({
                                    icon: 'error',
                                    title: 'Gagal Menghapus Produk !'
                                })
                            }
                        },
                        error: function () {
                            Toast.fire({
                                icon: 'error',
                                title: 'Gagal Menghapus Produk !'
                            });
                        }
                    });
                }
            })
        });

        $(this).on('click', "#button_edit", function (e) {
            e.preventDefault();
            let id = $(this).data('id');
            $.ajax({
                type: "get",
                url: `{{url('cms/product/edit')}}/${id}`,
                dataType: "json",
                success: function (response) {
                    var description = response.data.description;


                    $("#id_edit").val(response.data.id);
                    $("#name_edit").val(response.data.name);
                    $("#price_edit").val(response.data.price).trigger('input');

                    $('#description_edit').summernote('code', description);

                    $("#preview_img_edit").attr('src',
                        `{{ asset('property/product/') }}/${response.image}`);

                    console.log(response.data.description);
                },
                error: function () {
                    Toast.fire({
                        icon: 'error',
                        title: 'Gagal mengambil data !'
                    })
                }
            });
            $(".modal-title").html("Ubah Data Produk");
        });


        $('#data-edit').on('submit', function (e) {
            e.preventDefault();
            $('#simpan-edit').html("Memperbaharui...");
            $('#simpan-edit').attr('disabled', true);
            let data = $("#data-edit").serialize();
            let datax = new FormData(this);
            console.log(data);

            $.ajax({
                type: "post",
                url: "{{url('cms/product/createOrUpdate')}}",
                data: datax,
                dataType: "json",
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    $("#jenis_menuHelp").html("");
                    $('#simpan-edit').html("Simpan");
                    $('#simpan-edit').removeAttr('disabled');
                    $("#editProduct").modal('hide');
                    if (response.status == 1) {

                        let oTable = $('#productTable').dataTable();
                        oTable.fnDraw(false);

                        $("#data-master").hide();
                        $("#tutup-form").hide();
                        $("#card-tabel").show();
                        $("#tambah-produk").show();

                        reset();
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: 'Berhasil Memperbaharui Produk!',
                        });
                    } else if (response.status == 2) {
                        Toast.fire({
                            icon: 'error',
                            title: 'Gagal Memperbaharui Produk !'
                        })
                    }
                },
                error: function (e) {
                    $("#jenis_menuHelp").html("");
                    $('#simpan-edit').html(`SIMPAN <i class="far fa-save"></i></button>`);
                    $('#simpan-edit').removeAttr('disabled');
                    Toast.fire({
                        icon: 'error',
                        title: 'Gagal menyimpan data !'
                    });
                }
            });
        });

    });

</script>
@endpush
