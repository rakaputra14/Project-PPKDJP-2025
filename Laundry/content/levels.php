<?php 
$querylevel = mysqli_query($conn, "SELECT * FROM levels ORDER BY id DESC");
$rowLevel = mysqli_fetch_all($querylevel, MYSQLI_ASSOC);

if (isset($_GET['delete'])){
  $idDel = $_GET('delete');
  $delete = mysqli_query($conn, "DELETE * FROM levels WHERE id = '$id'");
  header('location:?page=level$alert=success');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h3>Level Data</h3>
            </div>
            <div class="card-body">
                <div align="right" class="mb-3 mt-3">
                    <a href="?page=add-levels" class="btn btn-primary">Create New Admin</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($rowLevel as $row) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['level_name'] ?></td>
                                <td>
                                    <a href="?page=add-levels&edit=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="?page=levels&delete=<?php echo $row['id'] ?>"
                                        onclick="return confirm('Are you sure??')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>