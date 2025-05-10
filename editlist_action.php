<?php
include("header.php");

$id=$_POST["id"];
$image=$_FILES["image"]["name"];
$name=$_POST["name"];
$text=$_POST["text"];

$imageurl="images/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);

$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"UPDATE `mahsolat` SET `name`='$name',`text`='$text',`imageurl`='$imageurl' WHERE `id`=$id");
mysqli_close($link);
?>
 <div class="row">
    <div class="col">
        <?php
        if($result===true)
        {
            ?>
            <script>
                location.replace("list.php");
            </script>
            <?php
        }else
        {
            echo("عملیات با مشکل مواجه شد ❌");
        }
        ?>
    </div>
</div>

<?php
include("footer.html");
?>