<?php
$title = "edit user";
ob_start();

?>
<form action="index.php?action=update" method="post">
    <input type="hidden" name="id" value="<?= $user->id ?>">
    <div>
        <label for="" class="form-label">first name</label>
        <input type="text" class="form-control" name="fname" value="<?= $user->fname ?>">
    </div>
    <div>
        <label for="" class="form-label">last name</label>
        <input type="text" class="form-control" name="lname" value="<?= $user->lname ?>">
    </div>
    <div>
        <label for="" class="form-label">city</label>
        <input type="text" class="form-control" name="city" value="<?= $user->city ?>">
    </div>
    <div>
        <label for="" class="form-label">age</label>
        <input type="number" class="form-control" name="age" value="<?= $user->age ?>">
    </div>
    <div><input class="btn btn-secondary px-3 mt-2" type="submit" value="update"></div>
</form>

<?php
$content = ob_get_clean();
include "layout.php";
?>