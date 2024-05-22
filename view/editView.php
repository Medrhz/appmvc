<?php
$title = "edit user";
ob_start();
?>
<form action="index.php?action=update" method="post">
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <div>
        <label for="">first name</label>
        <input type="text" name="fname" value="<?= $user->fname ?>">
    </div>
    <div>
        <label for="">last name</label>
        <input type="text" name="lname" value="<?= $user->lname ?>">
    </div>
    <div>
        <label for="">city</label>
        <input type="text" name="city" value="<?= $user->city ?>">
    </div>
    <div>
        <label for="">age</label>
        <input type="number" name="age" value="<?= $user->age ?>">
    </div>
    <div><input type="submit" value="update"></div>
</form>

<?php
$content = ob_get_clean();
include "layout.php";
?>