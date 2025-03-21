<?php
if (isset($_POST['save'])) {
    $id_level = $_POST['id_level'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);

    $insert = mysqli_query($conn, "INSERT INTO users (id_level, name, email, password)
    VALUES('$id_level','$name','$email','$password')");
    if ($insert) {
        header("location:?page=users&add=success");
    }
}

$id = isset($_GET['edit']) ? $_GET['edit'] : '';
$queryEdit = mysqli_query($conn, "SELECT * FROM users WHERE id = '$id'");
$rowEdit = mysqli_fetch_assoc($queryEdit);

if (isset($_POST['edit'])) {
    $id = $_GET['edit'];
    $$id_level = $_POST['id_level'];
    $name = $_POST['name'];
    $email = $_POST['email'];

    if ($_POST['password']) {
        $password = sha1($_POST['password']);
    } else {
        $password = $rowEdit['password'];
    }

    $update = mysqli_query($conn, "UPDATE users 
    SET id_level ='$id_level', name='$name', email='$email', password='$password' WHERE id ='$id'");
    if ($update) {
        header("location:?page=user&update=success");
    }
}

$queryLevels = mysqli_query($conn, "SELECT * FROM levels ORDER BY id DESC");
$rowLevels  = mysqli_fetch_all($queryLevels, MYSQLI_ASSOC);


?>

<form class="forms-sample" method="post">
        <div class="mb-3">
            <label for="">Level Name *</label>
            <select name="id_level" id="" class="form-control">
                <option value="">Choose Level</option>
                <?php foreach ($rowLevels as $rowLevel): ?>
                    <option <?php echo isset($_GET['edit']) ? ($rowLevel['id'] == $rowEdit['id_level']) ? 'selected' : '' : '' ?> value="<?php echo $rowLevel['id'] ?>"><?php echo $rowLevel['level_name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="name" class="form-control p-input" id="name" aria-describedby="emailHelp" 
            placeholder="Enter Your Name" value="<?php echo isset($_GET['edit']) ? $rowEdit['name'] : '' ?>">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control p-input" id="email" aria-describedby="emailHelp" 
            placeholder="Enter email" value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
            <small id="emailHelp" class="form-text text-muted text-success"><span class="fa fa-info mt-1"></span>We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control p-input" id="password" 
            placeholder="Password" value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>">
        </div>
        <div class="col-12">
            <button type="save" class="btn btn-primary" name="<?php echo isset($_GET['edit']) ? 'edit' : 'save' ?>"><?php echo isset($_GET['edit']) ? 'edit' : 'save' ?></button>
        </div>
</form>