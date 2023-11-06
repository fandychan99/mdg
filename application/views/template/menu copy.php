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



                    <div class="menu-item px-5">
                        <a href="<?= base_url() ?>auth/log_out" class="menu-link px-5">Sign Out</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!--end::Footer-->
    <br><hr>
    <div class="aside-menu flex-column-fluid ps-5 pe-3 mb-7" id="kt_aside_menu">
        <div class="w-100 hover-scroll-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_footer, #kt_header" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="102">
            <div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg fw-semibold" id="#kt_aside_menu" data-kt-menu="true">
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
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
                        <span class="menu-arrow"></span>
                    </span>

                    <div class="menu-sub menu-sub-accordion">
                        <div class="menu-item">
                            <a class="menu-link active" href="<?= base_url() ?>">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Default</span>
                            </a>
                        </div>

                    </div>

                    <?php
                    $lvl1 = array_filter($_list_menu, function ($obj) {
                        return $obj['level'] === '1';
                    });
                    foreach ($lvl1 as $r1) {
                    ?>


                        <div class="menu-item pt-5">
                            <div class="menu-content">
                                <span class="menu-heading fw-bold text-uppercase fs-7"><?= $r1['name'] ?></span>
                            </div>
                        </div>
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <?php
                            $id =  $r1['id'];
                            $lvl2 = array_filter($_list_menu, function ($obj) use ($id) {
                                return $obj['parent'] === $id;
                            });
                            foreach ($lvl2 as $r2) {
                            ?>
                                
                                <span class="menu-item">
                                    <a class="menu-link" href="<?= base_url() . $r2['url']  ?>">
                                        <span class="menu-icon">
                                            <i class="<?= $r2['icon'] ?>">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </span>
                                        <span class="menu-title"><?= $r2['name'] ?></span>
                                    </a>
                                </span>
                                <!-- </a> -->
                            <?php
                            }
                            ?>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Aside-->