<?php
if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['regNo'];

    // Replace "admin" and "1234" with your actual admin username and password
    $admin_username = "admin";
    $admin_password = "1234";

    if ($name === $admin_username && $password === $admin_password) {
        header("Location: /Database%20Assignment/login/admin/dashboard.php");
        exit;
    } else {
        $error_message = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ... (other head content) ... -->
</head>

<body>
    <section class="showcase-area container-fluid full" id="home">
        <div class="container anmd" id="home">
            <h3 class="heading" style="font-size: 40px; margin-bottom: 90px;">Admin Login</h3>
            <div class="container my-5">
                <form method="post">
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-6">
                            <input required type="text" class="form-control" name="name" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Password</label>
                        <div class="col-sm-6">
                            <input required type="password" class="form-control" name="regNo" />
                        </div>
                    </div>
                    <?php
                    if (isset($error_message)) {
                        echo '<div class="alert alert-danger">' . $error_message . '</div>';
                    }
                    ?>
                    <div class="row mb-3">
                        <div class="offset-sm-3 col-sm-3 d-grid">
                            <button type="submit" name="login" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- ... (other scripts and content) ... -->
</body>

</html>
