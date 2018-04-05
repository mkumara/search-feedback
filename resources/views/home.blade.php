<!DOCTYPE html>
<html>
<head>
	<title>Search Feedback</title>
	<link rel="style/css" >
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){

			$('#submit').click(function(){
				getData();
			});

			$('#term').keydown(function(){
				getData();
			});

			$('#term').keypress(function(event){
			
  				if ( event.which == 13 ) {
     						event.preventDefault();
     						getData();
 					}
			});

			function getData()
			{
				$term = $('#term').val();
				$.ajax({
					  method: "GET",
					  url: "/search",
					  data: { term: $term }
					})
					  .done(function( msg ) {
					  	$('#result').html(msg);
				  });
			}
		});
		
	</script>
</head>
<body>
<div id="header">
	<form id="search">
		<div class="row">
    		<div class="col-sm">
				<input class="form-control" type="text" name="term" id="term">
			</div>
			<div class="col-sm">
				<input type="button" name="submit" id="submit" class="btn btn-outline-primary" value="Search">
			</div>
		</div>
	</form>
</div>

<div id="result" style="padding: 40px;">

</div>

</body>
</html>