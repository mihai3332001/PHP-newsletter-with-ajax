

<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Newsletter</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

</head>



<body>

<div class="jumbotron">

<div class="container">

<div class="row">



<div class="col-lg-12 banner">

<img src="img/banner.jpg" class="img-fluid" alt="Responsive image">

</div>



</div>

</div>



<div class="container">

  <form id="formNewsletter" method="POST">

<div class="row ml-lg-5">



<div class="col1 col-12 col-lg-7">



  <div class="detalii mb-2">

 <font size="4" color="#006dcc"><b>Detalii personale</b></font><br>

</div>

  <div class="form-group row mb-4">

        <div class="col-12 col-lg-6">

      <label for="nume" class="col-sm-2 col-form-label" >Nume</label>

        <input type="text" class="form-control" id="nume" placeholder="Nume" name="nume">

        </div>

        <div class="col-12 col-lg-6">

      <label for="prenume" class="col-sm-2 col-form-label" >Prenume</label>

        <input type="text" class="form-control" id="prenume" placeholder="Prenume" name="prenume">

      </div>

      <div class="col-12 col-lg-12">

      <label for="inputEmail3" class="col-sm-8 col-form-label" >Adresa de Email</label>

        <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">

        </div>

     <!--    <div class="col-8 col-lg-6">

      <label for="telefon" class="col-sm-8 col-form-label" >Numar de tel</label>

        <input type="tel" class="form-control" id="telefon" placeholder="Telefon" name="telefon">

  </div> -->

 </div>

<div class="d-flex justify-content-start">

 <font size="4"> Acceptarea conditiilor site-lui si acord preluare date cu caracter personal.</font><br>

</div>

 <div class="d-flex justify-content-start">

 

    <label class="custom-control custom-checkbox">

  <input type="checkbox" class="custom-control-input" name="gdpr" value="1">

  <span class="custom-control-indicator"></span>

  <span class="custom-control-description"data-toggle="modal" data-target="#exampleModalLong">Sunt de acord</span>

</label>

<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true">&times;</span>

        </button>

      </div>

      <div class="modal-body">

      This is Privacy Policy content. This is Privacy Policy content.<p> This is Privacy Policy content.vThis is Privacy Policy content<p>

      This is Privacy Policy content. This is Privacy Policy content. <p>This is Privacy Policy content.vThis is Privacy Policy content.#

      </div>

      <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        

      </div>

    </div>

  </div>

</div>

</div>

 

</div>



    <div class="col2 col-12 col-lg-5">



    <div class="text d-flex justify-content-start">

 <font size="4" color="#006dcc"><b>La ce doriti sa va abonati ?</b></font><br><br>

</div>

 <div class="d-flex justify-content-start">

    <label class="custom-control custom-checkbox">

  <input type="checkbox" class="custom-control-input" name="oferte" id="oferte" value="1">

  <span class="custom-control-indicator"></span>

  <span class="custom-control-description">Oferte si promotii</span>

</label>

</div>



<div class="d-flex justify-content-start">

    <label class="custom-control custom-checkbox">

  <input type="checkbox" class="custom-control-input" name="spectacole" value="1">

  <span class="custom-control-indicator"></span>

  <span class="custom-control-description">Spectacole</span>

</label>

</div>

<div class="d-flex justify-content-start">

    <label class="custom-control custom-checkbox">

  <input type="checkbox" class="custom-control-input" name="conferinte" value="1">

  <span class="custom-control-indicator"></span>

  <span class="custom-control-description">Conferinte, seminarii, workshop-uri</span>

</label>

</div>

<div class="d-flex justify-content-start">

    <label class="custom-control custom-checkbox">

  <input type="checkbox" class="custom-control-input" name="activitati" value="1">

  <span class="custom-control-indicator"></span>

  <span class="custom-control-description">Activitati sportive</span>

  </label>

</div>

  <div class="d-flex justify-content-start">

    <label class="custom-control custom-checkbox">

  <input type="checkbox" class="custom-control-input" name="inaugarari" value="1">

  <span class="custom-control-indicator"></span>

  <span class="custom-control-description">Inaugarari, expozitii, degustari</span>

  </label>

</div>

<div class="d-flex justify-content-start">

    <label class="custom-control custom-checkbox">

  <input type="checkbox" class="custom-control-input" name="infoPublic" value="1">

  <span class="custom-control-indicator"></span>

  <span class="custom-control-description">Informatii furnizate de institutiile publice</span>

  </label>

</div>

  <div class="d-flex justify-content-start">

    <label class="custom-control custom-checkbox">

  <input type="checkbox" class="custom-control-input" value="1" id="allSelect">


  <span class="custom-control-indicator"></span>

  <span class="custom-control-description">Toate</span>

</label>

</div>



 <div class="captcha_wrapper">

	<!-- <div class="g-recaptcha" data-sitekey="6LeVPUkUAAAAAAvFT27511CGu3uM6KAorSR40jUj"></div> -->

	</div>

<button class="btn btn-primary btn-lg"  type="submit" id="buttonSend">Trimite</button>

</div>

</div>



</div>

 </form>

</div>


<div class="container form-newsletter">
  <div class="col-12">
    <div class="messageView text-center"></div>
  </div>
</div>







 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js "></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script src="js/custom.js"></script>
</body>

</html>

