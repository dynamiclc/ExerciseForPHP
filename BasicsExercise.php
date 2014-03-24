<!-- Exercise file for learning basics of HTML, CSS, JavaScript, PHP, and more -->

<!-- PHP code doing parity checksum of Chinese citizen ID number -->
<?php
function id_card_check($id) {
    $s = str_split ( strrev ( $id ) ); // Reverse the string and put into an array
    $j = 0; // the check digit
    foreach ( $s as $k => $v ) { $j += $v * (pow ( 2, $k + 1 ) % 11);} // Calculate S
    $j = (12 - $j % 11) % 11; // Calculate check digit
    $j = (10 == $j) ? 'X' : $j; // X represents the check digit when it is 10
    return $j; // Return the check digit
}
echo id_card_check ( '11010519491231002' ); // Should return X for this input
echo id_card_check ( '50010819850704081' ); // Should return 2 for this input
?>

<!-- Placeholder used in a search input field -->
<form>
  <input name="q" placeholder="Go to a Website">
  <input type="submit" value="Search">
</form>
