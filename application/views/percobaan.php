<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

<script type="text/javascript">
  $(document).ready(function(){
    $('#fileuser').change(function(){
      var reader=new FileReader();
      reader.onload=imageIsLoaded;
      reader.readAsDataURL(this.files[0]);
    });
  });

  function imageIsLoaded(e){
    $('#preview').attr('src',e.target.result);
    $('#preview').attr('width','300px');
    $('#preview').attr('height','300px');

  }
</script>
  <?php echo $error;?>
    <div class="container content-wrapper">
        <?php echo form_open_multipart('http://localhost:85/belajar/index.php/controlbarang/uploadimage');?>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Judul</label>
                          <input type="text" class="form-control" id="judul" name="judul" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput1">Harga</label>
                          <input type="number" class="form-control" id="harga" name="harga" required>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect1">Gambar</label>


                          <input type="file" class="form-control" id="fileuser" name="fileuser">
                        </div>
                        <div>
                                <img id="preview" style="object-fit:cover;height: 200px;width: 200px;" src="" class="img-thumbnail rounded" alt="...">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlTextarea1">Deskripsi</label>
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                        </div>
                        <div><button type="submit" class="btn btn-primary float-right">submit</button></div>
                </form>
    </div>
</body>
</html>