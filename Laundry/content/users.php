<?php
$queryUser = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
$rowUser = mysqli_fetch_all($queryUser, MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <table class="table">
          <div align="right" left class="mb-2"> 
            <a class="btn btn-primary mb-2" href="?page=add-users">Create New Users</a> 
          </div>
      <thead>
      <tr class="">
        <th>Num</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
      </tr>
      </thead>
      <tbody>
        <?php 
        $no = 1; 
        foreach ($rowUser as $row) {
        ?>
        <tr>
          <td scope="row"><?= $no++?></td>
          <td><?= $row['name']?></td>
          <td><?= $row['email']?></td>
          <td><?= $row['password']?></td>
          <td>
            <a href="?page=add-users&edit=<?php echo $row['id']?>" class="btn btn-success btn-sm">EDIT</a>
            <a href="?page=add-users&delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">DELETE</a>
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
</body>
</html>