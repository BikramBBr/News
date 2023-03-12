
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>login</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style type="text/css">
        body{
            background: rgb(38,34,115);
background: linear-gradient(90deg, rgba(38,34,115,1) 0%, rgba(9,99,128,1) 48%, rgba(19,189,221,1) 92%, rgba(0,203,245,1) 100%);
        }

        .shadow{
            -webkit-box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.32);
-moz-box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.32);
box-shadow: 10px 10px 5px -4px rgba(0,0,0,0.32);
border-radius:16px;
  background: #ffbd3f;
  text-align: center;
        }
        .mybtn{
            font-size: 22px;
            font-weight: 300;
            width: 100%;
    border-radius: 9px;
    border: 1px;
    background: rgb(34,193,195);
background: linear-gradient(0deg, rgba(34,193,195,1) 40%, rgba(45,108,253,1) 100%);
    color: whitesmoke;
    height: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4 p-3 mt-5 shadow">
               <form class="form p-3" method="post" name="login" style="border-radius: 6px;">
                <img src="images/logo.png" width="230px" >
        <h1 class="login-title ">ADMIN LOGIN</h1>
        <input type="text" class="form-control" name="email" placeholder="Email" autofocus="true"/>
        <input type="password" class="form-control mt-4" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button mt-4 mybtn"/>
        
  </form> 
            </div>
            <div class="col-md-4">
                
            </div>
             
        </div>
        
    </div>
    
</div>

    


</body>
</html>