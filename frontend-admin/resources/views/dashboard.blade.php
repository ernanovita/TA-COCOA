<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - Admin</title>
        <!-- Load Favicon-->
        <link href="{{ env('APP_TEMPLATE') }}/assets/img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <!-- Load Material Icons from Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
        <!-- Roboto and Roboto Mono fonts from Google Fonts-->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:400,500" rel="stylesheet" />
        <!-- Load main stylesheet-->
        <link href="{{ env('APP_TEMPLATE') }}/css/styles.css" rel="stylesheet" />
    </head>
    <body class="nav-fixed bg-light">
        <!-- Top app bar navigation menu-->
        <nav class="top-app-bar navbar navbar-expand navbar-dark bg-dark">
            <div class="container-fluid px-4">
                <!-- Drawer toggle button-->
                <button class="btn btn-lg btn-icon order-1 order-lg-0" id="drawerToggle" href="javascript:void(0);"><i class="material-icons">menu</i></button>
                <!-- Navbar brand-->
                <a class="navbar-brand me-auto" href="dashboard"><div class="text-uppercase font-monospace">SDN 3 Sabah Balau</div></a>
                <!-- Navbar items-->
                <div class="d-flex align-items-center mx-3 me-lg-0">
                    <!-- Navbar buttons-->
                    <div class="d-flex">
                        <!-- Messages dropdown-->
                        <div class="dropdown dropdown-notifications d-none d-sm-block">
                            <button class="btn btn-lg btn-icon dropdown-toggle me-3" id="dropdownMenuMessages" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">mail_outline</i></button>
                            <ul class="dropdown-menu dropdown-menu-end me-3 mt-3 py-0 overflow-hidden" aria-labelledby="dropdownMenuMessages">
                                <li><h6 class="dropdown-header bg-primary text-white fw-500 py-3">Messages</h6></li>
                                <li><hr class="dropdown-divider my-0" /></li>
                                <li>
                                    <a class="dropdown-item unread" href="#!">
                                        <div class="dropdown-item-content">
                                            <div class="dropdown-item-content-text"><div class="text-truncate d-inline-block" style="max-width: 18rem">Hi there, I had a question about something, is there any way you can help me out?</div></div>
                                            <div class="dropdown-item-content-subtext">Mar 12, 2023 · Juan Babin</div>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider my-0" /></li>
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <div class="dropdown-item-content">
                                            <div class="dropdown-item-content-text"><div class="text-truncate d-inline-block" style="max-width: 18rem">Thanks for the assistance the other day, I wanted to follow up with you just to make sure everyting is settled.</div></div>
                                            <div class="dropdown-item-content-subtext">Mar 10, 2023 · Christine Hendersen</div>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider my-0" /></li>
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <div class="dropdown-item-content">
                                            <div class="dropdown-item-content-text"><div class="text-truncate d-inline-block" style="max-width: 18rem">Welcome to our group! It's good to see new members and I know you will do great!</div></div>
                                            <div class="dropdown-item-content-subtext">Mar 8, 2023 · Celia J. Knight</div>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider my-0" /></li>
                                <li>
                                    <a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex align-items-center w-100 justify-content-end text-primary">
                                            <div class="fst-button small">View all</div>
                                            <i class="material-icons icon-sm ms-1">chevron_right</i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Notifications and alerts dropdown-->
                        <div class="dropdown dropdown-notifications d-none d-sm-block">
                            <button class="btn btn-lg btn-icon dropdown-toggle me-3" id="dropdownMenuNotifications" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">notifications</i></button>
                            <ul class="dropdown-menu dropdown-menu-end me-3 mt-3 py-0 overflow-hidden" aria-labelledby="dropdownMenuNotifications">
                                <li><h6 class="dropdown-header bg-primary text-white fw-500 py-3">Alerts</h6></li>
                                <li><hr class="dropdown-divider my-0" /></li>
                                <li>
                                    <a class="dropdown-item unread" href="#!">
                                        <i class="material-icons leading-icon">assessment</i>
                                        <div class="dropdown-item-content me-2">
                                            <div class="dropdown-item-content-text">Your March performance report is ready to view.</div>
                                            <div class="dropdown-item-content-subtext">Mar 12, 2023 · Performance</div>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider my-0" /></li>
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <i class="material-icons leading-icon">check_circle</i>
                                        <div class="dropdown-item-content me-2">
                                            <div class="dropdown-item-content-text">Tracking codes successfully updated.</div>
                                            <div class="dropdown-item-content-subtext">Mar 12, 2023 · Coverage</div>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider my-0" /></li>
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <i class="material-icons leading-icon">warning</i>
                                        <div class="dropdown-item-content me-2">
                                            <div class="dropdown-item-content-text">Tracking codes have changed and require manual action.</div>
                                            <div class="dropdown-item-content-subtext">Mar 8, 2023 · Coverage</div>
                                        </div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider my-0" /></li>
                                <li>
                                    <a class="dropdown-item py-3" href="#!">
                                        <div class="d-flex align-items-center w-100 justify-content-end text-primary">
                                            <div class="fst-button small">View all</div>
                                            <i class="material-icons icon-sm ms-1">chevron_right</i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- User profile dropdown-->
                        <div class="dropdown">
                            <button class="btn btn-lg btn-icon dropdown-toggle" id="dropdownMenuProfile" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="material-icons">person</i></button>
                            <ul class="dropdown-menu dropdown-menu-end mt-3" aria-labelledby="dropdownMenuProfile">
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <i class="material-icons leading-icon">person</i>
                                        <div class="me-3">Profile</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <i class="material-icons leading-icon">settings</i>
                                        <div class="me-3">Settings</div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <i class="material-icons leading-icon">help</i>
                                        <div class="me-3">Help</div>
                                    </a>
                                </li>
                                <li><hr class="dropdown-divider" /></li>
                                <li>
                                    <a class="dropdown-item" href="#!">
                                        <i class="material-icons leading-icon">logout</i>
                                        <div class="me-3">Logout</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- Layout wrapper-->
        <div id="layoutDrawer">
            <!-- Layout navigation-->
            <div id="layoutDrawer_nav">
                <!-- Drawer navigation-->
                <nav class="drawer accordion drawer-light bg-white" id="drawerAccordion">
                    <div class="drawer-menu">
                        <div class="nav">
                            <!-- Drawer section heading (Account)-->
                            <div class="drawer-menu-heading d-sm-none">Account</div>
                            <!-- Drawer link (Notifications)-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i class="material-icons">notifications</i></div>
                                Notifications
                            </a>
                            <!-- Drawer link (Messages)-->
                            <a class="nav-link d-sm-none" href="#!">
                                <div class="nav-link-icon"><i class="material-icons">mail</i></div>
                                Messages
                            </a>
                            <!-- Divider-->
                            <div class="drawer-menu-divider d-sm-none"></div>

                            <div class="drawer-menu-heading">Menu</div>
                            
                            <a class="nav-link active" href="dashboard">
                                <div class="nav-link-icon"><i class="material-icons">dashboard</i></div>
                                Dashboard
                            </a>

                            <a class="nav-link" href="mapel">
                                <div class="nav-link-icon"><i class="material-icons">amp_stories</i></div>
                                Mata Pelajaran
                            </a>

                            <a class="nav-link" href="kelas">
                                <div class="nav-link-icon"><i class="material-icons">bar_chart</i></div>
                                Kelas
                            </a>

                            <a class="nav-link" href="guru">
                                <div class="nav-link-icon"><i class="material-icons">layers</i></div>
                                Guru
                            </a>

                            <a class="nav-link" href="admin_sekolah">
                                <div class="nav-link-icon"><i class="material-icons">build</i></div>
                                Admin Sekolah
                            </a>

                            <a class="nav-link" href="absen">
                                <div class="nav-link-icon"><i class="material-icons">filter_alt</i></div>
                                List Absen
                            </a>
                        </div>
                    </div>
                    <!-- Drawer footer        -->
                    <div class="drawer-footer border-top">
                        <div class="d-flex align-items-center">
                            <i class="material-icons text-muted">account_circle</i>
                            <div class="ms-3">
                                <div class="caption">Logged in as:</div>
                                <div class="small fw-500">Admin Sekolah</div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Layout content-->
            <div id="layoutDrawer_content">
                <!-- Main page content-->
                <main>
                    <!-- Page header-->
                    <header class="masthead bg-dark">
                        <div class="container-xl px-5">
                            <div class="row justify-content-center gx-5">
                                <div class="col-md-8 col-lg-6">
                                    <div class="text-center py-10">
                                        <!-- Example brand image (inline SVG image)-->
                                        <svg class="mb-3" viewBox="0 0 527 527" style="enable-background: new 0 0 527 527; height: 2.5rem; width: 2.5rem" xml:space="preserve">
                                            <style type="text/css">
                                                .st0 {
                                                    fill: none;
                                                    stroke: currentColor;
                                                    stroke-width: 15;
                                                    stroke-miterlimit: 10;
                                                    enable-background: new;
                                                }
                                            </style>
                                            <rect class="st0" x="7.5" y="7.5" width="512" height="512"></rect>
                                            <g>
                                                <polygon class="st0" points="317.5,207.6 317.5,430.3 428.5,430.3 428.5,96.7"></polygon>
                                                <polygon class="st0" points="209.5,207.6 209.5,430.3 98.5,430.3 98.5,96.7"></polygon>
                                            </g>
                                        </svg>
                                        <!-- Masthead content-->
                                        <h1 class="masthead-heading mb-3 display-5">Build beautiful products, fast.</h1>
                                        <p>Build high-quality digital experiences with the world's most intuitive union between Bootstrap 5 and Material Design.</p>
                                        <a class="btn btn-masthead" href="#scrollTarget">Explore Demos</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <div class="container-xl p-5">
                        <div id="scrollTarget"></div>
                        <!-- Dashboard demos-->
                        <h2 class="display-6 mb-0">Dashboards</h2>
                        <p class="small text-muted">Six pre-built, customizable dashboard demos</p>
                        <hr class="mb-5 mt-0" />
                        <div class="row gx-5">
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-default.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/default.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Default Dashboard</div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-minimal.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/minimal.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Minimal Dashboard</div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-analytics.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/analytics.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Analytics Dashboard</div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-accounting.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/accounting.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Accounting Dashboard</div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-orders.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/orders.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Orders Dashboard</div>
                            </div>
                            <div class="col-sm-6 col-lg-4 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-dashboard-projects.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/dashboards/projects.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Projects Dashboard</div>
                            </div>
                        </div>
                        <!-- Page demos-->
                        <h2 class="display-6 mb-0 mt-5">Pages</h2>
                        <p class="small text-muted">Custom made, fully responsive pages to get you started</p>
                        <hr class="mb-5 mt-0" />
                        <div class="row gx-5">
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-auth-login-basic.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/auth-login-1.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Auth - Login 1</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-auth-login-styled-1.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/auth-login-2.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Auth - Login 2</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-auth-login-styled-2.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/auth-login-3.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Auth - Login 3</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-auth-register-basic.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/auth-register.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Auth - Register</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-auth-password-basic.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/auth-password.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Auth - Forgot Password</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-account-billing.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/account-billing.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Account - Billing</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-account-notifications.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/account-notifications.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Account - Notifications</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-account-profile.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/account-profile.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Account - Profile</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-account-security.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/account-security.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Account - Security</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-invoice.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/invoice.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Invoice</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-knowledgebase-home.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/knowledgebase-home.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Knowledgebase - Home</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-knowledgebase-categories.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/knowledgebase-categories.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Knowledgebase - Categories</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-knowledgebase-article.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/knowledgebase-article.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Knowledgebase - Article</div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <a class="d-block ripple-gray rounded shadow-3 overflow-hidden mb-2" href="app-pricing.html"><img class="img-fluid" src="https://assets.startbootstrap.com/img/screenshots-product-pages/material-admin-pro/pages/pricing.png" alt="..." /></a>
                                <div class="small font-monospace text-center">Pricing</div>
                            </div>
                        </div>
                        <!-- Error page demos-->
                        <h2 class="display-6 mb-0 mt-5">Error Pages</h2>
                        <p class="small text-muted">Illustrated pages to cover common errors</p>
                        <hr class="mb-5 mt-0" />
                        <div class="row gx-5">
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <div class="card card-raised ripple-gray">
                                    <div class="card-body text-center"><a class="stretched-link text-decoration-none font-monospace" href="app-error-400.html">400 Error</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <div class="card card-raised ripple-gray">
                                    <div class="card-body text-center"><a class="stretched-link text-decoration-none font-monospace" href="app-error-401.html">401 Error</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <div class="card card-raised ripple-gray">
                                    <div class="card-body text-center"><a class="stretched-link text-decoration-none font-monospace" href="app-error-403.html">403 Error</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <div class="card card-raised ripple-gray">
                                    <div class="card-body text-center"><a class="stretched-link text-decoration-none font-monospace" href="app-error-404.html">404 Error</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <div class="card card-raised ripple-gray">
                                    <div class="card-body text-center"><a class="stretched-link text-decoration-none font-monospace" href="app-error-429.html">429 Error</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <div class="card card-raised ripple-gray">
                                    <div class="card-body text-center"><a class="stretched-link text-decoration-none font-monospace" href="app-error-500.html">500 Error</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <div class="card card-raised ripple-gray">
                                    <div class="card-body text-center"><a class="stretched-link text-decoration-none font-monospace" href="app-error-503.html">503 Error</a></div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3 mb-5">
                                <div class="card card-raised ripple-gray">
                                    <div class="card-body text-center"><a class="stretched-link text-decoration-none font-monospace" href="app-error-504.html">504 Error</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <!-- Footer-->
                <!-- Min-height is set inline to match the height of the drawer footer-->
                <footer class="py-4 mt-auto border-top" style="min-height: 74px">
                    <div class="container-xl px-5">
                        <div class="d-flex flex-column flex-sm-row align-items-center justify-content-sm-between small">
                            <div class="me-sm-2">Copyright © Your Website 2023</div>
                            <div class="d-flex ms-sm-2">
                                <a class="text-decoration-none" href="#!">Privacy Policy</a>
                                <div class="mx-1">·</div>
                                <a class="text-decoration-none" href="#!">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>

        <script>
            if (localStorage.getItem('token', 'masuk') === null){
                window.location.href = '{{ env('APP_URL') }}';
            } else if (localStorage.getItem('token', 'masuk') === ''){
                alert();
                window.location.href = '{{ env('APP_URL') }}';
            }
        </script>
        <!-- Load Bootstrap JS bundle-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- Load global scripts-->
        <script type="module" src="js/material.js"></script>
        <script src="{{ env('APP_TEMPLATE') }}/js/scripts.js"></script>

        <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
        <sb-customizer project="material-admin-pro"></sb-customizer>
</body>
</html>
