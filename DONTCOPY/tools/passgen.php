<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 25; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
	print(randomPassword());
?>
<br>
(if the password is too long, just grab a part of it.)
<br>
<FORM>
<INPUT TYPE="button" onClick="history.go(0)" VALUE="Generate new">
</FORM>