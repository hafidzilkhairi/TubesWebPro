<div class="container" style="background-color: rgba(255, 255, 255, 0.3); margin-top: 10px; border-radius: 10px;">
      <?php
        echo form_open_multipart('artikelA/inputdata');
      ?>
        <div><h3 style="text-align: center; margin-bottom: 20px;">Input Artikel</h3></div>
      	<div class="row form-group">
           <div class="col-sm-6">
              <label for="inputName" class="control-label">Judul :</label>
              <input type="text" class="form-control" name="judul" required>
            </div>  
            <div class="col-sm-6">
	            <label class="control-label">Author :</label>
	            <input type="text" name="author" class="form-control" required>
            </div>             
        </div>       
	    <div class="form-group">
	        <label for="inputPassword3" class="control-label">Detail Produk :</label>
	        <textarea rows="5" class="form-control" name="detail" required></textarea>
	    </div>  
	    <div class="form-group">
          	<label for="inputPassword3" class="col-sm-12 control-label">Review :</label>
            <textarea rows="5" class="form-control" id="inputPassword3" name="review" required></textarea>
        </div>
        <div class="form-group">
          	<label for="inputPassword3" class="col-sm-12 control-label">Kelebihan :</label>
            <textarea rows="5" class="form-control" id="inputPassword3" name="kelebihan" required></textarea>
        </div>
        <div class="form-group">
          	<label for="inputPassword3" class="col-sm-12 control-label">Kekurangan :</label>
            <textarea rows="5" class="form-control" id="inputPassword3" name="kekurangan" required></textarea>
        </div>
        <div class="form-group">
          <input type="file" name="berkas" id="preview_gambar" required><br><br>
          <img src="#" id="gambar" width="400" alt="Preview Gambar" style="display: none;">
        </div>  
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
        </div>
<<<<<<< HEAD
      </form>   
=======
        <div class="form-group" style="color: red;">
          <?php if (isset($result)) echo $result; ?>
        </div>
        <?php echo form_close(); ?>   
>>>>>>> 1d2106d4df55a24692603bff1c9a1ce934fef2d5
</div>
<script type="text/javascript">
  function bacaGambar(input) {
   if (input.files && input.files[0]) {
      var reader = new FileReader();
 
      reader.onload = function (e) {
          $('#gambar').show();
          $('#gambar').attr('src', e.target.result);
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
<style>
  form {
    margin-top: 20px; padding: 30px; padding-bottom: 50px;
  }
</style>