<?php

include 'coon.php';


// cookie create source function 

function add_session($email, $money,$name ,$expiry){
    global $conn;
    $mysqltime = date('Y-m-d H:i:s', $expiry);
    $query ="INSERT INTO `sesssion` (`id`, `email`, `name`, `amount`, `access_time`, `expiry`, `active`) VALUES (NULL, '$email', '$name', '$money', current_timestamp(), '$mysqltime', '1');";
    if (mysqli_query($conn, $query)) {
        setcookie('email', $email , $expiry, '/');
        setcookie('money', $money , $expiry, '/');
        setcookie('name', $name , $expiry, '/');
        return 1;
      } else {
        return mysqli_error($conn);
      }
}





if (isset($_GET['send'])) {


    $name = $_GET['name'];
    $email = $_GET['email'];
    $money = $_GET['fname'];

    function first_part($name, $email, $money)
    {
        global $conn;
        $sql = "INSERT INTO `users` (`id`, `name`, `email`, `amount`) VALUES (NULL, '$name', '$email', '$money');";
        $result = mysqli_query($conn, $sql);
        return $result;
    }

   if(first_part($name, $email, $money)){
        $expiry = time()+(86400*60);
        add_session($email, $money,$name ,$expiry);
   }
}

?>
<!doctype html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            background-color: #25274d;
        }

        .contact {
            padding: 4%;
            height: 400px;
        }

        .col-md-3 {
            background: #ff9b00;
            padding: 4%;
            border-top-left-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }

        .contact-info {
            margin-top: 10%;
        }

        .contact-info img {
            margin-bottom: 15%;
        }

        .contact-info h2 {
            margin-bottom: 10%;
        }

        .col-md-9 {
            background: #fff;
            padding: 3%;
            border-top-right-radius: 0.5rem;
            border-bottom-right-radius: 0.5rem;
        }

        .contact-form label {
            font-weight: 600;
        }

        .contact-form button {
            background: #25274d;
            color: #fff;
            font-weight: 600;
            width: 25%;
        }

        .contact-form button:focus {
            box-shadow: none;
        }
    </style>
</head>
<body>
    <div class="container contact">

        <!-- alert messege code  -->

        <br><br><br><br>
        <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
                    <h2>Donate </h2>
                    <h4>We would love to hear from you !</h4>
                </div>
            </div>


            <?php
            if (!isset($_GET['send'])) {
            ?>
                <div class="col-md-9">
                    <div class="contact-form">
                        <form action="?send" method="GET">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fname">Name:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fname" placeholder="Name" required="" name="name">
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input required="" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fname" required="">Amount:</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="fname" placeholder="Amount" required="" name="fname">
                                </div>
                            </div>
                            <br><br>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="send" class="btn btn-default">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>

<?php
            } else {

?>

    <div class="col-md-9">
        <div class="contact-form">

            <div class="form-group">
                <label class="control-label col-sm-2" for="fname">Name: <br> <?php echo $_GET['name'] ?></label>

            </div>


            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Email: <?php echo $_GET['email'] ?></label>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="fname" required="">Amount: <?php echo $_GET['fname'] ?> </label>

            </div>
            <br><br>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <a href="javascript:void(0)" class="btn btn-sm btn-primary float-right buy_now" data-email="<?php echo $_GET['email'] ?>" data-amount="<?php echo $_GET['fname'] ?>" data-id="1">Donate Now</a>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>






<?php
            }

?>
<!--container.//-->
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('body').on('click', '.buy_now', function(e) {
            var totalAmount = $(this).attr("data-amount");
            var product_id = $(this).attr("data-id");
            var email_id = $(this).attr("data-email");
            var options = {
                "key": "rzp_test_p9yFJblz5Tlyr8",
                "amount": (totalAmount * 100), // 2000 paise = INR 20
                "name": "Tutsmake",
                "description": "Payment",
                "image": "//www.tutsmake.com/wp-content/uploads/2018/12/cropped-favicon-1024-1-180x180.png",
                "handler": function(response) {
                    $.ajax({
                        url: 'payment-proccess.php',
                        type: 'post',
                        dataType: 'json',
                        data: {
                            razorpay_payment_id: response.razorpay_payment_id,
                            totalAmount: totalAmount,
                            product_id: product_id,
                            email_id: email_id,
                        },
                        success: function(msg) {
                            window.location.href = 'Success.php';
                        }
                    });
                },
                "theme": {
                    "color": "#528FF0"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();
        });
    </script>
</body>

</html>