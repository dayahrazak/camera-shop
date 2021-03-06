<!DOCTYPE html>
<html>
	<head>
		<title>Product Page</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styles/styles.css">
		 <link rel="stylesheet" type="text/css" href="frontEnd.css">
		<script src="scripts/jquery.js"></script>
		
		<script src="scripts/modernizr.js"></script>
	</head>


<header>
<img src="img/marvel.png" alt="logo">
</header>

<?php 

    include('main-menu.php')
?>
<nav id="search-nav">
  <center>
    <form method="post" action="search-result.html">
      <input type="text" name="keyword" placeholder="Type an item">
      <select>
        <option value="camera">Camera</option>
        <option value="lense">Lenses</option>
        <option value="accesories">Accesories</option>
        <option value="mercedes">Others</option>
      </select>
      <button type="submit" name="search">Search</button>
    </form>
  </center> 
</nav>


	<body>
		<div class="product clear">
			<header>
				<hgroup>
					<h1>Canon Eos 5D</h1>
					<h4>The most amazing Camera.</h4>
				</hgroup>
			</header>
			<figure>
				<img src="img/details-camera.png">
			</figure>
			<section>
				<p>The faster dual-core A5 chip. The 25MP camera with all-new optics also shoots 1080p HD video. It's the most amazing Camera yet.</p>
				<details>
					<summary>Product Features</summary>
						<ul>
							<li>20 mega pixel camera with full 1080p video recording</li>
							<li>Auto Focus</li>
							<li>Large Capacity</li>
							<li>Nice</li>
							<li>Retina display</li>
							<li>Photo and video geotagging</li>
						</ul>
				</details>
				<a href="shopping-cart.html"><button >Add to Cart</button></a>
				 
			</section>
		</div>
		<script>
			if ($('html').hasClass('no-details')) {
				
				var summary = $('details summary');

				summary.siblings().wrapAll('<div class="slide"></div>');

				$('details:not(.open) summary').siblings('div').hide();

				summary.click(function() { 
					$(this).siblings('div').toggle();
	          			$('details').toggleClass('open');
       			});
			 }
		</script>

	</body>
	
</html>