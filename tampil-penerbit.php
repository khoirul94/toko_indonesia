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
          <i class="glyphicon glyphicon-user"></i> Data Penerbit
          <div class="pull-right btn-tambah">
            <form class="form-inline" method="POST" action="index.php">
              <table>
                <tr>
                  <td>&nbsp;</td>
                  <td><label for="tcari"></label>
                    <input type="text" class="form-control" name="tcari" id="tcari" placeholder="Cari nama penerbit ..." value="<?php echo $cari; ?>">
                    <td><input class="btn btn-info"  type="submit" name="button" id="button" value="Cari"></td>
                  </tr>
                </table>
            </form>
          </div>
          
        </h4>
      </div>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Data Suplier</h3>
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table id="dataTables-example" class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>ID Penerbit</th>
                  <th>Nama Penerbit</th>
                  <th>Negara</th>
                  <th>Kota</th>
                </tr>
              </thead>
              <tbody>
                


                <?php 
                if(isset($_POST['button'])){
                  $sql = "select * from penerbit where nama_penerbit Like '%".$_POST['tcari']."%'";
                  $tampil=mysqli_query($link,$sql);
                }else{
                $sql = "SELECT * FROM penerbit ORDER BY id_penerbit ASC";
                $tampil =mysqli_query($link,$sql);
                }
                /*---------------------------------*/
                while($r=mysqli_fetch_array($tampil)){
                  $no=1;
                ?>





                  <tr>
                    <td><?php echo $r['id_penerbit']; ?></td> 
                    <td><?php echo $r['nama_penerbit']; ?></td> 
                    <td><?php echo $r['negara']; ?></td> 
                    <td><?php echo $r['kota']; ?></td> 
                    </tr><?php $no++; } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div> <!-- /.panel -->
        </div> <!-- /.col -->
        </div> <!-- /.row -->