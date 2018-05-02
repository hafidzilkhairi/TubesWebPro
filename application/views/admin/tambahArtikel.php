<div class="container" style="background-color: rgba(255, 255, 255, 0.3); margin-top: 10px; border-radius: 10px;">
      <?php echo form_open_multipart($this->config->base_url()."admin/tambahArtikel");?>
        <div><h3 style="text-align: center; margin-bottom: 20px;">Input Artikel</h3></div>
      	<div class="row form-group">
           <div class="col-sm-6">
              <label for="inputName" class="control-label">Judul :</label>
              <input type="text" class="form-control" name="judul" required>
            </div>  
            <div class="col-sm-6">
	            <label class="control-label">Author :</label>
	            <input type="text" name="author" class="form-control" value="<?php $this->db->where('id_user',$_SESSION['userAdminId']); echo $this->db->get('user','username')->result_array()[0]['username']; ?>" required disabled>
            </div>             
        </div>       
	    <div class="form-group">
	        <label for="inputPassword3" class="control-label">Deskripsi Produk :</label>
	        <textarea rows="5" class="form-control" name="deskripsi" required></textarea>
	    </div> 
        <div class="form-group">
          <input type="file" name="userfile" id="preview_gambar"><br><br>
          <img src="#" id="gambar_nodin" width="400" alt="Preview Gambar" style="display: none;">
        </div>  
        <div class="form-group">
          <input type="submit" name="submitTambahArtikel" class="btn btn-primary pull-right" value="Submit">
        </div>
      </form>   
</div>
<script type="text/javascript">
  function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#gambar_nodin').show();
          $('#gambar_nodin').attr('src', e.target.result);
      }
 
      reader.readAsDataURL(input.files[0]);
      }
  }
  $("input").click(function(){
  $("#preview_gambar").change(function(){
      bacaGambar(this);
  })
  });
</script>