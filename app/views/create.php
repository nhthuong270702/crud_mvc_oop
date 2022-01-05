<?php require_once 'app/views/includes/header.php'; ?>

<div class="container center">
    <h2 class="text-center mt-5">
        Create new student
    </h2>

    <form action="<?= URLROOT ?>/student/create" method="POST">
        <div class="form-item">
            <label class="control-label">Name</label>
            <input class="form-control" type="text" name="Name" required placeholder="Name...">
        </div>
        <div class="form-item">
            <label class="control-label">Email</label>
            <input class="form-control" type="Email" name="Email" required placeholder="Email...">
        </div>
        <div class="form-item">
            <label class="control-label">Address</label>
            <input class="form-control" type="text" name="Address" required placeholder="Address...">
        </div>
        <br />
        <a href="<?= URLROOT ?>/index">
            << Back</a>
                <button class="btn btn-primary ml-3" name="add" type="submit">Store</button>
    </form>
</div>

<?php require_once 'app/views/includes/footer.php'; ?>