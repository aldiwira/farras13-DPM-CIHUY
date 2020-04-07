<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Plot Barang</h3>
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
                        <h2>Form Tambah Barang</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="" action="<?= base_url(); ?>" method="post" novalidate>
                            <div id="field-wrapper">
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="namabarang[]" required="required" />
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
                        <h2>Form Tambah Plot</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form class="" action="<?= base_url(); ?>" method="post" novalidate>
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
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Nama Barang<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select id="barang" name="barang" class="form-control" required>
                                        <option value="">Choose..</option>
                                        <?php foreach ($item as $b) : ?>
                                            <option value="<?= $b->ALAT_ID; ?>"><?= $b->ALAT_NAMA; ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Jumlah Barang<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="jumlah" required="required" />
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
                        <h2>List Plot</small></h2>
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
                                        Data Barang
                                    </p>
                                    <form action="<?= base_url(); ?>Peminjaman/del_barangP" method="POST">
                                        <table id="datatable-checkbox" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Check</th>
                                                    <th>No</th>
                                                    <th>Nama Barang</th>
                                                    <th>Nama Organisasi</th>
                                                    <th>Tgl Plot</th>
                                                    <th>Tgl Peminjaman</th>
                                                    <th>Tgl Pengembalian</th>
                                                    <th>Untuk Keperluan</th>
                                                    <th>Jaminan</th>
                                                    <th>Status</th>
                                                    <th>Jumlah</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $n = 1;
                                                foreach ($brg as $g) : ?>
                                                    <tr>
                                                        <td><input type="checkbox" id="check-all" name="pilih[]" value="<?= $g->ID_DETAIL; ?>"> </td>
                                                        <td><?= $n; ?></td>
                                                        <td><?= $g->ALAT_NAMA; ?></td>
                                                        <td><?= $g->NAMA_PEMINJAM; ?></td>
                                                        <td><?= $g->NAMA_ORGANISASI; ?></td>
                                                        <td><?= $g->TANGGAL_PLOT; ?></td>
                                                        <td><?= $g->TANGGAL_PEMINJAMAN; ?></td>
                                                        <td><?= $g->TANGGAL_PENGEMBALIAN; ?></td>
                                                        <td><?= $g->UNTUK_KEPERLUAN; ?></td>
                                                        <td><?= $g->JAMINAN; ?></td>
                                                        <td><?= $g->JUMLAH; ?></td>
                                                        <td><?= $g->STATUS; ?></td>

                                                    </tr>
                                                <?php $n++;
                                                endforeach ?>
                                            </tbody>
                                        </table>
                                        <button type="submit" class="btn btn-round btn-warning" style="margin-left: 15px">Hapus</button>
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