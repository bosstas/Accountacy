<?php include("db.php");?>
<!DOCTYPE HTML>
<html>

	<head>
		<meta charset="UTF-8">
		<title>Cont bankar</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="jquery-ui.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">


		

	</head>

	<body>
		<form id="site">
		<div class="top">
			<div id="border">
				<div class="horizontal" align="right">
					<div>Статус документа:
						<input size="7px" type="text" id="status" class="status" value="normal">
					</div>
				</div>
				<div style="padding-left: 5px; padding-top: 30px;">
					<label for="number">No:</label>
						<input id="number" type="text" size="10px" style="text-align: center" value="10">
					<label for="data">Дата:</label>
						<div class="d-inline-block">
							<input class="datepicker" id="data" type="text" size="10"><div class=" d-inline-block" style="margin-left: 5px;"></div>
						</div>
						<div class="d-inline-block" style="margin-left: 370px;">Вид кредитового перевода:</div>
						<?php
						$result1=mysqli_query($db,"SELECT * FROM `credit`");?>
						<select class='credit' id="credit" style="width: 80px;">
						<?php while ($row1=mysqli_fetch_assoc($result1)) {
							echo"<option value='{$row1['id']}'>{$row1['transfer_type']}</option>";
						}?>
						</select>001\
						<div class="d-inline-block">
							<label for="date" style="padding-left: 30px">Дата исполнения:</label>
							<input class="datepicker" id="date" size="10" type="text"><div class=" d-inline-block" style="margin-left: 5px;"></div>
						</div>
				   </div>
				<div style="padding-top: 10px;"></div>
			</div>
		</div>

		<div class="left">	
			<div class="border1">
				<br>Плательщик<br>
				<label for="fisc1">Фиск код: 1234</label>
				<div class="d-inline-block fisc1" style="margin-left: 150px;">/
				<input id="fisc1" type="text" size="5px" maxlength="7"></div><br>
				<p><div class="d-inline-block" style="margin-left: 40px;">Organization1 Name</div>
				<div style="margin-left: 10px;">(R)</div>
				<p>Банк плательщика
				<div style="margin-top: -10px;">B.C.'ENERGBANK'S.A. fil.'Botanica' Chisinau</div></p>
			</div>
			<div class="border3">
				<div style="padding-top: 10px;"><label for="ban">Банк полючателя:</label></div>
				<textarea rows="2" cols="55" id="destinar" placeholder="BC'MOLDOVA-ANGROINBANK'SA fil.nr.10 Chisinau"></textarea>
			</div>
			<div class="border5">
				<label for="name">Получатель</label>
				<input id="name" class="name" type="text"><br>
				<label for="fisc">Фиск код: 1234</label>
				<input id="fisc" class="code" type="text" maxlength="4" placeholder="111111111">/
				<input id="fiscsub" class="subcode" type="text" maxlength="4"><br>
					<?php
					$result3=mysqli_query($db,"SELECT name FROM `test`");?>
					<select id="type" class="type">
					<?php while ($row3=mysqli_fetch_assoc($result3)) {
						$p="(".$row3['name'].")";
						echo"<option value='{$row3['name']}'>{$p}</option>";
					}?>
					</select>
				<textarea id="text" rows="1" cols="35"></textarea>
				<div style="padding-top: 7px;"></div>
			</div>

		<div class="center">
			<div id="line1">
				<p>Сумма</p>
			</div>
 			<div id="line2">
				<p>Сч. No</p>
			</div>
			<div id="line3">
				<p>БИК</p>
			</div>
			<div id="line4">
			</div>
			<div id="line5">
				<P>БИК</P>
			</div>
			<div id="line6">
			 </div>
			<div id="line7">
				<p>Сч. No</p>
			 </div>
			<div id="line8">
			</div> 
		</div>  
		<div class="right">
			<div class="border2">
				<p><input class="sum" id="sum" type="text" size="60px" maxlength="54" dir="rtl" placeholder="1.00"></p>
				<div>
					<div style="padding-top: 10px;"></div>
					<?php
					$result2=mysqli_query($db,"SELECT * FROM `num_cont`");?>
					<select class='num_cont' id="num_cont" style="width: 350px">
					<?php while ($row2=mysqli_fetch_assoc($result2)) {
						echo"<option value='{$row2['id']}'>{$row2['num']}</option>";
					}?>
					</select>
				</div>
				<div style="margin-top: 33px;">
					<p>ENEGMD22858</p>
				</div>
			</div>
			<div class="border4">
				<div class=" d-inline-block">
					<input type="text" name="" size="12px" maxlength="13" id="bic" placeholder="AGRNMD2X437">
				</div>
			</div>
			<div class="border6">
				<input id="cont" class="account_number" type="text" size="60px" maxlength="54" name="" placeholder="11111111111">
			</div>			
		</div>

		<div class="bottom">
			<div class="border7">
				<label for="plata">Назначение патежа:</label><br>
				<textarea rows="1" cols="116">TEST GROUND1 inclusiv TVA 0 - 17</textarea>
				НДС 
				<div class="d-inline-block" id="tva">
				<div class="d-inline-block" style="margin-top: -30px; margin-right: 805px; float: right;"><input type="text" size="15px" dir="rtl" id="rezultat" class="rezultat"></span></div>
						<select class="procent" id="procent" style="float: left; margin-top: -30px; margin-left: 150px;">
						<?php 
						$result4=mysqli_query($db,"SELECT * FROM `tva`");
						while ($row4=mysqli_fetch_assoc($result4)) {
						$m=$row4['num']."%";
							echo "<option value='{$row4['id']}'>{$m}</option>";
						}?>
						</select>

						<div class="tva_img" style="float: left; margin-top: -30px; margin-left: 300px;">
							<img id="tva-img" src="tva.jpg">
						</div>
					</div>
				<div class="factor_tva" style="margin-top: -35px; margin-left: 200px;"><?php
					$result5=mysqli_query($db,"SELECT * FROM `factor_tva`");?>
					<select class="tva" id="select_tva">
						<?php while ($row5=mysqli_fetch_assoc($result5)) {
						echo"<option value='{$row5['id']}'>{$row5['name']}</option>";
					}?>
					</select>
					<div class="d-inline-block" style="margin-left: 20px;">Тип перевода
						<select class="tip">
						<?php 
							$result6=mysqli_query($db,"SELECT * FROM `tip`");
							while ($row6=mysqli_fetch_assoc($result6)) {
							echo"<option value='{$row6['id']}'>{$row6['name']}</option>";
						}?>
						</select>
					</div>
			    </div>
			</div>
		</div>

		<div class="sageata1"><img src="sageata.jpg"></div>
		<div class="sageata2"><img src="sageata.jpg"></div>
				
				<div class="rama1">
					<div class="close1"><img src="close.jpg"></div>
					<?php $result10=mysqli_query($db,"SELECT * FROM dialog");?>
					<div class="table-responsive">
						
						<table class="table" id="datatable">
							<thead>
								<tr>
									<th style="padding-left: 170px; text-align: left;">Название</th>
									<th style="text-align: left; padding-left: 50px;">БИК</th>
								</tr>
							</thead>
						
							<tbody>
								<?php 
									while ($row10=mysqli_fetch_assoc($result10)) {
										$escaped = str_replace("'", "&apos;", $row10['name']);
								?>

								<tr>
									<td>
										<a href='#' 
										class='bank bic' 
										data-bic='<?php echo $row10['bic']; ?>' 
										data-name='<?php echo $escaped ;?>'
										>
											<?php echo "<div style='padding-left:50px;'>{$row10['name']}</div>"?>
										</a>
									</td>
									<td style="width: 18%;">
										<a href='#' 
										class='bank bic' 
										data-bic='<?php echo $row10['bic']; ?>' 
										data-name='<?php echo $escaped ;?>'
										><?php echo "<div style='padding-right:50px;'>{$row10['bic']}</div>"?>
										</a>
									</td>
								</tr>

							<?php } //inchidem while ?>
							</tbody>

						</table>
					</div>
				</div>

				<div class="rama2">
					<div class="close2"><img src="close.jpg"></div>
					<form id="danie">
						<div id="persons"></div>
						<div class="user-info">
							<input type="text" class="name"> <br>
							<input type="text" class="code"> <br>
							<input type="text" class="subcode"> <br>
							<input type="text" class="type"> <br>
							<input type="text" class="account_number"><br>
						</div>
						<input class="close-second-modal" style="margin-bottom: 10px;" type="button" value="Закрыть">
					</form>
				</div>
				<input class="email" style="float: right; margin-right: 250px;" type="submit" value="Отправить">
			</div>
				<div id="mail_txt">
					<div class="close3"><img src="close.jpg"></div>
					<form method="POST">
						<label for="a">Статус документа - </label>
						<input type="text" id="a" name="status"><br>
						<label for="b">Номер документа - </label>
						<input type="text" id="b" name="number"><br>
						<label for="c">Дата заказа - </label>
						<input type="text" id="c" name="data"><br>
						<label for="d">Дата исполнения - </label>
						<input type="text" id="d" name="date"><br>
						<label for="e">Вид кредитного перевода - </label>
						<input type="text" id="e" name="credit"><br>
						<label for="f">Фискальный код - </label>
						<input type="text" id="f" name="fisc1"><br>
						<label for="g">Сумма перевода: </label>
						<input type="text" id="g" name="suma"><br>
						<label for="h">Счёт отправителя - </label>
						<input type="text" id="h" name="num_cont"><br>
						<label for="i">Банк получателя - </label>
						<input type="text" size="40px" id="i" name="destinar"><br>
						<label for="o">БИК банка получателя - </label>
						<input type="text" id="o" name="bic"><br>
						<label for="j">Получатель - </label>
						<input type="text" id="j" name="name"><br>
						<label for="k">Номер паспорта получателя - </label>
						<input type="text" id="k" name="fisc"><br>
						<label for="l">Фиск получателя - </label>
						<input type="text" id="l" name="fiscsub"><br>
						<label for="m">Тип получателя - </label>
						<input type="text" id="m" name="type"><br>
						<label for="n">Описание получателя - </label>
						<input type="text" id="n" name="text"><br>
						<label for="p">Счёт получателя - </label>
						<input type="text" id="p" name="cont"><br>
						<label for="q">Суммы НДС - </label>
						<input type="text" id="q" name="rezultat"><br>
						<label for="r">Процент НДС - </label>
						<input type="text" id="r" name="procent"><br>
						<input type="text" id="s" name="tva"><br>
						<input type="submit" name="subtxt" value="Отправить">
					</form>
				</div>
			</form>

			<?php

			if(isset($_POST['subtxt'])){

				$status=$_POST['status'];
				$number=$_POST['number'];
				$data=$_POST['data'];
				$date=$_POST['date'];
				$credit=$_POST['credit'];
				$fisc1=$_POST['fisc1'];
				$suma=$_POST['suma'];
				$num_cont=$_POST['num_cont'];
				$destinar=$_POST['destinar'];
				$bic=$_POST['bic'];
				$name=$_POST['name'];
				$fisc=$_POST['fisc'];
				$fiscsub=$_POST['fiscsub'];
				$type=$_POST['type'];
				$text=$_POST['text'];
				$cont=$_POST['cont'];
				$rezultat=$_POST['rezultat'];
				$procent=$_POST['procent'];
				$tva=$_POST['tva'];

				$file=fopen('save-form.txt', 'w');
				fwrite($file, 'Статус документа - ');
				fwrite($file, $status."\n");
				fwrite($file, 'номер документа - ');
				fwrite($file, $number."\n");
				fwrite($file, 'Дата заказа - ');
				fwrite($file, $data."\n");
				fwrite($file, 'Дата исполнения - ');
				fwrite($file, $date."\n");
				fwrite($file, 'Вид кредитового перевода - ');
				fwrite($file, $credit."\n");
				fwrite($file, 'Фискальный код - ');
				fwrite($file, $fisc1."\n");
				fwrite($file, 'Сумма перевода - ');
				fwrite($file, $suma."\n");
				fwrite($file, 'Счёт отправителя - ');
				fwrite($file, $num_cont."\n");
				fwrite($file, 'Банк полючателя - ');
				fwrite($file, $destinar."\n");
				fwrite($file, 'БИК банка получателя - ');
				fwrite($file, $bic."\n");
				fwrite($file, 'Полючатель - ');
				fwrite($file, $name."\n");
				fwrite($file, 'Номер паспорта получателя - ');
				fwrite($file, $fisc."\n");
				fwrite($file, 'Фиск полючателя - ');
				fwrite($file, $fiscsub."\n");
				fwrite($file, 'Тип перевода - ');
				fwrite($file, $type."\n");
				fwrite($file, 'Описание получателя - ');
				fwrite($file, $text."\n");
				fwrite($file, 'Счёт полючателя - ');
				fwrite($file, $cont."\n");
				fwrite($file, 'Сумма НДС - ');
				fwrite($file, $rezultat."\n");
				fwrite($file, 'Процент НДС - ');
				fwrite($file, $procent."%\n");
				fwrite($file, $tva);
				fclose($file);
			}

				// if($_REQUEST) {
				// 	 extract($_REQUEST);
				// 	$file=fopen('save-form.txt', 'w');
				// 	fwrite($file, 'Статус документа - ');
				// 	fwrite($file, $status."\n");
				// 	fwrite($file, 'номер документа - ');
				// 	fwrite($file, $number."\n");
				// 	fwrite($file, 'Дата заказа - ');
				// 	fwrite($file, $data."\n");
				// 	fwrite($file, 'Дата исполнения - ');
				// 	fwrite($file, $date."\n");
				// 	fwrite($file, 'Вид кредитового перевода - ');
				// 	fwrite($file, $credit."\n");
				// 	fwrite($file, 'Фискальный код - ');
				// 	fwrite($file, $fisc1."\n");
				// 	fwrite($file, 'Сумма перевода - ');
				// 	fwrite($file, $suma."\n");
				// 	fwrite($file, 'Счёт отправителя - ');
				// 	fwrite($file, $num_cont."\n");
				// 	fwrite($file, 'Банк полючателя - ');
				// 	fwrite($file, $destinar."\n");
				// 	fwrite($file, 'БИК банка получателя - ');
				// 	fwrite($file, $bic."\n");
				// 	fwrite($file, 'Полючатель - ');
				// 	fwrite($file, $name."\n");
				// 	fwrite($file, 'Номер паспорта получателя - ');
				// 	fwrite($file, $fisc."\n");
				// 	fwrite($file, 'Фиск полючателя - ');
				// 	fwrite($file, $fiscsub."\n");
				// 	fwrite($file, 'Тип перевода - ');
				// 	fwrite($file, $type."\n");
				// 	fwrite($file, 'Описание получателя - ');
				// 	fwrite($file, $text."\n");
				// 	fwrite($file, 'Счёт полючателя - ');
				// 	fwrite($file, $cont."\n");
				// 	fwrite($file, 'Сумма НДС - ');
				// 	fwrite($file, $rezultat."\n");
				// 	fwrite($file, 'Процент НДС - ');
				// 	fwrite($file, $procent."%\n");
				// 	fwrite($file, $tva);
				// 	fclose($file);
				// }

				   
			?>
			
			<div id="send_credit" style="opacity: 0;"></div>
			<div id="send_number" style="opacity: 0;"></div>
			<div id="send_tva" style="opacity: 0;"></div>

			<script type="text/javascript" src="jquery-3.5.1.min.js"></script>
			<script type="text/javascript" src="jquery-ui.min.js"></script>
			<script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
			<script type="text/javascript" defer src="main.js"></script>



	</body>
</html>