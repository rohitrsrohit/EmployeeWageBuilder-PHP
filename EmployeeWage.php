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
         $IS_PART_TIME = 0;
         $WAGE_PER_HOUR = 20;
         $FULL_WORK_HOUR = 8;
         $PART_WORK_WAGE = 4;

         $random = rand(0,1);

         //Calculating employee daily wage using Switch case statement
         switch ($random)
         {
            case $IS_FULL_TIME:
                print "Employee Is Present For Full Time";
                $dailyWage = $WAGE_PER_HOUR * $FULL_WORK_HOUR;
                print " Daily Wage: ".$dailyWage;
                break;
            case $IS_PART_TIME :
                print "Employee Is Present For Part Time";
                $dailyWage = $WAGE_PER_HOUR * $PART_WORK_WAGE;
                print " Daily Wage :" .$dailyWage;
                break;
            default:
                print "Employee Is Absent";
                break;
         }
            
     }
}

#Calling the static function using the class.
EmployeeWage::calcEmployeeWage();
?>