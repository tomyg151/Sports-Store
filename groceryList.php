<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    
    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">

    <title>Wish list</title>
    <link rel="stylesheet" href="Style.css">


    <title>GL</title>
    <link rel="stylesheet" href="Style.css">
    <header>
        <h1>
            grocery list
        </h1>
    </header>
    <style>
        body {
        background-image: url('https://previews.123rf.com/images/_ig0rzh_/_ig0rzh_1412/_ig0rzh_141200006/34369562-abstract-sports-background-basketball-with-reflection-orange-and-blue-glowing-lights.jpg');
        padding-left: 11em;
        padding-right: 20em;
        font-family:
        Georgia, "Times New Roman",
        Times, serif; 
        }
        h1{
    text-align: center;
    background-color: cornflowerblue; 
}

h2{
    text-align: center;
    background-color: cornflowerblue; 
}
select { width: 400px; text-align-last:center; }
select { width: 150px;
         margin-left: 530px; 
         
} 
h3{
    background-color: cornflowerblue; 
}
table{
    margin-left: auto;
    margin-right: auto;
    border-color: black;
    background-color: cornflowerblue; 
    
}
</style>
</head>
<body>
    <table border="4">
        <tr>
            <td>
                <form id="fupForm" name="form1" method="post">
                <legend>Edit Grocery List: </legend>
                <div class="field">
                    <label ><span>*</span> Product name: </label><br>
                    <input type="text" id="Pname" name="Pname" placeholder="Type to search..." class="form-control" required>
                    <input type="button" name="Pdelete" class="btn btn-primary" value="delete" id="Pdelete"><br><br>
                </div>
                <div class="field">
                    <label>New Amount:</label><br>
                    <input type="text" id="Namount" required>
                </div><br><br>
                <div class="field">
                    <label>New name:</label><br>
                    <input type="text" id="Nname" required>
                </div><br><br>
                <input type="reset" value=" reset"> <input type="button" name="edit" class="btn btn-primary" value="save edit" id="edit"><br><br>
                <a href="WishList.php"><input href="WishList.php" type="button" value="go to wishList" class="btn btn-primary" ></a>
                </form> 
            </td>
        </tr>
    </table>


    



    <script type="text/javascript">

    $(function() {
        $( "#Pname" ).autocomplete({
        source: 'ajax-product-search.php',
        });     
    }); 
    
        

            $(document).ready(function() {
	$('#edit').on('click', function() {
		$("#edit").attr("disabled", "disabled");
		var Pname = $('#Pname').val();
		var Namount = $('#Namount').val();
        var Nname = $('#Nname').val();
		
		if(Pname!="" && Namount!="" && Nname != ""){
			$.ajax({
				url: "edit.php",
				type: "POST",
				data: {
					Pname: Pname,
					Namount: Namount,
                    Nname: Nname,		
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#edit").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Product changed successfuly !');
                        alert("Product changed successfuly");

					}
					else if(dataResult.statusCode==201){
                       $("#edit").removeAttr("disabled");
					   alert("product does not exist in the grocery list");
					}
					
				}
			});
		}
		else{
            $("#edit").removeAttr("disabled");
			alert('Please fill all the field !');
		}
	});
   
});

$(document).ready(function() {
	$('#Pdelete').on('click', function() {
		$("#Pdelete").attr("disabled", "disabled");
		var Pname = $('#Pname').val(); 
		
		if(Pname!=""){
			$.ajax({
				url: "delete.php",
				type: "POST",
				data: {
					Pname: Pname,					
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#Pdelete").removeAttr("disabled");
                        alert("Product deleted succesfully");
					}
					else if(dataResult.statusCode==201){
                       $("#Pdelete").removeAttr("disabled");
					   alert("Product dosent exist");
					}
					
				}
			});
		}
		else{
            $("#Pdelete").removeAttr("disabled");
			alert('Please fill the product name');
		}
	});
   
});


    </script>
</body>
<footer >
    <table border="4">
        <tr>
            <td bgcolor="lightgreen" style="width: 1500px; height:50px;" ><h2 id="middle">Emek israel instetute ©</h2></td>
        </tr>
    </table>
</footer>
</html>