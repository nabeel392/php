<!DOCTYPE html>
<html>
<head>
	<title>Insert data in MySQL database using Ajax</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div style="margin: auto;width: 60%;">
	<div class="alert alert-success alert-dismissible" id="success" style="display:none;">
	  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
	</div>
	<form id="fupForm" name="form1" method="post">
		<div class="form-group">
			<label for="email">Name:</label>
			<input type="text" class="form-control" id="name" placeholder="Name" name="name">
		</div>
        <div class="form-group">
			<label for="email">Fathername:</label>
			<input type="text" class="form-control" id="fname" placeholder="FatherName" name="fname">
		</div>
		<div class="form-group">
			<label for="pwd">Email:</label>
			<input type="email" class="form-control" id="email" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label for="pwd">Address:</label>
			<input type="text" class="form-control" id="address" placeholder="Address" name="address">
		</div>
        <div class="form-group">
			<label for="pwd">Password:</label>
			<input type="text" class="form-control" id="pass" placeholder="Password" name="pass">
		</div>
	
		<input type="button" name="save" class="btn btn-primary" value="Save to database" id="butsave">
	</form>
</div>


<script>
$(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var name = $('#name').val();
		var fname = $('#fname').val();
		var email = $('#email').val();
		var address= $('#address').val();
        var pass= $('#pass').val();
		if(name!="" && fname!="" && email!="" && address!="" && pass!=""){
			$.ajax({
				url: "save2.php",
				type: "POST",
				data: {
					name: name,
					fname: fname,
					email: email,
					address: address,
                    pass: pass				
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !'); 						
					}
					else if(dataResult.statusCode==201){
					   alert("Error occured !");
					}
					
				}
			});
		}
		else{
			alert('Please fill all the field !');
		}
	});
});
</script>
</body>
</html>
  