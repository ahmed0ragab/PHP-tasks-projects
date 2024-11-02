<?php 
              //eight's week task (simple student managment system )
              // I used (foreach , if statement and functions ) as mentioned previously
              // the following is the wanted functions 
              //  addStudent($name, $grade) 
              //  removeStudent($name) 
              //  getStudentGrade($name) 
              // averageGrade()
              
 
       $students = [
              "Ahmed" => 85,
              "Mona" => 92,
              "Sara" => 78,
              "Khaled" => 89,
              ];
         
       function printStudents($students) {
              // using built in function print_r
                     echo "<pre>";
                     print_r($students);
                     echo "</pre>";
              //    the folloing code use for each to print 
                     // foreach($students as $name => $grade) 
                     // {
                     //        echo $name." ".$grade. "<br>";
                     // }
                 }
       printStudents($students);
echo"  =============================================================================<br>  ";    

function addStudent(&$students,$name, $grade) {
       $students[$name]=$grade;
}
addStudent($students,"malek",55);
printStudents($students);
echo"  =============================================================================<br>  ";    

// remove student function 
function  removeStudent(&$students,$name) {
       if (array_key_exists($name, $students)) {
              unset($students[$name]);
       }
}
removeStudent($students,"malek");
printStudents($students);

echo"  =============================================================================<br>  ";    


//getting student grade function 
function getStudentGrade($students,$name) {
       foreach($students as $student => $grade) {
              if($student===$name)
              {
                     return "the grade of student ( $name ) >> $grade ";  
              }
       }
}

echo"  =============================================================================<br>  ";    

//getting the average of grades functions 
function averageGrade($students) {
              $average=0;
              $sum=0;
              $count=0;
              foreach ($students as $student => $studentGrade) {
                     $sum+=$studentGrade;
                     $count+=1;
              }
              return  $count !=0 ? "the average of grades : $average":"No grades !";
       }
       echo getStudentGrade($students,"Sara");
       echo "<br>";
       echo averageGrade($students);
       echo "<br>";
       echo "<br>";

echo"  =============================================================================<br>  ";    
//the following code for using switch statement in students evaluation

       function studentsCategory($students) {
              foreach ($students as $name => $grade) {
                     switch ($grade) {
                     case $grade >= 90:
                     $temp = "Excellent";
                     break;
                     case $grade >= 80:
                     $temp = "Very Good";
                     break;
                     case $grade >= 70:
                     $temp = "Good";
                     break;
                     default:
                     $temp = "Needs Improvement";
                     break;
                     }
                     
                     echo "( $name ) => ( $temp ) <br>";
                                   }
        }
        studentsCategory($students);
 echo"  =============================================================================<br>  ";    

          // !!coution >>>>
          // this answer is not the ideal cause of consuming new memory . 
          $category=[];
          function studentsCategory2($students ,&$category) {
              foreach ($students as $name => $grade) {
                  switch ($grade) {
                      case $grade >= 90:
                          $temp = "Excellent";
                          break;
                      case $grade >= 80:
                          $temp = "Very Good";
                          break;
                      case $grade >= 70:
                          $temp = "Good";
                          break;
                      default:
                          $temp = "Needs Improvement";
                          break;
                  }
                  $category[$name]=$temp;
              }
          }
          echo "<br>";  echo "<br>";

          studentsCategory2($students ,$category);
          echo "<pre>";
          print_r($category);
          echo "</pre>";
          

?>
