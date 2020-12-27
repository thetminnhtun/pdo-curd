<?php

require_once 'functions.php';

$users = selectAll('users');

?>

<?php include 'header.php'?>

<div class="container my-5">
    <div>
        <a href="create.php" class="btn btn-primary my-3">Create</a>
    </div>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
        <?php foreach ($users as $user): ?>
        <tr>
            <td><?php echo $user->id; ?></td>
            <td><?php echo $user->name; ?></td>
            <td><?php echo $user->email; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $user->id; ?>" class="btn btn-success">Edit</a>
                <a href="delete.php?id=<?php echo $user->id; ?>" class="btn btn-danger">Del</a>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>

<?php include 'footer.php'?>