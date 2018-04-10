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

			$('#save').click(function(){
				saveComment();
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

			function saveComment()
			{
				$term = $('#term').val();
				$comment = $('#comment').val();
				$user = $('#user').val();
				$.ajax({
					  method: "POST",
					  url: "/save-comment",
					  data: { term: $term,
					          comment: $comment,
					          user: $user,
					          _token: '{{csrf_token()}}'
					        }
					})
					.done(function( msg ) {
					  	alert('Successfully saved.');
				  });
			}
		});
		
	</script>
</head>
<body>
<div id="header" style="padding: 40px;">
	<form id="search">
		<div class="row">
    		<div class="col-sm">
				<input class="form-control" type="text" name="term" id="term">
			</div>
			<div class="col-sm">
				<input type="button" name="submit" id="submit" class="btn btn-outline-primary" value="Search">
			</div>
			<div class="col-sm">
				<label>Enter your comment here:</label><br>
				<textarea name="comment" id="comment" class="form-control"></textarea><br>
				<label>Name (Optional)</label><br>
				<input type="text" name="user" id="user" class="form-control"><br>
				<input type="button" name="save" id="save" class="btn btn-outline-primary" value="Save">
			</div>
		</div>
	</form>
</div>

<div id="result" style="padding: 40px;">

</div>

</body>
</html>