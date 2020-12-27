<?php

require_once 'functions.php';

?>

<?php include 'header.php'?>

<div class="container my-5">
    <form action="insert.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <br><br>
        <input type="email" name="email" placeholder="Email">
        <br><br>
        <input type="password" name="password" placeholder="Password">
        <br><br>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

<?php include 'footer.php'?>