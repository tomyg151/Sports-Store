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

    <header>
        <h1>
        Welcome to your Wish list
        </h1>
    </header>

             <a><img style="width: 300px; height: 300px; background-color: lightcoral;" src="ball.png" id="ball" >  </a>

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
    color:black;
}
table{
    margin-left: auto;
    margin-right: auto;
    border-color: black;
    background-color: cornflowerblue; 
    
}

</style>
</head>
<body >
<br>
  <a href="groceryList.php"> <h3>edit your grocery list:<input type="button" value="grocery list" class="btn btn-primary"></h3></a>
    <h3>Product name:</h3><input type="text" id="searchP" name="search" placeholder="Type to search..." class="form-control">
    <h3>Amount:</h3><input type="text" id="amountP" name="amount" placeholder="5">
    <input  type="button" id="AddP" value="Add product" class="btn btn-primary">

    <br><br>
<table border="5"  class="table1">
    <tr>
    <td id="sb" class="sb"> <p class="newarrival text-center">NEW</p> <span>soccer ball</span>
        <a><img src="soccerball.png" class="soccerball" ></a><br>
        &nbsp;&nbsp;&nbsp;<input type="number" id="n1" name="number">
        &nbsp;  <input  type="button" id="delete" class="delete1" value="Delete product" onclick="remove('soccer ball','.sb','.delete1')"> 
    &nbsp;&nbsp;<input type="button" id="add1" value="Add product" class="add1">  
        </td>
    <td id="bb" class="bb"> <p class="newarrival text-center">NEW</p> <span> basket ball</span> 
        <a><img src="Basketball.jpg" class="basketball"></a> <br> 
        &nbsp;&nbsp; <input type="number" id="n2" name="number">&nbsp;&nbsp;
           <input  type="button" id="delete" class="delete2" value="Delete product" onclick="remove('basket ball','.bb','.delete2')">
           &nbsp;&nbsp;<input  type="button" id="Add2" value="Add product" class="add2"></td>

    <td id="wpb" class="wpb"> <p class="newarrival text-center">NEW</p> <span>water polo ball</span>
        <a><img src="waterpolo.png" class="waterpolo"></a><br>
        &nbsp;&nbsp;&nbsp;<input type="number" id="n3" name="number">&nbsp;&nbsp;
        <input type="button" id="delete-wbp" class="delete3" value="Delete product" onclick="remove('water polo ball','.wpb','.delete3')">
        &nbsp;&nbsp;<input  type="button" id="Add3" value="Add product" class="add3">
    </td>
    </tr>
    <tr>
        <td id="afb" class="afb"> 
            <span>american foot ball</span> 
            <a><img src="football.png.png" class="football"></a><br>
           &nbsp;&nbsp; <input type="number" id="n4" name="number">&nbsp;&nbsp;
            <input type="button" id="delete-fb" class="delete4" value="Delete product" onclick="remove('american foot ball','.afb','.delete4')">
            &nbsp;&nbsp;<input  type="button" id="Add4" value="Add product" class="add4">
        </td>
        <td id="hbb" class="hbb"><span>hand ball </span><a>
            <img src="handball.png" class="handball"></a><br>
            &nbsp;&nbsp; <input type="number" id="n5" name="number">&nbsp;&nbsp;
             <input type="button" id="delete-hb" class="delete5" value="Delete product" onclick="remove('hand ball','.hbb','.delete5')">
             &nbsp;&nbsp;<input  type="button" id="Add5" value="Add product" class="add5">
             </td>
             <td id="tb" class="tb"><span>tennis ball </span>
            <a><img src="tennisball.png" class="tennis-ball"></a><br>
            &nbsp;&nbsp;
            <input type="number" name="number" id="n6">
            &nbsp;&nbsp;
            <input type="button" id="delete-tb" class="delete6" value="Delete product" onclick="remove('tennis ball','.tb','.delete6')">
            &nbsp;&nbsp;<input  type="button" id="Add6" value="Add product" class="add6">
            </td>
    </tr>
</table>
    

  <br><br>


  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <h3>To recover last list type requierd date: Date: <input id="Rdate" type="text" name="Rdate" placeholder="yyyy-mm-dd"><input type="submit"></h3>
        
    </form>
    <br>
    <h3>to continue your purchasing click here:<input type="button" id="newlist" value="Insert new list" onclick=eemail()></h3
   


    <table id="centerit">
        <tr>
            <td>
                <fieldset class="gl">
                    <legend id="gl" >New list:</legend>
                    <div id = "soccer ball"> </div>
                    <div id = "basket ball"> </div>
                    <div id = "water polo ball"> </div>
                    <div id = "american foot ball"> </div>
                    <div id = "hand ball"> </div>
                    <div id= "tennis ball"></div>
                </fieldset>
            </td>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;
            </td>
            <td>
            <fieldset>
                    <legend id="gl" >Last list:</legend>
                    <?php
                    include 'dbConnection.php';
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // collect value of input field
                        $Rdate = $_POST['Rdate'];
                        $result = mysqli_query($conn,"SELECT * FROM `products` WHERE `date`='$Rdate'");
                        $datas = array();
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
                                $datas[]=$row;
                                }
                        foreach($datas as $data){
                        print $data['name']." ".$data['amount']." "."<br>";
                            }
                      }
                 }
                ?>
                </fieldset>

            </td>
        </tr>
    </table>
    
    <br><br>
    <button id="show-popup-buy-successfuly" class="show-popup-buy-successfuly">buy!</button>
    &nbsp;&nbsp; 
    <input type="button" id="clear" value="clear list" onclick="clearlist()" >
    <div id="popup-container">
        <div id="close-btn-container">
            <span id="close-btn">close</span>
        </div>
        <h2>purchase as done</h2>
        <p>the purchase as done successfuly</p>
    </div>

  
