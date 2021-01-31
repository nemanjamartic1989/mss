<?php 
    require_once 'bootstrap.php';
    require "views/partials/header.php";

    $access_levels = $query->selectAll("access_levels");
?>

<div class="col-6">
    <h4>Register</h4>
    <form action="" method="POST">
        <input type="text" name="first_name" placeholder="First Name" class="form-control" required><br>
        <input type="text" name="last_name" placeholder="Last Name" class="form-control" required><br>
        <input type="text" name="email" placeholder="Email" class="form-control" required><br>
        <select id="access_level" name="access_level">
            <?php   
            foreach ($access_levels as $access_level) {
                echo "<option value=".$access_level["id"].">".$access_level["name"]."</option>";
            }
            ?>
        </select><br>
        <input type="password" name="register_password" placeholder="password" class="form-control" required><br>
        <input type="password" name="confir_password" placeholder="confirm password" class="form-control" required><br>
        <button class="form-control btn btn-warning" name="registerBtn">Register</button>
    </form>
    <?php //if ($user->register_result): ?>
        <!-- <div class="alert alert-success">Successful Registration! Please, Log in</div> -->
    <?php //endif;?>
</div>

<?php require "views/partials/footer.php";?>
