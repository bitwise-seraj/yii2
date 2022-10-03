<?php
$this->title = 'Student List';
?>
<pre>
<?php
// print_r($data[1]);exit;
?>
<div class="table-responsive">
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
        </tr>
    </thead>
    <tbody>
        <?php foreach($data AS $row){?>
            <tr>
                <td scope="row"><?= $row->iStudent?></td>
                <td><img src="<?= $row->vImagePath?>" alt="" srcset=""></td>
                <td><?= $row->vFirstName . " " . $row->vLastName?></td>
                <td><?= $row->vEmail?></td>
                <td><?= $row->vSchool?></td>
                <td><?= $row->vGrade?></td>
                <td><?= $row->vCountry?></td>
            </tr>
        <?php }?>
    </tbody>
  </table>
</div>