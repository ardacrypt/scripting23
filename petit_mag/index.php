<!------------Connect o the database-->
    <?php
 // define variables and set to empty values
    $result = "";
    $category= "";
    if (isset($_POST['submit']) && $_POST["category"]!="") {
        $category = test_input($_POST["category"]);

        $servername = "localhost";
        $username = "ardaerta_codingUser";
        $password = "Nr{6!At%ae?B";
        $dbname = "ardaerta_coding";
    
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Check connection
        if ($conn->connect_error) {
            die ("Connection failed: " . $conn->connect_error);
        }
        //echo "Connected successfully";
        $sql = "SELECT * FROM `store` WHERE `category` LIKE '%$category%' ";
        $result = $conn->query($sql);
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Petit Magasin</title>

  <!--Font Awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!--BS Libraries-->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- custom CSS -->
  <link rel="stylesheet" href="css/myStyle.css">

  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Brand -->
	<div class="container-fluid sticky-top p-0 custom-Nav-Option">
	<div class="row m-0">
	<div class="col-lg-5 col-md-8 col-sm-8 col-6">
	<!-------------------Navbar---------------------------->
	<nav class="navbar navbar-expand-md mx-auto navbar-dark">
	<!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
	
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#header">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#inventory">Inventory</a>
        </li>
      </ul><!--new links are more <li> INSIDE of the <ul>-->
    </div>
	 </nav>
	</div>
	<div class="col-lg-2 col-md-4 col-sm-4 col-6 text-lg-center text-right">
	<a href="index.html"><img class="mt-2" src="images/logo.png" alt="logo"></a>
	</div>
	<div class="col-lg-5 col-md-0 col-sm-0 hide-sm-0">
	
	</div>
	</div>
	</div>
    

    
 

  <!--------------Ends Navbar---------------------------->

<!-------------- Header Section ----------------------->
  <header id="header">
  <video autoplay muted loop>
  <source src="video/header-video.mp4" type="video/mp4">
</video>
    <div class="container text-white custom_position">
      <div class="row m-0">
        <div class="col-12 my-auto">
		  <img src="images/logo-desktop.png" alt="Logo" />
          <p style="max-width: 400px;">Lorem Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
          <a href="#inventory" class="btn btn-primary d-md-block">SEE MORE</a>
        </div>
      </div>
    </div>
  </header>
  <!-------------- Ends Header Section ----------------------->
  
  <!-------------- About Section ----------------------->
  <section id="about" class="custom-back-about">
    <div class="container">
      <div class="row">
	  <div class="col-lg-6 col-md-6 my-auto">
		<div class="mx-auto text-black pt-5 pb-3">
		<h2 class="sub-heading border-bottom text-center">About Us</h2>
          <p>Hi, we are Adalene and Dominique.</p>
		  <p>We are the owners of Petit Magasin –We are so excited to share our journey with you all.</p>
		  <p>In 2001, we grew tired of our terrible boring desk jobs and started sewing and designing late into the nights. Over the next six years, 
		  we juggled our day jobs with our night jobs (our true passion), work by day, design and sew by night. And thus, Petit Magasin was born.</p>
		  <p>It wasn't until our first farmer's market, that we learned how fulfilling it was to sell our own projects to real, genuine, customers. 
		  Two weeks later we quit our terrible boring jobs and went full time with our company! </p>
		  <p>Between 2007-2017, we learned and honed our craft, set up our silk-screening studio, attended countless farmer's markets, craft shows, 
		  and music festivals. All of a sudden ten years have passed, but we wouldn't change a single second of it!</p>
		  <p>And now, it's time for a change. Participating in local events, near and far, fostered our love of local. 
		  The love of connecting one-on-one with customers and clients, sharing a mutual love for all things handcrafted. We took the plunge to open Petit Magasin
		  in Late 2016 and are excited to open the doors of our very first brick and mortar shop in March 2017. </p>
		  <p>Join us on this amazing new adventure! See you around our little shop!</p>
		</div>  
        </div>
        <div class="col-lg-6 col-md-6 my-auto py-2">
          <img src="images/owner1.jpg" alt="Image">
        </div>
        
      </div>
    </div>
  </section>
  <!-------------- Ends About Section ----------------------->

  <!-------------- About Store Section ----------------------->
  <section id="about-store" class="custom-bg-section">
    <div class="container-fluid p-0">
      <div class="row m-0">
        <div class="col-md-4 text-center p-5">
		<h2 class="m-0 text-white">Products</h2>
		<p class="m-0">new season</p>
        </div>
		<div class="col-md-4 text-center p-5 custom-bg-store">
          <h2 class="m-0">Stores</h2>
		<p class="m-0">choose now</p>
        </div>
		<div class="col-md-4 text-center p-5">
          <h2 class="m-0 text-white">Promos</h2>
		<p class="m-0">spring season</p>
        </div>
      </div>
    </div>
  </section>
  <!-------------- Ends About Store Section ----------------------->

  <!-------------- inventory Section ----------------------->
  <section id="inventory">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-12 col-sm-12 text-center">
          <h2 class="sub-heading border-bottom border-white mx-auto">Inventory</h2>
		  <p class="text-left mx-3">Lorem Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.Lorem ipsum dolor sit amet, 
		  consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
		  <p>CATEGORY search terms<br />
- Shirt<br />
- Cup<br />
- Sign</p>
		  <form class="form-inline my-5" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
  <div class="form-group col-sm-3 text-left text-white">
    <label class="mx-sm-auto">Category</label>
  </div>
  <div class="form-group col-sm-6">
    <input type="text" class="form-control" id="category" name="category" value="<?php echo $category; ?>">
  </div>
  <div class="form-group col-sm-3">
  <button type="submit" class="btn btn-primary" name="submit">Search</button>
  </div>
</form>
        </div>
		</div>
		
		    <?php
            if($result!=""){
            if ($result->num_rows > 0) { ?>
                <div class="row products-list">
               <?php
               while ($row = $result->fetch_assoc()) { 
                // output data
               ?>
                    
                  <div class="col-lg-4 col-md-6 col-sm-6">
			<img src="images/<?php echo $row["image"]; ?>" alt="<?php echo $row["product"]; ?>" />
			<h3 class="mt-2"><?php echo $row["product"]; ?></h3>
			<p class="mb-1"><?php echo $row["description"]; ?></p>
			<p class="mb-1 font-weight-bold"><?php echo $row["category"]; ?></p>
			<p class="font-weight-bold mb-5"><?php echo $row["price"]; ?></p>
			</div>
             
            <?php
                } ?>
                </div>
                <?php
            }
                 else { 
                ?>
                <div class="row products-list">
                <div class="col-md-12">
               <h4 class="text-center"><?php echo '0 results'; ?></h4>
                </div>
                </div>
        <?php    }
         $conn->close();
            }
              
            ?>
      </div>
    </div>
  </section>
  <!-------------- Ends Inventory Section ----------------------->

  <!------------------------------- Footer -------------------------------->
  <footer class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-12 mx-auto my-auto">
          <img src="images/footer-logo.png" alt="logo">
          <p class="mt-2" style="max-width: 400px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </p>
          <p class="font-weight-bold">Copyright &copy; 2024 - Arda Ertas</p>
        </div>

        <div class="col-lg-4 col-md-5 col-sm-12 text-md-right mt-3">
          <h3>Quick Links</h3>
          <!----------------------------- Quick Links --------------------------------->
		  <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#header">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#inventory">Inventory</a>
        </li>
      </ul><!--new links are more <li> INSIDE of the <ul>-->
        </div>
      </div>
    </div>
  </footer>
</body>

</html>