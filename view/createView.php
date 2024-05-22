<?php
$title = "create user";
ob_start();
?>
<form action="index.php?action=store" method="post">
    <div>
        <label for="">first name</label>
        <input type="text" name="fname">
    </div>
    <div>
        <label for="">last name</label>
        <input type="text" name="lname">
    </div>
    <div>
        <label for="">city</label>
        <input type="text" name="city">
    </div>
    <div>
        <label for="">age</label>
        <input type="number" name="age">
    </div>
    <div><input type="submit" value="ajouter"></div>
</form>
<?php
$content = ob_get_clean();
include "layout.php";
?>