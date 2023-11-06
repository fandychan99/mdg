<div class="card mb-5 mb-xl-8">
    <div class="card-header border-0 pt-5">
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold fs-3 mb-1">User List</span>
        </h3>
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

        </div>

    </div>

    <div class="card-body pt-1">
        <div class="row col-md-12">
            <hr>
            <div class="col-md-3 ms-auto col-sm-12">
                <div class="fv-row mb-7">
                    <label class="fw-semibold fs-6 mb-2">&nbsp;</label>
                    <!-- <button type="button" class=" btn btn-primary" onclick="getData()">Filter</button> -->
                    <button type="button" onclick="cleardata(); get_number()" class="form-control btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                        <i class="ki-outline ki-plus fs-2"></i>Add User
                    </button>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table id="kt_datatable_fixed_header" class="table table-bordered table-hover table-striped table-row-bordered gy-5 gs-7">
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800">
                        <th class="w-50px pe-2"> Action </th>
                        <th class="w-200px pe-2" style="text-align: center;"> User ID</th>
                        <th class="w-300px pe-2" style="text-align: center;"> Full Name </th>
                        <th class="w-200px pe-2" style="text-align: center;"> Roles </th>
                        <th class="min-w-200px" style="text-align: center;"> Status </th>
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
                <h2 class="fw-bold">Add expense</h2>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body px-5 my-7">
                <form id="kt_modal_add_user_form" class="form" action="<?= base_url(); ?>user/save" method="POST">
                    <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">User ID</label>
                            <input type="text" name="user_id" id="user_id" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" autocomplete="off" />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Name</label>
                            <input type="text" name="name" id="name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="" autocomplete="off" />
                        </div>
                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Role</label>
                            <?php
                            $rl = "";
                            $style_kategori = 'class="form-select" data-control="select2" id="role" data-placeholder="Select an option" data-allow-clear="true"';
                            echo form_dropdown('role', $_role, $rl, $style_kategori);
                            ?>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fw-semibold fs-6 mb-2">Password</label>
                            <input type="password" name="password" id="password" class="form-control mb-3 mb-lg-0" placeholder="0" required />
                        </div>

                    </div>
                    <div class="text-center pt-10">
                        <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal" data-kt-users-modal-action="cancel">Discard</button>
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
        var data =

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

                    "url": "<?php echo base_url('User/ajax_list') ?>",
                    "type": "POST",
                    // "data": function(d) {
                    //     d.tanggal_awal = $("#tanggal_awal").val();
                    //     d.tanggal_akhir = $("#tanggal_akhir").val();
                    // }
                },

                //Set column definition initialisation properties.
                "columnDefs": [{
                    "targets": [0], //first column / numbering column
                    "orderable": false, //set not orderable
                }, ],

            });



    });

    $(document).ready(function() {
        $('#amount').on('input', function() {
            // Menghilangkan semua karakter selain angka dan koma
            var input = $(this).val().replace(/[^\d\,]/g, '');

            // Menghapus koma yang berulang dan mengganti dengan satu koma
            input = input.replace(/,+/, ',');

            // Menggunakan number_format untuk menambahkan separator ribuan
            var parts = input.split(',');
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');

            // Menggabungkan kembali angka dengan separator ribuan
            $(this).val(parts.join(','));
        });
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
        $url = "<?= base_url() ?>User/get_byid?id=" + id;
        console.log($url);
        $.ajax({
            url: $url,
            type: "GET",
            data: "JSON",
            success: function(data) {
                var datas = JSON.parse(data);
                $("#user_id").val(datas.header.user_id);
                $("#name").val(datas.header.name);
                $("#role").val(datas.header.role_id).trigger("change");
                $("#password").prop("disabled", true);
                $("#user_id").prop("readonly", true);

                $url = "<?= base_url(); ?>user/edit";
                $('#kt_modal_add_user_form').attr('action', $url);
            }
        });
        // $.ajax({
        //     ur
        // });
    }

    function cleardata() {
        $("#user_id").val('');
        $("#name").val('');
        $("#password").val('');
        $('#role_id').val('').trigger("change");
        $("#password").prop("disabled", false);
        $("#user_id").prop("readonly", false);

        $url = "<?= base_url(); ?>user/save";
        $('#kt_modal_add_user_form').attr('action', $url);

        // get_number();
    }

    function getData() {
        table.draw();
    }

    function delete_data($id, $produk) {
        $url = "<?= base_url() ?>user/delete?id=" + $id;
        Swal.fire({
            title: 'Apakah Anda yakin menghapus user  ' + $produk + ' ?',
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


    function reset($id, $produk) {
        $url = "<?= base_url() ?>user/reset?id=" + $id;
        Swal.fire({
            title: 'Apakah Anda yakin reset password user  ' + $produk + ' ?',
            text: "Anda tidak akan dapat mengembalikan password sebelumnya!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Reset!',
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