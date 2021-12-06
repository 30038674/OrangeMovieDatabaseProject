<?php
require("connect.php");

try {
	$query = "SELECT Title FROM movies ORDER BY Stars DESC LIMIT 10";
	$stmt = $conn->prepare($query);
	$stmt->execute();
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	$r = $stmt->fetchAll();
	
	$query2 = "SELECT Stars FROM movies ORDER BY Stars DESC LIMIT 10";
	$stmt2 = $conn->prepare($query2);
	$stmt2->execute();
	$result2 = $stmt2->setFetchMode(PDO::FETCH_ASSOC);
	$r2 = $stmt2->fetchAll();
} catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$data_array = Array();

for ($i = 0; $i < 10; $i++){
	$data_array += array($r[$i]['Title'] => $r2[$i]['Stars']);
}
/////////////////////////////////////////////////////////////////
//////////////////////////Testing Area///////////////////////////
/////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////

GetChart($data_array, "TopRanked", 700, 1800, "Top 10 Ranked Movies");

function GetChart($data, $name, $Height, $Width, $Title) {
  // Image dimensions
  $imageWidth = $Width;
  $imageHeight = $Height;

  // Grid dimensions and placement within image
  $gridTop = $Height*.02;
  $gridLeft = 40;
  $gridBottom = $Height*.95;
  $gridRight = $Width*.98;
  $gridHeight = $gridBottom - $gridTop;
  $gridWidth = $gridRight - $gridLeft;

  // Bar and line width
  $lineWidth = 1;
  $barWidth = ($gridRight/count($data))*.75;

  // Font settings
  $font = '/var/www/arial.ttf'; //Linux - TAFE Server
  //$font = 'C:/xampp/htdocs/arial.ttf'; //Windows - Xampp
  $fontSize = 8;

  // Margin between label and axis
  $labelMargin = 8;

  // Max value on y-axis
  $yMaxValue = 5*1.05;

  // Distance between grid lines on y-axis
  $yLabelSpan = 1;

  // Init image
  $chart = imagecreate($imageWidth, $imageHeight);

  // Setup colors
  $backgroundColor = imagecolorallocate($chart, 255, 255, 255);
  $axisColor = imagecolorallocate($chart, 85, 85, 85);
  $labelColor = $axisColor;
  $gridColor = imagecolorallocate($chart, 212, 212, 212);
  $barColor = imagecolorallocate($chart, 255, 140, 0);

  imagefill($chart, 0, 0, $backgroundColor);

  imagesetthickness($chart, $lineWidth);

  // Print grid lines bottom up

  for($i = 0; $i <= $yMaxValue; $i += $yLabelSpan) {
      $y = $gridBottom - $i * $gridHeight / $yMaxValue;

      // draw the line
      imageline($chart, $gridLeft, $y, $gridRight, $y, $gridColor);

      // draw right aligned label
      $labelBox = imagettfbbox($fontSize, 0, $font, strval($i));
      $labelWidth = $labelBox[4] - $labelBox[0];

      $labelX = $gridLeft - $labelWidth - $labelMargin;
      $labelY = $y + $fontSize / 5;

      imagettftext($chart, $fontSize, 0, $labelX, $labelY, $labelColor, $font, strval($i));
  }

  // Draw x- and y-axis

  imageline($chart, $gridLeft, $gridTop, $gridLeft, $gridBottom, $axisColor);
  imageline($chart, $gridLeft, $gridBottom, $gridRight, $gridBottom, $axisColor);

  // * Draw the bars with labels

  $barSpacing = $gridWidth / count($data);
  $itemX = $gridLeft + $barSpacing / 2;

  foreach($data as $key => $value) {
      // Draw the bar
      $x1 = $itemX - $barWidth / 2;
      $y1 = $gridBottom - $value / $yMaxValue * $gridHeight;
      $x2 = $itemX + $barWidth / 2;
      $y2 = $gridBottom - 1;

      imagefilledrectangle($chart, $x1, $y1, $x2, $y2, $barColor);
      //Add floating text value of bar above bar
      imagettftext($chart, $fontSize, 0, $x1+($x2-$x1)/4, $y1-$fontSize/2, $labelColor, $font, $value);

      // Draw the label
      $labelBox = imagettfbbox($fontSize, 0, $font, $key);
      $labelWidth = $labelBox[4] - $labelBox[0];

      $labelX = $itemX - $labelWidth / 2;
      $labelY = $gridBottom + $labelMargin + $fontSize;

      imagettftext($chart, $fontSize, 0, $labelX, $labelY, $labelColor, $font, $key);

      $itemX += $barSpacing;
  }

  //Add Title to Top of Chart
  $titleX=$Width/2-strlen($Title)*4;
  $titleY=$Height*.05;
  //imagettftext($chart, $fontSize*1.5, 0, $titleX, $titleY, $labelColor, $font, $Title);
	
	//ob_clean();
  header('Content-Type: image/png');
  $chart1=imagepng($chart);                 //Replaces the img src in the Body
  imagepng($chart, "/tmp/$Title.png");       //Saves a PNG with the Title as the name
}
?>