<?php
//interface which is having two absract methods.
interface InterfaceEmpWage {
	public function addCompanyEmpWage($companyName, $monthWorkingHours, $workingDays, $wagePerHr);
	public function computeEmpWage();
}
?>