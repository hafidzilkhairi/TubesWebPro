<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">


    <title>Document</title>
    <a href="<?php echo base_url(); ?>controlbarang/uploadimage"><button class="btn btn-md btn-primary">TAMBAH</button></a>
    <table id="tablebarang" class="table table-striped table-bordered">
  <thead>
	<tr>
		<th>Id Barang</th>
		<th>Judul</th>
		<th>Harga</th>
		<th>Gambar</th>
		<th>Deskripsi</th>
    <th>Action</th>
	</tr>
  </thead>
  <tbody>
	<?php
	foreach ($data as $key):
	?>
	<tr>
		<td><?php echo $key->idbarang; ?></td>
		<td><?php echo $key->judul; ?></td>
		<td><?php echo $key->harga; ?></td>
		<td><img src=<?php echo "'http://localhost:85/belajar/image/".$key->idbarang.".jpg'"; ?> width='40px' height='40px'></td>
		<td><?php echo $key->deskripsi; ?></td>
    <td>
       <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $key->idbarang; ?>"><i class="glyphicon glyphicon-pencil"></i></button>
        <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $key->idbarang; ?>"><i class="glyphicon glyphicon-trash"></i></button>
        <button class="btn btn-sm btn-success" data-toggle="modal" data-target="#gambir<?php echo $key->idbarang; ?>"><i class="glyphicon glyphicon-camera"></i></button>
          </td>

      
    </td>
	</tr>
                  <div id="gambir<?php echo $key->idbarang; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Gambar</h4>
                                </div>
                                <?php echo form_open_multipart("http://localhost:85/belajar/index.php/controlbarang/editproduk?idbarang='$key->idbarang'"); ?>
                                <div class="modal-body">
                                 <div class="form-group">
                                  <label for="gambar">Gambar</label>
                                    <input type="file" class="form-control" id="gambir" name="gambir">
                                 </div>
                                 <div>
                                  <img id="preview" style="object-fit:cover;height: 100px;width: 100px;" src="" class="img-thumbnail rounded" alt="...">
                                </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="gambir" value="Edit">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>

                      <div id="delete<?php echo $key->idbarang; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Anda Ingin Menghapus?</h4>
                                    <?php echo form_open("http://localhost:85/belajar/index.php/controlbarang/hapus?idbarang='$key->idbarang'"); ?>
                                    <input type="hidden" name="hapus" class="form-control" value="<?php echo $key->idbarang;?>" id="hapus" required>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
                                    <input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>



                    <div id="edit<?php echo $key->idbarang; ?>" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"></button>
                                    <h4 class="modal-title">Edit Produk</h4>
                                </div>
                                <?php echo form_open("http://localhost:85/belajar/index.php/controlbarang/edit?idbarang='$key->idbarang'"); ?>
                                <div class="modal-body">
<!--                                     <div class="form-group">
                                      <input name="idbarang" value="<?php echo $key->idbarang;?>">
                                    </div> -->
                                    <div class="form-group">
                                        <label class="control-label" for="judul">Judul</label>
                                        <input type="text" name="judul" class="form-control" value="<?php echo $key->judul;?>" id="judul" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="harga">Harga</label>
                                        <input type="text" name="harga" class="form-control" value="<?php echo $key->harga;?>" id="harga" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label" for="deskripsi">Deskripsi</label>
                                        <input type="text" name="deskripsi" class="form-control" value="<?php echo $key->deskripsi;?>" id="deskripsi" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" data-dismiss="modal" class="btn btn-danger">Close</button>
                                    <input type="submit" class="btn btn-primary" name="edit" value="Edit">
                                </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>
                    </div>


	<?php 
		endforeach;
	 ?>
   </tbody>
	</table>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">
  $(document).ready(function () {
      $('#tablebarang').DataTable();
  } );
  </script>

 <script type="text/javascript">
  $(document).ready(function(){
    $('#gambir').change(function(){
      var reader=new FileReader();
      reader.onload=imageIsLoaded;
      reader.readAsDataURL(this.files[0]);
    });
  });

  function imageIsLoaded(e){
    $('#preview').attr('src',e.target.result);
    $('#preview').attr('width','100px');
    $('#preview').attr('height','100px');

  }
</script>  







</body>
</html>