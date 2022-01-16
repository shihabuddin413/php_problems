

<?php 
    /*
	2. Create an Authentication system.
	     ##  If any one passes wrong username or password they will get a different error message , but if any one does not fill or pass information they will get a warning ⚠️.
	     For example please pass a username...
	*/

	 echo "Authentication system";

	 function newLine(){ echo "\n"; }
	 newLine();

     function validate ($value) { 
     	return trim($value) != "" ? 
     			True : 
     			False; 
     }
   

     function authenticUser ($username, $password){
     	if (validate($username) and validate($password)){
     		return $username != "Shihab" ? "Wrong Username! ": (
     			$password == "1234" ? "You Are Logged in :) ": "Password is wrong!"
     		);
     	}
     	else {
     		return "Pls enter a valid username and password!";
     	}
     }

     $Users  = [
        ["username" => "shihab",	"password" => "1234"],
     	["username" => "rakib", 	"password" => "1234"],
     	["username" => "shihab",	"password" => "1000"],
     	["username" => "rakib", 	"password" => ""],
     	["username" => "",      	"password" => "4114"]
     ];

     for ($i=0; $i<5; $i++){
     	echo $Users[$i]['username']." ".$Users[$i]['password'] ;
     	newLine();
     	echo  authenticUser($Users[$i]['username'], $Users[$i]['password']);
     	newLine();
     }

?>
