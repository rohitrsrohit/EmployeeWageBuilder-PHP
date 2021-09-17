<?php
class EmployeeWage
{
    /**
     * Declaring a static function and checking the Employee
     * Attendance by using rand() function
     */

     public static function calcEmployeeWage()
     {
         $IS_FULL_TIME = 1;
         $random = rand(0,1);
         if($random == $IS_FULL_TIME)
            print "Employee Is Present";
         else
            print "Employee Is Absent";
     }
}

#Calling the static function using the class.
EmployeeWage::calcEmployeeWage();
?>