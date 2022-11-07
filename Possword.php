<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Possword</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <header>
        <h1>
            possword Page
        </h1>
    </header>
    <style>
        h1{
    text-align: center;
    background-color: cornflowerblue; 
}

h2{
    text-align: center;
    background-color: deepskyblue;
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
            body {
        background-image: url('https://previews.123rf.com/images/_ig0rzh_/_ig0rzh_1412/_ig0rzh_141200006/34369562-abstract-sports-background-basketball-with-reflection-orange-and-blue-glowing-lights.jpg');
        padding-left: 11em;
        padding-right: 20em;
        font-family:
        Georgia, "Times New Roman",
        Times, serif; 
        }
        form{
            background-color: cornflowerblue; 
        }
        

</style>
</head>
<body>
    <form id="fupForm" name="form1" method="post">
    <div class="field">
    <label><span>*</span>password:</label><br>
    <input type="text" id="password" required><br><br>
    </div>
    <div class="field">
    <label><span>*</span>Reapet your possword:</label><br>
    <input type="text" id="password2" required><br><br>
    </div>
    <input type="reset" value=" reset" class="btn btn-primary">
</form>
<br>
<input  type="button" name="save" class="btn btn-primary" value="done" id="butsave">


<script> 
    $(document).ready(function() {
     $('#butsave').on('click', function() {
        $("#butsave").attr("disabled", "disabled");
        var possword1 = document.getElementById("password").value;
        var possword2 = document.getElementById("password2").value;
        var possword = $('#password').val();
        

    

    if(possword!="" && possword1==possword2){
            $.ajax({
                url: "savePassword.php",
                type: "POST",
                data: {
                    possword: possword,
                                    
                },
                cache: false,
                success: function(dataResult){
                    var dataResult = JSON.parse(dataResult);
                    if(dataResult.statusCode==200){
                        $("#butsave").removeAttr("disabled");
                        $('#fupForm').find('input:text').val('');
                        $("#success").show();
                        $('#success').html('Data added successfully !'); 	
                        alert("password added succsesfully");
                        window.location.href = 'HomePage.php';					
                    }
                    else if(dataResult.statusCode==201){
                        alert("Error occured  !");
                    }
                
            }
        });
    }
    else{
        $("#butsave").removeAttr("disabled");
        alert('Please fill all the field and make sure the both password is the same!');
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