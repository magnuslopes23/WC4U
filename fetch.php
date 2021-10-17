<?php
//fetch.php
if(isset($_POST["id"]))
{
 $connect = mysqli_connect("localhost","id15478995_wecareforyou","Magnus@231012","id15478995_orphanage");
 $query = "SELECT * FROM events WHERE id = '".$_POST["id"]."'";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {
    $data["fullname"] = $row["fullname"];
    $data["event"] = $row["event"];
    $data["fees"] = $row["fees"];

}

 echo json_encode($data);
}
?>