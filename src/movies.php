<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projekt1</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">PRO 1</div>

            <ul class="headerlinks">
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <h1>Du är inloggad! Välkommen!</h1>

        <form>
            Movie:
            <select>
              <option disabled selected>-- Select Movie --</option>
              <?php
                  include "conn_mysql.php";  // Using database connection file here
                  $records = mysqli_query($db, "SELECT movie_name From tblmovies");  // Use select query here 
          
                  while($data = mysqli_fetch_array($records))
                  {
                      echo "<option value='". $data['movie_name'] ."'>" .$data['city_name'] ."</option>";  // displaying data in option menu
                  }	
              ?>  
            </select>
          </form>
          
          <?php mysqli_close($db);  // close connection ?>
          
    </main>
</body>
</html>