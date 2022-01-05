<?php require_once 'app/views/includes/header.php'; ?>

<div class="container">
    <h2 class="text-center mt-5">Management Students</h2>
    <!-- <a class="btn btn-primary" href="<?= URLROOT ?>/student/create">
        Create
    </a> -->
    <div class="row" style="margin-top: 40px;">
        <div class="col-8">
            <p>
                <a href="<?= URLROOT ?>/student/create" class="btn btn-success"><i class="fas fa-user-plus"></i>
                    Create</a>
            </p>
        </div>
        <div class="col-4" style="float: right;">
            <form action="<?= URLROOT ?>/student/search/" method="GET" autocomplete="off">
                <div class="input-group">
                    <input class="form-control" type="text" name="key" placeholder="Tìm Kiếm..." required>
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-striped table-bordered mt-3">
        <thead>
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $i = 1;
            ?>
            <?php
            if (!empty($data['student'])) :
                foreach ($data['student'] as $student) : extract($student); ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $student['name'];  ?></td>
                <td><?php echo $student['email']; ?></td>
                <td><?php echo $student['address']; ?></td>
                <td>
                    <a class="btn btn-info" href="<?= URLROOT ?>/student/show/<?= $student['id'] ?>"><i
                            class="far fa-eye"></i></a>
                </td>
                <td>
                    <a class="btn btn-warning" href="<?= URLROOT ?>/student/update/<?= $student['id'] ?>"><i
                            class="far fa-edit"></i></a>
                </td>
                <td>
                    <a class="btn btn-danger" href="<?= URLROOT ?>/student/delete/<?= $student['id'] ?>"><i
                            class="far fa-trash-alt"></i></a>
                </td>
            </tr>
            <?php endforeach;
            endif; ?>
        </tbody>
    </table>
</div>

<?php require_once 'app/views/includes/footer.php'; ?>