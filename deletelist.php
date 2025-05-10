<?php
include("header.php");

$id=$_GET["id"];
$fileurl="";

$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"SELECT * FROM `mahsolat` WHERE id=$id");
mysqli_close($link);
$row=mysqli_fetch_array($result);
if($row){
    $fileurl=$row["imageurl"];
}

$delete=unlink($fileurl);
if($delete==true){
$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"DELETE FROM `mahsolat` WHERE `id`=$id;");
mysqli_close($link);

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
}

include("footer.html");
?>