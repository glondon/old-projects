<?php
	session_start();
	
    $request_method = $_SERVER["REQUEST_METHOD"];
    if($request_method == "GET"){
      $query_vars = $_GET;
    } elseif ($request_method == "POST"){
      $query_vars = $_POST;
    }
	
	if (md5($_POST['norobot']) == $_SESSION['randomnr2'])	{ 
	
    reset($query_vars);
    $t = date("U");

    $file = $_SERVER['DOCUMENT_ROOT'] . "/../data/gdform_" . $t;
    $fp = fopen($file,"w");
    while (list ($key, $val) = each ($query_vars)) {
     fputs($fp,"<GDFORM_VARIABLE NAME=$key START>\n");
     fputs($fp,"$val\n");
     fputs($fp,"<GDFORM_VARIABLE NAME=$key END>\n");
     if ($key == "redirect") { $landing_page = $val;}
    }
    fclose($fp);
    if ($landing_page != ""){
	header("Location: http://".$_SERVER["HTTP_HOST"]."/$landing_page");
    } else {
	header("Location: http://".$_SERVER["HTTP_HOST"]."/");
    }
	
	}	else {  
		// here you  place code to be executed if the captcha test fails
			
			$_SESSION['name'] = $_POST['first_name'];
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['links'] = $_POST['links'];
			$_SESSION['questions'] = $_POST['questions'];
			
			header('Location: index.html?submit=f');
			
	}


?>
