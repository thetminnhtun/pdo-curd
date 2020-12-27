<?php

require_once 'functions.php';

$id = $_GET['id'] ?? '';

$user = find('users', $id);

?>

<?php include 'header.php'?>

<div class="container my-5">
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $user->id ?>">
        <input type="text" name="name" value="<?php echo $user->name ?>" placeholder="Name">
        <br><br>
        <input type="email" name="email" value="<?php echo $user->email ?>" placeholder="Email">
        <br><br>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="view.php" class="btn btn-secondary">Back</a>
    </form>
</div>

<?php include 'footer.php'?>