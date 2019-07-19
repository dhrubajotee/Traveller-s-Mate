<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "signup");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM restaurant
  WHERE name LIKE '%".$search."%'
  OR type LIKE '%".$search."%' 
  OR address LIKE '%".$search."%'  
 ";
}
else
{
 $query = "
  SELECT * FROM restaurant ORDER BY id
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{ 
 $output .= '
  <div class="new">
     <table>
           <thead>
    <tr>
      <th>Name</th>
      <th>Cuisine</th>
      <th>Address</th>
    </tr>
  </thead>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
    <tr>
    <td><strong>'.$row["name"].'</strong></td>
    <td>'.$row["type"].'</td>
    <td>'.$row["address"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>