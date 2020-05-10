<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">
    <title>DPM Polinema</title>
    <link rel="icon" href="favicon.png" type="image/png">
    <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>js/bootstrap.min.js" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>js/fancybox/jquery.fancybox.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url() ?>css/style.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url() ?>css/custom.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href="<?= base_url() ?>css/font-awesome.css" rel="stylesheet" type="text/css">  -->
    <link href="<?= base_url() ?>css/animate.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id="top_wrapper">
        <div class="container">
            <div class="header_box">
                <!--<div class="logo"><a href="#">Resume</a></div>-->
                <div class="navbar navbar-inverse">
                    <div class="navbar-header">
                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <div id="main-nav" class="collapse navbar-collapse navStyle">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?= base_url() ?>">Home</a></li>
                            <li><a href="<?= base_url(); ?>anggota">Anggota</a></li>
                            <li><a href="">Sejarah</a></li>
                            <li><a href="">Berita</a></li>
                            <li><a href="">Agenda</a></li>
                            <li><a href="<?= base_url(); ?>aspirasi">Aspirasi</a></li>
                            <li><a href="">Kontak</a></li>
                            <?php if ($ud != null) { ?>
                                <li><a href="<?= base_url(); ?>login/logout">Logout</a></li>
                                <li>
                                    <!-- toggle -->
                                    <a data-toggle="modal" data-target="#editpassword" href="">Ganti Passwword</a>
                                    <!-- modal pop up -->
                                    <div class="modal fade" id="editpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                                                </div>
                                                <form action="<?= base_url(); ?>home/handleAllAction" method="post">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="niminput">NIM</label>
                                                            <input type="text" class="form-control" name="nimpassword" id="niminput" value="<?= $ud['nim']; ?>" readonly required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="oldinput">Old Password</label>
                                                            <input type="text" class="form-control" name="oldpassword" id="oldinput" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="newinput">New Password</label>
                                                            <input type="text" class="form-control" name="newpassword" id="newinput" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="confirminput">Confirm Password</label>
                                                            <input type="password" class="form-control" name="confirmpassword" id="confirminput" required>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" name="edit" value="password" class="btn btn-primary">Save changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if ($this->session->flashdata('flash-data')) :  ?>
                                        <div class="modal fade" id="staticmodal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="staticBackdropLabel">Perhatian</h5>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?= $this->session->flashdata('flash-data'); ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </li>
                            <?php } else { ?>
                                <li><a href="<?= base_url(); ?>login">Login</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>