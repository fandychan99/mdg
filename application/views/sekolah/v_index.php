<div id="kt_app_toolbar" class="app-toolbar">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
        <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">

                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted text-hover-primary">Master Data</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">Master Sekolah</li>
                </ul>
            </div>
            <div class="page-title d-flex flex-column justify-content-right gap-1 me-3">
                <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bold fs-3 m-0">
                    Today : <?= date("d M Y"); ?>
                </h1>

            </div>
        </div>
    </div>
</div>
<br>
<div class="card mb-5 mb-xl-8">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">Daftar Sekolah</span>
        </h3>
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

        </div>
    </div>

    <div class="card-body pt-3">
        <div class="d-flex flex-stack mb-5">
            <div class="d-flex align-items-center position-relative my-1">
                <!-- <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span class="path2"></span></i>
                <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Customers" /> -->
            </div>
            <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                <button type="button" onclick="cleardata()" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                    <i class="ki-outline ki-plus fs-2"></i>Tambah Sekolah
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table id="kt_datatable_fixed_header" class="table align-middle table-bordered table-hover table-striped table-row-bordered" style="white-space: nowrap;">
                <thead>
                    <tr class="fw-semibold fs-6" style="background-color: rgb(228 22 45); ">
                        <th style="text-align: center; color: white"> Action </th>
                        <th style="text-align: center; color: white">Kode Sekolah </th>
                        <th style="text-align: center; color: white"> Tingkat </th>
                        <th style="text-align: center; color: white"> Nama Sekolah </th>
                        <th style="text-align: center; color: white"> Region </th>
                        <th style="text-align: center; color: white"> Alamat </th>
                        <th style="text-align: center; color: white"> Akreditasi </th>
                        <th style="text-align: center; color: white"> No Akreditasi </th>
                        <th style="text-align: center; color: white"> Dibuat Oleh </th>
                        <th style="text-align: center; color: white"> Tanggal </th>
                        <th style="text-align: center; color: white"> Diperbarui Oleh </th>
                        <th style="text-align: center; color: white"> Tanggal </th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_add_user_header">
                <h2 class="fw-bold">Data Sekolah</h2>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body px-5 my-7">
                <form id="kt_modal_add_user_form" class="form" action="<?= base_url(); ?>sekolah/save" method="POST">
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Kode Sekolah</label>
                            <input type="text" name="code" id="code" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" required />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Nama Sekolah</label>
                            <input type="text" name="nama" id="nama" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" required />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Tingkat Sekolah</label>
                            <select class="form-select" name="tingkat" id="tingkat" data-control="select2" data-dropdown-parent="#kt_modal_add_user" data-placeholder="Select an option" data-allow-clear="true">
                                <option value="-">-</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                            </select>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Region Sekolah</label>
                            <select class="form-select" name="region" id="region" data-control="select2" data-dropdown-parent="#kt_modal_add_user" data-placeholder="Select an option" data-allow-clear="true">
                                <option value="-">-</option>
                                <option value="AREA 1">AREA 1</option>
                                <option value="AREA 2">AREA 2</option>
                                <option value="AREA 3">AREA 3</option>
                            </select>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Alamat</label>
                            <textarea name="alamat" id="alamat" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Akreditasi</label>
                            <input type="text" name="akreditasi" id="akreditasi" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nama Client" required />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Akrediatasi Nomor</label>
                            <input type="text" name="akreditasi_no" id="akreditasi_no" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Nama Client" required />
                        </div>
                        <div class="text-center pt-10">
                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit" id="kt_button_1">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var table;

    $(document).ready(function() {
        $('#kt_modal_add_user').modal({
            backdrop: 'static',
            keyboard: false // to prevent closing with Esc button (if you want this too)
        })
        //datatables

        table = $('#kt_datatable_fixed_header').DataTable({

            "processing": true, //Feature control the processing indicator.
            "serverSide": true, //Feature control DataTables' server-side processing mode.
            "order": [], //Initial no order.
            "dom": "<'row' <'col-sm-1 d-flex align-items-center justify-conten-start'l><'col-sm-5 d-flex align-items-center justify-conten-start'f> <?= $this->session->userdata('export') == 1 ? "<'col-sm-6 d-flex align-items-center justify-content-end'B>>" : '>' ?> " +
                "<'table-responsive'tr>" +
                "<'row' <'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i> <'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>>",

          
            "fixedHeader": {
                "header": true,
                "headerOffset": $('.app-header').height()
            },

            // Load data for the table's content from an Ajax source
            "ajax": {
                "url": "<?php echo base_url('sekolah/ajax_list') ?>",
                "type": "POST"
            },

            //Set column definition initialisation properties.
            "columnDefs": [{
                "targets": [0], //first column / numbering column
                "orderable": false, //set not orderable
            }, ],

        });

        var handleSearchDatatable = function() {
            const filterSearch = document.querySelector('[data-kt-docs-table-filter="search"]');
            filterSearch.addEventListener('keyup', function(e) {
                table.search(e.target.value).draw();
            });
        }

    });
