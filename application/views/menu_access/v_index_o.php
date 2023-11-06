<!--breadcrumb-->
<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
    <div class="breadcrumb-title pe-3">Menu Access Management</div>
    <div class="ps-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-cog"></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">List Menu</li>
            </ol>
        </nav>
    </div>
</div>
<!--end breadcrumb-->

<?= form_open(base_url("Menu_access/add"), 'id="formuser"'); ?>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header py-3 bg-transparent">
                <?php
                $style_kategori = 'class="single-select form-control" id="role" onchange="get_menu()"';
                echo form_dropdown('role', $_role, '', $style_kategori);
                ?>
            </div>
            <div class="card-body">
                <table class="table mb-0 table-hover">
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
            <div class="card-footer">
                <button type="submit" class="btn btn-primary px-5"><em class="bi bi-save"></em> UPDATE USER ACCESS</button>
            </div>
        </div>
    </div>
</div>
<?= form_close(); ?>

<?php $this->load->view('menu_access/v_script'); ?>