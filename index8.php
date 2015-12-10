<?php
   
    function password_generator($password_length) {
        $data = array('a', '@', '#', 'c', 'A', 'm', '%', '$', '*', 'C', '!', '1', '5', '6');
        $password = ' ';
        for ($i = 1; $i <= $password_length; $i++) {
            $index = rand(0, 13);
            $password = $password . $data[$index];
        }
        return $password;
    }      
    
?>

<html>
    <head>
        <title>Welcome to PHP Demo</title>
        <link rel="stylesheet" href="styles/bootstrap.min.css" />
    </head>
    <body>
        <div class="container">
            <div class="jumbotron text-center">
                <h2>SEIP ID: 107048</h2>
                <h2>Arman Ahmed</h2>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="btn-group-vertical" role="group" aria-label="...">
                        <a class="btn btn-info btn-lg" role="button" href="index.php" title="Problem 1">Problem 1</a>
                        <a class="btn btn-info btn-lg" role="button" href="index2.php" title="Problem 1">Problem 2</a>
                        <a class="btn btn-info btn-lg" role="button" href="index3.php" title="Problem 1">Problem 3</a>
                        <a class="btn btn-info btn-lg" role="button" href="index4.php" title="Problem 1">Problem 4</a>
                        <a class="btn btn-info btn-lg" role="button" href="index5.php" title="Problem 1">Problem 5</a>
                        <a class="btn btn-info btn-lg" role="button" href="index6.php" title="Problem 1">Problem 6</a>
                        <a class="btn btn-info btn-lg" role="button" href="index7.php" title="Problem 1">Problem 7</a>
                        <a class="btn btn-info btn-lg" role="button" href="index8.php" title="Problem 1">Problem 8</a>
                        <a class="btn btn-info btn-lg" role="button" href="index9.php" title="Problem 1">Problem 9</a>
                        <a class="btn btn-info btn-lg" role="button" href="index10.php" title="Problem 1">Problem 10</a>
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="page-header">
                        <h1>Problem 8</h1>      
                    </div>
                    <p>Make a program that can input one number from user
                    & make a password & the length of the password is equal to 
                    the given number.</p>
                    <div class="page-header">
                        <h1>Solution</h1>      
                    </div>
                    <form class="form-horizontal" action="index8.php" method="POST">
                        <div class="form-group">
                          <label for="number" class="col-sm-2 control-label">Enter Your Length</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" name="given_length" id="number" placeholder="An Integer for Length">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="result" class="col-sm-2 control-label">Result</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="result" value="<?php if(isset($_POST['given_length'])) {echo password_generator($_POST['given_length']);} ?> ">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default" name="btn" value="submit">Submit</button>
                          </div>
                        </div>
                    </form>
                    <div class="panel panel-success">
                      <div class="panel-heading">
                        <h3 class="panel-title">Solution Code</h3>
                      </div>
                      <div class="panel-body">
                        <code>
                            <pre>
                                &lt;?php

                                    function password_generator($password_length) {
                                        $data = array('a', '@', '#', 'c', 'A', 'm', '%', '$', '*', 'C', '!', '1', '5', '6');
                                        $password = ' ';
                                        for ($i = 1; $i <= $password_length; $i++) {
                                            $index = rand(0, 13);
                                            $password = $password . $data[$index];
                                        }
                                        return $password;
                                    }

                                ?&gt;
                            </pre>
                        </code>  
                      </div>
                    </div>
                </div>
            </div>
            
        </div>
        <script src="scripts/jquery-2.1.4.min.js"></script>
        <script src="scripts/bootstrap.min.js"></script>
    </body>
</html>





