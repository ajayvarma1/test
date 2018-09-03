
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h3>Blog Post</h3>
  <p style="font-size:13px">Anything post!</p> 
  <div class="row">
    <div class="col-md-12">
    <form action="action_page.php">
    <div class="form-group">
      <input type="text" class="form-control" id="post_name" placeholder="Post your thought...!" name="post_name">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
    </div>      
    
  </div>
</div>
<?php 
    include "config.php";
    $sql = "SELECT id,postname FROM post";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. " - Post Name: " . $row["postname"]. "<br>";
        }
    } else {
        echo "0 results";
    }
?>
</body>
</html>
