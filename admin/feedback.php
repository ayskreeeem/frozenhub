<div class="container-fluid">
        <table id="table" class="table table-bordered text-center" style="width:100%; margin:auto; border-collapse:collapse;">
 
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Service and Product Rating</th>
            <th>Feedback</th>
		       
        </tr>
</thead>
<tbody>
<?php
 
$sql = "SELECT * FROM feedback_table";
$result = $conn->query($sql);
    while ($row = mysqli_fetch_assoc($result)){
 
    $feed_id = $row["feed_id"];
    echo '<tr>
		<td>'. $row["firstName"] . '</td>
		<td>' . $row["lastName"] . '</td>
		<td>' . $row["email"] . '</td>
		<td>' . $row['phone'] . '</td>
		<td>' . $row['ratings']. '</td>
        <td>' . $row['feedback']. '</td>';}
    
?>
    

      </table>
  </div>
