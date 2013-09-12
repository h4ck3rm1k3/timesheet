<!--
		Author: Iwebux
		Description: Ajax inline edits
		Copyright: iwebux.com
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Time Sheet</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="http://code.angularjs.org/1.0.8/angular.min.js"></script>
<script type="text/javascript" src="/angluar/ng-grid-2.0.7.min.js"></script>
<script>

	$(document).ready(function(){		
									
		$('td.edit').click(function(){
							 			// alert($(this).attr('class') == 'weekend');
							   			if($(this).attr('class') == "weekend"){
							   			}else{
								            $('.ajax').html($('.ajax input').val());
								            $('.ajax').removeClass('ajax');
											
											$(this).addClass('ajax');
									  		$(this).html('<input id="editbox" size="'+$(this).text().length+'" type="text" value="' + $(this).text() + '">');
											
											$('#editbox').focus();
										}
								        
								  }
						 );

		$('td.edit').keydown(function(e) {
			var code = e.keyCode || e.which;
   			if (code == 9) {

   				if($(this).next().attr('class') == "weekend"){
   					$('.ajax').html($('.ajax input').val());
		            $('.ajax').removeClass('ajax');
					
					$(this).next().next().next().addClass('ajax');
			  		$(this).next().next().next().html('<input id="editbox" size="'+$(this).next().next().next().text().length+'" type="text" value="' + $(this).next().next().next().text() + '">');
					
					$('#editbox').focus();

	   			}else if($(this).next().attr('class') == "total") {
	   				$('.ajax').html($('.ajax input').val());
		            $('.ajax').removeClass('ajax');
					
					$(this).next().next().next().addClass('ajax');
			  		$(this).next().next().next().html('<input id="editbox" size="'+$(this).next().next().next().text().length+'" type="text" value="' + $(this).next().next().next().text() + '">');
					
					$('#editbox').focus();
   				}else{
		            $('.ajax').html($('.ajax input').val());
		            $('.ajax').removeClass('ajax');
					
					$(this).next().addClass('ajax');
			  		$(this).next().html('<input id="editbox" size="'+$(this).next().text().length+'" type="text" value="' + $(this).next().text() + '">');
					
					$('#editbox').focus();
				}
     			
   				return false;
   			}
		});			  
		$('td.edit').keydown(function(event){
									  
									  
									 arr = $(this).attr('class').split( " " );
									 

									 var val = $('.ajax input').val();
									 // alert(val);
									 // if(val <= 8){

										 if(event.which == 13)
										 { 
									  		
									  		$.ajax({    type: "POST",
												        url:"config.php",
														data: "value="+$('.ajax input').val()+"&rownum="+arr[2].split("-", 9999)[1]+"&field="+arr[1],
														success: function(data){
															 $('.ajax').html($('.ajax input').val());
								                             $('.ajax').removeClass('ajax');
														}});
									  		console.log(arr[2].split("-", 9999)[1]);
										   }
									// }
									}
						 );
		
		
		$('#editbox').live('blur',function(){

									 $('.ajax').html($('.ajax input').val());
							         $('.ajax').removeClass('ajax');
			});


		$('td.hour').keydown(function(event){
									  
									  
									 arr = $(this).attr('class').split( " " );

									  var val = $('.ajax input').val();
									 // alert(val);
									 if (val > 8)
									    alert("Vlera duhet te jet me e vogel se 8");
									 if(val <= 8){
										 if(event.which == 13)
										   { 
									  		
									  		$.ajax({    type: "POST",
												        url:"config.php",
														data: "value="+$('.ajax input').val()+"&rownum="+arr[2].split("-", 9999)[1]+"&field="+arr[1]+"&day="+arr[3],
														success: function(data){
															 $('.ajax').html($('.ajax input').val());
								                             $('.ajax').removeClass('ajax');
														}});
										   }
								  
								  }
								  }
						 );
									
	});


</script>


</head>

<body>

	<form action = "" method = "GET">
		<select name = 'months'>
			<option selected disabled >Zgjidhni muajin</option>
			<option value = '1'>janar</option>
			<option value = '2'>Shkurt</option>
			<option value = '3'>Mars</option>
			<option value = '4'>Prill</option>
			<option value = '5'>Maj</option>
			<option value = '6'>Qershor</option>
			<option value = '7'>Korrik</option>
			<option value = '8'>Gusht</option>
			<option value = '9'>Shtator</option>
			<option value = '10'>Tetor</option>
			<option value = '11'>Nentor</option>
			<option value = '12'>Dhjetor</option>
		</select>
		<input	type= 'submit' value ="Search" />
	</form>


