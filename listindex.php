<?php
include("header.php");

$link=mysqli_connect("localhost","root","","fastfood shop");
$result=mysqli_query($link,"SELECT * FROM `mahsolat`");
mysqli_close($link);
?>
<div class="row">
    <div class="col">
    <span>لیست محصولات</span>
    </div>
</div>
<div class="row">
    <div class="col">
        <select name="" id="">
            <?php
            $row=mysqli_fetch_array($result);
            while($row)
            {
                ?>
                <option value="">
                        <?php echo($row["name"]);?>
                </option>
                <?php
                $row=mysqli_fetch_array($result);
            }
            ?>
        </select>
    </div>
</div>

<?php
include("footer.html");
?>