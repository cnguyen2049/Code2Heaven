<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Anime</title>
	<?php  include('include/nav.php');?>

<body class="animepage">
	<div class="container">
		<div class ="row">
		<div class="col-xs-6 col-xs-offset-3" style="background-color:white; margin-top:3em;">
			<ul class="nav nav-tabs-animehome" role="tablist" id="tabs">
				<li class ="active"><a data-toggle="tab" href="#Intro">Intro</a></li>
				<li><a data-toggle="tab" href="#List">List</a></li>
			</ul>
			<div id="content" class ="tab-content" >
				<div id="Intro" class="tab-pane fade in active">
					<p>Welcome to the Anime part of my website</p>
				</div>
		
				<div id="List" class="tab-pane fade">
					<div class = "lists">
						
						
							<div class="list-group">
								<a href="animecontent1.php" class="list-group-item-animehome">A</a>
								<a href="review2.php" class="list-group-item-animehome">B</a>
								<a href="#" class="list-group-item-animehome">C</a>
								<a href="#" class="list-group-item-animehome">D</a>
								<a href="#" class="list-group-item-animehome">E</a>
								<a href="#" class="list-group-item-animehome">F</a>
								<a href="#" class="list-group-item-animehome">G</a>
								<a href="#" class="list-group-item-animehome">H</a>
								<a href="#" class="list-group-item-animehome">I</a>
								<a href="#" class="list-group-item-animehome">J</a>
							</div>
						
					</div>
				</div>
			</div>
		</div>
		</div>
	</div>
	<div>
		<p class="text-center">
		<?php include('include/footer.php');?>
		</p>
	</div>

</body>

</html>