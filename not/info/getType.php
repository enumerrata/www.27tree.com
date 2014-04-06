<?php

ob_start();
echo "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
echo "<root>\n";
$dom = new domDocument;
$dom->load('../../mod/gendata/navlist.xml');
$xml = simplexml_import_dom($dom);
foreach ($xml->xpath("n[@type]") as $child) {
   foreach ($child->xpath("./dt") as $cx) {
      $act = $child->xpath("./acti");
      if ($act[0] == '0')
         continue;
      echo "   <sp desc=\"$cx[0]\" stype=\"$child[type]\">\n";
      foreach ($child->xpath("./sband/band") as $sband) {
         echo "      <band type=\"", $sband[0]['name'], "\" url=\"", $sband[0]['url'], "\"></band>\n";
      }
      echo "   </sp>\n";
   }
}
echo "</root>";
file_put_contents("convlist.xml", ob_get_contents());
ob_end_clean();
?>
