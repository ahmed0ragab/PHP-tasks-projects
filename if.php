<?php
                        /* first task for the simple chart  */
  //###########################################################################################
  //creating three variables contain dummy data for comparison .
  $a=1221;
  $b=2323;
  $c=343;
  //outer if statement 
  if($a>$b){
    //nested if statement
        if($a>$c){
            echo "$a";
        }
        //other side for nested if 
        else{
            echo "$c";
        }
  }
  //other case for outer if 
  else{
    //nested if statement 
        if($b>$c){
            echo "$b";
        }
        //other case for nested if 
        else{
            echo "$c";
        }
  }
  echo "<br>";


                    //second task for the more complex chart(the code form chatgpt ) 
//#################################################################################
// Step 1: Patient arrives
// echo "Patient arrives.<br>";

// // Step 2: Check if the patient is registered
// $registeredPatient = false; // Set to true if the patient is registered

// if (!$registeredPatient) {
//     echo "Registering patient...<br>";
// }

// // Step 3: Check for available nurse
// $availableNurse = true; // Set to true if a nurse is available

// if ($availableNurse) {
//     // Step 4: Check for available doctor
//     $availableDoctor = true; // Set to true if a doctor is available

//     if ($availableDoctor) {
//         // Step 5: Check if follow-up is needed
//         $needFollowUp = false; // Set to true if a follow-up is needed

//         if ($needFollowUp) {
//             echo "Arranging appointment...<br>";
//         } else {
//             echo "Giving patient prescription...<br>";
//             echo "Giving medication...<br>";
//         }
//     } else {
//         echo "Waiting for available doctor...<br>";
//     }
// } else {
//     echo "Waiting for available nurse...<br>";
// }

// // Step 6: Patient leaves
// echo "Patient leaves.<br>";

                        //second task for the more complex chart( the code designed by me)
//#################################################################################
echo "patient arrives <br>";
$patientRegsteration=true;
$nurseAvailability=true;
$doctorAvailability=true;
$folloUpNeeded=true;
$needMedication=true;
if($patientRegsteration==true) {
    if($nurseAvailability==true) {
        echo "record health condition <br>";
        if($doctorAvailability==true) {
            echo "assign patient to doctor <br>";
        
            if($folloUpNeeded==true) {
                echo "arrange the appointment <br>";
                if($needMedication==true) {
                    echo "give patient prescreption<br>";
                }
                else {
                    echo "pateint leave <br>";
                }
            }
            else {
                if($needMedication==true) {
                    echo "give patient prescreption<br>";
                }
                else {
                    echo "pateint leave <br>";
                }
            }
        }
        else {
            echo "wait for available doctor<br> ";
        }
    }
    else {
        echo "wait for available nurse <br>";
    }
}
else {
    echo "register pateint <br>";
}

?>
