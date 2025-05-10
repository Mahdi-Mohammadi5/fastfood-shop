<?php
include("header.php");

if(isset($_SESSION["admin"]) && $_SESSION["admin"]==true){
}else{
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
}
?>

<div class="row">
    <div class="col">
    <button class="btn btn-primary"><a href="newlist.php">افزودن</a></button>
    <span>لیست محصولات</span>
    </div>
</div>


<?php
$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"SELECT * FROM `mahsolat`");
mysqli_close($link);

$row=mysqli_fetch_array($result);
while($row){
?>
<div class="row">
    <div class="col">
        <button class="btn btn-primary"><a href="editlist.php?id=<?php echo($row["id"]); ?>" id="n2">ویرایش</a></button>
        <button class="btn btn-primary"><a href="deletelist.php?id=<?php echo($row["id"]); ?>" id="n1">حذف</a></button>
    <img class="mimage" src="<?php echo($row["imageurl"]); ?>" alt="">
    <span> <?php echo($row["name"]); ?> </span>
    <span> <?php echo($row["text"]); ?> </span>
    </div>
</div>
<?php
$row=mysqli_fetch_array($result);
}
?>

<?php
include("footer.html");
?>