<?php include("db.php");?>
<!DOCTYPE HTML>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Cont bankar</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="jquery-3.5.1.min.js"></script>
		<script src="main.js"></script>
	</head>

	<body>
	<div id="border">
		<div class="horizontal" align="right"><div>Статус документа:
			<?php
				$result=mysqli_query($db,"SELECT * FROM `status`");?>
				<select size="0;" name='status'>
				<?php while ($row=mysqli_fetch_assoc($result)) {
					echo"<option value='{$row['id']}'>{$row['name']}</option>";
				}?>
				</select>
			<!-- 
			
				<option value="1">новый</option>
				<option value="2">уточнёный</option>
				<option value="3">закрытый</option>
			</select> --></div>
		</div>
		<div style="padding-left: 5px; padding-top: 5px;">
			<label for="no">No:</label>
				<input id="no" type="text" size="10px" name="" style="text-align: center" value="10">
			<label for="data">Дата:</label>
				<input id="data" type="date" name="calendar">
				<tg style="margin-left: 370px;">Вид кредитового перевода:</tg>
				<?php
				$result1=mysqli_query($db,"SELECT * FROM `credit`");?>
				<select name='credit' style="width: 80px;">
				<?php while ($row1=mysqli_fetch_assoc($result1)) {
					echo"<option value='{$row1['id']}'>{$row1['name']}</option>";
				}?>
				</select>
			
				<!-- <select>
				<option value="1">Обычный</option>
				<option value="2">Быстрый</option>
		    	</select> --> 001\
				<br>
			<label for="date" style="padding-left: 30px">Дата исполнения:</label>
				<input id="date" type="date" name="calendar">
		</div>
	</div>
	<div class="border1">
		<br>Плательщик<br>
		<label for="code">Фиск код: 1234<tg style="margin-left: 150px;">/</tg></label>
		<input id="code" type="text" size="5px" maxlength="7" name=""><br>
		<p><tg style="margin-left: 40px;">Organization1 Name</tg><br>
		<tg style="margin-left: 10px;">(R)</tg><br>
		<p>Банк плательщика<br>
		B.C.'ENERGBANK'S.A. fil.'Botanica' Chisinau</p>
	</div>
	<div id="line1">
		<p>Сумма</p>
	</div>
	<div id="line2">
		<br>Сч. No</p>
	</div>
	<div id="line3">
		<p>БИК</p>
	</div>
	<div id="line4">
	</div>
	<div class="border2">
		<p><input type="text" size="60px" name="" maxlength="54" dir="rtl" value="1.00"></p>
		<div><br>
			<?php
			$result2=mysqli_query($db,"SELECT * FROM `num_cont`");?>
			<select num='num_cont' style="width: 350px">
			<?php while ($row2=mysqli_fetch_assoc($result2)) {
				echo"<option value='{$row2['id']}'>{$row2['num']}</option>";
			}?>
			</select>
		</div>
		<div style="padding-top: 10px;">
			<p>ENEGMD22858</p>
		</div>
	</div>
	<div class="border3">
		<div style="padding-top: 10px;"><label for="ban">Банк полючателя:</label></div>
		<textarea rows="2" cols="55">BC'MOLDOVA-ANGROINBANK'SA fil.nr.10 Chisinau
		</textarea>
	</div>
	<div id="line5">
		<P>БИК</P>
	</div>
	<div id="line6"></div>
	<div class="border4">
		<input type="text" name="" size="12px" maxlength="13" value="AGRNMD2X437">
		<tg class="sageata1"></tg>
	</div>
	<div class="border5">
		<br><tg class="sageata2">Полючатель</tg><br>
		<label for="code">Фиск код: 1234</label>
		<input id="code" type="text" size="20px" name="" maxlength="19" value="111111111">/<br>
			<?php
			$result3=mysqli_query($db,"SELECT * FROM `test`");?>
			<select num='test'>
			<?php while ($row3=mysqli_fetch_assoc($result3)) {
				$p="(".$row3['name'].")";
				echo"<option value='{$row3['id']}'>{$p}</option>";
			}?>
			</select>
		<textarea rows="1" cols="35">TEST RECESIVER</textarea>
	</div> 
		 <div id="line7">
		<p>Сч. No</p>
	 </div>
	<div id="line8">
	</div>
	<div class="border6">
		<input type="text" size="60px" maxlength="54" name="" value="11111111111">
	</div>
	<div class="border7">
		<label for="plata">Назначение патежа:</label><br>
		<textarea rows="1" cols="116">TEST GROUND1 inclusiv TVA 0 - 17</textarea>
		<?php
			$result4=mysqli_query($db,"SELECT * FROM `tva`");
			while ($row4=mysqli_fetch_assoc($result4)) {
			$m=$row4['num']."%";
			$n=$row4['num']/100?>
		НДС <tg style="margin-left: 50px"><?php echo"{$n}" ?>
			<select>
			<?php 
				echo"<option value='{$row4['id']}'>{$m}</option>";
			}?>
			</select>
			<?php
			$result5=mysqli_query($db,"SELECT * FROM `factor_tva`");?>
			<select>
				<?php while ($row5=mysqli_fetch_assoc($result5)) {
				echo"<option value='{$row5['id']}'>{$row5['name']}</option>";
			}?>
			</select>
			<tg id="tva" style="padding-left: 25px;">Тип перевода</tg>
			<?php
			$result6=mysqli_query($db,"SELECT * FROM `tip`");?>
			<select>
				<?php while ($row6=mysqli_fetch_assoc($result6)) {
				echo"<option value='{$row6['id']}'>{$row6['name']}</option>";
			}?>
			</select>
		</tg>
	</div>
	</body>

</html>