<?php include(__DIR__ . '/../partials/header.php'); ?>
    <h2>All Teachers</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($teachers as $teacher) : ?>
                <tr>
                    <td><?php echo $teacher['name'] ?></td>
                    <td><?php echo $teacher['subject'] ?></td>
                    <td><?php echo $teacher['salary'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include(__DIR__ . '/../partials/footer.php'); ?>
