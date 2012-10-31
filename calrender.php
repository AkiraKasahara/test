<?php
?>

<html>
<head>
	<meta charaset="UTF-8">
	<script src="jquery-1.8.2.min.js"></script>

	<link rel="stylesheet" href="calrender.css"></link>
</head>
<body>
	<script>
	$(function(){
		for(var i = 0; i < 4; i++)
		{
			$('.day').after('<tr class="list"><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>');
		}

		$('.day > th').addClass('day_css');
	})


	</script>
	<table class="table_03">
		<tr">
			<th>日</th>
			<th>月</th>
			<th>火</th>
			<th>水</th>
			<th>木</th>
			<th>金</th>
			<th>土</th>
		</tr>
		<tr class="day">
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
		</tr>
		<tr class="day">
			<th>4</th>
			<th>5</th>
			<th>6</th>
			<th>7</th>
			<th>8</th>
			<th>9</th>
			<th>10</th>
		</tr>
		<tr class="day">
			<th>11</th>
			<th>12</th>
			<th>13</th>
			<th>14</th>
			<th>15</th>
			<th>16</th>
			<th>17</th>
		</tr>
		<tr class="day">
			<th>18</th>
			<th>19</th>
			<th>20</th>
			<th>21</th>
			<th>22</th>
			<th>23</th>
			<th>24</th>
		</tr>
		<tr class="day">
			<th>25</th>
			<th>26</th>
			<th>27</th>
			<th>28</th>
			<th>29</th>
			<th>30</th>
			<th></th>
		</tr>
	</table>
</body>
</html>