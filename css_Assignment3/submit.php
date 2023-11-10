<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Assignment three" content="Candy M&M's" />
    <meta name="Author" content="Keisho" />
    <meta name="START DATE" content="2023-11-05" />
    <link rel="shortcut icon" href="img/images.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <title>Candy M&M's</title>
    <style>
      p {
        text-align: center;
      }

      div.button {
        display:block;
        text-align: center;
      }

      button[type="submit"] {
        background-color: brown;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

     
      button[type="submit"]:hover {
        background-color: chocolate;
      }
    </style>
  </head>
  <body class="contact">
    <header>
      <nav class="nav">
        <a class="active" href="index.php"
          ><img src="img/logo.png" alt="M&M logo"
        /></a>
        <!-- https://www.m-ms.jp/ -->
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <!-- <i class="fas fa-bars"></i> -->
          <i style="font-size: 24px" class="fa">&#xf0c9;</i>
        </label>
        <label class="logo">m&m! How Sweet Is This!</label>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="product.php">Product</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>
    <main>
   
			<p>User Info</p>
		
<!-------------------------------------- php-------------------------------------------------------------------------------->
      <?php
    

	//set user variables
	  $fName = $_GET['firstname'];
    $lName = $_GET['lastname'];
    $country = $_GET['country'];
    $subject = $_GET['subject'];
    $email = $_GET['emailAddress'];
 

    //user information
    echo('<p>NAME: '.$fName.' '.$lName.'</p>');
    echo('<p>COUNTRY: '.$country.'</p>');
    echo('<p>SUBJECT: '.$subject.'</p>');
    echo('<p>E-MAIL: '.$email.'</p>');
?>
<!-------------------------------------- php ending-------------------------------------------------------------------------------->
        <form id="index" action="index.php" method="post">
            <div class="button">
                <button type="submit">Return</button>
            </div>  
        </form>
</main>
    <footer>
      <p>
        <small
          >Company:Seiho &nbsp;TEL: 555-555-555 <br />
          Email: 123@456.com&nbsp;Author: Keisho
        </small>
      </p>
      <img src="img/MMs1-logo.png" alt="footerLogo" />
    </footer>
  </body>
</html>
