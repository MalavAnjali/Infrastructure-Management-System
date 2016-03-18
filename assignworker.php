<html>
    <head>
        <title>Worker Table</title>
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
	    <h1>Worker Table</h1>
        <table>
        <thead>
            <tr>
                <td><b>Name</b></td>
                <td><b>Contact Number</b></td>
				<td><b>Occupation</b></td>
				<td><b>History</b></td>
				
            </tr>
        </thead>
        <tbody>
        <?php
            $connect = @mysql_connect("localhost","root", "");
            
            if (!$connect) {
                die(mysql_error());
            }
            mysql_select_db("demo");
            $results = mysql_query("SELECT * FROM worker ");
            while($row = mysql_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['Name']?></td>
                    <td><?php echo $row['ContactNumber']?></td>
					<td><?php echo $row['Occupation']?></td>
					<td><?php echo $row['History']?></td>
					
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>