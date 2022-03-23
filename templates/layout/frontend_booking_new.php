<!-- <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bootstrap Navbar with Logo Image</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">
                <img src="/examples/images/logo.svg" height="28" alt="CoolBrand">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="#" class="nav-item nav-link active">Home</a>
                    <a href="#" class="nav-item nav-link">Profile</a>
                    <a href="#" class="nav-item nav-link">Messages</a>
                    <a href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a href="#" class="nav-item nav-link">Login</a>
                </div>
            </div>
        </div>
    </nav>
</div>
</body>
</html>


-->

<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

        <title>Best Business Deals!</title>

        <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/navbar-fixed/">

        <!-- Bootstrap core CSS -->
        <link href="/css/frontend/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="/css/frontend/navbar-top-fixed.css" rel="stylesheet">
        <link href="/css/frontend/fontawesome.min.css" rel="stylesheet">

        <link href="/css/frontend/bootstrap-datetimepicker.min.css" rel="stylesheet">

    </head>
    <style>
    .navbar{
        box-shadow: 0 1px 0 rgb(0 0 0 / 10%);
    }
    .main-content{
        padding: 4rem 2rem;
    }
    .error-message {
background-color:#eb6424;
color:#fff;
}
</style>
<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/img/Best-Business-Deals-New-Logo-e1432819060208.png" width="99" height="61" alt="Best Business Deals." id="logo" ></a>
            <!-- <a class="btn btn-outline-primary btn-primary" href="http://localhost:8765/book-appointment/" id="book-appointment">Home</a> -->
        </div>
        

      
</nav>


  <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Appointment Booking</h2>
        <!-- <p class="lead">Below is an example form built entirely with Bootstrap's form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> -->
        <?= $this->Flash->render() ?>

    </div>

    <div class="row">
      <div class="col-md-12 order-md-1">
          <h4 class="mb-3">Booking Information</h4>
          <?=$this->Form->create($booking,['novalidate' => true]) ?>
          <div class="row">
              <div class="col-md-6 mb-3">

                  <?=$this->Form->control('name', ['class' => 'form-control']) ?>
                    
              </div>
              <div class="col-md-6 mb-3">
                <?=$this->Form->control('phone',[ 'class' => 'form-control','placeholder'=>'+61412345678']) ?>
              </div>
            </div>

              <div class="mb-3">
                <?=$this->Form->control('email',[ 'class' => 'form-control','placeholder'=>'you@example.com']) ?>

              </div>

              <div class="mb-3">
                <?=$this->Form->control('scheduled_at',[ 'class' => 'form-control','label' => [
        'class' => 'thingy',
        'text' => 'Bookings Scheduled Date'
    ],
    'type'=>'text',
    'id'=>'scheduled_at'
    // 'value' => new DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'))
]); 
    ?>

              </div>
              <div class="mb-3">
                <?=$this->Form->control('booking_duration',[ 'class' => 'form-control','label' => [
        'class' => 'thingy',
        'text' => 'Booking Duration(In Minutes)'
    ],
    'type'=>'text',
    'id'=>'booking_duration',
    'min'=>15
    // 'value' => new DateTime::createFromFormat('Y-m-d H:i:s', date('Y-m-d H:i:s'))
]); 
    ?>

              </div>
              <!-- <div class="d-block my-3">
  <div class="custom-control custom-radio">

                <?=$this->Form->radio('type',[['value' => 'zoom', 'text' => 'Zoom','class' => 'custom-control-input', 'label' => ['class' => 'custom-control-label']],
        ['value' => 'face_to_face', 'text' => 'Face to Face', 'class' => 'custom-control-input', 'label' => ['class' => 'custom-control-label']]]) ?>

              </div>
              </div> -->
              <hr class="mb-4">
<h4 class="mb-3">Meeting Type</h4>
              <div class="d-block my-3">
  <div class="custom-control custom-radio">
    <input id="face_to_face" name="type" type="radio" value="face_to_face" class="custom-control-input" checked required>
    <label class="custom-control-label" for="face_to_face">Face to Face</label>
</div>
<div class="custom-control custom-radio">
    <input id="zoom" name="type" type="radio" value="zoom" class="custom-control-input" required>
    <label class="custom-control-label" for="zoom">Zoom</label>
