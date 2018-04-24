<div class="container">
<h1 style="padding: 40px 0;" class="text-center">User Management</h1>
<table id="tableKelolaUser" class="table table-striped table-bordered">
    <tr>
        <th>No.</th>
        <th>Id</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
    </tr>
    <?php foreach ($user as $key){
        $jumlah = 1;
        echo "<tr>";
        echo"<td>".$jumlah++."</td>";
            ?>
                <td><?php echo $key['id'];?></td>
                <td><?php echo $key['email'];?></td>
                <td><?php echo $key['password'];?></td>
                <td><button class='btn btn-sm btn-primary' onClick=''><i class='fa fa-pencil'></i>Edit</button>
                <button class='btn btn-sm btn-danger' onClick=''><i class='fa fa-trash'></i>Hapus</button></td>
            <?php
        echo "</tr>";
    } ?>
</table>
</div>