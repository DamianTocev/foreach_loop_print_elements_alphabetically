<?php
$elements = ['Silver', 'Cat','Car', 'Diablo', 'Alpha', 'Beta', 'Delta'];
while (FALSE !== ($line = fgets(STDIN))) {
  $elements[] = $line;
}
sort($elements);
foreach($elements as $item) {
    print "<p>".$item."</p>";
}
?>