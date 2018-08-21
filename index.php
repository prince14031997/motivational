<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Permanent+Marker" rel="stylesheet">
    <script src="bootstrap/bootstrap.js">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Pacifico|Permanent+Marker" rel="stylesheet">
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style media="screen">

      body {
        margin: 0;
        padding: 0;
      }

      .col1{
        background: dodgerblue;
        margin-left: auto;
        margin-right: auto;
        margin-top: 40px;
      }
      .form{
        padding : 20px;
        margin-bottom: 0;
      }

      #button{
        margin-top: 44px;
      }

      .col2{
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
        padding-left: 0;
        padding-right: 0;
      }
      p{
        color: color: #b8b894;;
        font-size: 18px;
        text-align: center;
        font-family: 'Pacifico', cursive;
        font-family: 'Permanent Marker', cursive;
        font-family: 'Kaushan Script', cursive;
        margin-bottom: 0;
      }

      h3{
        color: black;
        float: right;
        font-size: 15px;
        font-family: 'Pacifico', cursive;
        margin-bottom: 0;
      }

      header{
        background: black;
      }

      footer{
        background: black;
      }
      .top{
        text-align: center;
        font-size: 25px;
        padding: 20px;
        color: #b8b894;
        margin-bottom: 0;
      }


      .down{
        text-align: center;
        font-size: 20px;
        padding: 20px;
        color: #b8b894;
        margin-top: 50px;
      }
      body{
        background: #b8b894;
      }

      .card-body1{
        background-color: white;
      }


      .col3{
        margin-left: auto;
        margin-right: auto;
        margin-top: 50px;
        padding-left: 0;
        padding-right: 0;
      }

      @media(max-width: 575px) {
        .col1, .col2, .col3 {
          margin: 0 20px;
        }
      }

      @media(max-width: 768px) {
        .col1, .col2, .col3 {
          margin-top: 30px;
        }
      }
      </style>
  </head>
  <body>
    <header>
      <h2 class="top">THINK DIFFERENT</h2>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col3">
          <div class="card">
            <img class="card-img-top" src="laptop.jpg" alt="Card image">
               <div class="card-body">
                 <h4 class="card-title">Prince Rathore</h4>
                 <p class="card-text">Prince Rathore  is programmer and software Engineer</p>
           </div>
          </div>
        </div>
      </div>
    </div>
  
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col2">
          <div class="card">
              <div class="card-body card-body1">
                <?php
                if (isset($_POST["submit"])) {
                  include 'connection.php';

                  $array = ["madarchod", "bhosdike", "mc", "bc", "chutiye", "chutiya"
                  ,"teri maa ka bhosda", "teri maa ki chut", "teri maa chodungha teri",
                  "fuck off", "fuck", "what the fuck"
                ];
                  $name = $_POST["name"];
                  $motivational = $_POST["motivational"];

                  if (in_array(strtolower($name), $array) || in_array(strtolower($motivational), $array)) {
                    echo "Dont use Bad Words";
                  } else {


                                      if (strlen($name) > 0 && strlen($motivational) > 3) {


                                        $sql = "INSERT INTO userdetail(name, motivational)
                                        VALUES('".$_POST['name']."', '".$_POST["motivational"]."')";
                                        mysqli_query($connection, $sql);
                                      }
                  }




              }
                                include "connection.php";
                                $sql1 = 'SELECT * FROM userdetail';
                                $result = mysqli_query($connection, $sql1);

                                if (mysqli_num_rows($result) > 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                    echo "<br>";
                                      echo "<p>".$row["motivational"]."</p>";
                                      echo "<br>";
                                      echo "<h3>".$row["name"]."</h3>";
                                      echo "<hr/>";
                                  }
                                }
                 ?>
             </div>
         </div>
        </div>
      </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col1">
            <form  action="index.php" method="post">
              <div class="form-group form">
                <input type="text" name="name" required class="form-control" placeholder="Enter the name">
                <br>
                <br>
                <input type="text" name="motivational" required class="form-control" placeholder="Ask anything">
                <button type="submit" name="submit" id="button" class="btn btn-secondary btn-lg btn-block">Send</button>
              </div>

            </form>
          </div>
        </div>
      </div>

    <footer>
      <h2 class="down">CREATED BY PRINCE RATHORE</h2>
    </footer>
  </body>
</html>
