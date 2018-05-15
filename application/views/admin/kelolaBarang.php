<div class="container">
	<h1 style="text-align:center;">Kelola Barang</h1>
	<a href="<?php echo base_url(); ?>admin/tambahbarang">
		<button class="btn btn-md btn-primary">TAMBAH</button>
	</a>
	<table id="tablebarang" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nama</th>
				<th>Harga</th>
				<th>Deskripsi</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
		foreach ($data as $key):
		?>
			<tr>
				<td>
					<?php echo $key->id_barang; ?>
				</td>
				<td>
					<?php echo $key->nama_barang; ?>
				</td>
				<td>
					<?php echo $key->harga_barang; ?>
				</td>
				<td>
					<?php echo ($key->deskripsi_barang); ?>
				</td>
				<td>
					<button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#edit<?php echo $key->id_barang; ?>">
						<i class="fa fa-pencil"></i>
					</button>
					<button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete<?php echo $key->id_barang; ?>">
						<i class="fa fa-trash"></i>
					</button>
					<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#gambir<?php echo $key->id_barang; ?>">
						<i class="fa fa-camera"></i>
					</button>
					<a href='<?php echo base_url().'barang/'.$key->id_barang; ?>'>
					<button class="btn btn-sm btn-success" data-toggle="modal" data-target="#gambir<?php echo $key->id_barang; ?>">
						<i class="fa fa-eye"></i>
					</button>
					</a>
				</td>
			</tr>
			<div id="gambir<?php echo $key->id_barang; ?>" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"></button>
							<h4 class="modal-title">Edit Gambar</h4>
						</div>
						<?php echo form_open_multipart(base_url()."Admin/gambirbarang?id_barang=$key->id_barang"); ?>
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

			<div id="delete<?php echo $key->id_barang; ?>" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"></button>
							<h4 class="modal-title">Anda Ingin Menghapus?</h4>
							<?php echo form_open_multipart(base_url()."Admin/hapusbarang?id_barang=$key->id_barang"); ?>
							<input type="hidden" name="hapus" class="form-control" value="<?php echo $key->id_barang;?>" id="hapus" required>
						</div>
						<div class="modal-footer">
							<button type="button" data-dismiss="modal" class="btn btn-danger">Tidak</button>
							<input type="submit" class="btn btn-primary" name="hapus" value="Hapus">
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>



			<div id="edit<?php echo $key->id_barang; ?>" class="modal fade" role="dialog">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"></button>
							<h4 class="modal-title">Edit Produk</h4>
						</div>
						<?php echo form_open_multipart(base_url()."Admin/editbarang?id_barang=$key->id_barang"); ?>
						<div class="modal-body">
							<!--                                     <div class="form-group">
										<input name="idbarang" value="<?php echo $key->id_barang;?>">
									</div> -->
							<div class="form-group">
								<label class="control-label" for="judul">Nama</label>
								<input type="text" name="nama" class="form-control" value="<?php echo $key->nama_barang;?>" id="judul" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="harga">Harga</label>
								<input type="text" name="harga" class="form-control" value="<?php echo $key->harga_barang;?>" id="harga" required>
							</div>
							<div class="form-group">
								<label class="control-label" for="deskripsi">Deskripsi</label>
								<textarea style="min-height:200px;" type="text" name="deskripsi" class="form-control" id="deskripsi" required><?php echo $key->deskripsi_barang;?></textarea>
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

	<script type="text/javascript">
		$(document).ready(function () {
			$('#tablebarang').DataTable();
		});

	</script>

	<script type="text/javascript">
		$(document).ready(function () {
			$('#gambir').change(function () {
				var reader = new FileReader();
				reader.onload = imageIsLoaded;
				reader.readAsDataURL(this.files[0]);
			});
		});

		function imageIsLoaded(e) {
			$('#preview').attr('src', e.target.result);
			$('#preview').attr('width', '100px');
			$('#preview').attr('height', '100px');

		}
	</script>
</div>
