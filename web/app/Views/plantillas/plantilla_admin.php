<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>Proyecto - 8C</title>
    <link rel="stylesheet" href="<?= base_url("recursos/css/adminlte.css")?>">
    <link rel="stylesheet" href="<?= base_url("recursos/css/all.css")?>">
    <script type="text/javascript" src="<?= base_url("recursos/js/adminlte.js")?>"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url("recursos/plugins/fontawesome-free/css/all.min.css")?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url("recursos/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url("recursos/plugins/icheck-bootstrap/icheck-bootstrap.min.css")?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url("recursos/plugins/jqvmap/jqvmap.min.css")?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url("recursos/css/adminlte.min.css")?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?= base_url("recursos/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url("recursos/plugins/daterangepicker/daterangepicker.css")?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url("recursos/plugins/summernote/summernote-bs4.min.css")?>">
</head>
<body>
    <?= $this->renderSection('content') ?>

    <!-- jQuery -->
    <script src="<?= base_url("recursos/plugins/jquery/jquery.min.js");?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?= base_url("recursos/plugins/jquery-ui/jquery-ui.min.js");?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url("recursos/plugins/bootstrap/js/bootstrap.bundle.min.js");?>"></script>
    <!-- ChartJS -->
    <script src="<?= base_url("recursos/plugins/chart.js/Chart.min.js");?>"></script>
    <!-- Sparkline -->
    <script src="<?= base_url("recursos/plugins/sparklines/sparkline.js")?>"></script>
    <!-- JQVMap -->
    <script src="<?= base_url("recursos/plugins/jqvmap/jquery.vmap.min.js")?>"></script>
    <script src="<?= base_url("recursos/plugins/jqvmap/maps/jquery.vmap.usa.js")?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?= base_url("recursos/plugins/jquery-knob/jquery.knob.min.js")?>"></script>
    <!-- daterangepicker -->
    <script src="<?= base_url("recursos/plugins/moment/moment.min.js")?>"></script>
    <script src="<?= base_url("recursos/plugins/daterangepicker/daterangepicker.js")?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url("recursos/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")?>"></script>
    <!-- Summernote -->
    <script src="<?= base_url("recursos/plugins/summernote/summernote-bs4.min.js")?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?= base_url("recursos/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")?>"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url("recursos/js/adminlte.js")?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url("recursos/js/pages/dashboard.j")?>"></script>
</body>
</html>