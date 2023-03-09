<?php 


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="icon" type="image/png" href="" />
    <title>Test</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

    <!-- Fonts and icons -->
    <script src="core/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
    WebFont.load({
        google: {
            "families": ["Lato:300,400,700,900"]
        },
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                "simple-line-icons"
            ],
            urls: ['core/assets/css/fonts.min.css']
        },
        active: function() {
            sessionStorage.fonts = true;
        }
    });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="core/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="core/assets/css/atlantis.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="core/assets/css/demo.css">
</head>

<body data-background-color="dark">
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark2">

                <a href="/dashboard" class="logo">
                    <p style="color:white;" class="navbar-brand">MythicalSystems</p>
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="dark">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="https://cdn.mythicalnodes.xyz/minecraft.jpg" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img
                                                    src="https://cdn.mythicalnodes.xyz/minecraft.jpg"
                                                    alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>NaysKutzu</h4>
                                                <p class="text-muted">admin@nayskutzu.xyz</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/regen">Reset Password</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="/logout">Logout</a>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2" data-background-color="dark2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="https://cdn.mythicalnodes.xyz/minecraft.jpg" alt="..."
                                class="avatar-img rounded-circle">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    NaysKutzu
                                    <span class="user-level">10</span>

                                </span>
                            </a>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a href="javascript:void(0)" class="collapsed">
                                <i class="fas fa-home"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/servers/new" class="collapsed">
                                <i class="fas fa-plus-square"></i>
                                <p>New Server</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/servers" class="collapsed">
                                <i class="fas fa-server"></i>
                                <p>View Servers</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/store" class="collapsed">
                                <i class="fas fa-shopping-bag"></i>
                                <p>Shop</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/afk" class="collapsed">
                                <i class="fas fa-coins"></i>
                                <p>AFK Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/redeem" class="collapsed">
                                <i class="fas fa-qrcode"></i>
                                <p>Redeem Coupon Code</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/regen" class="collapsed">
                                <i class="fas fa-redo-alt"></i>
                                <p>Regenerate Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<%= settings.pterodactyl.domain %>" class="collapsed">
                                <i class="fas fa-external-link-square-alt"></i>
                                <p>Pterodactyl Panel</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin" class="collapsed">
                                <i class="fas fa-user-cog"></i>
                                <p>Admin</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->
        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="mt-2 mb-4">
                        <h2 class="text-white pb-2">Welcome back, NaysKutzu!</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-primary card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-memory"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">RAM</p>
                                                <h4 class="card-title">2048MB</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-info card-round">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fa fa-save"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">DISK</p>
                                                <h4 class="card-title">2048MB</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-success card-round">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-microchip"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">CPU</p>
                                                <h4 class="card-title">100%</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="card card-stats card-secondary card-round">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="fas fa-server"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 col-stats">
                                            <div class="numbers">
                                                <p class="card-category">Servers</p>
                                                <h4 class="card-title">1</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Servers</div>
                                        <div class="card-tools">
                                            <a href="/servers/new"
                                                class="btn btn-info btn-border btn-round btn-sm mr-2">
                                                New Server
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th> Server Name </th>
                                                    <th> RAM </th>
                                                    <th> DISK </th>
                                                    <th> CPU </th>
                                                    <th> Manage </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Daddy</td>
                                                    <td>2048MB</td>
                                                    <td>2048MB</td>
                                                    <td>100%</td>
                                                    <td>
                                                        <a href="/servers/edit?id=<%= pterodactyl.relationships.servers.data[i].attributes.id %>"
                                                            class="btn btn-success">Edit</a>&nbsp;&nbsp;&nbsp;<a
                                                            href="/delete?id=<%= pterodactyl.relationships.servers.data[i].attributes.id %>"
                                                            class="btn btn-danger">Delete</a>&nbsp;&nbsp;&nbsp;<a
                                                            href="<%= settings.pterodactyl.domain %>/server/<%= pterodactyl.relationships.servers.data[i].attributes.identifier %>"
                                                            target="_blank" rel="noopener noreferrer"
                                                            class="btn btn-success">Link</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-head-row">
                                        <div class="card-title">Login Info</div>
                                        <div class="card-tools">
                                            <a href="<%= settings.pterodactyl.domain %>"
                                                class="btn btn-info btn-border btn-round btn-sm mr-2">
                                                Panel Link
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div
                                        class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                        <div class="text-md-center text-xl-left">
                                            <h6 class="mb-1">Username:</h6>
                                            <p class="text-muted mb-0">NaysKutzu</p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-gray-dark d-flex d-md-block d-xl-flex flex-row py-3 px-4 px-md-3 px-xl-4 rounded mt-3">
                                        <div class="text-md-center text-xl-left">
                                            <h6 class="mb-1">Email:</h6>
                                            <p class="text-muted mb-0">admin@nayskutzu.xyz</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

<!-- End Custom template -->
</div>
<!--   Core JS Files   -->
<script src="core/assets/js/core/jquery.3.2.1.min.js"></script>
<script src="core/assets/js/core/popper.min.js"></script>
<script src="core/assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="core/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="core/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="core/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>


<!-- Chart JS -->
<script src="core/assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="core/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="core/assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="core/assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="core/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="core/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="core/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Sweet Alert -->
<script src="core/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Atlantis JS -->
<script src="core/assets/js/atlantis.min.js"></script>


<script>
$('#lineChart').sparkline([102, 109, 120, 99, 110, 105, 115], {
    type: 'line',
    height: '70',
    width: '100%',
    lineWidth: '2',
    lineColor: 'rgba(255, 255, 255, .5)',
    fillColor: 'rgba(255, 255, 255, .15)'
});

$('#lineChart2').sparkline([99, 125, 122, 105, 110, 124, 115], {
    type: 'line',
    height: '70',
    width: '100%',
    lineWidth: '2',
    lineColor: 'rgba(255, 255, 255, .5)',
    fillColor: 'rgba(255, 255, 255, .15)'
});

$('#lineChart3').sparkline([105, 103, 123, 100, 95, 105, 115], {
    type: 'line',
    height: '70',
    width: '100%',
    lineWidth: '2',
    lineColor: 'rgba(255, 255, 255, .5)',
    fillColor: 'rgba(255, 255, 255, .15)'
});
</script>
</body>

</html>