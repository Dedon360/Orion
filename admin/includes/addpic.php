<?php
	require_once('connection.php');

	if(isset($_POST['submit'])){
		$product_name = isset($_POST['product_name'])?trim($_POST['product_name']): '';
        $product_price = isset($_POST['product_price'])?trim($_POST['product_price']): '';
		$product_tags = isset($_POST['product_tags'])?trim($_POST['product_tags']): '';
        $description = isset($_POST['description'])?trim($_POST['description']): '';
		if($product_name == ""){
			$error = "please enter a name";
			header('location: ../veiw/uploadpic.php?error='.$error);
			return false;
		}else{
			$product_name = trimData($product_name);
		}
		if(isset($_FILES)){
			$filename = $_FILES['product_img']['name'];
			$fileTmp = $_FILES['product_img']['tmp_name'];
			$filesize = $_FILES['product_img']['size'];
			$filetype = $_FILES['product_img']['type'];
			$fileext = explode('.', $filename);
			$fileactualext = strtolower(end($fileext));
			$allow = array('jpg', 'jpeg', 'png', 'gif');

			if(in_array($fileactualext, $allow)){
				if($filesize < 800000){
					$product_img = uniqid('',true).'.'.$fileactualext;
					$filedestination = 'uploads/'.$product_img;
					if(move_uploaded_file($fileTmp, $filedestination)){
						$sql = "INSERT INTO service_tb(product_name,product_price,product_tags,product_img,description) 
                        VALUES('$product_name', '$product_price', '$product_tags', '$product_img', '$description')";
						$result = mysqli_query($con, $sql);
						if($result){
							$success = "details uploaded";
							header('location: ../veiw/uploadpic.php?success='.$success);
							return false;
						}else{
							$error = "error saving details";
							header('location: ../veiw/uploadpic.php?error='.$error);
							return false;
						} 
					}else{
						$error = "error moving file";
						header('location: ../veiw/uploadpic.php?error='.$error);
						return false;
					}
				}else{
					$error = "file too large (8mb and below)";
					header('location: ../veiw/uploadpic.php?error='.$error);
					return false;
				}
			}else{
				$error = "please upload an image";
				header('location: ../veiw/uploadpic.php?error='.$error);
				return false;
			}
		}
	}










	function trimData($data){
		$data = htmlspecialchars($data);
		$data = trim($data);
		$data = stripcslashes($data);

		return $data;
	}
?>