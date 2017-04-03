
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Linking</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Theme CSS -->
    <link href="css1/header_footer.css" rel="stylesheet">
	<style>
	
	.col-md-6{
	 border : 3px solid black;
	 height : 900px;
	 
	}
	
	#home {
	
	color: orange;

	}
    #About {
		height : 900px;
	}
	
	</style>
    
</head>

<body>

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-menu">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="home.php">Linking Demand and Supply</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="collapse-menu">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a id = "home" class="page-scroll" href="#">Home</a>
                    </li>					
					<li>
                        <a class="page-scroll" href="#About">About</a>
                    </li> 
					<li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
	<section>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h3>I NEED A WORKER</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-md-6">
      <h3>I AM A WORKER</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
	  
  </div>  
</div>

<div class="jumbotron text-center" id="About">
  <h1>About</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>

<div class="jumbotron text-center" id="contact">
  <h1>contact</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
    </section>
	
	<footer>
		<p>Linking Demand and Supply &copy; 2017</p>
	</footer>
	
	<!-- jQuery -->
    <script src="jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>


    <!-- Theme JavaScript -->
    <script src="js/rohini.js"></script>
</body>
</html>