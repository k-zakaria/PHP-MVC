<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>YouEvent</title>
</head>

<body>
    <div class="row justify-content-center align-items-center">
        <div class="card mt-3" style="background-color:#333 ;width:40%; color:#fff">
            <div class="card-header">
                <h3>Sign un</h3>
            </div>
            <div class="card-body mt-3">
                <form method="post" action="login">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlInput2" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3" name="signIn">Sign in</button>
                    <div class="mb-3 text-end">
                        <a href="singup" class="text-decoration-none " style=" color:#fff">Sign up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var email = document.getElementById('exampleFormControlInput1').value;
            var password = document.getElementById('exampleFormControlInput2').value;
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                alert('Format d email invalide');
                return false;
            }
            if (password.trim() === '') {
                alert('Veuillez entrer un mot de passe');
                return false;
            }
            return true;
        }
    </script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>