<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>View | PHP OOP PDO CRUD</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">VIEW DATA</h1>
                <hr style="height:1px; color:black; background-color:black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">
                <?php
                    include 'model.php';
                    $model = new Model();
                    $id = $_REQUEST['id'];              // test, echo $id = $_REQUEST['id'];
                    $row = $model->fetch_single($id);   // dummy, var_dump($row);
                    if (!empty($row)) {
                ?>
                    <div class="card">
                        <div class="card-header">
                            Detail
                        </div>
                        <div class="card-body">
                            <p>Name = <?= $row['name']; ?></p>
                            <p>Email = <?= $row['email']; ?></p>
                            <p>Mobile = <?= $row['mobile']; ?></p>
                            <p>Address = <?= $row['address']; ?></p>
                        </div>
                    </div>
                <?php
                    } else {
                        echo "no data";
                    }
                ?>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>