<h1>Time Sheet</h1>

<table id="tbl" cellpadding="8"> 

<tr class="heading" bgcolor="#ccc">
<th></th>
    <th>project_name</th>
    <th>Project Hours</th>
    <th>Remaining Hours</th>
    <?php 
    $nr_days = 31;
    echo "<script>$(document).ready(function() {
        			$('.refresh').live('click', function() {
        				console.log($(this));
        			});
					$('.refresh').trigger('click');
				});	
        		</script>
        	";	
$month = date('m');
for ($i=1; $i <= $nr_days; $i++) { 
    echo "<th>".$i."</th>";
}	
    
function isweekend($year, $month, $day)
{
    $time = mktime(0, 0, 0, $month, $day, $year);
    $weekday = date('w', $time);
    return ($weekday == 0 || $weekday == 6);
}
    
echo "<th>Total</th>";
echo "<th>Spend Hours</th>";

?>
    </tr>
<?php

$cc = 0;
$curr_day = date('j');

echo "<tr>";
echo "<td colspan = '4'></td>";
for ($i=0; $i <= $nr_days ; $i++) { 
    echo "<td>"."8"."</td>";
}
echo "</tr>";
{
    echo "<tr class='project alt'>";
    $alt = 1;
}

$sum = 0;
$spend_hours = 0;
$p_idd[$cc] = 1;
echo '<td>blah</td>
    	<td class="project_name 1">blha</td>
        <td class="project_hour 1">1</td>
        <td class="remaining_hours 1">13322</td>';
for ($i=1; $i <= $nr_days; $i++) { 
    $m_zgj = 2;   
    echo "<td id = 'hours' class = 'edit hour proj-1 {$i}'>1</td>";
    if($curr_day > $i){
        $spend_hours += 1;
    }
    $sum += 1;

    $cc++;
}

echo "<td class = 'total'  	>".$sum."</td>";
echo "<td>".$spend_hours."</td>";
echo "</tr>";

echo "<tr>"."<td colspan = '4'> Total </td>";
for ($i=1; $i <= $nr_days; $i++) {    
    echo "<td class = 'col_total".$i."'>"."0"."</td>";
}
echo "</tr>";

?>

<script type="text/javascript">
	var count_tot = 1;
	$('.total').each(function(){
		var t = $(this).html();
		var r = $('.project_hour.'+count_tot).html();
		var remaining_h = r - t; 
		
		$('.remaining_hours.'+count_tot).html(remaining_h);
		

 		aaa = $('.remaining_hours.'+count_tot).attr('class').split( " " );
 		arr = $(this).parent().attr('class').split(" ");

		count_tot++;
	});

	var count_col = 1;

	for (var i = 5; i <= <?php echo $nr_days+5; ?>; i++){

		var aa = 0;

			$('table tr:not(:nth-child(2)) > td:nth-child('+i+')').each(function(){

				aa  += Number($(this).html());

			});

			$('td.col_total'+count_col).html(aa);
			count_col++;

	};

					// $('td.hour').each(function(){
						// alert(<?php echo $i; ?>);

						$(document).ready(function(){

							var a = $('table tr:not(:nth-child(1):nth-child(2))').length;
							// var i = 1;
							for (var ii = 1; ii <= <?php echo $nr_days ?>; ii++) {

								$('th.weekend').each(function(index,value){
									var a = $(this).html();


									$("td.hour."+a).eq($('table tr th').index()).removeClass('edit').removeClass('hour').removeClass().addClass('weekend').html("0");
									$("td.col_total"+a).eq($('table tr th').index()).removeClass('edit').removeClass('hour').removeClass().addClass('weekend').html("0");

								});
							
							};

							
						
						});
						
					
					// });
				
$("#tbl td input").each(
        function(i) {
            //  on load let's store the format that is inside to begin with
            $(this).data("dataFormat", $(this).val()).addClass("placeholder");
        }
    ).focus(
        function(e) {
            //  if it is the dataFormat, remove it on focus
            $(this).removeClass("placeholder");
            if ($(this).val() == $(this).data("dataFormat")) {
                   $(this).val("");
            }
            $(this).select();
        }
    ).blur(
        function(e) {
             // if left blank set to dataFormat again
            if ($(this).val() == "") {
                   $(this).val(  $(this).data("dataFormat")  ).addClass("placeholder");
            }
        }
    );

</script>

</table>


</body>
</html>