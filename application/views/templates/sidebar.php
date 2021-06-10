<input type="checkbox" id="nav-toggle">
<div class="sidebar">
    <!-- Query menu -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu` 
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                            WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                            ";
    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- Looping menu -->



    <div class="sidebar-brand">
        <h2><span class="lab la-accusoft"></span><span>Sedekah</span></h2>
    </div>


    <div class="sidebar-menu">
        <ul>
            <?php foreach ($menu as $m) : ?>
                <!-- sub menu -->
                <?php
                $menuId = $m['id'];
                $querySubMenu = "SELECT *
                                    FROM `user_sub_menu` 
                                    WHERE `menu_id` = $menuId
                                        AND `is_active` = 1
                ";
                $submenu = $this->db->query($querySubMenu)->result_array();
                ?>
                <?php foreach ($submenu as $sm) : ?>
                    <?php if ($title == $sm['title']) : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>"><span class="<?= $sm['icon']; ?>"></span>
                            <span><?= $sm['title']; ?></span></a>
                        </li>
                    <?php endforeach; ?>
                <?php endforeach; ?>

                <li>
                    <a class="nav-link pb-0" href="<?= base_url('Auth/logout'); ?>"><span class="las la-sign-out-alt"></span>
                        <span>Logout</span></a>
                </li>
        </ul>
    </div>
</div>