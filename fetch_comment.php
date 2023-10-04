<?php
$conn = new PDO('mysql:host=localhost;dbname=db_civil', 'root', '');
$query = "
SELECT * FROM tbl_comment 
WHERE parent_comment_id = '0' 
ORDER BY comment_id DESC
";
$statement = $conn->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="card card-default mb-4">
  <div class="card-header">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
  <div class="card-body">'.$row["comment"].'</div>
 </div>
 ';
 $output .= get_reply_comment($conn, $row["comment_id"]);
}
echo $output;
function get_reply_comment($conn, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $conn->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="card card-default mb-4" style="margin-left:'.$marginleft.'px">
    <div class="card-header">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
    <div class="card-body">'.$row["comment"].'</div>
   </div>
   ';
   $output .= get_reply_comment($conn, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}
?>