<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Рекламное объединение молодец.</title>
	
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/jquery.arcticmodal.css">
    <link rel="stylesheet" href="css/jquery.jgrowl.css">
    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="assets/lightslider/lightslider.min.css">
	<link rel="stylesheet" href="css/main.css">
	<script src="js/custom-functions.min.js"></script>
	<script>
	    $(function() {
	                    KMA.initCallback(20000);
	        
	                    KMA.disableCountrySelect('RU');
	            });
	</script>


	<script type="text/javascript">
		$(document).ready(function() {



	$('select[name=address]').on('change', function() {
	    change_info($(this).val());
	    $('select[name=address]').val($(this).val());
		});
		); 
	</script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="top">