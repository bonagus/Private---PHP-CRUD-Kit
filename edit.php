<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Edit | PHP OOP PDO CRUD</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center">EDIT DATA</h1>
                <hr style="height:1px;color:black;background-color:black">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">

                <?php

                include 'model.php';
                $model = new Model();
                $id = $_REQUEST['id'];      // test, echo $id = $_REQUEST['$id'];
                $row = $model->edit($id);   // dummy, var_dump($row);

                if (isset($_POST['update'])) {
                    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['mobile']) && isset($_POST['address'])) {
                        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['address'])) {

                            $data['id'] = $id;
                            $data['name'] = $_POST['name'];
                            $data['email'] = $_POST['email'];
                            $data['mobile'] = $_POST['mobile'];
                            $data['address'] = $_POST['address'];

                            $update = $model->update($data);

                            if ($update) {
                                echo "<script>alert('update successfully');</script>";
                                echo "<script>window.location.href = 'index.php';</script>";
                            } else {
                                echo "<script>alert('update failed');</script>";
                                echo "<script>window.location.href = 'index.php';</script>";
                            }
                        } else {
                            echo "<script>alert('empty');</script>";
                            header("Location: edit.php?id=$id");
                        }
                    }
                }

                ?>

                <form action="" method="post">
                    <div class="form-grop">
                        <label for="">Name</label>
                        <input type="text" name="name" value="<?= $row['name']; ?>" class="form-control">
                    </div>
                    <div class="form-grop">
                        <label for="">Email</label>
                        <input type="email" name="email" value="<?= $row['email']; ?>" class=" form-control">
                    </div>
                    <div class="form-grop">
                        <label for="">Mobile No</label>
                        <input type="text" name="mobile" value="<?= $row['mobile']; ?>" class=" form-control">
                    </div>
                    <div class="form-grop">
                        <label for="">Address</label>
                        <textarea name="address" id="" cols="" rows="3" class=" form-control"><?= $row['address']; ?></textarea>
                    </div>
                    <div class="form-grop mt-1">
                        <button type="submit" name="update" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    -->
</body>

</html>