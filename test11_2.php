<?php
if(strlen($_FILES["pic"]["name"])>0)
{
$img = base64_encode(file_get_contents('1125685i.jpg'));
$jsonstr=json_encode($img);
echo $jsonstr;
print "<BR>";

    
   print "name=";
   print $_FILES["pic"]["name"];
   print "<BR>";
   print "size=";
   print $_FILES["pic"]["size"];
   print "<BR>";
   print "tmp_=";
   print $_FILES["pic"]["tmp_name"];
   print "<BR>";
}
else
{
   print "ファイルをアプロードしてください";
}
?>