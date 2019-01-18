<form action="test11_2.php" method="post" enctype="multipart/form-data">
画像ファイル<br>
<input type="file" name="pic">
<br>
<input type="submit" name="botan" value="send">
</form>
<?php
$img = base64_encode(file_get_contents('1125685i.jpg'));
echo $img;
print "<BR>";

?>