<?php
include("header.php");
?>

<center>
<?php
if (isset($_POST["email"]) && !empty($_POST["email"]) &&
isset($_POST["password"]) && !empty($_POST["password"])) {
$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]); 

$email=$_POST['email'];
$password=$_POST["password"];

$c=mysqli_connect("localhost","root","","fastfood shop");
$m=mysqli_query($c,"SELECT * FROM `peopele` WHERE `email`='$email' and `password`='$password'");
mysqli_close($c);

$r=mysqli_fetch_array($m);
if($r)
{
    $_SESSION["login"]=true;
    $_SESSION["admin"]=$r["admin"];
    ?>
    <script>
        location.replace("index.php");
    </script>
    <?php
}else
{
    echo("<p>ایمیل یا کلمه عبور صحیح نیست</p>");
}
}
else{
    echo("<p>پر کردن تمامی فیلدها الزامی می باشد</p>");
    }
    ?>
</center>

<?php
include("footer.html");
?>