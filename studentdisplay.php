<?php
            include('init.php');
            

            $sql = "SELECT `name`, `rno`, `class_name` FROM `students`";
            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
              

                while($row = mysqli_fetch_array($result))
                  {
                    echo "<tr>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['rno'] . "</td>";
                    echo "<td>" . $row['class_name'] . "</td>";
                    
					echo '<td><a class="btn btn-success" href="editstudent.php?name='.$row['name'].'">Edit</a></td>';
					echo '<td><a class="btn btn-danger" href="destudent.php?name='.$row['name'].'">Delete</a></td>';
                                echo '</td>';
                  echo "</tr>";
                  }

                echo "</table>";
            } else {
                echo "0 Students";
            }
        ?>