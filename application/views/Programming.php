<!DOCTYPE html>
<html>
<head>
	<title>YWC Homework</title>
	
	<link rel="stylesheet" type="text/css" href='<?php echo base_url(); ?>assets/css/bootstrap.min.css' >
	<link rel="stylesheet" type="text/css" href='<?php echo base_url(); ?>assets/css/bootstrap-grid.min.css' >
	<link rel="stylesheet" type="text/css" href='<?php echo base_url(); ?>assets/css/bootstrap-reboot.min.css' >
	<link rel="stylesheet" type="text/css" href='<?php echo base_url(); ?>assets/css/css.css' >
	
</head>
<body>
	<?php $this->load->view('navbar'); ?>

	<div class="container">
		<h1 align="center">Programming</h1>
	<table class="table table-hover">
			<thead>
				<tr>
					<td class="header">Number</td>
					<td class="header">Name</td>
					<td class="header">Surname</td>
					<td class="header">Major</td>
					<td class="header">Ref</td>
				</tr>
			</thead>

			<tbody id="list">
			</tbody>

		</table>
	</div>
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var count = 0;
			$.ajax({
				type:"get",
				url:"https://ywc15.ywc.in.th/api/interview",
				success: function(data){
					result="";
					for(i in data){
						if(data[i].major == 'programming'){
							count++;
							result+="<tr><td>"+count+"</td><td>"+data[i].firstName+"</td> <td>"+data[i].lastName+"</td><td>"+data[i].major+"</td><td>"+data[i].interviewRef+"</td></tr>";
						}
					}
					$("#list").html(result);
				}
			});
		});
	</script>
	
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>


</body>
</html>