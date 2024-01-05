<!DOCTYPE html>
<html lang="en">

<style>
    #id {
        display: none;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>YouEvent</title>
</head>

<body>
    <div class="row justify-content-center">


        <div class="card mt-5" style="background-color:#333 ;width:40%; color:#fff">
            <div class="card-header">
                <h3>Sign in</h3>
            </div>
            <div class="card-body mt-3">
                <form method="POST">
                    <?php foreach ($input as $row) : ?>
                        <label for="<?php echo $row ?>" id=<?php echo $row ?> class="form-label <?php echo $row ?>"><?php echo $row ?></label>
                        <input type="text" class="form-control  mb-2" id=<?php echo $row ?> name=<?php echo $row ?>>
                    <?php endforeach; ?>
                    <button type="submit" class="btn btn-primary mt-3" name="signUp">Sign up</button>
                    <div class="mb-3 text-end">
                        <a href="login" class="text-decoration-none " style=" color:#fff">Sign in</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        let pass = document.getElementById("passwords");
        pass.type = "password";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>