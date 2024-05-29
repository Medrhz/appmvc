<?php
$title = "list users user";
ob_start();
?>
<a class="btn btn-primary" href="index.php?action=create">create user</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>first name</th>
            <th>last name</th>
            <th>city</th>
            <th>age</th>
            <th>operation</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $user) : ?>
        <tr>
            <td><?= $user->id ?></td>
            <td><?= $user->fname ?></td>
            <td><?= $user->lname ?></td>
            <td><?= $user->city ?></td>
            <td><?= $user->age ?></td>
            <td>
                <a class="btn btn-success" href="index.php?action=edit&id=<?= $user->id ?>">update</a>
                <a class="btn btn-warning" href="index.php?action=delete&id=<?= $user->id ?>">delete</a>

            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>

</table>
<?php
$content = ob_get_clean();
include "layout.php";
?>