<?php
if($this->session->flashdata('tambahuser')=='berhasil'){
    ?>
    <script>alert('Tambah User Berhasil');</script>
    <?php
}else if($this->session->flashdata('tambahuser')=='gagal'){
    ?>
    <script>alert('Tambah User Gagal, email sudah pernah digunakan');</script>
    <?php
}
?>
<div class="container">
	<h1 style="padding: 40px 0;" class="text-center">Keranjang</h1>
	<table id="tableKelolaUser" border="0" class="table table-striped">
		<thead>
			<tr>
				<th>No.</th>
				<th>Id</th>
				<th>Nama Barang</th>
				<th>Harga</th>
			</tr>
		</thead>
		<tbody>
            <?php 
            $total=0;
            $jumlah = 1;
            foreach ($keranjang as $key){
            echo "<tr>";
            echo"<td>".$jumlah++."</td>";
				?>
			<td>
				<?php echo $key['id_keranjang'];?>
			</td>
			<td>
				<?php 
				$nama = $this->db->query('select nama_barang, harga_barang from barang where id_barang='.$key['id_barang'])->result_array()[0];
				echo $nama['nama_barang'];?>
			</td>
			<td>
				<?php echo $nama['harga_barang']; $total=$total+$nama['harga_barang']; ?>
				<div style="float: right">
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $key["id_keranjang"]; ?>"><i class="fa fa-trash-o"></i></button>
				</div>

			</td>
			</a>
			<div class="modal fade" id="del<?php echo $key['id_keranjang']; ?>" tabindedata="-1" role="dialog" aria-labelledby="edataampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="edataampleModalLabel">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                         <h5 class="modal-title" id="edataampleModalLabel">Ga jadi beli <?php echo $nama['nama_barang'];?> ?</h5>
                      </div>
                      <div class="modal-footer">
                              <form method="POST" action="<?php echo $this->config->base_url().'keranjang/hapusker'; ?>">
                                  <!-- Create hidden input here to post id Users-->
                                  <input style="display:none;" name="id" value="<?php echo $key['id_keranjang'];?>">
                                <button type="submit" name="delete" class="btn btn-danger">YA</a>
                              </form>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>

                      </div>
                    </div>
                  </div>
                </div>
			<?php
            echo "</tr>";
        } ?>
		</tbody>
	</table>
	<div class="container" style="margin-bottom: 100px;">
		<div class="row">
			<div class="col-md-9"></div>
			<div class="col-md-3">
				<table border="0">
					<tr>
						<td><?php if ($total==0) echo "belum melakukan pemesanan"; else echo "Total Tagihan : ".$total ?></td>
					</tr>
					<tr>
						<td colspan="2"></td>
					</tr>
				</table>
			</div>
		</div>
		<button style="float: right; margin-top: 20px;" class="btn btn-success">Pilih Metode Pembayaran</button>
	</div>
	<div id="formulirEdit" style="display:none; position: fixed;width: 100%;height: 100%;top: 0;left: 0;background: rgba(0, 0, 0, 0.7)">
		<form method="POST" action="<?php echo $this->config->base_url(); ?>admin/editUser" style="position: relative;margin: 15% 20%;background: white;border-radius: 10px;padding: 20px;">
			<span onclick="$('#formulirEdit').hide();" style="position: absolute;right: 15px;top: 10px;cursor: pointer;">
				<b>X</b>
			</span>
			<center>
				<h1>Edit User</h1>
			</center>
			<input type="text" name='id' style="display: none;">
			<div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input name='pwd' type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
	<div id="formulirTambah" style="display:none; position: fixed;width: 100%;height: 100%;top: 0;left: 0;background: rgba(0, 0, 0, 0.7)">
		<form method="POST" action="<?php echo $this->config->base_url(); ?>admin/tambahUser" style="position: relative;margin: 8% 20%;background: white;border-radius: 10px;padding: 20px;">
			<span onclick="$('#formulirTambah').hide();" style="position: absolute;right: 15px;top: 10px;cursor: pointer;">
				<b>X</b>
			</span>
			<center>
				<h1>Tambah User</h1>
			</center>
			<input type="text" name='id' style="display: none;">
			<div class="form-group">
				<label for="exampleInputEmail1"><b>Email address</b></label>
				<input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
			<div class="form-group">
				<label for="exampleInputUsername1"><b>Username</b></label>
				<input name='uname' type="text" class="form-control" id="exampleInputUsername1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>
            <label for=""><b>Status User</b></label>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="statusUser" id="exampleRadios1" value="1" checked>
				<label class="form-check-label" for="exampleRadios1">
					Admin
				</label>
			</div>
			<div class="form-check">
				<input class="form-check-input" type="radio" name="statusUser" id="exampleRadios2" value="0">
				<label class="form-check-label" for="exampleRadios2">
					User
				</label>
			</div>
			<div class="form-group">
				<label for="exampleInputPassword1"><b>Password</b></label>
				<input name='pwd' type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
<script>
	// function edit(str){
	//     data = str.parents('tr').data().val();
	//     console.log(data);
	//     $('#formulirEdit').show();
	//     $('#formulirEdit>input[type="email"]').val();
	// }
	table = $('#tableKelolaUser').DataTable();
	$('#tableKelolaUser tbody').on('click', '.editBTN', function () {
		$('#formulirEdit').show();
		e = table.row($(this).parents('tr')).data();
		$('#formulirEdit input[name="id"]').val(e[1]);
		$('#formulirEdit input[name="email"]').val(e[2]);
		$('#formulirEdit input[name="pwd"]').val(e[3]);
	});
	$('.tambahBTN').click(function () {
		if ($('#formulirTambah').css('display') == 'none') {
			$('#formulirTambah').show();
		}
	});

</script>
