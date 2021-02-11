<html>
<head>
<title>Landing|Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
<!-- Favicons -->
<meta name="theme-color" content="#7952b3">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light border-bottom shadow-sm">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Carousel</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		        	<span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarCollapse">
			      	<ul class="navbar-nav me-auto my-2 my-md-0 me-md-3">
				        <li class="nav-item active">
				           <a class="nav-link" aria-current="page" href="#">Home</a>
				        </li>
				        <li class="nav-item">
				           <a class="nav-link" href="#">Link</a>
				        </li>
				        <li class="nav-item">
				           <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				        </li>
				    </ul>
				    <!-- <i class="fas fa-sign-in-alt"></i> -->
 					<span><a href="#"><i class="far fa-sign-in"></i></a></span>
		        </div>	
			</div>
		</nav>
	</header>
	<main>
		<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
		    <ol class="carousel-indicators">
		      	<li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
		      	<li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
		      	<li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
		    </ol>
		    <div class="carousel-inner">
		      <div class="carousel-item active">
		        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

		        <div class="container">
		          <div class="carousel-caption text-start">
		            <h1>Example headline.</h1>
		            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
		          </div>
		        </div>
		      </div>
		      <div class="carousel-item">
		        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

		        <div class="container">
		          <div class="carousel-caption">
		            <h1>Another example headline.</h1>
		            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
		          </div>
		        </div>
		      </div>
		      <div class="carousel-item">
		        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
		        <div class="container">
		          <div class="carousel-caption text-end">
		            <h1>One more for good measure.</h1>
		            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
		            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
		          </div>
		        </div>
		      </div>
		    </div>
		    <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
		      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		      <span class="visually-hidden">Previous</span>
		    </a>
		    <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
		      <span class="carousel-control-next-icon" aria-hidden="true"></span>
		      <span class="visually-hidden">Next</span>
		    </a>
		</div>
	</main>
	<main>
		<div class="container marketing">
			<div class="row">
				<div class="col-lg-4">
			        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
			        <h2>Heading</h2>
			        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
			        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			      </div><!-- /.col-lg-4 -->
			      <div class="col-lg-4">
			        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

			        <h2>Heading</h2>
			        <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
			        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			      </div><!-- /.col-lg-4 -->
			      <div class="col-lg-4">
			        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>
			        <h2>Heading</h2>
			        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
			        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
			     </div>
		    </div>
		    <hr class="featurette-divider">
		</div>	
	</main>	
	<main>
		<div class="container">
			<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
		    	<h1 class="display-4">Pricing</h1>
		    	<p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
		  	</div>
			<div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
				<div class="col">
				    <div class="card mb-4 shadow-sm">
				      <div class="card-header">
				        <h4 class="my-0 fw-normal">Free</h4>
				      </div>
				      <div class="card-body">
				        <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
				        <ul class="list-unstyled mt-3 mb-4">
				          <li>10 users included</li>
				          <li>2 GB of storage</li>
				          <li>Email support</li>
				          <li>Help center access</li>
				        </ul>
				        <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
				      </div>
				    </div>
				</div>
				<div class="col">
      				<div class="card mb-4 shadow-sm">
      					<div class="card-header">
        					<h4 class="my-0 fw-normal">Pro</h4>
      					</div>
      					<div class="card-body">
        					<h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
					        <ul class="list-unstyled mt-3 mb-4">
					          <li>20 users included</li>
					          <li>10 GB of storage</li>
					          <li>Priority email support</li>
					          <li>Help center access</li>
					        </ul>
					        <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
      					</div>
    				</div>
    			</div>
    			<div class="col">
					<div class="card mb-4 shadow-sm">
					    <div class="card-header">
					        <h4 class="my-0 fw-normal">Enterprise</h4>
					    </div>
					    <div class="card-body">
					        <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
					        <ul class="list-unstyled mt-3 mb-4">
					          <li>30 users included</li>
					          <li>15 GB of storage</li>
					          <li>Phone and email support</li>
					          <li>Help center access</li>
					        </ul>
					        <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
					    </div>
					</div>
				</div>	
			</div>
			<hr class="featurette-divider">
		</div>
	</main>
	<main class="container">
		<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
		    <div class="col-md-5 p-lg-5 mx-auto my-5">
		      <h1 class="display-4 fw-normal">Punny headline</h1>
		      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
		      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
		    </div>
		    <div class="product-device shadow-sm d-none d-md-block"></div>
		    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
		</div>
		<hr class="featurette-divider">
	</main>
	<footer class="footer mt-auto py-3 bg-light">
		<div class="container">
			<p class="float-end"><a href="#">Back to top</a></p>
    		<p>&copy; 2017-2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>	
		</div>		
	</footer>
	<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>