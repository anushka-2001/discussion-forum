<?php include 'database.php'; ?>
<?php

    $query ="SELECT * FROM commune ORDER BY id desc";
    $shouts=mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Commune</title>
    <!-- Bootstrap core CSS -->
    <!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
 <div class="container-fluid">
             <a class="navbar-brand" href="#">Comm<span style="color:#58D68D">une</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#Forum">Forum</a>
        </li>
     
        
      </ul>
     
    </div>
  </div>
</nav>
<br>
<br>
<div class="container" style="position:center;">
  <div class="row">
    
    <div class="col">
      <div class="card" id="container" style="width:40em !important ">
      <div class="card-body">
      <div class="jumbotron">
       <header style=" padding:10px;"><h1 class="display-4">Discussion forum</h1></header>
        </div>  
        <div id="shouts" style="padding:10px; ">
        <ul style="list-style-type:none; margin-left:-2em; " id="access" >
        <?php while($row = mysqli_fetch_assoc($shouts)) : ?>
          <li class="shout" ><span style="color: grey;"><?php echo $row['time']?> - </span><span style="color: black; font-weight: 500;"> <?php echo $row['user']?></span> : <?php echo $row['message']?> </li>
        <?php endwhile; ?>
				</ul>
			</div>
			<div id="input">
        <!-- <?php if(!isset($_GET['error'])) :?>
          <div class ="error"> <?php echo $_GET['error']; ?> </div>
        <?php endif; ?> -->
				<form method="post" action="./process.php">
        <div class="row g-2">
          <div class="col-md">
          <div class="form-floating">
					<input type="text" id ="inp" class="form-control" placeholder="Jane Doe"required />
          <label for="floatingInputGrid">Name(optional)</label></div></div>
          <div class="col-md">
         <div class="form-floating">
          <input type="message" id ="inp" class="form-control" placeholder="enter message"required />
          <label for="floatingSelectGrid">Your message</label>
         </div>
         </div>

					<br />
					<!-- <button type="button" class="btn btn-info" style="background-color:#58D68D" type="submit" name="submit"> Post </button> -->
          <button  type="submit" name="submit" value="Post" type="button" class="btn btn-info" style="background-color:#58D68D" >Post</button>
				</form>
			</div>
</div>
      </div>
      </div>
    <div class="col">
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
