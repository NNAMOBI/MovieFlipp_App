<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie-flip CRUD App</title>
    <style>

      .create-form {
        display: none;
      }
    
    </style>
</head>
<body>
     <div>
       <h2>Movie-flip CRUD Application</h2>
     </div>

     <div class="content-wrapper"> 
       <button id="create-button">Create Record</button>
       <button id="edit-button">Edit Record</button>
       <button id="delete-button">Delete Record</button>

       <form action="index.php" method="POST" class="create-form">
       <input type="text" placeholder="Enter movie title" name="create-title"><br/>
       <input type="text" placeholder="Enter movie genre " name="create-genre"><br/>
       <input type="text" placeholder="Enter movie director" name="create-director"><br/>
       <input type="submit" value="save" name="create-button">
       </form>

       <?php

        //function to connect to the database
        function createRecord(){
          $serverName = 'localhost';
          $userName = "root";
          $password = "Kingdom2471984*";
          $databaseName= "movieflip_App";

          //creating a connection to the database
          $connection = mysqli_connect($serverName, $userName, $password, $databaseName);
           
          //check if connection was successful or not
          if(!$connection){
            die('connection unsuccessful : '.mysqli_connect_error());
          }else {
            echo "connection was successful";
          }

          //Storing the userinput into variables
          $movieTitle = $_POST['create-title'];
          $movieGenre = $_POST['create-genre'];
          $movieDirector = $_POST['create-director'];

          //Attempting to insert Data into our table
          $sql =  "INSERT INTO movieflix_DB (title, genre, Director) VALUES ('$movieTitle', '$movieGenre',  '$movieDirector')";

          //Check if inserting data was successful
          if(mysqli_query($connection, $sql)) {
            echo 'successfully inserted data';
          }else{
            echo 'Error: '.$sql.mysqli_error($connection);
          }

          //close connection
          mysqli_close($connection);

        }

       if(isset($_POST['create-button'])){
         createRecord();
       }

       ?>

     </div>
     
     <script src="script.js"></script>
    
</body>
</html>








