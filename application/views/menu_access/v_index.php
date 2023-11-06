<?= form_open(base_url("Menu_access/add"), 'id="formuser"'); ?>
<div class="d-flex flex-column flex-column-fluid">
    <div class="card card-flush h-xl-50 mb-5 mb-xl-10">
        <div class="card-header pt-7">
            <h3 class="card-title align-items-start flex-column">
                <span class="card-label fw-bold text-gray-800">Menu Access</span>
                <span class="text-gray-400 mt-1 fw-semibold fs-6">Give access menu to specific Role</span>
            </h3>
            <div class="card-toolbar">
                <div class="font-13"><i class="bi bi-circle-fill text-success"></i><span class="ms-2"><?= date("l, d M Y") ?></span></div>

            </div>
        </div>
        <hr>
        <div class="card-body pt-3">
            <div class="mb-5">
                <div class="fv-row mb-7">
                    <?php
                    $style_kategori = 'class="form-select" data-control="select2" id="role" onchange="get_menu()" data-placeholder="Select an option" data-allow-clear="true"';
                    echo form_dropdown('role', $_role, '', $style_kategori);
                    ?>
                    <hr>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped table-row-bordered gy-5 gs-7">
                        <thead>
                            <tr>
                                <th style="width:70%">Menu</th>
                                <th style="width:5%">Access</th>
                                <th style="width:5%" hidden>Add</th>
                                <th style="width:5%" hidden>Edit</th>
                                <th style="width:5%" hidden>Delete</th>
                                <th style="width:5%" hidden>Pdf</th>
                                <th style="width:5%" hidden>Excel</th>
                            </tr>
                        </thead>
                        <tbody id="tampil_disini">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary px-5"><em class="bi bi-save"></em> UPDATE USER ACCESS</button>
        </div>
    </div>

</div>
<?= form_close(); ?>

<?php $this->load->view('menu_access/v_script'); ?>