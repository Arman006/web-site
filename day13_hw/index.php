<?php
    
    if(isset($_POST['btn'])){
        $first_number=$_POST['first_number'];
        $last_number=$_POST['last_number'];
        $btn=$_POST['btn'];
        if($btn == '+') {
            $result=$first_number+$last_number;        
        }
        else if($btn == '-') {
            $result=$first_number-$last_number;        
        }
        else if($btn == '*') {
            $result=$first_number*$last_number;
        }
        else if($btn == '/') {
            $result=$first_number/$last_number;
        }
        else if($btn == '%') {
            $result=$first_number%$last_number;
        }
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
                        <h1>Problem 1</h1>      
                    </div>
                    <p>Make program that can input two numbers from user & addition,
                    subtraction, multiplication, Division & remainder them.</p>
                    <div class="page-header">
                        <h1>Solution</h1>      
                    </div>
                    <form class="form-horizontal" action="index.php" method="POST">
                        <div class="form-group">
                          <label for="number1" class="col-sm-2 control-label">First Number</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" name="first_number" id="number1" placeholder="Any Digit">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="number2" class="col-sm-2 control-label">Last Number</label>
                          <div class="col-sm-10">
                              <input type="number" class="form-control" name="last_number" id="number2" placeholder="Any Digit">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="result" class="col-sm-2 control-label">Result</label>
                          <div class="col-sm-10">
                              <input type="text" class="form-control" id="result" value="<?php  if(isset($result)) {echo $result; }?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" class="btn btn-default" name="btn" value="+">+</button>
                              <button type="submit" class="btn btn-default" name="btn" value="-">-</button>
                              <button type="submit" class="btn btn-default" name="btn" value="*">*</button>
                              <button type="submit" class="btn btn-default" name="btn" value="/">/</button>
                              <button type="submit" class="btn btn-default" name="btn" value="%">%</button>
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
                                    $first_number=$_POST['first_number'];
                                    $last_number=$_POST['last_number'];
                                    $btn=$_POST['btn'];
                                    if($btn == '+') {
                                        $result=$first_number+$last_number;        
                                    }
                                    else if($btn == '-') {
                                        $result=$first_number-$last_number;        
                                    }
                                    else if($btn == '*') {
                                        $result=$first_number*$last_number;
                                    }
                                    else if($btn == '/') {
                                        $result=$first_number/$last_number;
                                    }
                                    else if($btn == '%') {
                                        $result=$first_number%$last_number;
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





