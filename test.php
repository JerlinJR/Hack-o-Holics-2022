<?php

include 'libs/load.php';

// print(User::userLogin('user', 'user'));
// print(User::roadUpdate('1', 'districtroat', 'DH1', '3'));
print(User::SetEstimate(2000, "villageroads", 1));

// print(Formula::SubBaseVolume(32, 23, 23));

print_r(User::getAllData());