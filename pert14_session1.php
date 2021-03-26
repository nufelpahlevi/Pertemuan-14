<?php 
session_start();
	if (isset($_POST['login'])) {
			$user = $_POST['user'];
			$pass = $_POST['pass'];
	if ($user === "KahfiJr" && $pass = "indonesiamerdeka") {
		$_SESSION['login'] = $user;
		echo "<h1>Anda berhasil LOGIN</h1>";
		echo "<center><h2>Klik <a href='pert14_session2.php'>disini (session2.php)</h2><center>";
	}else {
	
	}
}
 ?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <style>
		 *{
		    margin: 0;
		    padding: 0;
		    outline: 0;
		    font-family: 'algerian', sans-serif;
		}
		body{
		    height: 100vh;
		    background-size: cover;
		    background-position: center;
		    background-repeat: no-repeat;
		    background-image: url('nufel.jpg');
		}

		.container{
		    position: absolute;
		    left: 50%;
		    top: 50%;
		    transform: translate(-50%,-50%);
		    padding: 20px 25px;
		    width: 300px;

		    background-color: rgba(0,0,0,.7);
		    box-shadow: 0 0 10px rgba(255,255,255,.3);
		}
		.container h1{
		    text-align: left;
		    background-color: transparent;
		    color: yellow;
		    margin-bottom: 30px;
		    text-transform: uppercase;
		    border-bottom: 4px solid white;
		}
		.container label{
		    text-align: left;
		    color: red;
		}
		.container form input{
		    width: calc(100% - 20px);
		    padding: 8px 10px;
		    margin-bottom: 15px;
		    border: none;
		    background-color: transparent;
		    border-bottom: 2px solid white;
		    color: #fff;
		    font-size: 20px;
		}
		.container form .btn{
		    width: 100%;
		    padding: 5px 0;
		    border: none;
		    background-color:red;
		    font-size: 18px;
		    color: white;
		}

        </style>
    </head>
   
    <body>
        <div class="container">
          <h1>Login</h1>
            <form method="post">
                <label>Username</label><br>
                <input type="text" name="user"><br>
                <label>Password</label><br>
                <input type="password" name="pass"><br>
                <input class="btn" type="submit" name="login" value="Login">
            </form>
        </div>     
    </body>
</html>