<?php include 'inc/header.php'; ?>
<?php include 'inc/nav.php'; ?>


<div class="container">
    <div class="row">
        <div class="col-8 mx-auto my-5">
            <h2 class="border p-2 my-2 text-center">Register</h2>

            <form class="border p-3" action="handelers/handleRegister.php" method="POST">

                <div class="form-group p-2 my-1">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group p-2 my-1">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="form-group p-2 my-1">
                    <label for="pass">Password</label>
                    <input type="password" name="password" id="pass" class="form-control">
                </div>
                <div class="form-group p-2 my-1">
                    <input type="submit" value="Register" class="form-control">
                </div>

            </form>

        </div>
    </div>
</div>



<?php include 'inc/footer.php'; ?>