</div>
</div>
              <div class="mb-3">
                <?=$this->Form->control('description',['type'=>'textarea','escape' => false, 'class' => 'form-control']) ?>

              </div>


          <?=$this->Form->button(__('Submit'),[ 'class' => 'btn btn-primary btn-lg btn-block']); ?>
          <?=$this->Form->end() ?>

          <!-- <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
              </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lastName">Last name</label>
            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
          </div>
      </div>
  </div>

  <div class="mb-3">
      <label for="username">Username</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">@</span>
      </div>
      <input type="text" class="form-control" id="username" placeholder="Username" required>
      <div class="invalid-feedback" style="width: 100%;">
          Your username is required.
      </div>
  </div>
</div>

<div class="mb-3">
  <label for="email">Email <span class="text-muted">(Optional)</span></label>
  <input type="email" class="form-control" id="email" placeholder="you@example.com">
  <div class="invalid-feedback">
    Please enter a valid email address for shipping updates.
</div>
</div>

<div class="mb-3">
  <label for="address">Address</label>
  <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
  <div class="invalid-feedback">
    Please enter your shipping address.
</div>
</div>

<div class="mb-3">
  <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
  <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
</div>

<div class="row">
  <div class="col-md-5 mb-3">
    <label for="country">Country</label>
    <select class="custom-select d-block w-100" id="country" required>
      <option value="">Choose...</option>
      <option>United States</option>
  </select>
  <div class="invalid-feedback">
      Please select a valid country.
  </div>
</div>
<div class="col-md-4 mb-3">
    <label for="state">State</label>
    <select class="custom-select d-block w-100" id="state" required>
      <option value="">Choose...</option>
      <option>California</option>
  </select>
  <div class="invalid-feedback">
      Please provide a valid state.
  </div>
</div>
<div class="col-md-3 mb-3">
    <label for="zip">Zip</label>
    <input type="text" class="form-control" id="zip" placeholder="" required>
    <div class="invalid-feedback">
      Zip code required.
  </div>
</div>
</div>
<hr class="mb-4">
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="same-address">
  <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
</div>
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" id="save-info">
  <label class="custom-control-label" for="save-info">Save this information for next time</label>
</div>
<hr class="mb-4">

<h4 class="mb-3">Payment</h4>

<div class="d-block my-3">
  <div class="custom-control custom-radio">
    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
    <label class="custom-control-label" for="credit">Credit card</label>
</div>
<div class="custom-control custom-radio">
    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
    <label class="custom-control-label" for="debit">Debit card</label>
</div>
<div class="custom-control custom-radio">
    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
    <label class="custom-control-label" for="paypal">Paypal</label>
</div>
</div>
<div class="row">
  <div class="col-md-6 mb-3">
    <label for="cc-name">Name on card</label>
    <input type="text" class="form-control" id="cc-name" placeholder="" required>
    <small class="text-muted">Full name as displayed on card</small>
    <div class="invalid-feedback">
      Name on card is required
  </div>
</div>
<div class="col-md-6 mb-3">
    <label for="cc-number">Credit card number</label>
    <input type="text" class="form-control" id="cc-number" placeholder="" required>
    <div class="invalid-feedback">
      Credit card number is required
  </div>
</div>
</div>
<div class="row">
  <div class="col-md-3 mb-3">
    <label for="cc-expiration">Expiration</label>
    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
    <div class="invalid-feedback">
      Expiration date required
  </div>
</div>
<div class="col-md-3 mb-3">
    <label for="cc-expiration">CVV</label>
    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
    <div class="invalid-feedback">
      Security code required
  </div>
</div>
</div>
<hr class="mb-4">
<button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
</form> -->
</div>
</div>

<!-- <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2018 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
  </ul>
</footer> -->
</div>

    <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!-- <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
            <script src="/js/frontend/popper.min.js"></script>
            <script src="/js/frontend/bootstrap.min.js"></script>
            <script src="/js/frontend/moment.min.js"></script>
            <script src="/js/frontend/bootstrap-datetimepicker.min.js"></script>

        </body>
        </html>
        <script type="text/javascript">
            $(function () {
                $('#scheduled_at').datetimepicker({
                    format: 'YYYY-MM-DD HH:mm:ss',
                    minDate: moment().add(3, 'days')

                });

                $("#booking_duration").datetimepicker({
                  format: 'mm',stepping: 15,

                });

            });
        </script>
