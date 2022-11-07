<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <header>
        <h1>
            Register
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
    label {
            display: block;
            margin: 1px;
            padding: 1px;
    }

    .field {
            margin: 1px;
            padding: 1px;
    }

    input:invalid {
            background-color: #ffdddd;
    }

     form:invalid {
            border: 5px solid #ffdddd;
            background-color: cornflowerblue; 
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
    <table>
        <tr>
            <td>
                <form id="fupForm" name="form1" method="post">
                <legend>Register detail: </legend>
                <div class="field">
                <label ><span>*</span> Email Adress: </label><br>
                <input type="email" id="email" name="email" required><br><br>
                </div>
                <div class="field">
                <label ><span>*</span>Enter email Adress again:</label><br>
                <input type="email" id="email2" name="email" required><br><br>
                </div>
                
                <label>Nickname:</label><br>
                <input type="text" id="nickname" value="nickname"><br><br>
                <label>phone number: </label><br>
                <input type="text" id="Phone"><br><br>
                <input type="reset" value=" reset"><br><br>
                </form>
               <input  type="button" name="save" class="btn btn-primary" value="sumbit" id="butsave">
                <a href="HomePage.php"><input  type="button" name="return" class="btn btn-primary" value="return" id="return"></a>
                
            </td>
        </tr>
    </table>
    <script> 
    
//     function EmailValidation(enteredEmail)
// {
//     var mail_format = /^w+([.-]?w+)*@w+([.-]?w+)*(.w{2,3})+$/;
//     if(enteredEmail.value.match(mail_format))
//         {
//         document.form1.text1.focus();
//         return true;
//     }
//     else{
//         alert("Sorry! an invalid email!");
//         document.form1.text1.focus();
//         return false;
//         }
//     }


        $(document).ready(function() {
	     $('#butsave').on('click', function() {
	    	$("#butsave").attr("disabled", "disabled");
            var email1 = document.getElementById("email").value;
            var email2 = document.getElementById("email2").value;
            var email = $('#email').val();
            var Nickname = $('#nickname').val();
           
            var Phone = $('#Phone').val();

		if(email!="" && Nickname!="" && Phone!=""  && email1==email2){
                $.ajax({
                    url: "save1.php",
                    type: "POST",
                    data: {
                        email: email,
                        Nickname: Nickname,
                        Phone: Phone,
                                        
                    },
                    cache: false,
                    success: function(dataResult){
                        var dataResult = JSON.parse(dataResult);
                        if(dataResult.statusCode==200){
                            $("#butsave").removeAttr("disabled");
                            $('#fupForm').find('input:text').val('');
                            $("#success").show();
                            $('#success').html('Data added successfully !'); 
                            alert("Data added successfully !");
                            window.location.href = 'possword.php';
                            // window.location = ('possword.php') 						
                        }
                        else if(dataResult.statusCode==201){
                            alert("Error occured, Email alredy exist !");
                        }
					
				}
			});
		}
		else{
            $("#butsave").removeAttr("disabled");
			alert('Please fill all the field and make sure the both emails is the same!');
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