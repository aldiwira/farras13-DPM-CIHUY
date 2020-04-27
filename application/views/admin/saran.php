  <div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Aspirasi</h3>
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
              <h2>Kotak Saran</small></h2>
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
                      Data Saran
                    </p>
                    <form action="<?= base_url(); ?>admin/saran/handleAllAction" method="post">
                      <table id="datatable-checkbox" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                          <tr>
                            <th>Check</th>
                            <th>No</th>
                            <th>NAMA</th>
                            <th>NIM</th>
                            <th>Saran</th>
                            <th>Tanggal</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $a = 1;
                          foreach ($srn as $s) : ?>
                            <tr>
                              <td><input type="checkbox" id="check-all" name="pilih[]" value="<?= $s->SARAN_ID; ?>"> </td>
                              <td><?= $a; ?></td>
                              <td> <?= $s->NAMA; ?> </td>
                              <td> <?= $s->NIM; ?> </td>
                              <td><?= $s->SARAN; ?></td>
                              <td><?= $s->DATE; ?></td>
                            </tr>
                          <?php $a++;
                          endforeach ?>
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