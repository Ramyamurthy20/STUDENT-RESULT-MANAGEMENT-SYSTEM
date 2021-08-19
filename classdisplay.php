<?php
            include('init.php');
          
            $db = mysqli_select_db($conn,'srms');

            $sql = "SELECT `name`, `id` FROM `class`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
            

                while($row = mysqli_fetch_array($result))

                  {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['name'] . "</td>";
				  				 
					echo '<td><a class="btn btn-success" href="editclass.php?id='.$row['id'].'">Edit</a></td>';
					echo '<td><a class="btn btn-danger" href="declass.php?name='.$row['name'].'">Delete</a></td>';
                                echo '</td>';
                  echo "</tr>";

                  }

                echo "</table>";
            } else {
                echo "0 results";
            }
        ?>
        