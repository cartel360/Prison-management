<html>

<head>
  <title> Prison Mangement | Add Admin </title>
  <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="assets/dashboard.css">
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.7-dist/jquery/3.2.1/jquery.min.js"></script>


  <!------ Include the above in your HEAD tag ---------->

  <head>

  <body>
    <header>
      <nav class="myNavbar">
        <div class="box">
          <a href="user.html">
            <img class="go-back" src="assets/images/seal-of-the-federal-bureau-of-prisons.svg-122x122.png">
          </a>
          <span>
            <a class="go-back-text" href="admin.html">Prison Management &nbsp;</a>
          </span>
        </div>
      </nav>
    </header>

    <h2 class="title"> Add Admin </h2>
    <hr>
    <form class="form-horizontal" action="a_reg_dbms.php" method="post">
      <fieldset>


        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Name: </label>
          <div class="col-md-4">
            <input id="textinput" name="noinput" type="text" placeholder="eg: Anurag" class="form-control input-md">

          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Password: </label>
          <div class="col-md-4">
            <input id="textinput" name="passinput" type="text" placeholder="eg: anu1234" class="form-control input-md">

          </div>
        </div>





        <!-- Password input-->


        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </fieldset>
    </form>
  </body>

</html>