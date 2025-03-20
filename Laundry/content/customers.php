<?php
  $queryCustomers = mysqli_query($conn, "SELECT * FROM customers ORDER BY id DESC");
  $rowCustomers = mysqli_fetch_all($queryCustomers, MYSQLI_ASSOC);

  if(isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($conn, "DELETE FROM customers WHERE id = '$id'");
  }

?>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3>Customers Data</h3>
      </div>
      <div class="card-body">
        <table class="table table-bordered">
          <div align="right" left class="mb-2"> 
            <a class="btn btn-primary mb-2" href="?page=add-customers">Create New Customer</a> 
          </div>
          <thead>
            <tr>
              <th>No</th>
              <th>Name</th>
              <th>Phone Number</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1;
            foreach($rowCustomers as $row) {?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $row['customer_name'] ?></td>
              <td><?= $row['customer_phone'] ?></td>
              <td><?= $row['customer_address'] ?></td>
              <td>
                <a href="?page=add-customers&edit=<?php echo $row['id']?>" class="btn btn-success btn-sm">EDIT</a>
                <a href="?page=add-customer&delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">DELETE</a>
              </td>
            </tr>
            <?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>