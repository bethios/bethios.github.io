<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--[if IE]><meta http-equiv="cleartype" content="on" /><![endif]-->
    <title>Twin City Grill</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/normalize.css">
    <link rel='stylesheet' type="text/css" href="styles/main.css">
</head>
<body>
    <nav class="navbar">
        <a href="index.html">
        <img class="logo" src="assets/Twin-City-Grill-white.png" alt="Twin City Grill, white blocky serif font">
        <h1 class="screen-reader-only">Twin City Grill</h1>
        </a>
        <div class="links-container">
            <a href="index.html" class="navbar-link">Contact</a>
        </div>
    </nav>

    <div class="wrapper">
        <div class="divider"></div>
        <div class="divider"></div>
                <div class="contact-form">

    <?php
    $action=$_REQUEST['action'];
    if ($action=="")    /* display the contact form */
        {
        ?>
                    <form  action="" method="POST" enctype="multipart/form-data" role="form" id="contact-form">
                        <input type="hidden" name="action" value="submit">

                        <h2>Contact Us</h2>
                        <p class="form-instructions"><em>All fields are required.</em></p>
                        <div id="form-messages"></div>
                        <div class="form-group">
                            <label for="name" class="screen-reader-only">Name:</label>
                            <input type="text" name="name" id="name" placeholder="Name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="phone" class="screen-reader-only">Phone Number:</label>
                            <input type="tel" name="phone" id="phone" placeholder="Phone Number" required="required">
                        </div>
                        <div class="form-group">
                            <label for="email" class="screen-reader-only">Email Address:</label>
                            <input type="email" name="email" id="email" placeholder="Email Address" required="required">
                        </div>
                        <div class="form-group">
                            <label for="message" class="screen-reader-only">Message:</label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <input id="submit" name="submit" type="submit" value="Send" >

                        </div>
                    </form>
        <?php
        }
    else                /* send the submitted data */
        {
        $name=$_REQUEST['name'];
        $email=$_REQUEST['email'];
        $message=$_REQUEST['message'];
        if (($name=="")||($email=="")||($message==""))
            {
            echo "All fields are required, please fill <a href=\"\">the form</a> again.";
            }
        else{
            $from="From: $name<$email>\r\nReturn-path: $email";
            $subject="Message sent using your contact form";
            mail("bethios@gmail.com", $subject, $message, $from);


            ?>
                    <h2>Thanks!</h2>
                    <p>We will get back to you as soon as possible. Have a great day!</p>
            <?php
            }
        }
    ?>
        </div>

        <div class="divider"></div>
        <div class="divider"></div>
    </div>

<footer>

</footer>

</body>
</html>