<footer >
    <table border="4">
        <tr>
            <td bgcolor="lightgreen" style="width: 1500px; height:50px;" ><h2 id="middle">Emek israel instetute ©</h2></td>
        </tr>
    </table>
</footer>


<script type="text/javascript">

  $(function() {
     $( "#searchP" ).autocomplete({
       source: 'ajax-product-search.php',
     });     
  });


    $(document).ready(function(){
        $("#show-popup-buy-successfuly").click(function(){
            $("#popup-container").show();
        })
    })
  
    $("#close-btn").click(function(){
        $("#popup-container").hide();
    })

//Getting the email.
    var queryString = decodeURIComponent(window.location.search);
    queryString = queryString.substring(1);
    var queries = queryString.split("=");
    var email = queries[1];
    console.log(email);
    
    function eemail(){
        email = prompt("type your email","example@email.com");
    }
    console.log(Rdate);

    $( document ).ready(function() {
  $( ".add1" ).click(function() {
    $( ".sb" ).css('background', 'green');
  });
});


$( document ).ready(function() {
  $( ".add6" ).click(function() {
    $( ".tb" ).css('background', 'green');
  });
});

$( document ).ready(function() {
  $( ".add2" ).click(function() {
    $( ".bb" ).css('background', 'green');
  });
});

$( document ).ready(function() {
  $( ".add3" ).click(function() {
    $( ".wpb" ).css('background', 'green');
  });
});


$( document ).ready(function() {
  $( ".add4" ).click(function() {
    $( ".afb" ).css('background', 'green');
  });
});


$( document ).ready(function() {
  $( ".add5" ).click(function() {
    $( ".hbb" ).css('background', 'green');
  });
});



    productArray = [];
    $("#add1").click(()=>{
        productArray.push({name: "soccer ball",number: $("#n1").val()})
        document.getElementById("soccer ball").innerHTML = "soccer ball"+" "+$("#n1").val()
    });
    $("#Add2").click(()=>{
        productArray.push({name: "basket ball",number: $("#n2").val()})
        document.getElementById("basket ball").innerHTML = "basket ball "+$("#n2").val()
    });
    $("#Add3").click(()=>{
        productArray.push({name: "water polo ball",number: $("#n3").val()})
        document.getElementById("water polo ball").innerHTML = "water polo ball "+$("#n3").val()
    });
    $("#Add4").click(()=>{
        productArray.push({name: "american foot ball",number: $("#n4").val()})
        document.getElementById("american foot ball").innerHTML = "american foot ball "+$("#n4").val()
    });
    $("#Add5").click(()=>{
        productArray.push({name: "hand ball",number: $("#n5").val()})
        document.getElementById("hand ball").innerHTML = "hand ball "+$("#n5").val()
    });
    $("#Add6").click(()=>{
        productArray.push({name: "tennis ball",number: $("#n6").val()})
        document.getElementById("tennis ball").innerHTML = "tennis ball"+" "+$("#n6").val()
    });

    function remove(check,x,y) {
        if(confirm("Are you sure you want to remove?")){
            $( document ).ready(function() {
                    $( x ).css('background', 'coral');
            });    
        document.getElementById(check).innerHTML = ""
        for( var i = 0; i < productArray.length; i++){ 
            if ( productArray[i].name === check) {
            productArray.splice(i, 1); 

            }
            else{
                txt = "you pressed cancel!!!";
            }
    }
    }
}

$( document ).ready(function() { 
    $("#add1").click(function(){
        $("right-photo").show();
    })
})


