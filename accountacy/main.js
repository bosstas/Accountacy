$(function () {


	function credit (text, selector) {
		$(selector).html(text)
	}

	function cont_bank (text, selector) {
		$(selector).val(text)
	}

	function tva (text, selector) {
		$(selector).html(text)
	}

	function updateTextBasedOnType () {
		var name=$(".type").val();
		if(name !='') {
			$.ajax({
				url: "api.php",
				type: "POST",
				data: {
					action: 'update-text',
					name: name
				},
				success: function(data){
					console.log(data)
					$("#text").val(data);
				}
			});
	    }
	}

	// dupa initializarea paginii, apelam metoda... si oricand alta data 
	// in orice alte situatii

	// APelam functia si ii dam 2 parametri: ce text (la noi e valoarea elementului cu id acc_number)
	// si al doilea paramteru e selectorul in care sa bage ca valoare acest text.
	 credit($('#credit option:selected').html(), '#send_credit');
	 cont_bank($('#num_cont option:selected').html(), '#send_number');
	 tva($('#select_tva option:selected').html(), '#send_tva');

	$("#credit").change(function (e) {
		e.preventDefault()
		var id = $(this).val();
		if(id != '') {
			$.ajax({
				url: "api.php",
				type: "POST",
				data: {
					action: 'update-credit',
					id: id
				},
				success: (data => {
					console.log(data)
					credit(data, '#send_credit')
				})
			});
	    }
		
	})

	$("#num_cont").change(function (e) {
		e.preventDefault()
		var id = $(this).val();
		if(id != '') {
			$.ajax({
				url: "api.php",
				type: "POST",
				data: {
					action: 'get-account',
					id: id
				},
				success: (data => {
					console.log(data)
					cont_bank(data, '#send_number')
				})
			});
	    }
		
	})
	
	$("#select_tva").change(function (e) {
		e.preventDefault()
		var id = $(this).val();
		if(id == 1)
		{
			$("#tva").show();
	    }
		if(id == 2)
		{
			$("#tva").fadeOut();
	    }
	    if(id !='')
		{
			$.ajax({
				url: "api.php",
				type: "POST",
				data: {
					action: 'update-tva',
					id: id
				},
				success: (data => {
					console.log(data)
					tva(data, '#send_tva')
				})
			});
	    }
		
	})

	$(".tip").change(function(){
		var id=$(".tip").val();
		if(id !='')
		{
			$.ajax({
				url: "api.php",
				type: "POST",
				data: {
					action: 'update-status',
					id: id
				},
				success: function(data){
					console.log(data)
					$("#status").val(data);
				}
			});
	    }
	});	

	$(".datepicker").datepicker({
	  dateFormat: "dd-mm-yy",
      showOn: "button",
      buttonImage: "calendar.jpg",
      buttonImageOnly: false,
      buttonText: "Выбрать дату"
    });


	$(".sageata1").click(function(){
		$(".rama1").show(function () {
			$($.fn.dataTable.tables(true)).DataTable().columns.adjust();
		});
	});

	$(".bank").dblclick(function(){
		var name=$(this).attr('data-name');
		bic=$(this).attr('data-bic');
		$('#destinar').val(name);
		$('#bic').val(bic);
		$(".rama1").fadeOut();
	});


	$('#datatable').DataTable({
	 	//optiuni
	 	"language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.21/i18n/Russian.json"
        },
         "dom": '<"top"lp>rt<"bottom"if><"clear">',
         scrollY: 200,
		   "pagingType": "numbers",
		   "pageLength": 10
	});

	 $(".bic").dblclick(function(){
	 	var bic = $(this).attr('data-bic')
	 	$("#persons").html('')
	 	$(".name").val('')
		$(".code").val('')
		$(".subcode").val('')
		$(".type").val('')
		$(".account_number").val('')
	 	$.ajax({
				url: "api.php",
				type: "POST",
				data: {
					action: 'select-bic',
					bic: bic
				},
				success: function(data){
					var html = '';
					if(data == '0') {
						html = '<p>Nu au fost gasite persoane.</p>';
					} else {
						html = data
					}
					$('#persons').html(html)
					$(".rama1").fadeOut();
					$(".sageata2").fadeIn()
			    }
		});
	});
				$(".sageata2").click(function(){
						 	$(".name").val('')
							$(".code").val('')
							$(".subcode").val('')
							$(".type").val('')
							$(".account_number").val('')
					$(".rama2").show(function () {
						$("#person").change(function () {
							var id = $(this).val();

							$.ajax({
								url: "api.php",
								type: "POST",
								data: {
									action: 'get-user-info',
									id: id
								},
								success: (data => {
									var user = JSON.parse(data);
									$(".name").val(user.name)
									$(".code").val(user.code)
									$(".subcode").val(user.subcode)
									$(".type").val(user.type)
									$("#type").val(user.type)
									$(".account_number").val(user.account_number)
									updateTextBasedOnType()
								})
							});
						})
					});

				$(".close-second-modal").click(function (e) {
					e.preventDefault();
					$(".rama2").fadeOut();

					})

				});
				$("#tva-img").click(function(){ 

					var sum = $(".sum").val(),
						tva = $(".procent").val();

						if(sum==0){
							average ='';
						}
						else{
							var average = sum * tva / 100;
						}
					
					$(".rezultat").html(average);
					$("#rezultat").val(average);

				})

				$(".rezultat").change(function(){
					var id = $(".rezultat").val();
					$("#rezultat").val(id);
				})
				
				$(".sum").change(function(){
					var id = $(".sum").val();
					$("#sum").val(id);
				})

				$('.procent').change(function(){
					var procent = $(".procent").val();
					$("#procent").val(procent)
				});

				$("#site").on('submit', function(e){
					e.preventDefault();
					var tip = $("#status").val(),
					number = $('#number').val(),
					data1 = $('#data').val(),
					data2 = $('#date').val(),
					credit = $('#send_credit').html(),
					fisc1 = $('#fisc1').val(),
					suma = $('#sum').val(),
					num_cont = $('#send_number').val(),
					destinar = $('#destinar').val(),
					name = $('#name').val(),
					fisc = $('#fisc').val(),
					fiscsub = $('#fiscsub').val(),
					type = $('#type').val(),
					text = $('#text').val(),
					bic = $('#bic').val(),
					cont = $('#cont').val(),
					rezultat = $('#rezultat').val(),
					procent = $('#procent').val(),
					tva = $('#send_tva').html();
					
					$('#a').val(tip);
					$('#b').val(number);
					$('#c').val(data1);
					$('#d').val(data2);
					$('#e').val(credit);
					$('#f').val(fisc1);
					$('#g').val(suma);
					$('#h').val(num_cont);
					$('#i').val(destinar);
					$('#j').val(name);
					$('#k').val(fisc);
					$('#l').val(fiscsub);
					$('#m').val(type);
					$('#n').val(text);
					$('#o').val(bic);
					$('#p').val(cont);
					$('#q').val(rezultat);
					$('#r').val(procent);
					$('#s').val(tva);

					var allDates = {},
						dates = {},
						showTxT = true,
						dateTXT = true

					allDates['data'] = data1
					allDates['date'] = data2
					allDates['sum'] = suma
					allDates['destinar'] = destinar
					allDates['bic'] = bic
					allDates['name'] = name
					allDates['fisc'] = fisc
					allDates['text'] = text
					allDates['cont'] = cont
					allDates['rezultat'] = rezultat

					dates['data'] = data1
					dates['date'] = data2
					dates['sum'] = suma
					dates['destinar'] = destinar
					dates['bic'] = bic
					dates['name'] = name
					dates['fisc'] = fisc
					dates['text'] = text
					dates['cont'] = cont
					
					if(tva == 'Inclusiv TVA')
					{
						Object.keys(allDates).forEach( (key) => {
							var value = allDates[key]
							console.log(value)
							if (value == '' || value == null) {
								showTxT = false
								$("#" + key).css("border", "2px solid red")
							}
						})

						if (showTxT) {
							$('#mail_txt').show();
						} else {
							alert("Nu sunt completate toate datele.")
						}
					}
					

					if(tva == 'Fara TVA')
					{
						Object.keys(dates).forEach( (key) => {
							var value = dates[key]
							console.log(value)
							if (value == '' || value == null) {
								datesTxT = false
								$("#" + key).css("border", "2px solid red")

							}
						})
						if (datesTxT) {
							$('#mail_txt').show();
						} else {
							alert("Nu sunt completate toate datele.")
						}
					}
				});

				$('.close1').click(function(){
					$('.rama1').fadeOut();
				})

				$('.close2').click(function(){
					$('.rama2').fadeOut();
				})

				$('.close3').click(function(){
					$('#mail_txt').fadeOut();
				})

				$(".type").change(function(){
					updateTextBasedOnType()
				});
});