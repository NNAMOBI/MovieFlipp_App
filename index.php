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

       <form action="" method="POST" class="create-form">
       <input type="text" placeholder="Enter movie title" name=""><br/>
       <input type="text" placeholder="Enter movie genre " name=""><br/>
       <input type="text" placeholder="Enter movie director" name=""><br/>
       <input type="submit" value="save">
       </form>

     </div>
     
     <script src="script.js"></script>
    
</body>
</html>








