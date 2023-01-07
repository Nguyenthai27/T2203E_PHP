<?php $title="signin"  ?>
<!doctype html>
<html lang="en">
<head>
    <?php include("head.php") ?>
</head>
<body>
<section>
    <div class="container">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <form action="postSearch.php" method="get">
                    <div class="from-group mb-3">
                        <label>Full Name</label>
                        <input class="form-control" type="text" name="name" placeholder="Name....">
                    </div>
                    <div class="from-group mb-3">
                        <label>Your TelePhone</label>
                        <input class="form-control" type="text" name="tel" placeholder="Telephon....">
                    </div>
                    <div class="from-group mb-3">
                        <label>Address</label>
                        <input class="form-control" type="text" name="address" placeholder="Address....">
                    </div>
                    <button type="submit" class="btn-outline-danger">Sign In</button>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
</section>
</body>
</html>
