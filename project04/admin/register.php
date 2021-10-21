<?php include '../partial/header.php' ?>

<div class="container pt-1 pb-1">
    <form action="process-register-user.php" method="POST">
    <div class="mb-3">
            <label for="userName" class="form-label">Name</label>
            <input type="text" class="form-control" id="userName" name="userName">
        </div>
        <div class="mb-3">
            <label for="userEmail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="password1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password1" name = "password1">
        </div>
        <div class="mb-3">
            <label for="password2" class="form-label">Type Password again</label>
            <input type="password" class="form-control" id="password2" name = "password2">
        </div>
        <button type="submit" class="btn btn-primary" name="smbRegister">Đăng ký</button>
    </form>
</div>
<?php include '../partial/footer.php' ?>