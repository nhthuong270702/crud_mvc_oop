<?php require_once 'app/views/includes/header.php'; ?>

<div class="container">
    <h2 class="text-center mt-5">Search Students</h2>
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
            if (!empty('student')) :
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