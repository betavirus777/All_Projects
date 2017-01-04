
<div id="main" class="wrapper style1">
	<div class="container">
		<header class="major">
			<h2>ADMIN</h2>
		</header>
		
<?php 
	require_once realpath($_SERVER["DOCUMENT_ROOT"])."/include/helpers.php";
	
	$rows = DB::query("SELECT * FROM users, leaderboard, answers WHERE users.id = leaderboard.id AND users.id = answers.id");
	
?>
				<section>
								<div class="table-wrapper">
									<table>
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Username</th>
												<th>Password</th>
												<th>email</th>
												<th>Phone</th>
												<th>enable</th>
												<th>time</th>
												
												<th>ans11</th>
												<th>ans12</th>
												<th>ans13</th>
												<th>ans14</th>
												<th>ans15</th>
												<th>ans16</th>
												<th>ans17</th>
												<th>ans18</th>
												<th>ans19</th>
												<th>ans110</th>
												<th>ans111</th>
												<th>ans112</th>
												<th>ans113</th>
												<th>ans114</th>
												<th>ans115</th>
												<th>ans116</th>
												<th>ans117</th>
												<th>ans118</th>
												<th>ans119</th>
												<th>ans120</th>
												
												<th>ans21</th>
												<th>ans22</th>
												<th>ans23</th>
												<th>ans24</th>
												<th>ans25</th>
												<th>ans26</th>
												<th>ans27</th>
												<th>ans28</th>
												<th>ans29</th>
												<th>ans210</th>
												
												<th>ans31</th>
												<th>ans32</th>
												<th>ans33</th>
												<th>ans34</th>
												<th>ans35</th>
											</tr>
										</thead>
										<tbody>
										
<?php 
	
	foreach($rows as $row)
	{
		echo "<tr>";
		echo "<th>{$row['id']}</th>";
		echo "<th>{$row['name']}</th>";
		echo "<th>{$row['username']}</th>";
		echo "<th>{$row['password']}</th>";
		echo "<th>{$row['email']}</th>";
		echo "<th>{$row['phone']}</th>";
		echo "<th>{$row['enable']}</th>";
		echo "<th>{$row['time']}</th>";
		
		echo "<th>{$row['ans11']}</th>";
		echo "<th>{$row['ans12']}</th>";
		echo "<th>{$row['ans13']}</th>";
		echo "<th>{$row['ans14']}</th>";
		echo "<th>{$row['ans15']}</th>";
		echo "<th>{$row['ans16']}</th>";
		echo "<th>{$row['ans17']}</th>";
		echo "<th>{$row['ans18']}</th>";
		echo "<th>{$row['ans19']}</th>";
		echo "<th>{$row['ans110']}</th>";
		echo "<th>{$row['ans111']}</th>";
		echo "<th>{$row['ans112']}</th>";
		echo "<th>{$row['ans113']}</th>";
		echo "<th>{$row['ans114']}</th>";
		echo "<th>{$row['ans115']}</th>";
		echo "<th>{$row['ans116']}</th>";
		echo "<th>{$row['ans117']}</th>";
		echo "<th>{$row['ans118']}</th>";
		echo "<th>{$row['ans119']}</th>";
		echo "<th>{$row['ans120']}</th>";
		
		echo "<th>{$row['ans21']}</th>";
		echo "<th>{$row['ans22']}</th>";
		echo "<th>{$row['ans23']}</th>";
		echo "<th>{$row['ans24']}</th>";
		echo "<th>{$row['ans25']}</th>";
		echo "<th>{$row['ans26']}</th>";
		echo "<th>{$row['ans27']}</th>";
		echo "<th>{$row['ans28']}</th>";
		echo "<th>{$row['ans29']}</th>";
		echo "<th>{$row['ans210']}</th>";
		
		echo "<th>{$row['ans31']}</th>";
		echo "<th>{$row['ans32']}</th>";
		echo "<th>{$row['ans33']}</th>";
		echo "<th>{$row['ans34']}</th>";
		echo "<th>{$row['ans35']}</th>";
		echo "</tr>";
	}
	
?>
	

</tbody>
</table>
</section>
</div>
</div>

<section>
		<div class="row uniform 50%">
			<form method="post" action="/public/admin.php">
				<ul class="actions">
					<input type='hidden' name='number' value='1'>
					<li><input type='submit' class="button special" value='CLEAR DATABASES'></li>
				</ul>
			</form>
				
			<form method="post" action="/public/admin.php">
				<ul class="actions">
					<input type='hidden' name='number' value='2'>
					<li><input type='submit' class="button special" value='START CONTEST'></li>
				</ul>
			</form>
				
			<form method="post" action="/public/admin.php">
				<ul class="actions">
					<input type='hidden' name='number' value='3'>
					<li><input type='submit' class="button special" value='END CONTEST'></li>
				</ul>
			</form>
				
			<form method="post" action="/public/admin.php">
				<ul class="actions">
					<input type='text' name='username'>
					<input type='hidden' name='number' value='4'>
					<li><input type='submit' class="button special" value='BLOCK'></li>
				</ul>
			</form>
		</div>
	</section>