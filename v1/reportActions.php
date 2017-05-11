<?php

/*
$sqlNumberOfVisitorsCurrentMonth = ;
$sqlLastMemberRegistered = "SELECT * FROM visitorinfo ORDER BY id DESC LIMIT 1 "*/
	//include "../../includes/DbOperations.php";
	$db = new DbOperations();
	
	$FirstTime_week1 = $db->getFirstTimeVisitors(1);
	$FirstTime_week2 = $db->getFirstTimeVisitors(2);
	$FirstTime_week3 = $db->getFirstTimeVisitors(3);
	$FirstTime_week4 = $db->getFirstTimeVisitors(4);
	
	$reLagos_week1 = $db->getVisitorsLoc(1,"relag");
	$reLagos_week2 = $db->getVisitorsLoc(2,"relag");
	$reLagos_week3 = $db->getVisitorsLoc(3,"relag");
	$reLagos_week4 = $db->getVisitorsLoc(4,"relag");
	
	$noLagos_week1 = $db->getVisitorsLoc(1,"nolag");
	$noLagos_week2 = $db->getVisitorsLoc(2,"nolag");
	$noLagos_week3 = $db->getVisitorsLoc(3,"nolag");
	$noLagos_week4 = $db->getVisitorsLoc(4,"nolag");
	
	$inLagos_week1 = $db->getVisitorsLoc(1,"inlag");
	$inLagos_week2 = $db->getVisitorsLoc(2,"inlag");
	$inLagos_week3 = $db->getVisitorsLoc(3,"inlag");
	$inLagos_week4 = $db->getVisitorsLoc(4,"inlag");
	
	$needsPrayer = $db->getVisitorsWithNeeds("relag","prayer") + $db->getVisitorsWithNeeds("inlag","prayer");
	$needsCounselling = $db->getVisitorsWithNeeds("relag","counselling") + $db->getVisitorsWithNeeds("inlag","counselling");
	$needsDeliverance = $db->getVisitorsWithNeeds("relag","deliverance") + $db->getVisitorsWithNeeds("inlag","deliverance");
	$needsWorshipPlace = $db->getVisitorsWithNeeds("relag","worshipplace") + $db->getVisitorsWithNeeds("inlag","worshipplace");
	$needsJob = $db->getVisitorsWithNeeds("relag","job") + $db->getVisitorsWithNeeds("inlag","job");
	$needsMedical = $db->getVisitorsWithNeeds("relag","medical") + $db->getVisitorsWithNeeds("inlag","medical");
	$needsOthers = $db->getVisitorsWithNeeds("relag","others") + $db->getVisitorsWithNeeds("inlag","others");
	
	function monthdate($intvalue){
	  switch($intvalue){
	    case "01":
		  echo "January";
		  break;
		case "02":
		  echo "February";
		  break;
		case "03":
		  echo "March";
		  break;
		case "04":
		  echo "April";
		  break;
		case "05":
		  echo "May";
		  break;
        case "06":
		  echo "June";
		  break;
        case "07":
		  echo "July";
		  break;
        case "08":
		  echo "August";
		  break;		  
		case "09":
		  echo "September";
		  break;
		case "10":
		  echo "October";
		  break;
		case "11":
		  echo "November";
		  break;
		case "12":
		  echo "December";
		  break;
		default:
		  echo "Unknown";
		  break;
	  }
	}
?>