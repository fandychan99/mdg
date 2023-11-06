<div id="kt_app_toolbar" class="app-toolbar">
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
        <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
            <div class="page-title d-flex flex-column justify-content-center gap-1 me-3">

                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
                    <li class="breadcrumb-item text-muted">
                        <a href="#" class="text-muted text-hover-primary">MONITORING PENGAJUAN HONDA </a>
                    </li>
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <li class="breadcrumb-item text-muted">HONOR DAERAH </li>
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
            <span class="card-label fw-bold fs-3 mb-1">LIST DATA MONITORING HONDA</span>
        </h3>
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

        </div>
    </div>

    <div class="card-body pt-3">
        <div class="row col-md-12">
            <div class="col-md-3 col-sm-12">
                <div class="fv-row mb-7">
                    <label class="fw-semibold fs-6 mb-2">Sekolah</label>
                    <select name="sekolah" id="sekolah" class="form-select" data-control="select2" onchange="" data-placeholder="Select an option" data-allow-clear="true">
                        
                        
                        <?php
                        $role = $this->session->userdata('role');
                        $user = $this->session->userdata('userid');
                        $user2 = $this->session->userdata('username');
                        if($role == 2){
                            echo "<option value=\"$user\">$user2</option>";
                        }else{
                            echo "<option value=\"All\">All</option>";
                            foreach ($sekolah as $r) {
                                echo "<option value='$r->c  ode'>$r->nama</option>";
                            }
                        }
                        
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-3  col-sm-12">
                <div class="fv-row mb-7">
                    <label class="fw-semibold fs-6 mb-2">Periode</label>
                    <select name="periode" id="periode" class="form-select" data-control="select2" onchange="" data-placeholder="Select an option" data-allow-clear="true">
                        <option value="Tri Wulan 1">Tri Wulan 1</option>
                        <option value="Tri Wulan 2">Tri Wulan 2</option>
                        <option value="Tri Wulan 3">Tri Wulan 3</option>
                        <option value="Tri Wulan 4">Tri Wulan 4</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2  col-sm-12">
                <div class="fv-row mb-7">
                    <label class="fw-semibold fs-6 mb-2">Tahun</label>
                    <select name="tahun" id="tahun" class="form-select" data-control="select2" onchange="" data-placeholder="Select an option" data-allow-clear="true">
                        <?php
                        $tahun  = date("Y") - 3;
                        for ($i = $tahun; $i <= $tahun + 10; $i++) {
                            if ($i == $tahun + 3)
                                echo "<option value='$i' selected>$i</option>";
                            else
                                echo "<option value='$i'>$i</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-2  col-sm-12">
                <div class="fv-row mb-7">
                    <label class="fw-semibold fs-6 mb-2">Status</label>
                    <select name="status" id="status" class="form-select" data-control="select2" onchange="" data-placeholder="Select an option" data-allow-clear="true">
                        <option value="All">All</option>
                        <option value="Pengajuan">Pengajuan</option>
                        <option value="Diterima" selected>Diterima</option>
                        <option value="Ditolak">Ditolak</option>
                        <option value="Batal">Batal</option>
                    </select>
                </div>
            </div>

            <div class="col-md-2  col-sm-12">
                <div class="fv-row mb-7">
                    <label class="fw-semibold fs-6 mb-2">&nbsp;</label>
                    <button type="button" class="form-control btn btn-primary" onclick="getData()">Filter</button>
                </div>
            </div>
        </div>
       
        <div class="table-responsive">
            <table id="kt_datatable_fixed_header" class="table align-middle table-bordered table-hover table-striped table-row-bordered" style="white-space: nowrap;">
                <thead>
                    <tr class="fw-semibold fs-6" style="background-color: rgb(228 22 45); ">
                        <th style="text-align: center; color: white"> No </th>
                        <th style="text-align: center; color: white"> Sekolah </th>
                        <th style="text-align: center; color: white"> Nomor Pengajuan </th>
                        <th style="text-align: center; color: white"> Nama Guru </th>
                        <th style="text-align: center; color: white"> Periode </th>
                        <th style="text-align: center; color: white"> Tahun </th>
                        <th style="text-align: center; color: white"> File </th>
                        <th style="text-align: center; color: white"> Status </th>
                        <th style="text-align: center; color: white"> Reason </th>
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


<div class="modal fade" id="kt_modal_view" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen  p-3">
        <div class="modal-content">
            <div class="modal-header" id="kt_modal_view_header">
                <h2 class="fw-bold">View Berkas HONDA</h2>

                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <div class="modal-body col-md-10 mx-auto col-sm-12">
                <iframe id="pdfIframe" width="100%" height="600px" frameborder="0"></iframe>
                <!-- <embed src="" frameborder="0" width="100%" height="400px"> -->

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
                "url": "<?php echo base_url('honda_mon/ajax_list') ?>",
                "type": "POST",
                "data": function(d) {
                        d.sekolah = $("#sekolah").val();
                        d.tahun = $("#tahun").val();
                        d.periode = $("#periode").val();
                        d.status = $("#status").val();
                    }
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
    function view_data($id) {
        var pdfUrl = "<?= base_url() ?>uploads/honda/" + $id; // Ganti dengan URL file PDF Anda
        $("#pdfIframe").attr("src", pdfUrl);
    }

    function getData(){
        table.draw()
    }
</script>