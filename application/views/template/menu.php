<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
    <div class="aside-footer flex-column-auto px-9" id="kt_aside_menu">
        <div class="d-flex flex-stack">
            <div class="d-flex align-items-center">
                <div class="symbol symbol-circle symbol-40px">
                    <img src="assets/media/avatars/300-1.jpg" alt="photo" />
                </div>
                <div class="ms-2">
                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold lh-1"><?= $this->session->userdata("username") ?></a>
                    <span class="text-muted fw-semibold d-block fs-7 lh-1">
                        <?php
                        $dt = array('', 'System Administrator',    'Admin Sekolah', 'Pengawas', 'Staff');
                        echo $dt[$this->session->userdata("role")];
                        ?>
                    </span>
                </div>
            </div>
            <div class="ms-1">
                <div class="btn btn-sm btn-icon btn-active-color-primary position-relative me-n2" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-end">
                    <i class="ki-duotone ki-setting-2 fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </div>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                    <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                            <div class="symbol symbol-50px me-5">
                                <img alt="Logo" src="assets/media/avatars/300-1.jpg" />
                            </div>
                            <div class="d-flex flex-column">
                                <div class="fw-bold d-flex align-items-center fs-5">
                                    <?= $this->session->userdata("username") ?>
                                </div>
                                <div class="fw-bold d-flex align-items-center fs-5">
                                    <?php
                                    $dt = array('', 'System Administrator',    'Admin Sekolah', 'Pengawas', 'Staff');
                                    echo $dt[$this->session->userdata("role")];
                                    ?>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="separator my-2"></div>
                    <div class="menu-item px-5">
                        <a href="#" class="menu-link px-5">My Profile</a>
                    </div>
                    <div class="menu-item px-5 my-1">
                        <a href="#" class="menu-link px-5" data-bs-toggle="modal" data-bs-target="#kt_modal_password">Change Password</a>
                    </div>


                    <div class="menu-item px-5">
                        <a href="<?= base_url() ?>auth/log_out" class="menu-link px-5">Sign Out</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <div class="aside-menu flex-column-fluid px-4">
        <div class="hover-scroll-overlay-y mh-100 my-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_footer', lg: '#kt_header, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="{default: '5px', lg: '75px'}">
            <div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_aside_menu" data-kt-menu="true">
                <a href="<?= base_url(); ?>" class="menu-item">
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Dashboards</span>
                    </span>
                </a>
                <div class="menu-item pt-5">
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Content</span>
                    </div>
                </div>
                <?php
                $lvl1 = array_filter($_list_menu, function ($obj) {
                    return $obj['level'] === '1';
                });
                foreach ($lvl1 as $r1) {
                ?>
                    <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                        <span class="menu-link">
                            <span class="menu-icon">
                                <i class="<?= $r1['icon'] ?> fs-3">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                </i>
                            </span>
                            <span class="menu-title"><?= $r1['name'] ?></span>
                            <span class="menu-arrow"></span>
                        </span>
                        <div class="menu-sub menu-sub-accordion">
                            <?php
                            $id =  $r1['id'];
                            $lvl2 = array_filter($_list_menu, function ($obj) use ($id) {
                                return $obj['parent'] === $id;
                            });
                            foreach ($lvl2 as $r2) {
                            ?>
                                <a href="<?= base_url() .  $r2['url'] ?>" class="menu-item">
                                    <span class="menu-link">
                                        <span class="menu-icon">
                                            <i class="<?= $r2['icon'] ?> fs2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title"><?= $r2['name'] ?></span>
                                    </span>
                                </a>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="kt_modal_password">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Ganti Password</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>

            <div class="modal-body">
                <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Password Lama</label>
                        <input type="password" name="oldpassword" id="oldpassword" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Password Lama" required />
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Password Baru</label>
                        <input type="password" name="newpassword" id="newpassword" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Password Baru" required />
                    </div>
                    <div class="fv-row mb-7">
                        <label class="required fw-semibold fs-6 mb-2">Konfirmasi Password</label>
                        <input type="password" name="confirmation" id="confirmation" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Konfirmasi Password" required />
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="changePassword()">Simpan</button>
            </div>
        </div>
    </div>
</div>


<script>
    function changePassword() {
        $.ajax({
            url: "<?= base_url(); ?>auth/change_password",
            type: "post",
            data: {
                oldpassword: $('#oldpassword').val(),
                newpassword: $('#newpassword').val(),
                confirmation: $('#confirmation').val()
            },
            beforeSend: function() {
                Swal.fire({
                    title: 'Mohon Tunggu',
                    html: 'Mengganti Password',
                    allowOutsideClick: false,
                    showCancelButton: false,
                    showConfirmButton: false,
                });
                Swal.showLoading();
            },
            success: function(response) {
                Swal.close();
                $('#oldpassword').val("");
                $('#newpassword').val("");
                $('#confirmation').val("");
                var json = $.parseJSON(response);
                if (json['status'] != 'failed') {
                    $("#kt_modal_password").modal('hide');
                }
                Swal.fire({
                    icon: json['status'] == 'failed' ? 'error' : 'success',
                    title: json['status'] == 'failed' ? 'Gagal' : 'Sukses',
                    text: json['message']
                });
            },
            error: function(jqXHR, textStatus, errorThrown) {
                Swal.close();
                console.log(textStatus, errorThrown);
            }
        });
    }
</script>