$( document ).ready(function() {
  $( ".show-popup-buy-successfuly" ).click(function() {
    $( ".gl" ).css('background', 'red');
  });
});


    function clearlist(){
        if(confirm("Are you sure you want to clear the list?")){
        document.getElementById("soccer ball").innerHTML="";
        document.getElementById("basket ball").innerHTML="";
        document.getElementById("water polo ball").innerHTML="";
        document.getElementById("american foot ball").innerHTML="";
        document.getElementById("hand ball").innerHTML="";
        document.getElementById("tennis ball").innerHTML="";
        $( document ).ready(function() {
                    $( '.sb').css('background', 'coral');
            });  
            $( document ).ready(function() {
                    $( '.bb').css('background', 'coral');
            }); 
            $( document ).ready(function() {
                    $( '.wpb').css('background', 'coral');
            }); 
            $( document ).ready(function() {
                    $( '.afb').css('background', 'coral');
            }); 
            $( document ).ready(function() {
                    $( '.hbb').css('background', 'coral');
            });  
            $( document ).ready(function() {
                    $( '.tb').css('background', 'coral');
            });     
        }
    }

    
    
    
    $("gl").click(() => {
        $("#gl").append("<b>ok").addClass("bgRed");
    })

    //Data base codes.

    $(document).ready(function() {
	$('#add1').on('click', function() {
		$("#add1").attr("disabled", "disabled");
		var name = "soccer ball";
		var amount = $("#n1").val();
        var Email = email;
		
		
			$.ajax({
				url: "saveProduct.php",
				type: "POST",
				data: {
                    name : name,
                    amount: amount,
                    Email: Email,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#add1").removeAttr("disabled");
                        alert("Added");
					}
					else if(dataResult.statusCode==201){
                       $("#add1").removeAttr("disabled");
					   alert("error");
					}

				}
			});
	});
});


$(document).ready(function() {
	$('#Add2').on('click', function() {
		$("#Add2").attr("disabled", "disabled");
		var name = "basket ball";
		var amount = $("#n2").val();
        var Email = email;
		
		
			$.ajax({
				url: "saveProduct.php",
				type: "POST",
				data: {
                    name : name,
                    amount: amount,
                    Email: Email,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#Add2").removeAttr("disabled");
                        alert("Added");
					}
					else if(dataResult.statusCode==201){
                       $("#Add2").removeAttr("disabled");
					   alert("error");
					}

				}
			});
	});
});
$(document).ready(function() {
	$('#Add3').on('click', function() {
		$("#Add3").attr("disabled", "disabled");
		var name = "water ball";
		var amount = $("#n3").val();
        var Email = email;
		
		
			$.ajax({
				url: "saveProduct.php",
				type: "POST",
				data: {
                    name : name,
                    amount: amount,
                    Email: Email,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#Add3").removeAttr("disabled");
                        alert("Added");
					}
					else if(dataResult.statusCode==201){
                       $("#Add3").removeAttr("disabled");
					   alert("error");
					}

				}
			});
	});
});
$(document).ready(function() {
	$('#Add4').on('click', function() {
		$("#Add4").attr("disabled", "disabled");
		var name = "foot ball";
		var amount = $("#n4").val();
        var Email = email;
		
		
			$.ajax({
				url: "saveProduct.php",
				type: "POST",
				data: {
                    name : name,
                    amount: amount,
                    Email: Email,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#Add4").removeAttr("disabled");
                        alert("Added");
					}
					else if(dataResult.statusCode==201){
                       $("#Add4").removeAttr("disabled");
					   alert("error");
					}

				}
			});
	});
});
$(document).ready(function() {
	$('#Add5').on('click', function() {
		$("#Add5").attr("disabled", "disabled");
		var name = "hand ball";
		var amount = $("#n5").val();
        var Email = email;
		
		
			$.ajax({
				url: "saveProduct.php",
				type: "POST",
				data: {
                    name : name,
                    amount: amount,
                    Email: Email,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#Add5").removeAttr("disabled");
                        alert("Added");
					}
					else if(dataResult.statusCode==201){
                       $("#Add5").removeAttr("disabled");
					   alert("error");
					}

				}
			});
	});
});
$(document).ready(function() {
	$('#Add6').on('click', function() {
		$("#Add6").attr("disabled", "disabled");
		var name = "tennis ball";
		var amount = $("#n6").val();
        var Email = email;
		
		
			$.ajax({
				url: "saveProduct.php",
				type: "POST",
				data: {
                    name : name,
                    amount: amount,
                    Email: Email,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#Add6").removeAttr("disabled");
                        alert("Added");
					}
					else if(dataResult.statusCode==201){
                       $("#Add6").removeAttr("disabled");
					   alert("error");
					}

				}
			});
	});
});

$(document).ready(function() {
	$('#AddP').on('click', function() {
		$("#AddP").attr("disabled", "disabled");
		var name = $("#searchP").val();
		var amount = $("#amountP").val();
        var Email = email;
		if(name=="soccer ball" || name=="tennis ball" || name=="water ball" || name=="basket ball" || name=="foot ball" || name=="hand ball"){
			$.ajax({
				url: "saveProduct.php",
				type: "POST",
				data: {
                    name : name,
                    amount: amount,
                    Email: Email,			
				},
				cache: false,
				success: function(dataResult){
					var dataResult = JSON.parse(dataResult);
					if(dataResult.statusCode==200){
						$("#AddP").removeAttr("disabled");
                        alert("Added");
					}
					else if(dataResult.statusCode==201){
                       $("#AddP").removeAttr("disabled");
					   alert("error");
					}

				}
			})}
            else{
                $("#AddP").removeAttr("disabled");
                alert("this item not exist try again")
            };
	});
});
</script>


</body>

</html> 

