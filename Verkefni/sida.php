<!DOCTYPE HTML>
<html>
<head>
	<title>tenging database</title>
</head>
<body>
<p>
	<?php
		include "connection.php";
		try {
			$sql = "SELECT * FROM images";
			$result = $conn->query($sql);
			
		} catch (Exception $e) {
			echo "error fetching images: " . $e -> getMessage();
		}
		while ($row = $result->fetch())
		{
			$images[] = $row['imageID']; // eins med hinar radirnar
			$images[] = $row['imageName'];
			$images[] = $row['imagePath'];
			$images[] = $row['imageText'];
		}

		//print_r($images)
		echo "<br>";
		$rowcounter = 0;
		for ($i=0; $i < count($images); $i++) { 
			echo $images[$i] . " ";
			$rowcounter++;
			if ($rowcounter % 4 == 0) {
				echo "<br>";
			}
		}
	?>
</p>

</body>
</html>