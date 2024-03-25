<!DOCTYPE html>

<?php
require_once "conn.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_GET["id"]) && isset($_POST["name"]) && isset($_POST["task"]) && isset($_POST["remarks"])) {
        $id = $_GET["id"];
        
        $name = $_POST['name'];
        $task = $_POST['task'];
        $remarks = $_POST['remarks'];

        $sql = "UPDATE new_crud SET `name`= '$name', `task`= '$task', `remarks`= '$remarks' WHERE id= '$id'";

        if (mysqli_query($conn, $sql)) {
            header("location: index.php"); 
            exit();
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>UPDATE</title>
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
            <form action="update.php?id=<?php echo $_GET['id']; ?>" method="POST">

                <div class="row">
                    <div class="form-group col-lg-4 col-md-4">
                        <label for="" style="color: white;">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3 col-md-3">
                        <label for="" style="color: white;">Task</label>
                        <input type="text" name="task" id="task" class="form-control" required>
                    </div>
                    <div class="form-group col-lg-3 col-md-3">
                        <label for="" style="color: white;">Remark</label>
                        <select name="remarks" id="remarks" class="form-control" required>
                            <option value="done">Done</option>
                            <option value="ongoing">On Going</option>
                            <option value="cancel">Cancelled</option>
                        </select>
                    </div>
                    <div class="form-group col-lg-2 col-md-2" style="display: grid;align-items: flex-end">
                        <input type="submit" name="submit" id="submit" valu="Submit" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
</body>
</html>