<?php 
if (isset($_POST['cari'])) {
  $cari = $_POST['cari'];
} else {
  $cari = "";
}
?>
 <div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <h4>
          <i class="glyphicon glyphicon-user"></i> Data Barang
          <div class="pull-right btn-tambah">
            <form class="form-inline" method="POST" action="index.php">

              <input type="text" name="nt" placeholder="cari ...">
              <input type="submit" name="submit" value="cari">


              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="glyphicon glyphicon-search"></i>
                  </div>
                  <input type="text" class="form-control" name="cari" placeholder="Cari nama barang ..." autocomplete="off" value="<?php echo $cari; ?>">
                </div>
              </div>
              <a class="btn btn-info" href="?page=tambah">
                <i class="glyphicon glyphicon-plus"></i> Tambah
              </a>
            </form>
          </div>
          
        </h4>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Data Barang</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table id="dataTables-example" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID Barang</th>
                  <th>Kategori</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Supplier</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                // Tampilkan data dari Database
                $sql = "SELECT * FROM barang ORDER BY id_barang ASC";
                $tampil =mysqli_query($link,$sql);
                $no=1;
                while ($r=mysqli_fetch_array($tampil)){
                  ?>
                  <tr>
                    <td><?php echo $r['id_barang']; ?></td> 
                    <td><?php echo $r['kategori']; ?></td> 
                    <td><?php echo $r['nama_barang']; ?></td> 
                    <td><?php echo $r['harga']; ?></td> 
                    <td><?php echo $r['stok']; ?></td> 
                    <td><?php echo $r['supplier']; ?></td> 
                    <td><a data-toggle="modal" href="edit_agen.php?kd_agen=<?php echo $r['kd_agen']?>" class="biasa" id="edit"><span class="glyphicon glyphicon-edit" title="Edit"></span></a>
                      <a href="#" class="biasa hapus" style="margin-left: 10px;"><span class="glyphicon glyphicon-trash" title="Hapus"></span></a>
                    </td>
                    </tr><?php $no++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- /.panel -->
        </div> <!-- /.col -->
        </div> <!-- /.row -->