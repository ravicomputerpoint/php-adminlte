<?php include(__DIR__ . '/../partials/header.php'); ?>
    <h2>All Students</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Father</th>
                <th>Mother</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($students as $student) : ?>
                <tr>
                    <td><?php echo $student['name'] ?></td>
                    <td><?php echo $student['father'] ?></td>
                    <td><?php echo $student['mother'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include(__DIR__ . '/../partials/footer.php'); ?>
