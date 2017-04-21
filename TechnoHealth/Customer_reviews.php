
	 <!...php code for connect to database..>
      <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysql_connect($host,$username,$password)
          or die("Unable to connect");
     //   echo "Connections are made successfully::";
      $selected = mysql_select_db("technohealth", $connector)
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysql_query("SELECT * FROM reviews ");
      ?>
		<!...php code to print Comments...>
        <?php
		echo ("All comments");
		 echo nl2br("\n");
		 echo nl2br("\n");
		 
          while( $row = mysql_fetch_assoc( $result ) ){
		  
         echo "<table>" ;
		 echo "<tr>" ;
		 echo "<td>" ; echo 'Name:'; 
		
		       echo "<td>" . $row['name'] . "</td>"; 
			    echo "</td>" ;
				echo "</tr>" ;
				echo "<tr>" ;
				 echo "<td>" ; echo 'Subject:'; 
		
		       echo "<td>" . $row['subject'] . "</td>"; 
			    echo "</td>" ;
				echo "</tr>" ;
					echo "<tr>" ;
				 echo "<td>" ; echo 'Email:'; 
		
		       echo "<td>" . $row['email'] . "</td>"; 
			    echo "</td>" ;
				echo "</tr>" ;
					echo "<tr>" ;
				 echo "<td>" ; echo 'Comment:'; 
		
		       echo "<td>" . $row['comment'] . "</td>"; 
			    echo "</td>" ;
				echo "</tr>" ;
				echo "</td>"; echo "</tr>" ; 
				
				echo "<td>" ; echo 'rate:'; 
		
		       echo "<td>" . $row['rate']  . " Star" . "</td>"; 
			    echo "</td>" ;
				echo "</tr>" ;
				echo "</td>"; echo "</tr>" ; echo "</table>";

		 echo nl2br("\n");

          }
        ?>

