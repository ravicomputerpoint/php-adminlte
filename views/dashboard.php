<?php include(__DIR__ . '/partials/header.php') ?>
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="small-box bg-success text-light">
                <div class="inner">
                    <h3><?php echo $total_students['total_students'] ?></h3>
                    <p>Total Students</p>
                </div>
                <a href="?page=students" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="small-box bg-secondary text-light">
                <div class="inner">
                    <h3><?php echo $total_teachers['total_teachers'] ?></h3>
                    <p>Total Teachers</p>
                </div>
                <a href="?page=teachers" class="small-box-footer">
                    More info <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
    

<?php include(__DIR__ . '/partials/footer.php') ?>

