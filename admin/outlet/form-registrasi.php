<?php
session_start();
include "../../koneksi.php";
include "../../template/index2.php";
?>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Outlet Baru</h3>
                    </div>
                        <form role="form" method=post action="../../proses.php?action=outletbaru">
                            <div class="form-group card-body">
                                <label>Nama Outlet</label>
                                <input type="text" name=nama class="form-control" placeholder="Nama Outlet">
                            </div>
                            <div class="form-group card-body">
                                <label>No. Telp</label>
                                <input type="text" name=tlp class="form-control" placeholder="Nomor Telphone">
                            </div>
                            <div class="form-group card-body">
                                <label>Alamat</label>
                                <textarea class="form-control" name="alamat" rows="3"></textarea>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary ">Submit</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php include "../../template/footer.php"; ?>