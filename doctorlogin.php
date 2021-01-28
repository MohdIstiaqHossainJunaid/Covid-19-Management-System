<html>  
<head>  
    <title>Doctor login system</title>  
 
    <link rel = "stylesheet" type = "text/css" href = "style.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap" rel="stylesheet">
    <style>
      body {
        font-family: 'Julius Sans One', sans-serif;
        font-size: 20px;
      }
    </style>  
</head>  
<body style="background-color: gray;"> 
    <h1>Enter as Doctor</h1> 
    <div id = "frm">  
        <h1>Please log in</h1>  
        <h3><?php 
            if(isset($_GET['err'])){
                echo $_GET['err'];
            }
        ?></h3>
        <form name="f1" action = "./backend/authdoctor.php" onsubmit = "return validation()" method = "POST">  
            <p>  
                <label> UserName: </label>  
                <input type = "text" id ="user" name  = "user" />  
            </p>  
            <p>  
                <label> Password: </label>  
                <input type = "password" id ="pass" name  = "pass" />  
            </p>  
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
        <a href = "./index.php"> <button>BACK</button> </a>
    </div>  
     
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
        
</body>     
</html>  