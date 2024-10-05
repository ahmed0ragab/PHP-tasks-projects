<?php
  $a=1221;
  $b=2323;
  $c=343;
  if($a>$b){
        if($a>$c){
            echo "$a";
        }
        else{
            echo "$c";
        }
  }
  else{
        if($b>$c){
            echo "$b";
        }
        else{
            echo "$c";
        }
  }
  echo "<br>";
// Step 1: Patient arrives
echo "Patient arrives.\n";

// Step 2: Check if the patient is registered
$registeredPatient = false; // Set to true if the patient is registered

if (!$registeredPatient) {
    echo "Registering patient...\n";
}

// Step 3: Check for available nurse
$availableNurse = true; // Set to true if a nurse is available

if ($availableNurse) {
    // Step 4: Check for available doctor
    $availableDoctor = true; // Set to true if a doctor is available

    if ($availableDoctor) {
        // Step 5: Check if follow-up is needed
        $needFollowUp = false; // Set to true if a follow-up is needed

        if ($needFollowUp) {
            echo "Arranging appointment...\n";
        } else {
            echo "Giving patient prescription...\n";
            echo "Giving medication...\n";
        }
    } else {
        echo "Waiting for available doctor...\n";
    }
} else {
    echo "Waiting for available nurse...\n";
}

// Step 6: Patient leaves
echo "Patient leaves.\n";

?>
