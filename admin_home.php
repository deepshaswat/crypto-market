<?php
include 'sql_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="static/style.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include 'nav_bar.php';
?>
  
<div class="container">
  <h3>Add Daily Transactions</h3><br />
  <form class="form-horizontal" action="transaction_added.php" method="post">
   <div class="form-group">
      <label class="control-label col-sm-2" for="billno">Bill Number:</label>
      <div class="col-sm-3">          
        <input type="text" class="form-control" id="billno" placeholder="Enter Bill Number" name="billno">
      </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2"for="list">Select Transaction Type:</label>
    <div class="col-sm-3"> 
  <select class="form-control" id="list" name="list">
    <option>Sale</option>
    <option>Return</option>
</select>
</div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="transactiondate">Transaction Date:</label>
      <div class="col-sm-3">          
        <input type="text" class="form-control" id="transactiondate" placeholder="Enter Transaction Date" name="transactiondate"> 
      </div>
      <label> (yyyy-mm-dd) </label>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="amount">Transaction Amount:</label>
      <div class="col-sm-3">          
        <input type="text" class="form-control" id="amount" placeholder="Enter Transaction Amount" name="amount">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
  </form>
</div>


</body>
</html>
