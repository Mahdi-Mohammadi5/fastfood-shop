<?php
include("header.php");

$image=$_FILES["image"]["name"];
$name=$_POST["name"];
$text=$_POST["text"];

$flagSaveOk=true;
$message="-";

$imageurl="images/".$image;

if(file_exists($imageurl)){
    $flagSaveOk=false;
    $message.="فایل مشابه در سرور وجود دارد \n";
}

$size=$_FILES["image"]["size"];
if($size>10*1024*1024){
$flagSaveOk=false;
$message.="اندازه فایل بزرگتر از 5 مگابایت است\n";
}

$extention=pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION);
if($extention!="jpg" && $extention!="png"){
    $flagSaveOk=false;
    $message.="نوع فایل باید jpg یا png باشد\n";
}

$upload=move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);
if($upload==false){
    $flagSaveOk=false;
    $message.="در آپلود فایل مشکل پیش آمد\n";
}

if($flagSaveOk){
$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"INSERT INTO `mahsolat`(`name`, `text`, `imageurl`) VALUES ('$name','$text','$imageurl');");
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
}else{
    echo($message);
}
?>
</div>
</div>

<?php
include("footer.html");
?>