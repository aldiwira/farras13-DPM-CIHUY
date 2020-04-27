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
                    <h2>Log</small></h2>
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
                            Data Log
                          </p>
                          <table id="datatable-checkbox" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <th>Check</th>
                                <th>No</th>
                                <th>Admin</th>
                                <th>Tanggal</th>
                                <th>ID Terhapus</th>
                              </tr>
                            </thead>  
                            <tbody>
                              <?php $n=1; foreach ($log as $k) :?>
                              <tr>
                                <td><input type="checkbox" id="check-all" > </td>
                                <td>1</td>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                              </tr>
                             <?php $n++; endforeach?>
                            </tbody>
                          </table>
                          <button type="button" class="btn btn-round btn-warning" style="margin-left: 15px">Hapus</button>
                        </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>