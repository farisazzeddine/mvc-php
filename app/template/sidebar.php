<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header d-flex align-items-center pattern-cross-dots-xl">
        <img src="/img/523-5233379_employee-management-system-logo-hd-png-download.png" class="rounded-circle m-3" width="70" alt="managing-picture">
        <h5><?= $text_managing_employees ?></h5>
    </div>

    <ul class="list-unstyled components ml-2">
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users mr-2" aria-hidden="true"></i><?= $text_sb_employees?></a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="/employee"><i class="fa fa-list mr-2" aria-hidden="true"></i><?= $text_sb_all_employees ?></a>
                </li>
                <li>
                    <a href="/employee/add"><i class="fa fa-plus mr-2" aria-hidden="true"></i><?= $text_sb_add_employees ?></a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-info-circle mr-2" aria-hidden="true"></i><?= $text_sb_about_employees ?></a>
        </li>
        <li>
            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-columns mr-2" aria-hidden="true"></i><?= $text_sb_pages ?></a>
            <ul class="collapse list-unstyled" id="pageSubmenu">
                <li>

                    <a href="#"><?= $text_sb_pages_1 ?> </a>
                </li>
                <li>
                    <a href="#"><?= $text_sb_pages_2 ?> </a>
                </li>
                <li>
                    <a href="#"><?= $text_sb_pages_3 ?></a>
                </li>
            </ul>
        </li>
        <li>

            <a href="#"><i class="fa fa-rss-square mr-2" aria-hidden="true"></i><?= $text_sb_Portofolio ?></a>
        </li>
        <li>
            <a href="#"><i class="fa fa-address-card mr-2" aria-hidden="true"></i><?= $text_sb_contact ?></a>
        </li>
    </ul>

    <ul class="list-unstyled CTAs">
<!--        <li>-->
<!--            <a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a>-->
<!--        </li>-->
<!--        <li>-->
<!--            <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>-->
<!--        </li>-->
    </ul>
</nav>