<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Min to Max Counter">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Anita Kay">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="./fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav/favicon-16x16.png">
    <link rel="manifest" href="./fav/site.webmanifest">
    <link rel="stylesheet" href="./css/style.css">
    <title>Min to Max Counter</title>
  </head>
  <body>
    <?php
    echo "<h1>Min to Max Counter</h1>";
    ?>
		<?php 
      echo "<h3>This program will display all numbers from  your minimum number up to your maximum number:</h3>";
    ?>
		<table>
			<tr align = "center">
				<td valign="top" align="right">					
					<form action="./results.php" method="post" target="result">		
						<label for="userNum">Enter a minimum number:</label>
						<input type="number" step="1" name="userMin" id="userMin"><br><br>
            <label for="userNum">Enter a maximum number:</label>
						<input type="number" step="1" name="userMax" id="userMax"><br><br>
						
						<input type="submit" value="Display Numbers">
					</form>
				</td>
				<td valign="top" align="left">
					<img src="./images/Numbers.png" alt="Numbers" width="auto">
				</td>
			</tr>
		</table>	
		
		<!-- Iframe for results -->
    	<iframe id="result" name="result">
    	</iframe>
	
  </body>
</html>