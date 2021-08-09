<?php include('db.php'); ?>
<?php include("includes/header.php"); ?>

  

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <!--VALIDAR DATOS DE SESSION-->
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-<?= $_SESSION['message_type']; ?> alert-dismissble fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
            <?php session_unset(); } ?>
            <!--FORMULARIO DE INGRESO DE DATOS-->
            <div class="card card-body">
                <form action="save_task.php"  method="POST">
                    <div class="form-group">
                        <input type="text" name="title" id="" class="form-control" placeholder="Task Title" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" id="" placeholder="Description" class="form-control">
                    </div>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Save Task">
                </form>
            </div>
        </div>

        <!--TABLA QUE CONTIENE DATOS-->
        <div class="col-md-8">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM task";
                        $result_task = mysqli_query($conn, $query);
                        
                        while($row = mysqli_fetch_array($result_task)) { ?>
                            <tr>
                                <td><?php echo $row['tittle']; ?></td>
                                <td><?php echo $row['description']; ?></td>
                                <td><?php echo $row['create_at']; ?></td>
                                <td>
                                    <a href="edit_task.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" >
                                        <i class="fas fa-marker"></i>
                                    </a>
                                    <a href="delete_task.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        
                        <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>