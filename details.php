<?php 
//details.php
$connect = mysqli_connect("localhost","id15478995_wecareforyou","Magnus@231012","id15478995_orphanage") or die("could not connect to db");
$query = "SELECT * FROM events ORDER BY fullname ASC";
$result = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/detail.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
   
    <title>WC4U</title>
<style>
  #result {
   position: absolute;
   width: 100%;
   max-width:870px;
   cursor: pointer;
   overflow-y: auto;
   max-height: 400px;
   box-sizing: border-box;
   z-index: 1001;
  }
  .link-class:hover{
   background-color:#f1f1f1;
  }
  </style>
</head>
<body style="background-color:black">
        <nav class="navbar">
            <div class="brand-title">WC4U</div>
                <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </a>
            <div class="navbar-links">
                <ul>
                    <li><a href="./index.html"> HOME</a></li>
                    <li><a href="./index.html#events">EVENT</a></li>
                    <li><a href="./index.html#donate">DONATE</a></li>
                    <li><a href="./index.html#contact">CONTACT</a></li>
                    <li><a href="signup.html">SIGN UP</a></li>
                </ul>
            </div>
        </nav>

            <br><br><br>
        <h1 style="color: #F7DC5F; text-align: center;">Events Registrations</h1>

        <div class="row">
    <div class="right">
     <select style="background-color:white; border-radius:8px; height:35px; width:400px;" name="donor_list" id="donor_list" class="form-control">
      <option value="">Select donor</option>
      <?php 
      while($row = mysqli_fetch_array($result))
      {
       echo '<option value="'.$row["id"].'" >'.$row["fullname"].'</option>';
      }
      ?>
     </select>
    </div>
    <style>
    .button {
        transition-duration: 0.4s;
        border:0px;
        height:35px;
        width:100px;
        background-color: #F7DC5F; 
        border-radius:8px;
    }

    .button:hover {
        background-color: black;
        color: white;
    }
    </style>
    <div class="left">
     <button type="button" name="search" id="search" class="button">Search</button>
    </div>
   </div>
   <br />
   <div class="table-responsive" id="donor_details" style="display:none">
   <table>
                    <tr>
                            <td width="10%" align="right"><b>full name</b></td>
                            <td width="90%"><span id="donor_fullname"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>events</b></td>
                            <td width="90%"><span id="donor_event"></span></td>
                        </tr><tr>
                            <td width="10%" align="right"><b>fees</b></td>
                            <td width="90%"><span id="donor_fees"></span></td>
                        </tr>
                    </table>
   </div>
   
  </div>
  <br><br><br>
  <h1 style="color: #F7DC5F; text-align: center;">Donor Reviews</h1>
  <style>
table {
    border-collapse: collapse;
    width: 60%;
    margin-left: auto;
    margin-right: auto;
    color: white;
    
    
  }
  
  th, td {
    text-align: left;
    padding: 18px;
    height: 10px;
    text-align:center;
  }
  
  tr:nth-child(even) {background-color: #4D3765;}
</style>

<table>
    <tr>
    <th>Name</th>
    <th>E_mail</th>
    <th>Review</th>
    </tr>
    <?php

        $conn = mysqli_connect("localhost","id15478995_wecareforyou","Magnus@231012","id15478995_orphanage");
        if($conn-> connect_error){
            die("Connection failed:". $conn-> connect_error);
        }
        $sql = "SELECT name,email, feedback FROM feedback";
        $result = $conn-> query($sql);

        if ($result-> num_rows >0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["feedback"]."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }
        $conn-> close();

    ?>
</table>
<br><br><br>
<h1 style="color: #F7DC5F; text-align: center;">Donations Entry</h1>
<table>
    <tr>
    <th>Name</th>
    <th>amount</th>
    </tr>
    <?php

        $conn = mysqli_connect("localhost","id15478995_wecareforyou","Magnus@231012","id15478995_orphanage");
        if($conn-> connect_error){
            die("Connection failed:". $conn-> connect_error);
        }
        $sql = "SELECT fullname, amount FROM donation";
        $result = $conn-> query($sql);

        if ($result-> num_rows >0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>".$row["fullname"]."</td><td>".$row["amount"]."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }
        $conn-> close();

    ?>
</table>
</body>
</html>
<script>
     const toggleButton = document.getElementsByClassName('toggle-button')[0];
        const navbarLinks = document.getElementsByClassName('navbar-links')[0];

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })
</script>

<script>
$(document).ready(function(){
 $('#search').click(function(){
  var id= $('#donor_list').val();
  if(id != '')
  {
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{id:id},
    dataType:"JSON",
    success:function(data)
                {
                    $('#donor_details').css("display","block");
                    $('#donor_fullname').text(data.fullname);
                    $('#donor_event').text(data.event);
                    $('#donor_fees').text(data.fees);
                   
                }
   })
  }
  else
  {
   alert("Please Select donor");
   $('#donor_details').css("display", "none");
  }
 });
});
</script>