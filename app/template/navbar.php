<!-- Page Content  -->
<div id="content">

    <nav class="navbar navbar-expand-lg navbar-toggler bg-teal-darken text-light">
        <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-teal  ">
                <i class="fa fa-align-left" aria-hidden="true"></i>
                <span></span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-align-justify"></i>
            </button>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav navbar-nav  ml-auto">
                    <li class="nav-item active">

                        <div class="dropdown">
                            <button class="btn dropdown-toggle text-white justify-content-between" type="button" id="dropdownMenuButtonNav" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user text-light" aria-hidden="true"></i>
                            </button>
                            <div class="dropdown-menu" id="dropdownMenuButtonNav" aria-labelledby="dropdownMenuButtonNav">
                                <a class="dropdown-item" href="#"><i class="fa fa-id-card-o mx-2" aria-hidden="true"></i><?= $text_nav_profil ?> </a>
                                <a class="dropdown-item" href="#"><i class="fa fa-sign-out mx-2" aria-hidden="true"></i><?= $text_nav_logout ?></a>
                                <a class="dropdown-item" href="/language"><i class="fa fa-language mx-2" aria-hidden="true"></i><?= $text_nav_language ?> </a>

                            </div>
                        </div>
                    </li>
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">Page</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">Page</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="#">Page</a>-->
<!--                    </li>-->
                </ul>
            </div>
        </div>
    </nav>