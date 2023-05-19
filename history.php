<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Money Bank</title>
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<style>
    *{
  font-family: 'Montserrat', sans-serif;
}
.welcome h2{
    margin: 10px;
    padding: 5px;
    text-align: center;
    background-color:#C9EEFF ;
    border-radius: 10px;
  }
  
  .welcome h2:hover{
    transform: scale(1.01);
    background-color: #97DEFF;
  }
  .footer{
    width: 100%;
    background-color: #C9EEFF;
    position: fixed;
    bottom: 0;
    text-align: center;
    padding: 15px ;
}
.home{
    width:40px;
    height:30px;
    float:right;
    margin-right: 20px;
    border-radius:50%;
    background-color:#EB455F;
}
</style>

<body>
    <!-- Nav bar -->
    
<class class="welcome">
        <h2>
            <img src="logos/t1.png" alt="Bank" width="75" height="75" style="font-weight: bold;"> <strong>Transaction History</strong> <img
                src="logos/t2.webp" alt="Bank" width="75" height="75">
        </h2>
    </class>
 
        <!-- options -->
<div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
    <a href="money.php"><button type="button" class="btn btn-warning btn-lg mb-3">Click Here to Transfer Money</button></a>
</div>


<!-- Table -->
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped">
        <thead style="color : black;" class="table-danger">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'connect.php';

$sql ="SELECT * FROM transaction";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr style="color : black;">
            <td class="text-center py-2"><?php echo $rows['sno']; ?></td>
            <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
            <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
            <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
            <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
}

        ?>
        </tbody>
    </table>

    </div>
</div>
<footer class="footer">
     
  
    <div class="legal">
    <p>&copy; 2023 Sahil Kasekar. All rights reserved. <a href="index.php"><span class="home"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-up" viewBox="0 0 15 15">
  <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 1 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.707l1.5-1.5a.5.5 0 0 1 .708 0Z"/>
</svg></span></a></p>

    
    </div>
   </footer>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
</body>

</html>