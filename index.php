<?php include 'inc/header.php'; ?>

<?php
if (!isset($_SESSION['auth'])) {
    header("location:login.php");
}
?>

<?php include 'inc/nav.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5 border p-2">
            <h1 class="border my-2 bg-success p-2">
                Welcome To Home Page
            </h1>
            <h2 class="border my-2 bg-success p-2">
                Hope You are fine
            </h2>
        </div>
    </div>
</div>




<?php include 'inc/footer.php'; ?>