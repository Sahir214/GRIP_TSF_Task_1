<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Money Bank</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;

}

  .footer{
    width: 100%;
    background-color: #C9EEFF;
    position: fixed;
    bottom: 0;
    text-align: center;
    padding: 15px ;
}

.img1png{
    margin:100px 10px 10px 10px;
    width: 90%;   
}
h2{
  margin:100px 10px 10px 10px;
  text-align: center;
  font-size: 30px;
  font-style:italic;
}
span{
  color: #865DFF;
}
.button{
  margin:60px 10px 15px 10px;
}

.btn:hover{
  background-color: #97DEFF;
}
.tsf a{
  text-decoration: none;
}

.tsf img{
  max-width: 50px;
}
</style>


<body>

    <!-- Nav bar -->
    

    <nav class="navbar navbar-expand-lg navbar-light bg-info p-3">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">Money Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center " id="navbarNavDropdown">
      <ul class="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Actions
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="money.php">Money Transfer</a></li>
            <li><a class="dropdown-item" href="history.php">Transaction History</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- /////////// -->
<div class="container text-center">
  <div class="row">
    <div class="col-sm-12 col-md-6 col-lg-6 col-12">
      <img class="img1png" src="https://fintech.smartosc.com/wp-content/uploads/2022/05/image-91.png" alt="">
      <br>
      <br>
      <p class="tsf"><span><img src="logos/tsf.png" alt=""></span><span><a href="https://www.thesparksfoundationsingapore.org/" target="_blank">The Sparks Foundation</a></span></p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-12">
      <h2>Let's have look on <span>functionality</span></h2>
      <div class="button">
        <a href="money.php"><button type="button" class="btn btn-primary active m-1" >Money Transfer</button></a>
      
      <a href="history.php"><button type="button" class="btn btn-primary m-1"  >Transactions</button></a>

    </div>
      </div>
      
    
  </div>
</div>
   

     <!-- footer -->
<footer class="footer">
     
  
  <div class="legal">
    <p>&copy; 2023 Sahil Kasekar. All rights reserved.</p>
    
  </div>
</footer>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   
</body>

</html>