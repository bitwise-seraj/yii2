<?php
$this->title = 'Student List';
?>
<pre>
<?php
// print_r($data[1]);exit;
?>
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row m-0 p-0">
                <div class="col-sm-8"><h2>Student <b>Details</b></h2></div>
                <div class="col-sm-4">
                    <button type="button add-new" class="btn btn-info add-new"><i class="bi bi-plus"></i> Add New</button>
                </div>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Profile</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>School</th>
                    <th>Grade</th>
                    <th>Country</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row) { ?>
                    <tr>
                        <td scope="row"><?= $row->iStudent ?></td>
                        <td><img src="<?= $row->vImagePath ?>" alt="" srcset=""></td>
                        <td><?= $row->vFirstName . " " . $row->vLastName ?></td>
                        <td><?= $row->vEmail ?></td>
                        <td><?= $row->vSchool ?></td>
                        <td><?= $row->vGrade ?></td>
                        <td><?= $row->vCountry ?></td>
                        <td class="d-flex">
                            <a class="edit mx-2" role="button" title="Edit"><i class="bi bi-pencil-square"></i></a>
                            <a class="delete mx-2" role="button" title="Delete"><i class="bi bi-trash3-fill"></i></a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="update-modal">
        Hello bro!
    </div>

<?php

    $this->registerJs(
    <<<JS
        // js code
     JS
    );
?>

</div>