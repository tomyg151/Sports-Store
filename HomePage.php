<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>home page</title>
    <link rel="stylesheet" href="Style.css">
    <header>
        <h1>
            Home Page
        </h1>
    </header>
    <style>
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
        body {
        background-image: url('https://previews.123rf.com/images/_ig0rzh_/_ig0rzh_1412/_ig0rzh_141200006/34369562-abstract-sports-background-basketball-with-reflection-orange-and-blue-glowing-lights.jpg');
        padding-left: 11em;
        padding-right: 20em;
        font-family:
        Georgia, "Times New Roman",
        Times, serif; 
        }

        input:invalid {
        background-color: #ffdddd;
        }
        form{
            background-color: cornflowerblue; 
        }
        form:invalid {
        border: 2px solid #020000;
        }

        input:valid {
        background-color: #ddffdd;
        }

        form:valid {
        border: 5px solid #ddffdd;
        
        }

        input:required {
        border-color: #800000;
        border-width: 3px;
        }

        input:required:invalid {
        border-color: #c00000;
        }
</style>
</head>
<body>
    <table border="4">
        <tr>
            <td>
                <form id="fupForm" name="form1" method="post">
                <legend>Details: </legend>
                <div class="field">
                    <label ><span>*</span> Email Adress: </label><br>
                    <input type="email" id="email" name="email" required><br><br>
                </div>
                <div class="field">
                    <label>password:</label><br>
                    <input type="text" id="password" required>
                </div><br><br>
                <input type="reset" value=" reset"><br><br>
                </form>
                <a href="Register.php"><input type="button" name="create_acount" class="btn btn-primary" value="create new acount" id="create_acount"></a>
                <input type="button" name="save" class="btn btn-primary" value="Login to shop" id="butsave">
                <a href="forget\forget-password.php"><input type="button" name="reset" class="btn btn-primary" value="Forgot password" id="Fpass"></a>
              
            </td>
        </tr>
    </table>

    <script> 
    
        

            $(document).ready(function() {
	$('#butsave').on('click', function() {
		$("#butsave").attr("disabled", "disabled");
		var email = $('#email').val();
		var password = $('#password').val();
		
		if(email!="" && password!=""){
			$.ajax({
				url: "Load.php",
				type: "POST",
				data: {
					email: email,
					password: password,
									
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#butsave").removeAttr("disabled");
						$('#fupForm').find('input:text').val('');
						$("#success").show();
						$('#success').html('Data added successfully !');
                        alert("Welocome");
                        var queryString = email
                        window.location.href = "WishList.php?para1=" + queryString;

 						
					}
					else if(dataResult.statusCode==201){
                       $("#butsave").removeAttr("disabled");
					   alert("Password or Email incorrect");
					}
					
				}
			});
		}
		else{
            $("#butsave").removeAttr("disabled");
			alert('Please fill all the field !');
		}
	});
   
});

// $(document).ready(function() {
//     $('#Fpass').on('click', function() {
// 		$("#Fpass").attr("disabled", "disabled");
// 		var Nickname = prompt("Please enter your Nickname:", "NickName"); 
//         var Npassword = prompt("Please enter new password:", "New Password"); 
		
// 		if(Nickname!="" && Npassword!=""){
// 			$.ajax({
// 				url: "forgotPassword.php",
// 				type: "POST",
// 				data: {
// 					Nickname: Nickname,
// 					password: Npassword,
									
// 				},
// 				cache: false,
// 				success: function(dataResult){
// 					var dataResult = JSON.parse(dataResult);
// 					if(dataResult.statusCode==200){
// 						$("#Fpass").removeAttr("disabled");
//                         alert("Password changed succesfully");
// 					}
// 					else if(dataResult.statusCode==201){
//                        $("#Fpass").removeAttr("disabled");
// 					   alert("Nickname is incorrect");
// 					}
					
// 				}
// 			});
// 		}
// 		else{
//             $("#Fpass").removeAttr("disabled");
// 			alert('Please fill the answer');
// 		}
// 	});
   
// });

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