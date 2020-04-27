<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin</title>

  <!-- Bootstrap -->
  <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
  <link href="<?php echo base_url(); ?>assets/css/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="<?php echo base_url(); ?>assets/css/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="<?php echo base_url(); ?>assets/css/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="<?php echo base_url(); ?>assets/css/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- Datatables -->

  <link href="<?php echo base_url(); ?>assets/css/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="<?php echo base_url(); ?>assets/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>DPM JAYA</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>DPM</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">

                <li><a><i class="fa fa-edit"></i> Aspirasi Data <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url() ?>admin/kategori">Category</a></li>
                    <li><a href="<?php echo base_url() ?>admin/aspirasi">Aspirasi</a></li>
                    <li><a href="<?php echo base_url() ?>admin/saran">Kotak Saran</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Histori Data <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url() ?>Histori/aspirasi">Histori Aspirasi</a></li>
                    <li><a href="<?php echo base_url() ?>Histori/saran">Histori Saran</a>
                    <li><a href="<?php echo base_url() ?>Histori/log">Log</a></li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> Publikasi Data <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu">
                    <li><a href="<?php echo base_url() ?>admin/galeri">Tambah Galeri</a></li>
                    <li><a href="<?php echo base_url() ?>admin/peminjaman">Tambah Barang Peminjaman</a></li>
                    <li><a href="<?php echo base_url() ?>admin/peminjaman/listPeminjaman">Tambah Peminjaman</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">
        <div class="nav_menu">
          <div class="nav toggle">
            <a id="menu_toggle"><i class="fa fa-bars"></i></a>
          </div>
          <nav class="nav navbar-nav">
            <ul class=" navbar-right">
              <li class="nav-item dropdown open" style="padding-left: 15px;">
                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                  <img src="images/img.jpg" alt="">DPM
                </a>
                <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                </div>
              </li>
              <li role="presentation" class="nav-item dropdown open">
                <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <?php
      $this->load->view($main_view);

      ?>
      <!-- /page content -->

      <!-- footer content -->
      <footer>
        <div class="pull-right">
          @Copyright
        </div>
        <div class="clearfix"></div>
      </footer>
      <!-- /footer content -->
    </div>
  </div>

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/css/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assets/css/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="<?php echo base_url(); ?>assets/css/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?php echo base_url(); ?>assets/css/vendors/nprogress/nprogress.js"></script>
  <!-- iCheck -->
  <script src="<?php echo base_url(); ?>assets/css/vendors/iCheck/icheck.min.js"></script>
  <!-- Datatables -->
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/jszip/dist/jszip.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/pdfmake/build/pdfmake.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/css/vendors/pdfmake/build/vfs_fonts.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="<?php echo base_url(); ?>assets/js/custom.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      var x = 1;
      var fieldHTML = '<div id="row' + x + '"><div class="field item form-group"><label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label><div class="col-md-6 col-sm-6"><select id="barang" name="namabarang[]" class="form-control" required><option value="">Choose..</option><?php foreach ($item as $b) : ?><option value="<?= $b->ALAT_ID; ?>"><?= $b->ALAT_NAMA; ?></option><?php endforeach ?></select></div></div><div class="field item form-group"><label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Barang<span class="required">*</span></label><div class="col-md-6 col-sm-6"><input class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah[]" required="required" /></div><div class="mt-2"><a type="button" title="Hapus kolom" id="' + x + '" class="del_button"><i style="font-size: 20px;" class="fa fa-minus"></i></a></div></div></div>';
      $("#add_button").click(function() {
        x++;
        $("#field-wrapper").append(fieldHTML);
      });
      $(document).on("click", ".del_button", function() {
        var button_id = $(this).attr("id");
        $("#row" + button_id + "").remove();
      });
    });
  </script>
  <script type="text/javascript">
    $(document).on('click', '.update', function() {
      var ids = $(this).data('id');
      //menggunakan fungsi ajax untuk pengambilan data
      $.ajax({
        url: '<?php echo base_url(); ?>peminjaman/modal',
        type: 'POST',
        data: {
          ids: ids
        },
        data_type: 'json',
        success: function(data) {
          $('#modal-detail').modal('show');
          $('#noo').text('' + data.noo);
          $('#ALAT_NAMA').text('' + data.ALAT_NAMA);
          $('#JUMLAH').text('' + data.JUMLAH);
          alert(data.JUMLAH);
        }
      });

    });
  </script>

</body>

</html>