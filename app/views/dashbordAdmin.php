<!DOCTYPE html>
<html lang="en">
    <style>

        .id{
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
    
    <?php
    include_once "includes/dash.php";
    ?>
    
    <div class="container m-5">
    <table class="table" >
        <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom Utilisateur</th>
                <th scope="col">Email</th>
                <th scope="col">Role Utilisateur</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody style="height: 50%;">

            <?php
            foreach ($data as $utilisateur) :
            ?>
                <tr>
                    <th scope="row">1</th>
                    <td><?= $utilisateur->nameUtilisateur ?></td>
                    <td><?= $utilisateur->email  ?></td>
                    <td><?= $utilisateur->roleUtilisateur ?>
                    <td class="d-flex gap-2"> 
                    <form method="POST">
                        <input type="text" class="id" name="id" value="<?=$utilisateur->id?>">
                        <input type="submit" name="delete" value="delete" class="btn btn-danger">
                    </form>
                        <a href="update?id=<?= $utilisateur->id ?>" class="btn btn-primary">update</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

    </table>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>