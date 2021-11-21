<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>One Page Wonder - Start Bootstrap Template</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />

    <style>
        body {
            background-image: url('img/1.jpg');
        }

        .back-clr {
            background-color: black;
            opacity: 2.0;
            border-radius: 10px;
            padding: 20px;
            color: white;
        }

        .size {
            padding: 10px;
            border-radius: 20px;

        }
    </style>

</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container px-5">
            <a id="home" class="navbar-brand" href="#page-top">The Sparks Foundation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="Contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <?php
    if (isset($_GET['Donate_Now'])) {
        header("Location:  Donate.php");

    ?>

        <!-- code  --> 
        <form>
  <!-- Name input -->
  <div class="form-outline mb-4">
    <input type="text" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Name</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form4Example2" class="form-control" />
    <label class="form-label" for="form4Example2">Email address</label>
  </div>

  <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">Message</label>
  </div>

  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input
      class="form-check-input me-2"
      type="checkbox"
      value=""
      id="form4Example4"
      checked
    />
    <label class="form-check-label" for="form4Example4">
      Send me a copy of this message
    </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
</form>
       




    <?php
    } else {
    ?>



        <header class="masthead text-center text-white">
            <div class="masthead-content">
                <div class="container px-5">
                    <h1 class="masthead-heading mb-0">Your Small Donation</h1>
                    <h2 class="masthead-subheading mb-0"> Can Make a Big Difference !</h2>


                    <!-- <a href="javascript:void(0)" class="btn btn-primary btn-xl rounded-pill mt-5 buy_now" style="background-color: #3F31CA;" data-amount="1000" data-id="1">Donate Now</a> -->
                    <a href="?Donate_Now" class="btn btn-primary btn-xl rounded-pill mt-5 " style="background-color: #3F31CA;">Donate Now</a>

                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="img/2.jpg" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <div class="back-clr">

                                <h2 id="about" class="display-4">Give shelter to the young and homeless</h2>
                                <p>Over 2 million children in India are homeless. They live in dangerous conditions and struggle with poverty and hunger daily. Join our mission to provide them with a better future. Just ₹750 per month will ensure a vulnerable child at risk of malnutrition and disease, will get nutritious meals and shelter and be sent to school.</p>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content section 2-->


        <!-- Content section 3-->


        <!-- Footer-->
        <footer class="py-5 bg-black">
            <div class="container px-5">
                <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2021</p>
            </div>
        </footer>
    <?php
    }
    ?>
    <!--container.//-->
    <!-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('body').on('click', '.buy_now', function(e) {
            var totalAmount = $(this).attr("data-amount");
            var product_id = $(this).attr("data-id");
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
    </script> -->
</body>

</html>