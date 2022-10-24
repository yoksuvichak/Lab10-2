<?php
$keyword = $_GET["keyword"];
$conn =mysqli_connect("localhost", "root", "", "blueshop");
if ($conn) {
    mysqli_select_db($conn,"blueshop");
    mysqli_query($conn,"SET NAMES utf8");
} else {
    echo mysql_errno(); 
}
if($keyword)
{
    $sql = "SELECT * FROM member WHERE name LIKE '%$keyword%'";
    $objQuery = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_array($objQuery))
    {
        ?>
        <br><img src="member_photo/<?=$row["name"]?>.jpg" width="100" style="margin-bottom:15 px;"><br><br>
        ชื่อสมาชิก:<?=$row["name"]?><br>
        ที่อยู่:<?=$row["address"]?><br>
        เบอร์โทร:<?=$row["mobile"]?><br>
        อีเมล์:<?=$row["email"]?><br>
        <?php
    }
} 
?>