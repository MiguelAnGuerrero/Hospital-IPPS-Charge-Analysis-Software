<!DOCTYPE html>
<html lang="en">
	<head>
        <title><?php echo $title;?></title>
        
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name = "author" content="Fabienne Young, Alex Kaszynski, Miguel Guerrero, Evelyn Stodghill">
        <meta name="description" content="CT 310 Project Spring 2020">
        <meta name="keywords" content="computer science, csu, colorado state university, project">
        <!-- Bootstrap implemenation-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
		crossorigin="anonymous">
		<!-- Bootstrap implemenation-->
		<link rel="stylesheet" href="https://cs.colostate.edu:4444/~miguelgu/ct310/assets/css/hospital.css" type="text/css"/>
        <link rel="icon" href = "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/d4d2eaea-346b-47da-b2e1-11aa03ce8539/ddv08qd-f749a070-e2eb-4c50-a288-340ae6f307b3.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Q0ZDJlYWVhLTM0NmItNDdkYS1iMmUxLTExYWEwM2NlODUzOVwvZGR2MDhxZC1mNzQ5YTA3MC1lMmViLTRjNTAtYTI4OC0zNDBhZTZmMzA3YjMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.f_buzd6qcNMffqTO4WHphnMCeaBVD5J1b0EwBIy7v8w">
	</head>
<body>
    <header>
        <img id = 'logo' src = "https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/d4d2eaea-346b-47da-b2e1-11aa03ce8539/ddv08qd-f749a070-e2eb-4c50-a288-340ae6f307b3.png?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7InBhdGgiOiJcL2ZcL2Q0ZDJlYWVhLTM0NmItNDdkYS1iMmUxLTExYWEwM2NlODUzOVwvZGR2MDhxZC1mNzQ5YTA3MC1lMmViLTRjNTAtYTI4OC0zNDBhZTZmMzA3YjMucG5nIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmZpbGUuZG93bmxvYWQiXX0.f_buzd6qcNMffqTO4WHphnMCeaBVD5J1b0EwBIy7v8w" alt="logo">
        <h1 style = 'padding: 10px; background-color: rgba(255,255,255,0.50); margin: auto; text-align: center;'><?php echo $title;?></h1>
	</header>
	<div class = "sidenav">
    <ul>
        <li><a href = "https://cs.colostate.edu:4444/~miguelgu/ct310/index/hospital/index"> Home </a></li>
        <li><a href = "https://cs.colostate.edu:4444/~miguelgu/ct310/index/hospital/about"> About Us </a></li>
        <li><a href = "https://cs.colostate.edu:4444/~miguelgu/ct310/index/hospital/hospitallist"> Hospital List </a></li>
        <li><a href = "https://cs.colostate.edu:4444/~miguelgu/ct310/index/hospital/drglist"> DRG List </a></li>
        <li><a href = "https://cs.colostate.edu:4444/~miguelgu/ct310/index/hospital/hospitaldetails"> Hospital Details </a></li>
        <li><a href = "https://cs.colostate.edu:4444/~miguelgu/ct310/index/hospital/drgdetails"> DRG details </a></li>
        <li><a href = "https://cs.colostate.edu:4444/~miguelgu/ct310/index/hospital/login"> Login </a></li>
    </ul>
	</div>
    <div class="mainClass" style="width:100%;height:100%;">
        <?php echo $contents;?>
	</div>
    <br></br>
</body>
<footer class="footNote" style="position:fixed;left:0px;bottom:0px;height:30px;width:100%;">
    <center>FAME Inc. is a group project for <a href= "https://www.cs.colostate.edu/~ct310/yr2020sp/index.php">Spring CT310 2020</a>.</center>
</footer>
</html>
