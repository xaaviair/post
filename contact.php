<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact - Post.</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

    <style type="text/css">
    	.contact-error {
        	color: #fff;
        	background: #ca3d3f;
        	margin: 50px 0 0 0;
            padding: 15px 20px;
        }

        .contact-error a {
        	color: #C0D651;
        }

        .contact-success {
        	color: #fff;
        	background: #34B379;
        	margin: 50px 0 0 0;
            padding: 15px 50px;
        }

        @media (max-width: 768px) {
        	.contact-error {
            	margin: 0;
            }
        }
    </style>

  </head>
  <body>

    <nav id="nav">
      <div class="nav-brand">
        <a class="navbar-brand" href="index.html"><img src="img/post-logo.png"></a>
      </div>

      <div class="nav-burger">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      </div>

      <div class="nav-links">
        <ul>
          <li class="nav-li-links"><a class="nav-links-a" href="#">+ Photography</a>
            <div class="dropdown-content-black">
              <ul>
                <li><a href="street.html">Street</a></li>
                <li><a href="landscape.html">Landscape</a></li>
                <li><a href="portraits.html">Portrait</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-li-links"><a class="nav-links-a" href="code.html">Code</a></li>
          <li class="nav-li-links"><a class="nav-links-a" href="about.html">About</a></li>
          <li class="nav-li-links"><a class="nav-links-a" href="contact.php">Contact</a></li>
          <li class="nav-li-social"><a class="nav-social" href="https://instagram.com/xavairlazo" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li class="nav-li-social"><a class="nav-social" href="https://twitter.com/xavairlazo" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li class="nav-li-social"><a class="nav-social" href="http://almightyny.com/" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
          <li class="nav-li-social"><a class="nav-social" href="https://github.com/xaaviair" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </nav>

    <div class="container contact-margin">
      <div class="flex-row">
        <div class="flex-column flex-info">
          <h1>CONTACT</h1>
          <p>Xavier Lazo <br>
            Photographer, Designer, Developer <br>
            Atlanta, GA
          </p>
          <p>Leave a message for questions about:<br><br>
              -- Dev work <br><br>
              -- Custom Prints <br><br>
              -- Image Licensing <br><br>
              -- Photo Shoots<br>
          </p>
        </div>
        <div class="flex-column flex-form">
          <?php
            $action=$_REQUEST['action'];
            if ($action == "") {
          ?>
          <form action="" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="action" value="submit">
            <div class="row">
              <div class="col-md-6">
                <label for="fname">FIRST NAME *</label>
                <input name="firstname" type="text" value="" id="fname" placeholder="">
              </div>

              <div class="col-md-6">
                <label for="lname">LAST NAME *</label>
                <input name="lastname" type="text" value="" id="lname" placeholder="">
              </div>
            </div>

            <label for="busname">BUSINESS</label>
            <input name="business" type="text" value="" id="busname" placeholder="">

            <label for="form_email">EMAIL *</label>
            <input name="email" type="text" id="form_email" placeholder=""><br>

            <label for="phone">PHONE *</label>
            <input name="phone" type="text" id="phone"><br>

            <label for="subject">MESSAGE *</label>
            <textarea name="message" id="subject" placeholder="" style="height:100px"></textarea>

            <input type="submit" value="SUBMIT">
          </form>

          <?php
            } else {
                $fname = $_REQUEST['firstname'];
                $lname = $_REQUEST['lastname'];
                $bus = $_REQUEST['business'];
                $email = $_REQUEST['email'];
                $phone = $_REQUEST['phone'];
                $message = $_REQUEST['message'];
                if (($fname == "") || ($lname == "") || ($email == "") || ($message == ""))
                    {
                    	echo "<div class='contact-error'>
                        		All fields are required, please fill <a href=\"\">the form</a> again.
                              </div>";
                    }
                else {
                    $from = "From: $lname<$email>\r\nReturn-path: $email";
                    $subject = "Message sent using your contact form";
                    mail("xavierlazo1@gmail.com", $subject, $message, $from);
                    echo "<div class='contact-success'>
                    		Email sent!
                          </div>";
                    }
                }
            ?>
        </div>
      </div>
    </div>

    <script src="https://use.fontawesome.com/efd75aa873.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="css.js" charset="utf-8"></script>
  </body>
</html>
