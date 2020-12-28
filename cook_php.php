<html>

<head>
    <title> Login Php Page </title>
    <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7-dist/jquery/3.2.1/jquery.min.js"></script>


    <!------ Include the above in your HEAD tag ---------->

    <head>

    <body>
        <form class="form-horizontal" action="cook_reg.php" method="post">
            <fieldset>

                <!-- Form Name -->
                <legend>Add a new Cook</legend>

                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Cook No: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="noinput" type="text" placeholder="eg: 0000" class="form-control input-md">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Cook Name: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="nameinput" type="text" placeholder="eg: Anurag" class="form-control input-md">

                    </div>
                </div>

                <!-- <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Stat Date: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="a_date" type="text" placeholder="eg: YYYY-MM-DD" class="form-control input-md">

                    </div>
                </div> -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">DOB: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="date" type="text" placeholder="eg: YYYY-MM-DD" class="form-control input-md">

                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Address: </label>
                    <div class="col-md-4">
                        <input id="textinput" name="addinput" type="text" placeholder="eg: Patna" class="form-control input-md">

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