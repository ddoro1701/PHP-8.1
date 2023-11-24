<!DOCTYPE html>

<?php
        try
        {
           $mysqli = new mysqli('localhost', 'root', '', 'php1aufgabe'); 
        }
       
        catch (Exception $e)
        {
          echo "Failed to connect to MySQL: " . $e->getMessage();
          exit;
        }

      ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
$result = $mysqli->query("SELECT * FROM tabelle ") or die($mysqli->error);
while($row = $result->fetch_object())
{
  echo $row->nr.' '.$row->beschreibung.' '.$row->link."<br>\n";
}
?>
	<p>Hallo Test</p>
	<p></p>
	
</body>
</html>