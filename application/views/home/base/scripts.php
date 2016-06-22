  <!-- main content end-->
	</section>
	<script src="<?php echo base_url('vendor/js/modernizr.custom.js');?>"></script>
	<!--pop-up-->
	<script src="<?php echo base_url('vendor/js/menu_jquery.js');?>"></script>
	<!--//pop-up-->	
	<script src="<?php echo base_url('vendor/js/jquery.nicescroll.js');?>"></script>
	<script src="<?php echo base_url('vendor/js/scripts.js');?>"></script>
	<!-- Bootstrap Core JavaScript -->
	<script src="<?php echo base_url('vendor/js/bootstrap.min.js');?>"></script>
	<!--pop-up-->
	<script src="<?php echo base_url('vendor/js/menu_jquery.js');?>"></script>
	<!--//pop-up-->	
	<!-- clock-bottom -->
	<script type="text/javascript">
	$(document).ready(function() {
	// Create two variable with the names of the months and days in an array
	var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
	var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

	// Create a newDate() object
	var newDate = new Date();
	// Extract the current date from Date object
	newDate.setDate(newDate.getDate());
	// Output the day, date, month and year    
	$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

	setInterval( function() {
		// Create a newDate() object and extract the seconds of the current time on the visitor's
		var seconds = new Date().getSeconds();
		// Add a leading zero to seconds value
		$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
		},1000);
		
	setInterval( function() {
		// Create a newDate() object and extract the minutes of the current time on the visitor's
		var minutes = new Date().getMinutes();
		// Add a leading zero to the minutes value
		$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
		},1000);
		
	setInterval( function() {
		// Create a newDate() object and extract the hours of the current time on the visitor's
		var hours = new Date().getHours();
		// Add a leading zero to the hours value
		$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
		}, 1000);
		
	}); 
	</script>
	<!-- clock-bottom -->
	<!-- ResponsiveTabs -->
	<script src="<?php echo base_url('vendor/js/easyResponsiveTabs.js');?>" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs -->
	<!-- video -->
	<script src="<?php echo base_url('vendor/js/simplePlayer.js');?>"></script>
	<script>
		$("document").ready(function() {
			$("#video").simplePlayer();
		});
	</script>
	<!-- //video -->
</body>
</html>