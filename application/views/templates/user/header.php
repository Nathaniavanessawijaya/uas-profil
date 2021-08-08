<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>My Profile</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="<?= base_url('assets/user/') ?>https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="<?= base_url('assets/user/') ?>https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="<?= base_url('assets/user/') ?>https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/user/') ?>css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand">
                <span class="d-block d-lg-none">-</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?= base_url(); ?>assets/user/img/nat.jpg"></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url();?>user/index">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url();?>user/about">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url();?>user/education">History Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url();?>user/experience">Pengalaman Kerja</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url();?>user/contact">Contact Me</a></li>
                </ul>
            </div>
        </nav>