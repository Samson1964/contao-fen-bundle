<?php

require_once("ChessImagerUtils_php5.php");

//$_GET["coordinates"] = "off";
//$_GET["square_size"] = "";
//$_GET["border_width"] = "";
//$_GET["border_color"] = "";
//$_GET["piece_style"] = "";
//$_GET["direction"] = "";
//$_GET["ls_color"] = "(238,207,163)";
//$_GET["ds_color"] = "(138,138,138)";

$direction = getBoardDirection();
$board = makeBoardImage($direction);

$pieceArray = parseFenString($_GET["fen"]);

for($square=0;$square<64;$square++) {
  mergePiece($board,$pieceArray[$square],$square,$direction);
}

sendImage($board);

?>
