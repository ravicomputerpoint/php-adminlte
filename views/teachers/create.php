<?php include(__DIR__ . '/../partials/header.php'); ?>
    <h2>New Teacher</h2>
    <form action="?page=teachers_store" method="post">
        <label for="name">Name</label>
        <input type="text" class="form-control my-2" name="name">
        <label for="subject">Subject Name</label>
        <input type="text" class="form-control my-2" name="subject">
        <label for="salary">Salary</label>
        <input type="text" class="form-control my-2" name="salary">
        <input type="submit" value="Save" class="btn btn-primary mt-2">
    </form>
<?php include(__DIR__ . '/../partials/footer.php'); ?>