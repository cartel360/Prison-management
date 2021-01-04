<html>

<head>
  <title> Prison Management | Add Prisoner </title>
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
            <a class="go-back-text" href="user.html">Prison Management &nbsp;</a>
          </span>
        </div>
      </nav>
    </header>

    <h2 class="title"> Add Prisoner </h2>
    <hr>

    <form class="form-horizontal" action="p_reg_dbms.php" method="post">
      <fieldset>
        <div>
          <br> <br>
        </div>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Prisoner No: </label>
          <div class="col-md-4">
            <input id="textinput" name="prisoner_no" type="text" placeholder="eg: 0000" class="form-control input-md">

          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Prisoner Name: </label>
          <div class="col-md-4">
            <input id="textinput" name="fullname" type="text" placeholder="Full Name..." class="form-control input-md">

          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Admit Date: </label>
          <div class="col-md-4">
            <input id="textinput" name="admit_date" type="date" placeholder="eg: YYYY-MM-DD" class="form-control input-md">

          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">DOB: </label>
          <div class="col-md-4">
            <input id="textinput" name="dob" type="date" placeholder="eg: YYYY-MM-DD" class="form-control input-md">

          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Address: </label>
          <div class="col-md-4">
            <input id="textinput" name="address" type="text" placeholder="eg: Patna" class="form-control input-md">

          </div>
        </div>

        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Committed Crime </label>
          <div class="col-md-4">
            <input id="textinput" name="crime" type="text" placeholder="eg: Murder" class="form-control input-md">

          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Cell no: </label>
          <div class="col-md-4">
            <input id="textinput" name="cell_no" type="text" placeholder="eg: 9999" class="form-control input-md">

          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Duration of Imprisonment: </label>
          <div class="col-md-4">
            <input id="textinput" name="duration" type="text" placeholder="eg: 1 Months" class="form-control input-md">

          </div>
        </div>
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Prisoner Type: </label>

          <select name="type">
            <option>Minimum security</option>
            <option>Standard security</option>
            <option>Maximum security</option>
          </select>
        </div>
        </div>
        </div>
        </div>

        <!-- Password input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="textinput">Gender: </label>
          <input type="radio" name="gender" value="Male">
          Male
          <br>
          <input type="radio" name="gender" value="Female">
          Female


        </div>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label" for="singlebutton"></label>
          <div class="col-md-4">
            <button id="singlebutton" name="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>

      </fieldset>
    </form>
  </body>

</html>