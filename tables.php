<html>
    <head>
        <title>Complain Table</title>
		<style>
        table, td, th {
        border: 1px solid black;
		text-align:center;
		background-color:skyblue;
        }

        table {
        border-collapse: collapse;
        width: 100%;
		text-align:center;
        }

        th {
        height: 50px;
		text-align:center;
		
        }
        </style>
    </head>
    <body>
	    <h1>Complain Table</h1>
        <table>
        <thead>
            <tr>
                <td><b>Id</b></td>
                <td><b>date</b></td>
				<td><b>username</b></td>
				<td><b>hostel_number</b></td>
				<td><b>room_number</b></td>
				<td><b>room_type</b></td>
				<td><b>problem_id</b></td>
            </tr>
        </thead>
        <tbody>
        <?php
            $connect = @mysql_connect("localhost","root", "");
            
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("demo");
            $results = mysql_query("SELECT * FROM iitj ");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['userId']?></td>
                    <td><?php echo $row['date']?></td>
					<td><?php echo $row['username']?></td>
					<td><?php echo $row['hostel_number']?></td>
					<td><?php echo $row['room_number']?></td>
					<td><?php echo $row['room_type']?></td>
					<td><?php echo $row['problem_id']?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>