<?php
$title = "create user";
ob_start();
?>
<form action="index.php?action=store" class="form-control py-2" method="post">
    <div>
        <label for="" class="form-label">first name</label>
        <input type="text" class="form-control" name="fname">
    </div>
    <div>
        <label for="" class="form-label">last name</label>
        <input type="text" name="lname" class="form-control">
    </div>
    <div>
        <label for="" class="form-label">city</label>
        <input type="text" name="city" class="form-control">
    </div>
    <div>
        <label for="" class="form-label">age</label>
        <input type="number" name="age" class="form-control">
    </div>
    <div class="my-4"><input type="submit" value="ajouter" class="btn btn-primary"></div>
</form>
<?php
$content = ob_get_clean();
include "layout.php";
?>