</script>

<script>
    $(function() {
        var button = document.querySelector("#kt_button_1");

        $('#kt_modal_add_user_form').unbind('submit').bind('submit', function(e) { //<-- e defined here
            e.preventDefault();
            console.log('Submit event prevented');

            button.setAttribute("data-kt-indicator", "on");

            var form = $(this);
            var data = new FormData(this);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: data,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    if (data.status == 'success') {
                        Swal.fire({
                            text: data.msg,
                            icon: "success",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                        table.ajax.reload();
                        $('#kt_modal_add_user').modal('toggle');
                    } else {
                        Swal.fire({
                            text: data.msg,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        })
                    }

                    setTimeout(function() {
                        button.removeAttribute("data-kt-indicator");
                    }, 3000);
                },
                error: function(err) {
                    console.log(err);
                    Swal.fire({
                        text: err,
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                    setTimeout(function() {
                        button.removeAttribute("data-kt-indicator");
                    }, 3000);
                }
            });
            return false;
        });
    });
</script>

<script>
    function edit_data(id) {
        cleardata();
        $url = "<?= base_url() ?>sekolah/get_byid?id=" + id;
        console.log($url);
        $.ajax({
            url: $url,
            type: "GET",
            data: "JSON",
            success: function(data) {
                var datas = JSON.parse(data);
                $("#code").val(datas.header.code);
                $("#nama").val(datas.header.nama);
                $("#alamat").val(datas.header.alamat);
                $("#akreditasi").val(datas.header.akreditasi);
                $("#akreditasi_no").val(datas.header.akreditasi_no);
                $("#region").val(datas.header.region).trigger("change");
                $("#tingkat").val(datas.header.tingkat).trigger("change");;
                
            }
        });
    }

    function cleardata() {
        $("#code").prop("readonly", false);
        $("#code").val('');
        $("#nama").val('');
        $("#alamat").val('');
        $("#region").val('-').trigger("change");
        $("#tingkat").val('-').trigger("change");
        $("#akreditasi").val('');
        $("#akreditasi_no").val('');
    }

    // function edit_data(id) {
    //     cleardata();
    //     $url = "<?= base_url() ?>guru/get_byid?id=" + id;
    //     console.log($url);
    //     $.ajax({
    //         url: $url,
    //         type: "GET",
    //         data: "JSON",
    //         success: function(data) {
    //             var datas = JSON.parse(data);
    //             $("#code").val(datas.header.code);
    //             $("#nama").val(datas.header.nama);
    //             $("#alamat").val(datas.header.alamat);
    //             $("#akreditasi").val(datas.header.akreditasi);
    //             $("#akreditasi_no").val(datas.header.akreditasi_no);
    //             $("#region").val(datas.header.region).trigger("change");
    //             $("#tingkat").val(datas.header.tingkat).trigger("change");;
    //             $("#code").prop("readonly", true);
    //         }
    //     });
    // }

    // function cleardata() {
       
    //     $("#id").val(0);
    //     $("#code").prop("readonly", false);
    //     $("#code").val('');
    //     $("#nama").val('');
    //     $("#alamat").val('');
    //     $("#region").val('-').trigger("change");
    //     $("#tingkat").val('-').trigger("change");
    //     $("#akreditasi").val('');
    //     $("#akreditasi_no").val('');
    // }

    function delete_data($id, $produk) {
        $url = "<?= base_url() ?>sekolah/delete?id=" + $id;
        Swal.fire({
            title: 'Apakah Anda yakin menghapus Client ' + $produk + ' ?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            // Jika pengguna mengklik "Ya, hapus!"
            if (result.isConfirmed) {
                $.ajax({
                    url: $url,
                    type: "GET",
                    data: "JSON",

                    success: function(data) {
                        var datas = JSON.parse(data);
                        if (datas.status == "success") {
                            Swal.fire({
                                text: data.msg,
                                icon: "success",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            })
                            table.ajax.reload();
                        } else {
                            Swal.fire({
                                text: data.msg,
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    },
                    error: function(err) {
                        console.log(err);
                        Swal.fire({
                            text: err,
                            icon: "error",
                            buttonsStyling: !1,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });

                    }
                });
            }
        });
    }
</script>