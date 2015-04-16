<?php 



if ($box_per_row == 4) {
	$col = "col-md-3";
}
elseif ($box_per_row == 3) {
	$col = "col-md-4";
}
elseif ($box_per_row == 2) {
	$col = "col-md-6";
}
elseif ($box_per_row == 1) {
	$col = "col-md-12";
}
else {
	echo "Hai inserito un valore non supportato, puoi inserire solo da quattro a un box per riga";
}


?>