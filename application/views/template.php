<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ghozali Trans - Sewa & Carter Kendaraan Bus</title>
    <meta name="description" content="Ghozali Trans - Sewa & Carter Kendaraan Bus">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?=base_url()?>assets/scss/style.css">
    <link href="<?=base_url()?>assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="<?=base_url()?>assets/images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="<?=base_url()?>assets/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>

                    <h3 class="menu-title">Data User</h3><!-- /.menu-title -->
                    <li><a href="ui-buttons.html">Penyewa</a></li>
                    <li><a href="ui-badges.html">Sopir</a></li>
                    <li><a href="ui-tabs.html">Pemilik</a></li>

                    <h3 class="menu-title">Data Transaksi</h3><!-- /.menu-title -->
                    <li><a href="<?=base_url('admin/pemesanan')?>">Pemesanan</a></li>
                    <li><a href="ui-badges.html">Pembayaran</a></li>
                    <li><a href="ui-tabs.html">Surat Tugas</a></li>

                    <h3 class="menu-title">Data Keuangan</h3><!-- /.menu-title -->
                    <li><a href="<?=base_url('admin/transaksi_keuangan')?>">Transaksi Keuangan</a></li>
                    <li><a href="<?=base_url('admin/lap_keuangan')?>">Laporan Keuangan</a></li>

                    <h3 class="menu-title">Lain-Lain</h3><!-- /.menu-title -->
                    <li><a href="ui-buttons.html">Data BUS</a></li>
                    <li><a href="<?=base_url('admin/perawatan')?>">Perawatan</a></li>
                    <li><a href="ui-badges.html">Paket</a></li>
                    <li><a href="ui-badges.html">Jadwal</a></li>
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                   
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="<?=base_url()?>assets/images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1><?=$header['titlepage'] != null ? $header['titlepage'] : ''?></h1>
                    </div>
                </div>
            </div>
            <!--<div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>-->
        </div>

        <div class="content mt-3">
            <?=$contents?>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="<?=base_url()?>assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="<?=base_url()?>assets/js/plugins.js"></script>
<script src="<?=base_url()?>assets/js/main.js"></script>


<script src="<?=base_url()?>assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="<?=base_url()?>assets/js/dashboard.js"></script>
<script src="<?=base_url()?>assets/js/widgets.js"></script>
<script src="<?=base_url()?>assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="<?=base_url()?>assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="<?=base_url()?>assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
    ( function ( $ ) {
        "use strict";

        jQuery( '#vmap' ).vectorMap( {
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: [ '#1de9b6', '#03a9f5' ],
            normalizeFunction: 'polynomial'
        } );
    } )( jQuery );
</script>

</body>
</html>
