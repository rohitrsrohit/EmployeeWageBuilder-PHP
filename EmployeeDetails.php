<?php

class CompanyDetails
{
    public $companyName;
    public $wagePerHr;
    public $workingDays;
    public $monthWorkingHrs;

    //class constructor.
    public function __construct($companyName,$wagePerHr,$workingDays,$monthWorkingHrs)
    {
        $this -> companyName = $companyName;
        $this -> wagePerHr = $wagePerHr;
        $this -> workingDays = $workingDays;
        $this -> monthWorkingHrs = $monthWorkingHrs;
    }
}
   
?>