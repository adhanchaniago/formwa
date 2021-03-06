<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title; ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/modules/fontawesome/css/all.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/components.css">
</head>

<body>
    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div
                        class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="login-brand">
                            <!-- <img src="<?= base_url(); ?>assets/img/stisla-fill.svg" alt="logo" width="100"
                                class="shadow-light rounded-circle"> -->
                        </div>

                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>

                            <div class="card-body">
                                <?php if($this->session->flashdata('error')):?>
                                <div class="alert alert-danger alert-dismissible show fade">
                                    <div class="alert-body">
                                        <button class="close" data-dismiss="alert">
                                            <span>&times;</span>
                                        </button>
                                        <div class="alert-title">Error</div>
                                        <?= $this->session->flashdata('error');?>
                                    </div>
                                </div>
                                <?php endif;?>
                                <form method="POST" action="<?= base_url('auth/register/process'); ?>"
                                    class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="fullname">Nama Lengkap</label>
                                        <input id="fullname" type="text" class="form-control" name="fullname"
                                            tabindex="1" required autofocus>
                                        <div class="invalid-feedback">
                                            Silahkan isi nama lengkap dengan benar
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input id="email" type="email" class="form-control" name="email" tabindex="1"
                                            required>
                                        <div class="invalid-feedback">
                                            Silahkan isi email dengan benar
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="no_whatsapp">Nomor Whatsapp</label>
                                        <input id="no_whatsapp" type="text" class="form-control" name="contact"
                                            tabindex="1" required>
                                        <div class="invalid-feedback">
                                            Silahkan isi nomor whatsapp dengan benar
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input id="username" type="text" class="form-control" name="username"
                                            tabindex="1" required>
                                        <span style="font-size:10px;color:blue">Minimal username 6 karakter</span>
                                        <div class="invalid-feedback">
                                            Silahkan isi username dengan benar
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password"
                                            tabindex="2" required>
                                        <span style="font-size:10px;color:blue">Minimal password 6 karakter</span>
                                        <div class="invalid-feedback">
                                            Silahkan isi password dengan benar
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Buat Akun
                                        </button>
                                    </div>
                                </form>

                            </div>
                        </div>
                        <div class="mt-5 text-muted text-center">
                            Sudah memiliki akun ? <a href="<?= base_url(); ?>auth/login">Login</a>
                        </div>
                        <div class="simple-footer">
                            Copyright &copy; FormWa 2020
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- General JS Scripts -->
    <script src="<?= base_url(); ?>assets/modules/jquery.min.js"></script>
    <script src="<?= base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/stisla.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url(); ?>assets/js/scripts.js"></script>
    <script src="<?= base_url(); ?>assets/js/custom.js"></script>
</body>

</html>