<?php
    require_once('connection.php');

    $email = $_GET['email'];
    $product_name = $_GET['tn'];
    $product_price = $_GET['tp'];
    $foodid = $_GET['id'];

    
    $sql = "UPDATE `foodform_tb` SET `approved` = 0 WHERE `id` = '$foodid'";
    $res = mysqli_query($con, $sql);
    if($res){
        $to = $email;
        $subject = 'FOOD ORDER';

        $mailcontent = '
            <div class = "container">
                <div class = "row">
                    <h3 class = "text-center">MY SITE</h3>
                    <p>Dear customer, we got a request for an order of the food below<br>
                        <b>'.$product_name.'.</b><br>
                        You are to pay into the Paystack account the sum of<br>
                        <b>'.$product_price.'.<br>
                        Thank you for your patronage....</p>
                        <br><br>
                        <h3>Team Restaurantly.</h3>
                </div>
            </div>
        ';
        $headers = "MIME-Versions: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <support@mysite.com>' . "\r\n";
        $sent = mail($to, $subject, $mailcontent, $headers);
        if($sent){
            header('location: ../veiw/foodorder.php');
            return false;
        }else{
            header('location: ../veiw/foodorder.php');
            return false;
        }
    }else{
        header('location: ../veiw/foodorder.php');
        return false;
    }


?>