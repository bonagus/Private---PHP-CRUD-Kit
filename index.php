<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Home | PHP OOP PDO CRUD</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center">HOME</h1>
                <hr style="height:1px; color:black; background-color:black;">
                <a href="insert.php" class="badge badge-primary">Insert</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'model.php';
                        $model = new Model();
                        $rows = $model->fetch();
                        $i = 1;
                        if (!empty($rows)) {
                            foreach ($rows as $row) {
                        ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $row['name']; ?></td>
                                    <td><?= $row['email']; ?></td>
                                    <td><?= $row['mobile']; ?></td>
                                    <td><?= $row['address']; ?></td>
                                    <td>
                                        <!-- http://localhost/php-oop/read.php?id=1 berasal dari routing-->
                                        <a href="view.php?id=<?php echo $row['id']; ?>" class="badge badge-info">View</a>
                                        <a href="delete.php?id=<?php echo $row['id']; ?>" class="badge badge-danger">Delete</a>
                                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="badge badge-success">Edit</a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>