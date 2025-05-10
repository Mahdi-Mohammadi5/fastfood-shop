<?php
include("header.php");
?>

<center>
<?php
if (isset($_POST["name"]) && !empty($_POST["name"]) &&
isset($_POST["lastname"]) && !empty($_POST["lastname"]) &&
isset($_POST["email"]) && !empty($_POST["email"]) &&
isset($_POST["username"]) && !empty($_POST["username"]) &&
isset($_POST["password"]) && !empty($_POST["password"]) &&
isset($_POST["repassword"]) && !empty($_POST["repassword"])) {
$name = htmlspecialchars($_POST["name"]);
$lastname = htmlspecialchars($_POST["lastname"]);
$email = htmlspecialchars($_POST["email"]);
$username = htmlspecialchars($_POST["username"]);
$password = htmlspecialchars($_POST["password"]);
$repassword = htmlspecialchars($_POST["repassword"]);

if ($password !== $repassword) {
    ?>
    <script>
        location.replace("register.php");
        alert("کلمه عبور و تکرار کلمه عبور مانند یکدیگر نیست لطفا مجدداً تلاش کنید");
    </script>
    <?php
} else {
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];
    $email=$_POST["email"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $repassword=$_POST["repassword"];

    $c=mysqli_connect("localhost","root","","fastfood shop");
    $result=mysqli_query($c,"INSERT INTO `peopele` (`name`, `lastname`, `email`, `username`, `password`, `repassword`) 
    VALUES ('$name', '$lastname', '$email', '$username', '$password', '$repassword');");
    mysqli_close($c);

    if($result===true)
    {
        ?>
        <script>
            location.replace("login.php");
        </script>
        <?php
    }else
    {
        echo("در عملیات ثبت نام مشکلی پیش آمده ❌");
    }
}
} else {
    echo("<p>پر کردن تمامی فیلدها الزامی می باشد</p>");
}
?>
</center>

<?php
include("footer.html");
?>