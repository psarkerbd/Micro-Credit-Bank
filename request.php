<?php include("include/config.php"); ?>
<?php include("include/header_demand.php"); ?>


<?php 

	$qry = "SELECT COUNT(*) AS count FROM request";
	$result = mysql_query($qry);
	if($result)
	{
		$row = mysql_fetch_assoc($result);
		//echo "  ---  " . $row['count'];
		//session_start();
		$_SESSION['count'] = $row['count'];
	}

?>


<div class="w3-container" style="min-height:295px;height:auto;">

	<table class="w3-table w3-container w3-hoverable w3-bordered w3-middle w3-card-4" style="max-width:auto;width:100%;margin-top:50px; margin-bottom: 50px; font-family: Arial; ">

			<thead>
				<tr class="w3-teal">
					<th> NID </th>
					<th> Name </th>
					<th> Father's Name </th>
					<th> Mother's Name </th>
					<th> Contact </th>
					<th> Loan type </th>
					<th> Interest(%) </th>
					<th> Amount </th>
					<th> Date </th>
					<th> Status </th>
				</tr>
			</thead>

<?php 

	$customer_nid = $_REQUEST['national_id'];
	$loan_type    = $_REQUEST['loan_type'];
	$interest_rate = $_REQUEST['interest_rate'];
	$loan_date = $_REQUEST['loan_date'];
	$loan_status = $_REQUEST['loan_status']; 
	//echo "customer_nid = " . $customer_nid;
	$sql = "SELECT * FROM customer a , loan_category b , loan c WHERE 
	c.national_id = '$customer_nid' AND a.national_id = c.national_id AND b.category_id = c.category_id "; // first time join query in MySQL
	$result_sql = mysql_query($sql);

	if($result_sql)
	{
		$cnt_table_result_sql = mysql_num_rows($result_sql);

		if($cnt_table_result_sql > 0)
		{
			while($row = mysql_fetch_assoc($result_sql))
			{ 
				$interest_rate = $row['interest_rate'];
				$sql = "SELECT * FROM loan_amount WHERE rate = '$interest_rate' ";
				$res = mysql_query($sql);
				if(mysql_num_rows($res))
				{
					$ary = array();
					$ary = mysql_fetch_array($res);
				}
		
		?>

				<tr>
					<td> <?php echo $row['national_id']; ?> </td>
					<td> <?php echo $row['customer_name']; ?> </td>
					<td> <?php echo $row['father_name']; ?> </td>
					<td> <?php echo $row['mother_name']; ?> </td>
					<td> <?php echo $row['contact']; ?> </td>
					<td> <?php echo $row['loan_type']; ?> </td>
					<td> <?php echo $row['interest_rate']; ?> </td>
					<td> <?php echo $ary['amount']; ?> </td>
					<td> <?php echo $row['taken_date']; ?> </td>
					<td> <?php echo $row['status']; ?> </td>
				</tr>		
	<?php	}
	?>
			
			</table>
	<?php		
		}
	}

?>

	<div class="w3-row-padding w3-cell-row w3-container" style="font-family: Arial;"> 
	
		<div class="w3-cell-row w3-row-padding w3-row w3-container w3-middle">
			
			<button class="w3-button w3-border w3-round-large w3-red" style="margin-left: 40%;" onclick="get_reject()"> Reject </button>
			<button class="w3-button w3-border w3-round-large w3-green" style="margin-left: 20px;" onclick="get_accept()"> Accept </button>

		</div>
	
	</div>

<script type="text/javascript">
	
	function get_reject()
	{
		window.location.href = "request_exec.php?var="+0+"&customer_nid="+<?php echo $customer_nid; ?> + "&loan_type=" + <?php echo $loan_type; ?> + "&interest_rate=" + <?php echo $interest_rate; ?> + "&loan_date=" + <?php echo $loan_date; ?> + "&loan_status=" + <?php echo "$loan_status"; ?> ;
	}

	function get_accept()
	{
		window.location.href = "request_exec.php?var="+1+"&customer_nid="+<?php echo $customer_nid; ?> + "&loan_type=" + <?php echo $loan_type; ?> + "&interest_rate=" + <?php echo $interest_rate; ?> + "&loan_date=" + <?php echo $loan_date; ?> + "&loan_status=" + <?php echo "$loan_status"; ?> ;
	}


</script>
 

</div>



<?php include("include/footer_demand.php"); ?>