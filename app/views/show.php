<?php require_once 'app/views/includes/header.php'; ?>

<div class="container center">
    <h2 class="text-center mt-5">
        Infomation a Student
    </h2>
    <?php foreach ($data['student'] as $student) : ?>
    <div class="form-item">
        <label class="control-label">Name:</label>
        <label class="form-control">
            <?php echo $student['name']; ?>
        </label>
    </div>
    <div class="form-item">
        <label class="control-label">Name:</label>
        <label class="form-control">
            <?php echo $student['email']; ?>
        </label>
    </div>
    <div class="form-item">
        <label class="control-label">Name:</label>
        <label class="form-control">
            <?php echo $student['address']; ?>
        </label>
    </div>
    <br />
    <a href="<?= URLROOT ?>/index">
        << Back</a>
            <?php endforeach; ?>
</div>

<?php require_once 'app/views/includes/footer.php'; ?>