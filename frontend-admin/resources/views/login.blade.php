<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta http-equiv="Access-Control-Allow-Origin" content="{{ env('APP_TEMPLATE') }}">
        <title>Login - Admin</title>
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
    <body class="bg-pattern-doubs">
        <!-- Layout wrapper-->
        <div id="layoutAuthentication">
            <!-- Layout content-->
            <div id="layoutAuthentication_content">
                <!-- Main page content-->
                <main>
                    <!-- Main content container-->
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xxl-4 col-xl-5 col-lg-6 col-md-8">
                                <div class="card card-raised shadow-10 mt-5 mt-xl-10 mb-4">
                                    <div class="card-body p-5">
                                        <!-- Auth header with logo image-->
                                        <div class="text-center">
                                            <img class="mb-3" src="{{ env('APP_TEMPLATE') }}/assets/img/icons/background.svg" alt="..." style="height: 48px" />
                                            <h1 class="display-5 mb-0">Login</h1>
                                            <div class="subheading-1 mb-5">SDN 3 Sabah Balau</div>
                                        </div>
                                        <!-- Login submission form-->
                                        <form>
                                            <div class="mb-4"><mwc-textfield class="w-100" label="Username" id="username" outlined=""></mwc-textfield></div>
                                            <div class="mb-4"><mwc-textfield class="w-100" label="Password" id="password" outlined="" icontrailing="visibility_off" type="password"></mwc-textfield></div>
                                            
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" type="button" onclick="input()">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- Layout footer-->
            <div id="layoutAuthentication_footer">
                <!-- Auth footer-->
                <footer class="p-4">
                    <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between small">
                        <div class="me-sm-3 mb-2 mb-sm-0"><div class="fw-500 text-white">Copyright © SDN 3 Sabah Balau 2023</div></div>
                        <div class="ms-sm-3">
                            <a class="fw-500 text-decoration-none link-white" href="#">Privacy</a>
                            <a class="fw-500 text-decoration-none link-white mx-4" href="#">Terms</a>
                            <a class="fw-500 text-decoration-none link-white" href="#">Help</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    <!-- Load Bootstrap JS bundle-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Load global scripts-->
    <script type="module" src="/js/material.js"></script>
    <script src="{{ env('APP_TEMPLATE') }}/js/scripts.js"></script>
    <script src="https://assets.startbootstrap.com/js/sb-customizer.js"></script>
    <sb-customizer project="material-admin-pro"></sb-customizer>
    <script>
        function input() {
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            if (username === '') {
                alert('Username Tidak Boleh Kosong');
            } else if (password === '') {
                alert('Password Tidak Boleh Kosong');
            } else {
                const data = {
                        user: username,
                        pass: password
                    };

                    fetch('{{ $url }}/api/login_admin', {
                            method: 'POST',
                            body: JSON.stringify(data),
                            headers: {
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            alert(data.catatan);
                            if (data.aksi) {
                               localStorage.setItem('token', 'masuk');
                               window.location.href = '{{ env('APP_URL') . 'dashboard' }}';
                            }
                        })
                        .catch(error => console.error(error))
            }
        }
    </script>
</body>
</html>