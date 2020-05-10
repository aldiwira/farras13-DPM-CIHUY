<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>List Users</h3>
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
                                        Users Data
                                    </p>
                                    <form action="<?= base_url(); ?>admin/users/handleAllAction" method="post">
                                        <table id="datatable-checkbox" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIM</th>
                                                    <th>NAMA</th>
                                                    <th>Password</th>
                                                    <th>Email</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $a = 1;
                                                foreach ($usrs as $s) : ?>
                                                    <tr>
                                                        <td><?= $a; ?></td>
                                                        <td> <?= $s->NIM; ?> </td>
                                                        <td> <?= $s->NAMA; ?> </td>
                                                        <td><?= $s->PASSWORD; ?></td>
                                                        <td><?= $s->EMAIL; ?></td>
                                                        <td>
                                                            <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#deleteUsers">
                                                                delete
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="deleteUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            Menghapus user akan menghapus semua data aspirasi dan saran
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                            <button type="submit" name="delete" value="<?= $s->NIM; ?>" class="btn btn-danger">Save changes</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#editUsers">
                                                                edit
                                                            </button>
                                                            <!-- Modal -->
                                                            <div class="modal fade" id="editUsers" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit user</h5>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <form action="<?= base_url(); ?>admin/users/handleAllAction" method="post">
                                                                            <div class="modal-body">
                                                                                <div class="form-group">
                                                                                    <label for="NIMinput">NIM</label>
                                                                                    <input type="text" class="form-control" name="nim" id="niminput" value="<?= $s->NIM; ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="namainput">Nama</label>
                                                                                    <input type="text" class="form-control" name="nama" id="namainput" value="<?= $s->NAMA; ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="passwordinput">Password</label>
                                                                                    <input type="password" class="form-control" name="password" id="passwordinput" value="<?= $s->PASSWORD; ?>">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="emailinput">Email</label>
                                                                                    <input type="email" class="form-control" name="email" id="emailinput" value="<?= $s->EMAIL; ?>">
                                                                                </div>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                <button type="submit" name="edit" value="userdatas" class="btn btn-primary">Save changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php $a++;
                                                endforeach ?>
                                            </tbody>
                                        </table>
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