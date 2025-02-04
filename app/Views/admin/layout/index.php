<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="icon" href="<?= base_url() ?>/stisla/img/logo.png" type="image/gif">

    <!-- CSS Libraries -->
    <script src="https://kit.fontawesome.com/0832d2824a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>/stisla/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/stisla/css/components.css">
</head>

<body>

    <div id="app" class="">

        <div class="main-wrapper">

            <!-- Topbar -->
            <?= $this->include('admin/layout/header'); ?>

            <!-- Sidebar -->
            <?= $this->include("admin/layout/sidebar"); ?>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <?= $this->renderSection('admin-content'); ?>
                </section>
            </div>


            <footer class="main-footer">
                <div class="footer-left">
                    Copyright © 2023 Lab Multimedia Sistem Informasi <div class="bullet">
                    </div>
                    <div class="footer-right">
                        V.1.0.0
                    </div>
            </footer>


        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="<?= base_url(); ?>/stisla/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <?= $this->renderSection('admin-script'); ?>
    <script src="<?= base_url(); ?>/stisla/js/scripts.js"></script>
    <script src="<?= base_url(); ?>/stisla/js/modal.js"></script>
    <script src="<?= base_url(); ?>/stisla/js/custom.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- Page Specific JS File -->
</body>

</html>