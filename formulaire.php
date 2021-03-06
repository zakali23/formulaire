
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <div id="contact" class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
        </div>
        <div class="col-lg-6">
          <h3 style="color:black;text-align:center;"></br>CONTACT US</h3>
<?php
if (array_key_exists('errors', $_SESSION)):  ?>
<div class="alert alert-danger">
  <?=implode('<br>', $_SESSION['errors']);?>
</div>
<?php endif; ?>

<?php if(array_key_exists('success', $_SESSION)):  ?>
<div class="alert alert-success">
  votre Message a été envoyé
</div>
<?php endif; ?>


          <form role="form" id="contactForm" method="post" action="form.php">
            <div class="row">
              <div class="form-group col-sm-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">F</span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name" name="firstName" required="required" oninvalid="this.setCustomValidity('Please Enter your first Name')" oninput="setCustomValidity('')" aria-label="FirstName" value="<?= isset($_SESSION['champs']['firstName'])? $_SESSION['champs']['firstName'] : '';?>" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class="form-group col-sm-6">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">L</span>
                  </div>
                  <input type="text" class="form-control" placeholder="LastName" aria-label="LastName" name="lastName" required="required" oninvalid="this.setCustomValidity('Please Enter your Last Name')" oninput="setCustomValidity('')" value="<?= isset($_SESSION['champs']['lastName'])? $_SESSION['champs']['LastName'] : '';?>" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">T</span>
              </div>
              <input type="tel" class="form-control" placeholder="Phone" name="tel" required="required" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" oninvalid="this.setCustomValidity('Please Enter valid Number')" oninput="setCustomValidity('')" value="<?= isset($_SESSION['champs']['tel'])? $_SESSION['champs']['tel'] : '';?>" aria-label="Phone"  aria-describedby="basic-addon1">
            </div>
            </br>
            <div class="input-group ">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">@</span>
              </div>
              <input type="email" class="form-control" placeholder="Email" aria-label="Email" name="email" required="required" oninvalid="this.setCustomValidity('Please Enter valid email')" oninput="setCustomValidity('')"    value="<?= isset($_SESSION['champs']['email'])? $_SESSION['champs']['email'] : '';?>" aria-describedby="basic-addon1">
            </div>
            </br>
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect04" required="required" oninvalid="this.setCustomValidity('Please choose template')">
    <option selected>Choose...</option>
    <option value="1">One</option>
    <option value="2">Two</option>
    <option value="3">Three</option>
  </select>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">Option</button>
              </div>
            </div>
            </br>
            <div class="form-group">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" >With textarea</span>
                </div>
                <textarea class="form-control" aria-label="With textarea" name="textarea" required="required" oninvalid="this.setCustomValidity('Please Enter Your Message')" oninput="setCustomValidity('')">
                  <?= isset($_SESSION['champs']['textarea']) ? $_SESSION['champs']['textarea'] : '';?>
                </textarea>
              </div>
            </div>
            <button type="submit" name="submit" id="form-submit" class="btn btn-primary">Send</button>

        </div>
        <div class="col-lg-3">
        </div>

      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php
unset($_SESSION['champs']);
unset($_SESSION['errors']);
unset($_SESSION['success']);
 ?>
