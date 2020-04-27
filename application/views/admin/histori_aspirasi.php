  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Histori</h3>
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
              <h2>Histori Aspirasi</small></h2>
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
                      Data Histori Aspirasi
                    </p>
                    <form action="<?= base_url(); ?>Histori/handleAllAction" method="post">
                      <table id="datatable-checkbox" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Check</th>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Kategori</th>
                            <th>OKI</th>
                            <th>Konten</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $n = 1;
                          foreach ($aspirasi as $key) { ?>
                            <tr>
                              <td><input type="checkbox" name="pilih[]" value="<?= $key->ASP_ID; ?>"> </td>
                              <td><?= $n ?></td>
                              <td><?= $key->NIM ?></td>
                              <td><?= $key->KAT_NAMA ?></td>
                              <td><?= $key->OKI_NAMA ?></td>
                              <td><?= $key->KONTEN ?></td>
                              <td><?= $key->DATE ?></td>
                              <td>
                                <?php if ($key->STATUS == 0) {
                                  echo "Belum di print";
                                } else if ($key->STATUS == 1) {
                                  echo "Sudah di print";
                                }
                                ?>
                              </td>
                            </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                      <button type="submit" name="request" value="delete" class="btn btn-round btn-warning" style="margin-left: 15px">Hapus</button>
                      <button type="submit" name="request" value="print" class="btn btn-round btn-success">Print</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>