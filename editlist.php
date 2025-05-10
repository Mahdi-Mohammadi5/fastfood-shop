<?php
include("header.php");
$name="";
$text="";
$imageurl="";
if(isset( $_GET["id"])){

    $id=$_GET["id"];
    $link=mysqli_connect("localhost","root","","fastfood shop");
    $result=mysqli_query($link,"SELECT * FROM `mahsolat` WHERE `id`=$id;");
    mysqli_close($link);
    $row=mysqli_fetch_array($result);
    if($row){
        $name=$row["name"];
        $text=$row["text"];
        $imageurl=$row["imageurl"];
    }
}
?>
 <div class="row">
    <div class="col">
        <form action="editlist_action.php" method="post" enctype="multipart/form-data">
            <input class="col-12 col-md m-2" type="file" name="image" placeholder="تصویر" value="<?php echo($imageurl); ?>">
            <input class="col-12 col-md m-2" type="text" name="id" hidden placeholder="id" value="<?php echo($id); ?>">
            <input class="col-12 col-md m-2" type="text" name="name" placeholder="نام" value="<?php echo($name); ?>">
            <input class="col-12 col-md m-2" type="text" name="text" placeholder="متن" value="<?php echo($text); ?>">
            <input class="btn btn-primary" type="submit" value="ذخیره">
        </form>    
    </div>
</div>
<?php
include("footer.html");
?>