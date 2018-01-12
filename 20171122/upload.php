<?php  
  if($_FILES["file"]["error"]>0)
  echo "error".$_FILES["file"]["error"];
  else
  {
    echo "檔案名稱:".$_FILES["file"]["name"]."<br/>";
    echo "檔案種類:".$_FILES["file"]["type"]."<br/>";
    echo "檔案大小:".($_FILES["file"]["size"]/1024)."<br/>";
    echo "暫存名稱:".$_FILES["file"]["tmp_name"]."<br/>";
    move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
    echo '<img src="upload/'.$_FILES["file"]["name"].'"/>';
   
  }
?>