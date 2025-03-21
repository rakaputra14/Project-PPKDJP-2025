<?php 
  $queryCustomers = mysqli_query($conn, "SELECT * FROM customers ORDER BY id DESC");
  $rowCustomers = mysqli_fetch_all($queryCustomers, MYSQLI_ASSOC);

  if (isset($_POST['simpan'])) { 
    //Pulling Data From Database
    $customer_name = $_POST['customer_name'];
    $customer_phone = $_POST['customer_phone'];
    $customer_address = $_POST['customer_address'];

    $insert = mysqli_query($conn, "INSERT INTO customers (customer_name, customer_phone, customer_address) VALUES ('$customer_name','$customer_phone','$customer_address')");

    if ($insert) {
      header("Location: ?page=customers&add=success");
    } else {
      header("Location: ?page=add-customers&tambah=error");
    }

  }
  if (isset($_GET['edit'])) {
  $id = isset($_GET['edit']) ? $_GET['edit'] : '';
  $queryEdit = mysqli_query($conn, "SELECT * FROM customers WHERE id = '$id'");
  $rowEdit = mysqli_fetch_assoc($queryEdit);
  }

  if (isset($_POST['edit'])) {
  $customer_name = $_POST['customer_name'];
  $customer_phone = $_POST['customer_phone'];
  $customer_address = $_POST['customer_address'];

  $q_update = mysqli_query($conn, "UPDATE customers SET customer_name='$customer_name', customer_phone='$customer_phone', customer_address='$customer_address' WHERE id = $id");
  
  if ($q_update) {
    header("Location: ?page=customers&add=success");
  } else {
    header("Location: ?page=add-customers&edit=$id");
  }
}
?>
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-header">
        <h3>Create Customer</h3>
      </div>
      <div class="card-body">
      <form action="" method="post" enctype="multipart/form-data">
                <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="">Customer Name <span style="color: red;">*</span></label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="customer_name" value="<?php echo isset($_GET['edit']) ? $rowEdit['customer_name'] : '' ?>" required>
                  </div>
                </div>

                <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="">Customer Phone <span style="color: red;">*</span></label>
                  </div>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="customer_phone" value="<?php echo isset($_GET['edit']) ? $rowEdit['customer_phone'] : '' ?>" required>
                  </div>
                </div>

                <div class="row mb-3">
                <div class="col-sm-2">
                    <label for="">Customer Address</label>
                  </div>
                  <div class="col-sm-10">
                    <textarea name="customer_address" id="" class="form-control"><?php echo isset($_GET['edit']) ? $rowEdit['customer_address'] : '' ?></textarea>
                  </div>
                </div>
                
                <!-- Button -->
                <div class="row mb-3">
                  <div class="col-md-2 offset-md-2">
                    <?php if (isset($_GET['edit'])) { ?>
                        <button name="edit" class="btn btn-primary" type="submit">Edit</button>
                    <?php 
                    } else { 
                    ?>
                        <button name="simpan" class="btn btn-primary" type="submit">Save</button>
                    <?php 
                    } ?>
                  </div>
                </div>
              </form>
      </div>
    </div>
  </div>
</div>