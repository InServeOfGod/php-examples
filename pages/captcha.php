<?php

session_start();
include "../header.php";

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $captcha = $_POST['captcha'];

    if ($captcha == $_SESSION['captcha_code']) {
        echo "Giriş onaylandı.";
    } else {
        echo "Giriş onaylanmadı!";
    }
}
?>

<main class="container my-5">
    <form class="col-md-5 mx-auto py-3 card" action="<?= htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="application/x-www-form-urlencoded" accept-charset="UTF-8">
        <div class="card-header">
            <h3 class="card-title text-center text-muted">Form</h3>
        </div>

        <div class="card-body">
            <div class="mb-3">
                <label for="username">Kullanıcı Adı : </label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Kullanıcı adınızı girin..." required>
            </div>

            <div class="mb-3">
                <span class="text-muted">Güvenlik kodu : </span>
                <img src="captcha-img.php" alt="<?= $_SESSION['captcha_code']?>" class="img-thumbnail">
            </div>

            <div class="mb-3">
                <label for="captcha">Captcha : </label>
                <input type="text" name="captcha" id="captcha" class="form-control" placeholder="Captcha girin..." required>
            </div>
        </div>

        <div class="card-footer pt-3">
            <div class="mb-3 text-end">
                <input type="submit" class="btn btn-sm btn-primary" name="submit" value="Submit">
            </div>
        </div>
    </form>
</main>

<?php
include "../footer.php";
