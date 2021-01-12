<html>

<head>
    <title> Prison Management | Add Visitor </title>
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
                    <a href="admin.html">
                        <img class="go-back" src="assets/images/seal-of-the-federal-bureau-of-prisons.svg-122x122.png">
                    </a>
                    <span>
                        <a class="go-back-text" href="admin.html">Prison Management &nbsp;</a>
                    </span>
                </div>
            </nav>
        </header>

        <h2 class="title"> Add Visitor </h2>
        <hr>


        <form class="form-horizontal" action="visitor_reg.php" method="post">
            <fieldset>



                <!-- Text input-->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Visitor Name: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="fullname" type="text" placeholder="eg: Anurag" class="form-control input-md">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Gender: </label>
                    <input type="radio" name="gender" value="Male">
                    Male
                    <br>
                    <input type="radio" name="gender" value="Female">
                    Female
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Prisoner Name: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="prisoner_name" type="text" placeholder="eg: Anurag" class="form-control input-md">

                    </div>
                </div>

                <!-- <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Date: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="admit_date" type="date" placeholder="eg: YYYY-MM-DD" class="form-control input-md">

                    </div>
                </div> -->

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Address: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="address" type="text" placeholder="eg: Patna" class="form-control input-md">

                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Relationship: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="relation" type="text" placeholder="eg: Patna" class="form-control input-md">

                    </div>
                </div>





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