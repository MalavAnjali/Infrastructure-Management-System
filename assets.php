<html>
    <head>
        <title>Assets Table</title>
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
	    <h1>Assets Table</h1>
        <table>
        <thead>
            <tr>
                <td><b>id</b></td>
                <td><b>username</b></td>
				<td><b>userId</b></td>
				<td><b>room number</b></td>
				<td><b>room type</b></td>
				<td><b>hostel number</b></td>
				<td><b>chair</b></td>
				<td><b>table</b></td>
				<td><b>fan</b></td>
				<td><b>tubelight</b></td>
				<td><b>geyser</b></td>
				<td><b>tap</b></td>
				<td><b>switch board</b></td>
				<td><b>water supply</b></td>
				<td><b>water cooler</b></td>
				<td><b>cleaning</b></td>
				<td><b>paint</b></td>
				<td><b>mosquito repellant</b></td>
				<td><b>door and window</b></td>
				<td><b>bed</b></td>
            </tr>
        </thead>
        <tbody>
        <?php
            $connect = @mysql_connect("localhost","root", "");
            
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("demo");
            $results = mysql_query("SELECT * FROM assets ");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['username']?></td>
					<td><?php echo $row['userId']?></td>
					<td><?php echo $row['roomNumber']?></td>
					<td><?php echo $row['roomType']?></td>
					<td><?php echo $row['hostelNumber']?></td>
					<td><?php echo $row['chair']?></td>
					<td><?php echo $row['table']?></td>
					<td><?php echo $row['fan']?></td>
					<td><?php echo $row['tubelight']?></td>
					<td><?php echo $row['geyser']?></td>
					<td><?php echo $row['tap']?></td>
					<td><?php echo $row['swicth Board']?></td>
					<td><?php echo $row['water supply']?></td>
					<td><?php echo $row['water cooler']?></td>
					<td><?php echo $row['cleaning']?></td>
					<td><?php echo $row['paint']?></td>
					<td><?php echo $row['Mosquito Repellant']?></td>
					<td><?php echo $row['Door+window']?></td>
					<td><?php echo $row['bed']?></td>
					
					
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>