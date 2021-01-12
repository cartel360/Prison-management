<html>

<title> Prison Management | Delete Cleaner </title>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-3.3.7-dist/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="assets/dashboard.css">



<head>

<body>
  <header>
    <nav class="myNavbar">
      <div class="box">
        <a href="admin.html">
          <img class="go-back" src="assets/images/seal-of-the-federal-bureau-of-prisons.svg-122x122.png">
        </a>
        <span>
          <a class="go-back-text" href="admin.html">Prison Management &nbsp;</a>
        </span>
      </div>
    </nav>
  </header>

  <h2 class="title"> Delete Cleaner </h2>

  <form class="form-horizontal" action="c_del_dbms.php" method="post">
    <fieldset>

 

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Cleaner No: </label>
        <div class="col-md-4">
          <input id="textinput" name="input" type="text" placeholder="eg: 0000" class="form-control input-md">

        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Delete</button>
          </div>
        </div>

    </fieldset>
  </form>
</body>

</html>