<?php
// ++++++++ DATABASE CONNECT +++++++++++++++++++
   define( "DB_NAME", 'demuro');
   define( "HOST", 'localhost');
   define( "DB_USERNAME", 'edgaras01');  // root
   define( "DB_PASS", 'xxxx');            // root


   $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASS, DB_NAME);

   if ($connection) {
    //    echo "Prisijungti prie DB pavyko <br>";
   } else {
       die ("ERROR: prisijungti napavyko, nes: " . mysqli_connect_error());
   }

   mysqli_set_charset($connection,"utf8");

   function getConnection() {
       global $connection;
       return $connection;
   }

// +++++++++ STRAISPNIU PAEMIMAS++++++++++++++++++
   function getUsers($kiekis = 999) {
       $sql_text = "SELECT straipsnis FROM paslaugos
                    WHERE id=$kiekis;";
       $rezultatai = mysqli_query(getConnection(), $sql_text);
       if (mysqli_num_rows($rezultatai) > 0 ) {
            return $rezultatai;
       } else {
           echo "ERROR: " . mysqli_error(getConnection());
           return null;
       }
   }
// +++++++++ STRAISPNIU PAEMIMAS++++++++++++++++++

?>
