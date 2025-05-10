<?php
include("header.php");
?>

 <div class="row">
    <div class="col">
        <form action="newlist_action.php" method="post" enctype="multipart/form-data">
            <input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر">
            <input class="col-12 col-md m-2" type="text" name="name" placeholder="نام">
            <input class="col-12 col-md m-2" type="text" name="text" placeholder="متن">
            <input class="btn btn-primary" type="submit" value="ثبت">
        </form>    
    </div>
</div>

<?php
include("footer.html");
?>