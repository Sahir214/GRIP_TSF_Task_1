<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query);

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    //Conditions
    //For negative value
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Negative value cannot be transferred !")';
        echo '</script>';
    }
    //Insufficient balance
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Sorry! you have insufficient balance !")';
        echo '</script>';
    }
    //For 0 (zero) value
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Zero value cannot be transferred !')";
         echo "</script>";
     }


    else {
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($conn,$sql);
             
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `balance`) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successfully !');
                                     window.location='history.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

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
    padding: 13px ;
}
.top i{
	padding: 10px;
	border-radius: 8px;
	font-size: 15px;
	color: blue;
	background: var(--main-color);
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
            <img src="logos/m1.webp" alt="Bank" width="75" height="75" style="font-weight: bold;"> <strong>Money
                Transfer</strong> <img src="logos/m2.webp" alt="Bank" width="75" height="75">
        </h2>
    </class>

    <!-- options -->
    <div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">

        <a href="history.php"><button type="button" class="btn btn-primary btn-lg mb-3">See all Transaction History</button></a>
    </div>
    </div>

 <!-- Table -->
 <div class="container">
        <h2 class="text-center pt-4" style="color : black;">Customer Details</h2>
            <?php
                include 'connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-hover">
                <tr style="color : black;" class="table-primary">
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr style="color : black;">
                    <td class=" text-center py-2"><?php echo $rows['id'] ?></td>
                    <td class=" text-center py-2"><?php echo $rows['name'] ?></td>
                    <td class=" text-center py-2"><?php echo $rows['email'] ?></td>
                    <td class=" text-center py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <h2 class="text-center pt-4" style="color : black;">Transer Money Here !</h2>
        <label style="color : black;"><strong>Transfer To:</strong></label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'connect.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label style="color : black;"><strong>Amount:</strong></label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
                <div class="text-center" >
                <button class="btn btn-outline-dark mb-3" name="submit" type="submit" id="myBtn" >Fill the Amount and Transfer</button>
            </div>
        </form>
       
    </div>    
    
    
    
        <br><br><br>
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