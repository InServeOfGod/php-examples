<?php
include "../header.php";

?>

<main class="container">
    <pre>
    <?php
//    $files = glob("*");
    $files = scandir("..");

    print_r($files);

    ?>
    </pre>
</main>



<?php
include "../footer.php";
