
<!DOCTYPE html> 
<html lang="en"> 
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
	<title>jQueryMobile - DateBox Demo</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.css" />
	<link type="text/css" href="http://dev.jtsage.com/cdn/datebox/latest/jquery.mobile.datebox.css" rel="stylesheet" /> 
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script> 
	<script type="text/javascript">
		$( document ).bind( "mobileinit", function(){
			$.mobile.page.prototype.options.degradeInputs.date = 'text';
		});	
	</script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0a3/jquery.mobile-1.0a3.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/datebox/latest/jquery.mobile.datebox.js"></script>
</head>
<body>
<div data-role="page" data-theme="a" id="main"> 
	<div data-role="header"> 
		<h1>jQueryMobile - DateBox Demo</h1>
	</div>
	<div data-role="content" data-theme="c">
		<form method="post" action="#">
			<div data-role="fieldcontain"><label for="date1">Android Style Default</label><input value="01/01/2011" name="date1" type="date" data-role="datebox" id="date1" />	</div>
			<div data-role="fieldcontain"><label for="date2">Calendar Style Default</label><input value="01/01/2011" name="date2" type="date" data-role="datebox" id="date2" data-options='{"mode": "calbox"}'/>	</div>
			<div data-role="fieldcontain"><label for="date3">Android Style, Forced Dialog</label><input value="01/01/2011" name="date3" type="date" data-role="datebox" id="date3" data-options='{"useDialogForceTrue": true}'/>	</div>
			<div data-role="fieldcontain"><label for="date4">Calendar Style, Forced Dialog</label><input value="01/01/2011" name="date4" type="date" data-role="datebox" id="date4" data-options='{"mode": "calbox", "useDialogForceTrue": true}'/>	</div>
			<div data-role="fieldcontain"><label for="date5">Android Style, Forced Popup, Day-Month-Year display</label><input value="01/01/2011" name="date5" type="date" data-role="datebox" id="date5" data-options='{"useDialogForceFalse": true, "fieldsOrder": ["d", "m", "y"]}'/>	</div>
			<div data-role="fieldcontain"><label for="date6">Calendar Style, Forced Popup</label><input value="01/01/2011" name="date6" type="date" data-role="datebox" id="date6" data-options='{"mode": "calbox", "useDialogForceFalse": true}'/>	</div>
			<div data-role="fieldcontain"><label for="date7">Calendar Style, This Month Only, Modal Style</label><input value="01/01/2011" name="date7" type="date" data-role="datebox" id="date7" data-options='{"mode": "calbox", "calShowOnlyMonth": true, "useModal": true}'/>	</div>
			<div data-role="fieldcontain"><label for="date9">Calendar Style, No Button, Focus Open</label><input value="01/01/2011" name="date7" type="date" data-role="datebox" id="date9" data-options='{"mode": "calbox", "noButtonFocusMode": "true"}'/>	</div>
			<div data-role="fieldcontain"><label for="txt">Some Text</label><input id="txt" value="Plain text input for comparison" type="text" /></div>
		</form>	
		<div>
		<?php
		include_once "../markdown.php";
		$md_text = file_get_contents("README.md");
		echo Markdown($md_text);
		?>
		</div>
		<form method="post" action="#">
			<label for="date7">Altering Theme / DateFormat / Day Names</label><input name="date8" type="date" data-options='{"buttonTheme": "b", "dateFormat": "mm/dd/YYYY", "daysOfWeek" : ["Sun", "Mon", "Tue", "Wed", "Thr", "Fri", "Sat"]}' data-role="datebox" id="date8" />
		</form>
	</div>
	<div data-role="footer">
		<a href="https://github.com/jtsage/jquery-mobile-datebox">GitHub Source</a><a href="mailto:jtsage+datebox@gmail.com">Contact</a>
	</div>
</div>
</html>
