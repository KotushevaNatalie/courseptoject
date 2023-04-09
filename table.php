<?php 
				include "database.php";
				

				$sql = mysqli_query($conn, "SELECT * FROM `map`");
				while ($result = mysqli_fetch_array($sql)) {
					echo '<tr>
                    <td><a href="object.php?id='.$result['id'].'">'   .$result['id'].   '</a></td>'.
                    '<td><a href="object.php?id='.$result['id'].'">'  .$result['OrderNumber'].   '</a></td>'.
                    '<td><a href="object.php?id='.$result['id'].'">'  .$result['CustomerConstruction'].    '</a></td>'.
                    '<td><a href="object.php?id='.$result['id'].'">'  .$result['GeneralContractor'].   '</a></td>'.
                    '<td><a href="object.php?id='.$result['id'].'">'  .$result['AdmArea'].   '</a></td>'.
                    '<td><a href="object.php?id='.$result['id'].'">'  .$result['District'].   '</a></td>'.
                '</tr>';

			}
			?>