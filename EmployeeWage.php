<?php
include 'EmployeeDetails.php';
include 'InterfaceEmployeeWage.php';

/**
 * Class which is implementing the interface and having 
 * the funcctions which leads to calculate Employee Wage.
 */
class EmployeeWage implements InterfaceEmpWage
{
     const  IS_FULL_TIME = 1;
     const  IS_PART_TIME = 0;
     public $companyEmpWageArray=array();

     /**
      * function that accepting args and storing every arg inside the array.
      */
     public function addCompanyEmpWage($companyName, $monthWorkingHours, $workingDays, $wagePerHr)
     {
         $this->companyEmpWageArray[$companyName] = new CompanyDetails($companyName, $monthWorkingHours, $workingDays, $wagePerHr);
     }
 
     public function computeEmpWage($userInput) 
     {
         //for each to iterate over the array.
         foreach ( $this->companyEmpWageArray as $key => $value)
         {
             if($userInput == $key)
             {
                $wage=self::calcEmployeeWage($value);
                echo "Company : ".$key." "."Total Emp Wage is : ".$wage."\n\n";
            }
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
    $dailyWage = array();
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
        $dailyWage[$i] = $obj -> wagePerHr * $empHrs;
        $totalWage += $dailyWage[$i];
        $totalWorkingHrs += $empHrs;
    }

    foreach($dailyWage as $key => $value)
    {
        echo "Day : ".$key." Wage : ".$value."\n";
    }
    return $totalWage;
  }
}
#calling the function by using object.
$empWageBuilder = new EmployeeWage();
$empWageBuilder->addCompanyEmpWage("JIO", 100, 25, 20);
$empWageBuilder->addCompanyEmpWage("AIRTEL", 80, 20, 25);
$empWageBuilder->addCompanyEmpWage("WB", 50, 20, 100);
$empWageBuilder->computeEmpWage("AIRTEL");
 
?>