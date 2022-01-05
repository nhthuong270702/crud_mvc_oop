<?php require_once 'app/views/includes/header.php'; ?>

<div class="container center">
    <h2 class="text-center mt-5">
        Update student
    </h2>
    <?php foreach ($data['findStudent'] as $student) : extract($student); ?>
    <form action="<?= URLROOT ?>/student/update/<?= $id ?>" method="POST">
        <div class="form-item">
            <label class="control-label">Name</label>
            <input class="form-control" type="text" name="Name" value="<?= $student['name'] ?>" required>
        </div>
        <div class="form-item">
            <label class="control-label">Email</label>
            <input class="form-control" type="Email" name="Email" value="<?= $student['email'] ?>" required>
        </div>
        <div class="form-item">
            <label class="control-label">Address</label>
            <input class="form-control" type="text" name="Address" value="<?= $student['address'] ?>">
        </div>
        <br />
        <a href="<?= URLROOT ?>/index">
            << Back</a>
                <button class="btn btn-primary ml-3" name="update" type="submit">Update</button>
    </form>
    <?php endforeach; ?>
</div>

<?php require_once 'app/views/includes/footer.php'; ?>