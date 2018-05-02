<?php if(isset($x)){ 
        foreach ($x as $x){
  ?>
<div class="container" style="background-color: rgba(255, 255, 255, 0.3); margin-top: 10px; border-radius: 10px;">
	<section>
      <h3 style="text-align: center">Edit Artikel</h3>
      <form class="ng-pristine ng-valid" action="<?php echo $this->config->base_url(); ?>artikelA/updatedata" method="POST" role="form">
      	<div class="row form-group">
           <div class="col-sm-6">
              <label for="inputName" class="control-label">Judul :</label>
              <input type="text" class="form-control" value="<?php echo $x['judul'] ?>" name="judul" required>
              <input type="text" class="form-control" value="<?php echo $x['id_artikel'] ?>" style="display : none;" name="id" required>
            </div>  
            <div class="col-sm-6">
	            <label for="inputEmail3" class="control-label">Author :</label>
	            <input type="text" class="form-control" value="<?php echo $x['author'] ?>" name="author"  required>
            </div>             
        </div>       
	    <div class="form-group">
	        <label for="inputPassword3" class="control-label">Detail Produk :</label>
	        <textarea rows="5" class="form-control" name="detail" required><?php echo $x['detail'] ?></textarea>
	    </div>  
	    <div class="form-group">
          	<label for="inputPassword3" class="col-sm-12 control-label">Review :</label>
            <textarea rows="5" class="form-control" id="inputPassword3" name="review" required><?php echo $x['review'] ?></textarea>
        </div>
        <div class="form-group">
          	<label for="inputPassword3" class="col-sm-12 control-label">Kelebihan :</label>
            <textarea rows="5" class="form-control" id="inputPassword3" name="kelebihan" required><?php echo $x['kelebihan'] ?></textarea>
        </div>
        <div class="form-group">
          	<label for="inputPassword3" class="col-sm-12 control-label">Kekurangan :</label>
            <textarea rows="5" class="form-control" id="inputPassword3" name="kekurangan" required><?php echo $x['kekurangan'] ?></textarea>
        </div>  
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-primary pull-right " value="Update" style="margin-bottom: 30px;">
        </div>
        </form>   
    </section>
</div>

<?php }} else echo "<script>alert('data tidak ada')</script>";  ?> 