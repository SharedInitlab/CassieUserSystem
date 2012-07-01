<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="http://current.bootstrapcdn.com/bootstrap-v204/css/bootstrap-combined.min.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="http://current.bootstrapcdn.com/bootstrap-v204/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
			<form class="form-horizontal well">
			  <fieldset>
				<legend>Hide yo mama, hide yo name, hide yo MAC</legend>
				<div class="control-group">
				  <label class="control-label" for="input01">Име ?</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" id="input01">
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="input02">Twitter ?</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" id="input02">
				  </div>
				</div>
				
				<div class="control-group">
				  <label class="control-label" for="input03">MAC address ?</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" id="input03">
					<p class="help-block">
					<ul>
						<li>Windows : <em>run -> cmd -> getmac</em></li>
						<li>Linux : <em>ifconfig -a</em></li>
					</ul>
					</p>
				  </div>
				</div>
			  </fieldset>
			</form>
		</div>
	</body>
</html>