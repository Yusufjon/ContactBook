<?php
function formatPhoneNumber($phoneNumber) {
    $phoneNumber = preg_replace('/[^0-9]/','',$phoneNumber);

    if(strlen($phoneNumber) > 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-10);
        $areaCode = substr($phoneNumber, -10, 3);
        $nextThree = substr($phoneNumber, -7, 3);
        $lastFour = substr($phoneNumber, -4, 2);
        $lastTwo = substr($phoneNumber, -2, 2);

        $phoneNumber = ' '.$countryCode.' '.$areaCode.' '.$nextThree.' '.$lastFour.' '.$lastTwo;
    }
    else if(strlen($phoneNumber) == 10) {
        $countryCode = substr($phoneNumber, 0, strlen($phoneNumber)-9);
       
        $areaCode = substr($phoneNumber, 0, 3);
        $nextThree = substr($phoneNumber, 3, 3);
        $lastFour = substr($phoneNumber, 6, 4);
        $lastTwo = substr($phoneNumber, -2, 2);
        $phoneNumber = $countryCode.' '.$areaCode.' '.$nextThree.' '.$lastTwo.' '.$lastTwo;
    }
    else if(strlen($phoneNumber) == 7) {
        $nextThree = substr($phoneNumber, 0, 3);
        $lastFour = substr($phoneNumber, 3, 4);

        $phoneNumber = $nextThree.'-'.$lastFour;
    }
    

    return $phoneNumber;
}

$sql = $pdo->prepare("SELECT * FROM `contacts`");
$sql->execute();
$result = $sql->fetchAll();

?>