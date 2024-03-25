<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>TASK CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <style>
        body {
            background-image: url('bg.jpg');
            background-size: cover; 
            background-repeat: no-repeat; 
        }

    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</head>

<body>
    <section>
        <div class="container">
            <h1 style="text-align: center;padding:50px 0; color: white;">TO DO MANAGEMENT</h1>
            <form action="add.php" method="POST">
                <div class="row">
                    <div class="form-group col-lg-4 col-md-4">
                        <label for="" style="color:white;">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3 col-md-3">
                        <label for="" style="color:white;">Task</label>
                        <input type="text" name="task" id="task" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3 col-md-3">
                        <label for="" style="color:white;"  >Remark</label>
                        <select name="remarks" id="remarks" class="form-control" required>
                            <option value="done">Done</option>
                            <option value="ongoing">On Going</option>
                            <option value="cancel">Cancelled</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-2" style="display: grid;align-items: flex-end">
                        <input type="submit" name="submit" id="submit" valu="Update" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </section>

    <section style="padding: 50px 0; ">
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Task ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">TASK</th>
                        <th scope="col">REMARKS</th>
                        <th scope="col">EDIT</th>
                        <th scope="col">DELETE</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
    require_once "conn.php";
    $sql = "SELECT * FROM new_crud";
    if($new_crud = $conn->query($sql)){
        while($row = $new_crud->fetch_assoc()){
            $id = $row["id"];
            $name = $row["name"];
            $task = $row["task"];
            $remarks = $row["remarks"];
            ?>
                    <tr>
                        <td>
                            <?php echo $id ?>
                        </td>
                        <td>
                            <?php echo $name ?>
                        </td>
                        <td>
                            <?php echo $task ?>
                        </td>
                        <td>
                            <?php echo $remarks ?>
                        </td>
                        <td><a href="update.php?id=<?php echo $id ?>" class="btn btn-primary">EDIT</td>
                        <td><a href="delete.php?id=<?php echo $id ?>" class="btn btn-danger">DELETE</td>
                    </tr>
                    <?php
        }
    }
    ?>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>