<html lang="en">
  <body>
    <div class="container" style="margin-top: 20px;" style="background-color: rgba(255, 255, 255, 3);">
      <div class="row">
          <div class="col-lg-12 ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6"><h2 style="margin-bottom: 50px;">Daftar Artikel</h2></div>
            <div class="col-md-6"><a href="<?php echo $this->config->base_url(); ?>artikelA/input" style="float: right; margin-top: 25px;"><button class="btn btn-success">Input Artikel</button></a></div>
          </div>
          <table id="oi" class="table table-striped table-responsive-md" border="0" cellspacing="0" style="width:100%; background-color: rgba(255, 255, 255, 3); border-radius: 5px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID artikel</th>
                    <th>Judul</th>
                    <th>Author</th>
                    <th>Tanggal</th>
                    <th style="tedatat-align: center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                /* Insert Your Query to get Data from database*/  
                if (isset($x)) {
                  $no=0;
                  foreach ($x as $data) {
                    $no++;
                ?>
                    <!-- Show data Here -->
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data["id_artikel"]; ?></td>
                    <th><?php echo $data["judul"] ?></th>
                    <td><?php echo $data["author"]; ?></td>
                    <td><?php echo $data["tgl"]; ?></td>
                    <td><center>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $data["id_artikel"]; ?>"><i class="fa fa-trash-o"></i></button>
                        <a href="<?php echo $this->config->base_url(); ?>artikelA/update?id=<?php echo $data["id_artikel"]; ?>"><button type="button" class="btn btn-info" ><i class="fa fa-pencil"></i></button></center></a>
                    </td>
                </tr>
                  <div class="modal fade" id="del<?php echo $data['id_artikel']; ?>" tabindedata="-1" role="dialog" aria-labelledby="edataampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="edataampleModalLabel">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                         <h5 class="modal-title" id="edataampleModalLabel">Are you sure to delete <?php echo $data['id_artikel'];?> ?</h5>
                      </div>
                      <div class="modal-footer">
                              <form method="POST" action="<?php echo $this->config->base_url().'artikelA/deletedata'; ?>">
                                  <!-- Create hidden input here to post id Users-->
                                  <input style="display:none;" type="tedatat" name="id" value="<?php echo $data['id_artikel'];?>">
                                <button type="submit" name="delete" class="btn btn-danger">YA</a>
                              </form>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>

                      </div>
                    </div>
                  </div>
                </div>
                <?php
                    }}
                ?>
                
              </tbody>
            </table>
          </div>
      </div>
      </div>
      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="js/popper.min.js"></script>
  <script src="js/bootstrap-4.0.0.js"></script>
  <script src="js/popper.min.js"></script>
      <script>
          $(document).ready(function() {
          $('#oi').DataTable();
      });
      </script>
  </body>
</html>
<style>
  #u {margin-left: 50pdata;}
  #i {margin-left: 30pdata;}
</style>
<head>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
     <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
</head>