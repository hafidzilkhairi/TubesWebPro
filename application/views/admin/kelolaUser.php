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
	<h1 style="padding: 40px 0;" class="text-center">User Management</h1>
	<button type="button" class="btn btn-success tambahBTN">Tambah User</button>
	<table id="tableKelolaUser" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Id</th>
				<th>Email</th>
				<th>Username</th>
				<th>Status</th>
				<th>Password</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
            <?php 
            $jumlah = 1;
            foreach ($user as $key){
            $status = 'User';
            if($key['status_user']==1) $status='Admin';
            echo "<tr>";
            echo"<td>".$jumlah++."</td>";
                ?>
			<td>
				<?php echo $key['id_user'];?>
			</td>
			<td>
				<?php echo $key['email_user'];?>
			</td>
			<td>
				<?php echo $key['username'];?>
			</td>
			<td>
				<?php echo $status;?>
			</td>
			<td>
				<?php echo $key['password_user'];?>
			</td>
			<td>
				<button class='editBTN btn btn-sm btn-primary'>
					<i class='fa fa-pencil'></i>Edit</button>
				<a href="<?php echo $this->config->base_url(); ?>admin/hapus?id=<?php echo $key['id_user']; ?>">
					<button class='btn btn-sm btn-danger'>
						<i class='fa fa-trash'></i>Hapus</button>
			</td>
			</a>
			<?php
            echo "</tr>";
        } ?>
		</tbody>
	</table>
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
