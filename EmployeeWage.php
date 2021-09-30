<?php
include 'EmployeeDetails.php';
class EmployeeWage
{
     const  IS_FULL_TIME = 1;
     const  IS_PART_TIME = 0;
     public $numOfCompany = 0;
     public $companyEmpWageArray=array();

     /**
      * function that accepting args and storing every arg inside the array.
      */
     public function addCompanyEmpWage($companyName, $monthWorkingHours, $workingDays, $wagePerHr)
     {
         $this->companyEmpWageArray[$this->numOfCompany++] = new CompanyDetails($companyName, $monthWorkingHours, $workingDays, $wagePerHr);
     }
 
     public function computeEmpWage() 
     {
         for ($i=0; $i<$this->numOfCompany; $i++)
         {
             $obj=$this->companyEmpWageArray[$i];
             $wage=self::calcEmployeeWage($obj);
             echo "\nCompany : ".$obj->companyName." "."Total Emp Wage is : ".$wage;
         }
     }
   /**
    *Declaring a static function and checking the Employee
    *Attendance by using rand() function
    */
   public static function calcEmployeeWage($obj)
   {
    $empHrs = 0;
    $dailyWage = 0;
    $totalWage = 0;
    $totalWorkingHrs = 0;

    //calculating employee daily wage per month using switch.
    for ($i=1; $i < $obj -> workingDays ; $i++) 
    { 
        $random = rand(0,2);
        switch ($random) 
        {
        case self :: IS_FULL_TIME:
            $empHrs = 8;
            break;
        case self :: IS_PART_TIME:
            $empHrs = 4;
            break;
        default:
            $empHrs = 0;
        }

        //Calculating wage till this condition.
        if($totalWorkingHrs >= $obj -> monthWorkingHrs || $i == $obj -> workingDays)
        {
            break;
        }
        $dailyWage = $obj -> wagePerHr * $empHrs;
        $totalWage += $dailyWage;
        $totalWorkingHrs += $empHrs;
    }
    return $totalWage;
  }
}
#calling the function by using object.
$empWageBuilder = new EmployeeWage();
$empWageBuilder->addCompanyEmpWage("JIO", 100, 25, 20);
$empWageBuilder->addCompanyEmpWage("AIRTEL", 80, 20, 25);
$empWageBuilder->addCompanyEmpWage("WB", 50, 20, 100);
$empWageBuilder->computeEmpWage();
 
?>  