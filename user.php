<?php
require 'config.php';
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style>
        *{
            margin:0;
            padding:0;
        }
header{
    background-color:#00BFFF;
    margin-bottom:10px;
            padding:10px;
        display:block;

}
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;

  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 8px;
}
th{
    background-color:rgb(39, 39, 39);
    color:white;
}

tr:nth-child(even){
background-color: #f2f2f2;
}
a{
    text-decoration:none;
    color:white;
    background:crimson;
    outline:none;
    padding:3px;
}
button{
    text-decoration:none;
    color:black;
    background:crimson;
    outline:none;
    padding:3px;
    border:1px solid crimson;
    border-radius:2px;
}
img{
    width:50px;
    height:50px;
}
    </style>
</head>
<body>
    <header>
<h1>ADMIN PANEL</h1>
</BR>

</header>
<div class="column" >



<br>
<br>
<h3>COLLECTION</h3>
<br>
<?php
$no=1;
$result = mysqli_query($conn,"select * from form");
echo "<table border='1'>
<tr>
<th>S.NO.</th>
<th>NAME</th>
<th>PASSWORD</th>
<th>CONTACT NO.</th>
</tr>";

while($row = mysqli_fetch_array($result))
{

echo "<td>" . $no++ . "</td>";
echo "<td>" . $row['uname'] . "</td>";
echo "<td>" . $row['pass'] . "</td>";
echo "<td>" . $row['tel'] . "</td>";
echo "</tr>";
}
echo "</table>";

?>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>
