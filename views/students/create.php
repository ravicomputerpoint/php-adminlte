<?php include(__DIR__ . '/../partials/header.php'); ?>
    <h2>New Student</h2>
    <form action="?page=students_store" method="post">
        <label for="name">Name</label>
        <input type="text" class="form-control my-2" name="name">
        <label for="father">Father Name</label>
        <input type="text" class="form-control my-2" name="father">
        <label for="mother">Mother Name</label>
        <input type="text" class="form-control my-2" name="mother">
        <input type="submit" value="Save" class="btn btn-primary mt-2">
    </form>
<?php include(__DIR__ . '/../partials/footer.php'); ?>