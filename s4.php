<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "signup");
$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM hotel 
  WHERE name LIKE '%".$search."%'
  OR address LIKE '%".$search."%'
  OR class LIKE '%".$search."%' 
  OR contact LIKE '%".$search."%' 
  OR price LIKE '%".$search."%' ORDER BY name DESC
 ";
}
else
{
 $query = "
  SELECT * FROM hotel ORDER BY name DESC";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{ 
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered"><h2>
    <tr>
     <th>Name</th>
     <th>Address</th>
     <th>Class</th>
     <th>Contact</th>
     <th>Price</th>
    </tr></h2>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["address"].'</td>
    <td>'.$row["class"].'</td>
    <td>'.$row["contact"].'</td>
    <td>'.$row["price"].'</td>
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