<?php 
  include('functions.php');
  include('server.php');

  function fetch_members()
  {
      $sql = 'SELECT * FROM "Member"';
      $query = pg_query($db, $sql);
      $result = pg_fetch_array($db, $query);

      return $result;
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    />
    <link rel="stylesheet" href="bank.html" />
    <link rel="stylesheet" href="home.html" />
    <link rel="stylesheet" href="home.css" />
    <title>Ilker</title>
  </head>
  <body>
    <div id="header">
      <header>
        <section id="profile">
          <img src="image/profilepicture.jpg" alt="Profile Picture" />
          <div id="credentials">
            <h1 id="name">Ahmet Soran</h1>
            <h2 id="role">Admin</h2>
          </div>
        </section>
        <form action="#" id="toolbar">
          <i class="fas fa-search" id="search"></i>
          <input type="text" placeholder="Search Bar" />
        </form>
        <!-- <div id="toolbar">
        <i class="fas fa-search" id="search"></i>
      </div> -->

        <img id="logo" src="image/logo.png" alt="Logo" />
      </header>
    </div>
    <main>
      <ul id="aull">
        <li><a href="home.php">Home</a></li>
        <li><a style="font-weight: bold" href="#">Detailed Table</a></li>
        <li><a href="bank.html">Bank Information</a></li>
        <li><a href="admins.html">Admins</a></li>
        <li><a href="#">Log Out</a></li>

        <button id="thebtn">Edit Table</button>
      </ul>
      <section id="detailedTable">
        <table id="dt">
          <thead>
            <tr class="dtr">
              <th>S.ID</th>
              <th>TC</th>
              <th>Name</th>
              <th>Surname</th>
              <th>Work Place</th>
              <th>Email</th>
              <th>Graduation Date</th>
              <th>Department</th>
              <th>Mobile Number</th>
              <th>Debt</th>
            </tr>
          </thead>
          <tbody>
            <?php 
              while( $row = fetch_members() ) 
              {
                echo "
                  <tr class=\"dtr\">
                    <td>".$row['Member_ID']." </td>
                    <td>".$row['National_ID_Number']." </td>
                    <td>".$row['Name']." </td>
                    <td>".$row['Surname']." </td>
                    <td>".$row['Workplace']." </td>
                    <td>".$row['E-Mail']." </td>
                    <td>".$row['Graduation Date']." </td>
                    <td>".$row['Department']." </td>
                    <td>".$row['Phone_Number']." </td>
                    <td>".$row['Remaining_Fee']." </td>
                  </tr>";
              }
            ?>

            <tr class="dtr">
              <td>110510102</td>
              <td>110082763</td>
              <td>Yasin</td>
              <td>inal</td>
              <td>Google</td>
              <td>yasin@gmail.com</td>
              <td>2021-01-01</td>
              <td>Computer Engineering</td>
              <td>055551972</td>
              <td>$0</td>
            </tr>
            <tr class="dtr">
              <td>110510102</td>
              <td>110082763</td>
              <td>Jhon</td>
              <td>Cena</td>
              <td>E&Y</td>
              <td>Cena@gmail.com</td>
              <td>2020-01-01</td>
              <td>Mechanical Engineering</td>
              <td>057689512</td>
              <td>$500</td>
            </tr>
          </tbody>
        </table>
      </section>
    </main>
  </body>
</html>
