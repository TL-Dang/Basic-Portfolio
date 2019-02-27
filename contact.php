<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Contact</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
	<nav id="masthead" class="navbar navbar-default navbar-expand-lg navbar-dark navbar-fixed-top">
		<div class="container">
			<a id="logo" class="navbar-brand" href="index.html"><strong>Tommy Dang</strong></a>
			<button class="navbar-toggler mr-3" type="button" data-toggle="collapse"
				data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="cust-nav-a cust-nav-a-first" href="./index.html">About <span
								class="sr-only">(current)</span></a></li>
					<li class="nav-item"><a class="cust-nav-a" href="./portfolio.html">Portfolio</a></li>
					<li class="nav-item"><a class="cust-nav-a" href="./contact.php">Contact</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div id="main-container" class="container">
		<section class="main-section">
			<h1>Contact</h1>

			<form id="contact-form" action="contactform.php" method="post">
				<ul>
					<li>
						<label for="name">Name</label>
						<input type="text" id="name" name="name" placeholder="Type Name" required="required">
					</li>
					<li>
						<label for="email">Email</label>
						<input type="email" id="email" name="email" placeholder="email123@aol.com" required="required">
					</li>
					<li>
						<label for="subject">Subject</label>
						<input type="text" id="subject" name="subject" placeholder="Type Subject" required="required">
					</li>
					<li>
						<label for="message">Message</label>
						<textarea id="message" name="message" placeholder="Leave Message" required="required"></textarea>
					</li>
				</ul>
				<input type="submit">
			</form>

		</section>

	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
		integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
		crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
</body>

</html>