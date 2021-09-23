<?php
class EmployeeWage
{
    public $IS_FULL_TIME = 1;
    public $IS_PART_TIME = 0;
   /**
    *Declaring a static function and checking the Employee
    *Attendance by using rand() function
    */
   public function calcEmployeeWage($companyName,$wagePerHr,$workingDays)
   {
    $empHrs = 0;
    $dailyWage = 0;
    $totalWage = 0;
    $totalWorkingHrs = 0;
    //calculating employee daily wage per month using switch.
    for ($i=1; $i < $workingDays ; $i++) 
    { 
        $random = rand(0,1);
        switch ($random) 
        {
        case $this -> IS_FULL_TIME:
            $empHrs = 8;
            break;
        case $this -> IS_PART_TIME:
            $empHrs = 4;
            break;
        default:
            $empHrs = 0;
        }

        //Calculating wage till this condition.
        if($totalWorkingHrs >= 100 || $i == 20)
        {
            break;
        }
        $dailyWage = $wagePerHr * $empHrs;
        $totalWage += $dailyWage;
        $totalWorkingHrs += $empHrs;
    }

    //Associative array
    $details = array("Company" => $companyName,"Total Working Days" => $i,"Total Working Hours " => $totalWorkingHrs,"Salary Per Month" => $totalWage);
    print_r($details);
    }
}
#calling the function by using object.
$empWage = new EmployeeWage();
$empWage -> calcEmployeeWage("Adani","20","20");
?>