<?php 
/*
	* Copy of Excel's PMT function.
	* @param double $interest        	The interest rate for the loan.
	* @param int    $tenure 		 	The total number of payments for the loan in months.
	* @param double $loanAmount        The present value, or the total amount that a series of future payments is worth now;
	*                                	Also known as the principal.
	*
	* @return float
*/
	function calculatePMT($interest,$tenure,$loanAmount){
		return $interest * $loanAmount * pow((1 + $interest), $tenure) / (1 - pow((1 + $interest), $tenure));
	}

	echo calculatePMT(15.5/1200,36,-500000);
?>