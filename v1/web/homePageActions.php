<?php

/*
$sqlNumberOfVisitorsCurrentMonth = ;
$sqlLastMemberRegistered = "SELECT * FROM visitorinfo ORDER BY id DESC LIMIT 1 "*/
	//include "../../includes/DbOperations.php";
	$db = new DbOperations();
	
	$visitorNum = $db->getNumberOfVisitors();
	$partnerNum = $db->getNumberOfUsers();
	$visitorNumCurMon = $db->getNumberOfVisitsCurMon();
	$getLastMember = $db->getLastRegMember();
?>