<div class="col-lg-3">
                <nav class="navbar navbar-expand-lg bg-body-tertiary rounded-3 border mt-2">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel" style="width:250px">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav nav-pills flex-column justify-content-end flex-grow-1">
                                    <li class="nav-item">
                                        <a class="nav-link ps-2 <?php echo ((isset($_GET['x']) && $_GET['x']=='home') || !isset($_GET['x'])) ? 'active link-light' : 'link-dark' ; ?>" aria-current="page" href="home"><i class="bi bi-house-heart-fill"></i> Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2  <?php echo (isset($_GET['x']) && $_GET['x']=='menu') ? 'active link-light' : 'link-dark' ; ?>" href="menu"><i class="bi bi-menu-button"></i> Menu</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2  <?php echo (isset($_GET['x']) && $_GET['x']=='keranjang') ? 'active link-light' : 'link-dark' ; ?>" href="keranjang"><i class="bi bi-cart4"></i> Keranjang</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2  <?php echo (isset($_GET['x']) && $_GET['x']=='customer') ? 'active link-light' : 'link-dark' ; ?>" href="customer"><i class="bi bi-person-square"></i> Customer</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2  <?php echo (isset($_GET['x']) && $_GET['x']=='pengiriman') ? 'active link-light' : 'link-dark' ; ?>" href="pengiriman"><i class="bi bi-truck"></i> Pengiriman</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2  <?php echo (isset($_GET['x']) && $_GET['x']=='ulasanrating') ? 'active link-light' : 'link-dark' ; ?>" href="ulasanrating"><i class="bi bi-list-stars"></i> Ulasan dan Rating</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  ps-2  <?php echo (isset($_GET['x']) && $_GET['x']=='Report') ? 'active link-light' : 'link-dark' ; ?>" href="report"><i class="bi bi-list-stars"></i> Report</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>