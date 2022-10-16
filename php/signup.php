<?php 

if(isset($_POST['fname']) && 
   isset($_POST['uname']) && 
   isset($_POST['pass'])){

    include "../db_conn.php";

    $fname = $_POST['fname'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    $data = "fname=".$fname."&uname=".$uname;
    
    if (empty($fname)) {
    	$em = "Lengkapi Formulir Terlebih Dahulu";
    	header("Location: ../register.php?error=$em&$data");
	    exit;
    }else if(empty($uname)){
    	$em = "Isi Username Terlebih Dahulu";
    	header("Location: ../register.php?error=$em&$data");
	    exit;
    }else if(empty($pass)){
    	$em = "Isi Password Terlebih Dahulu";
    	header("Location: ../register.php?error=$em&$data");
	    exit;
    }else {

    	// hashing the password
    	$pass = password_hash($pass, PASSWORD_DEFAULT);

    	$sql = "INSERT INTO users(fname, username, password) 
    	        VALUES(?,?,?)";
    	$stmt = $conn->prepare($sql);
    	$stmt->execute([$fname, $uname, $pass]);

    	header("Location: ../register.php?success=Akun Berhasil Dibuat");
	    exit;
    }


}else {
	header("Location: ../register.php?error=error");
	exit;
}
