  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Peminjaman</h3>
        </div>

        <div class="title_right">
          <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>Form Peminjaman</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <form class="" action="<?= base_url(); ?>Peminjaman/ins_peminjaman" method="post" novalidate>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Peminjam<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="namapeminjam" required="required" />
                  </div>
                </div>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Organisasi<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="namorgan" required="required" />
                  </div>
                </div>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Plot<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input type="date" class="form-control" data-validate-length-range="6" data-validate-words="2" name="Tplot" required="required" />
                  </div>
                </div>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Peminjaman<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input type="date" class="form-control" data-validate-length-range="6" data-validate-words="2" name="Tpinjam" required="required" />
                  </div>
                </div>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Tanggal Pengembalian<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input type="date" class="form-control" data-validate-length-range="6" data-validate-words="2" name="Tbali" required="required" />
                  </div>
                </div>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Keperluan<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="keperluan" required="required" />
                  </div>
                </div>
                <div class="field item form-group">
                  <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Penjamin (KTM)<span class="required">*</span></label>
                  <div class="col-md-6 col-sm-6">
                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="jaminan" required="required" />
                  </div>
                </div>
                <hr>
                <h2>Form Detail</small></h2>
                <hr>
                <div id="field-wrapper">
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                      <select id="barang" name="namabarang[]" class="form-control" required>
                        <option value="">Choose..</option>
                        <?php foreach ($a as $b) : ?>
                          <option value="<?= $b->ALAT_ID; ?>"><?= $b->ALAT_NAMA; ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>
                  <div class="field item form-group">
                    <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Barang<span class="required">*</span></label>
                    <div class="col-md-6 col-sm-6">
                      <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah[]" required="required" />
                    </div>
                    <div class="mt-2">
                      <a type="button" title="Tambah kolom" id="add_button" class="add_button"><i style="font-size: 20px;" class="fa fa-plus"></i></a>
                    </div>
                  </div>
                </div>
                <div class="ln_solid">
                  <div class="form-group">
                    <div class="col-md-6 offset-md-3">
                      <button type='submit' class="btn btn-primary">Submit</button>
                      <button type='reset' class="btn btn-success">Reset</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <div class="clearfix"></div>
      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_title">
              <h2>List Peminjaman</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card-box table-responsive">
                    <p class="text-muted font-13 m-b-30">
                      Data Peminjaman
                    </p>
                    <form action="<?= base_url(); ?>Peminjaman/del_peminjaman" method="POST">
                      <table id="datatable-checkbox" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Check</th>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Nama Organisasi</th>
                            <th>Tanggal Plot</th>
                            <th>Tanggal Peminjaman</th>
                            <th>Tanggal Pengembalian</th>
                            <th>Keperluan</th>
                            <th>Jaminan</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $n = 1;
                          foreach ($pj as $p) : ?>
                            <tr>
                              <td><input type="checkbox" name="pilih[]" id="check-all" value="<?= $p->ID_PEMINJAMAN; ?>"> </td>
                              <td><?= $n; ?></td>
                              <td><?= $p->NAMA_PEMINJAM; ?></td>
                              <td><?= $p->NAMA_ORGANISASI; ?></td>
                              <td><?= $p->TANGGAL_PLOT; ?></td>
                              <td><?= $p->TANGGAL_PEMINJAMAN; ?></td>
                              <td><?= $p->TANGGAL_PENGEMBALIAN; ?></td>
                              <td><?= $p->UNTUK_KEPERLUAN; ?></td>
                              <td><?= $p->JAMINAN; ?></td>
                              <td>
                                <a class='btn btn-success btn-cls update' href='#' data-id="<?= $p->ID_PEMINJAMAN ?>" data-toggle='modal' data-target='#modal-detail'>
                                  <i class="fa fa-pencil"></i></a>
                                <button type="button" class="btn-info">OK</button>
                              </td>
                            </tr>
                          <?php $n++;
                          endforeach ?>
                        </tbody>
                      </table>
                      <button type="submit" class="btn btn-round btn-warning" style="margin-left: 15px">Hapus</button>
                      <button type="button" class="btn btn-round btn-success">Print</button>
                    </form>
                  </div>
                  <div id="modal-detail" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header bg-warning">
                          <h4 class="modal-title">Detail Peminjaman</h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                          <div id="modal" class="form-group">
                            <table id="datatable-checkbox" class="table table-striped table-bordered" style="width:100%">
                              <thead>
                                <tr>
                                  <th>no</th>
                                  <th>alat</th>
                                  <th>jumlah</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>
                                    <p id="noo"> </p>
                                  </td>
                                  <td>
                                    <p id="ALAT_NAMA"> </p>
                                  </td>
                                  <td>
                                    <p id="JUMLAH"> </p>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Oke</button>
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