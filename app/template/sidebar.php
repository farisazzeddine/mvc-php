<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header d-flex align-items-center pattern-cross-dots-xl">
        <img src="/img/523-5233379_employee-management-system-logo-hd-png-download.png" class="rounded-circle m-3" width="70" alt="managing-picture">
        <h5><?= $text_managing_employees ?></h5>
    </div>

    <ul class="list-unstyled components ml-2">
        <li class="<?= $this->matchUrl('/') === true ? 'selected' : '' ?>">
            <a href="/">
                <i class=" fa fa-dashboard mr-2" aria-hidden="true"></i>
                <?= $text_sb_general_statistics ?>
            </a>
        </li>
        <li class="<?= $this->matchUrl('/transactions') === true ? 'selected' : '' ?>">
            <a href="/transactions">
                <i class=" fa fa-credit-card mr-2" aria-hidden="true"></i><?= $text_sb_transactions?>
            </a>
        </li>
        <li class="<?= $this->matchUrl('/expenses') === true ? 'selected' : '' ?>">
            <a href="/expenses">
                <i class=" fa fa-money mr-2" aria-hidden="true"></i><?= $text_sb_expenses?>
            </a>
        </li>

        <li class="<?= $this->matchUrl('/users') === true ? 'selected' : '' ?>">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <i class=" fa fa-users mr-2" aria-hidden="true"></i><?= $text_sb_users?>
            </a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li class="<?= $this->matchUrl('/users') === true ? 'selected' : '' ?>">
                    <a href="/users"><i class="fa fa-list mr-2" aria-hidden="true"></i><?= $text_sb_all_users ?></a>
                </li>
                <li class="<?= $this->matchUrl('/privileges') === true ? 'selected' : '' ?>">
                    <a href="/privileges"><i class="fa fa-list mr-2" aria-hidden="true"></i><?= $text_sb_add_privileges ?></a>
                </li>
                <li class="<?= $this->matchUrl('/usersgroups') === true ? 'selected' : '' ?>">
                    <a href="/usersgroups"><i class="fa fa-list mr-2" aria-hidden="true"></i><?= $text_sb_add_usersgroups ?></a>
                </li>

            </ul>
        </li>

        <li class="<?= $this->matchUrl('/store') === true ? 'selected' : '' ?>">
            <a href="/store">
                <i class=" material-icons mr-2">store</i><?= $text_sb_store?>
            </a>
        </li>
        <li class="<?= $this->matchUrl('/clients') === true ? 'selected' : '' ?>">
            <a href="/clients">
                <i class=" material-icons mr-2">contacts</i><?= $text_sb_clients?>
            </a>
        </li>
        <li class="<?= $this->matchUrl('/suppliers') === true ? 'selected' : '' ?>">
            <a href="/suppliers">
                <i class=" material-icons py-1 mr-2">group</i><?= $text_sb_suppliers?>
            </a>
        </li>


        <li class="<?= $this->matchUrl('/reports') === true ? 'selected' : '' ?>">
            <a href="/reports">
                <i class=" fa fa-bar-chart mr-2" aria-hidden="true"></i><?= $text_sb_reports?>
            </a>
        </li>
        <li class="<?= $this->matchUrl('/notifications') === true ? 'selected' : '' ?>">
            <a href="/notifications">
                <i class="material-icons mr-2">notifications</i><?= $text_sb_notifications?>
            </a>
        </li>





    </ul>


</nav>