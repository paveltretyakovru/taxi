

/*================ Accordian ================*/





$(window).load(function() {

	// добавил слушателя на будущие события
	$(document).on('click' , '.acc-content' , function () {
		console.log('test');
		if ($(this).hasClass('is-active')) { return; };
		$('.acc-content.is-active').removeClass('is-active');
		$(this).addClass('is-active');
	});		

	function scrTo(){
		$('html,body').animate({
		scrollTop: $("#pattern").offset().top
		}, 1000);
		$('.info').css("display", "block");
		$('.phones').css("display", "block");
		$('.slide').addClass('slide2');
		$('.text-vertical-center').addClass('text-vertical-center-2');
		return false;

	};
	
var taxi = {
	'taxi-name' 	: '' ,
	't-phone' 		: '' ,
	't-price-inT' 	: '' ,
	't-price-outT'	: '' ,
	't-time'		: '' ,
	't-getIn' 		: '' ,
	't-min'			: '' ,
	'dop-info'		: [
		{
			'title'			: '' ,
			'description' 	: '' ,
			'price'			: ''
		} , 
		{
			'title'			: '' ,
			'description' 	: '' ,
			'price'			: ''
		}
	] ,	
	'info-text' 	: '' ,
	'info-number'	: ''
}


/* ################# Tretyakov Pavel #################### */

// taxi_data -  переменная инициализирована в шаблоне главной страницы

var $taxi_list 	= $('#taxi-list');	// Выпадающий список с такси

$(".cs-options li").bind('click' , function(e){
	var id 			= $('.cs-selected').attr('data-value');
	var taxi 		= taxi_data[id];
	var phones		= '';
	var accordian 	= $('.accordian');

	// Чистим текущую дополнительную ифнормацию
	accordian.html('');

	// Собираем ссылки с телефонными номерами выбранного такси
	for (var i = 0; i < taxi['t-phone'].length; i++) {
		var phone_number = taxi['t-phone'][i];
		phones += "<a href=\'tel:"+phone_number+"\'>"+phone_number+"</a><br/>";
	};	

	// Выводим дополнительную информацию такси
	for (var i = 0; i < taxi['addinfo'].length; i++) {
		if (i === 0) {
			accordian.append('<section class="acc-content is-active"><h3>'+taxi['addinfo'][i]['title']+':</h3><p>'+taxi['addinfo'][i]['description']+'</p><span id="ac-price-2">'+taxi['addinfo'][i]['price']+' грн</span></section>');
		}else{
			accordian.append('<section class="acc-content"><h3>'+taxi['addinfo'][i]['title']+':</h3><p>'+taxi['addinfo'][i]['description']+'</p><span id="ac-price-2">'+taxi['addinfo'][i]['price']+' грн</span></section>');
		};		
	};

	$('#taxi-name').text(taxi['taxi-name']);
	$('#t-phone').html(phones);
	$('#t-price-inT').text(taxi['t-price-inT']);
	$('#t-price-outT').text(taxi['t-price-outT']);
	$('#t-time').text(taxi['t-time']);
	$('#t-getIn').text(taxi['t-getIn']);
	$('#t-min').text(taxi['t-min']);	

	$('#info-text p').text(taxi['info-text']);
	$('#info-number p').html(taxi['info-number']);
	scrTo();
});

/* #################################################### */

/*		
 $( ".cs-options li" ).click(function() {
 	var taxId= $('.cs-selected').text();

	if (taxId == "Таксі «Джокер»")
	{
		$('#taxi-name').text(taxId);
		$('#t-phone').html(
			  "<a href=\'tel:(0352)401401\'>(0352) 40-14-01</a><br/><a href=\'tel:(097)4769393\'>(097) 476-93-93</a><br/><a href=\'tel:(066)4769393\'>(066) 476-93-93</a><br/><a href=\'tel:(063)4769393\'>(063) 476-93-93</a>");
		$('#t-price-inT').text('4');
		$('#t-price-outT').text('4');
		$('#t-time').text('0.75');
		$('#t-getIn').text('безкошт.');
		$('#t-min').text('20');
		
		$('#ac-sec-1').html('<h3>Драйвер (тверезий водій):</h3><p>Вас на вашому ж автомобілі доставлять за потрібною адресою, при цьому гарантуючи повне збереження Вашої власності.</p><span id="ac-price-1">50 грн + зворотна дорога водієві на таксі.</span>');		$('#ac-sec-2').html('<h3>Кур’єрська доставка:</h3><p>Якщо Вам необхідно оперативно доставити за певною адресою документи, кореспонденцію, квіти, піцу, подарунки чи інші речі, а також забрати їх звідки-небудь, то сміливо звертайтеся.</p><span id="ac-price-2">40 грн</span>');
		
		$('#info-text p').text('Інформаційно  Диспетчерська служба таксі «Джокер» - це організація справді європейського зразка. Коли людина телефонує на службу – система автоматично скидає її дзвінок і одразу ж перенабирає, приємним жіночим голосом повідомляючи, про те, що ви зв’язались із службою таксі. Технічні можливості дають змогу клієнтові розраховуватись не лише готівкою, як це звиклося, але і перерахунком, або ж за допомогою картки, що є дуже зручним моментом як для тернополян, так і гостей міста.');
		$('#info-number p').html('Інформація відсутня.');
		scrTo ();
		
	}
	 
	else if (taxId == "Таксі «Шанс»")
	{
	    $('#taxi-name').text(taxId);
		$('#t-phone').html(
			  "<a href=\'tel:(0352)430808\'>(0352) 43-08-08</a><br/><a href=\'tel:(067)9430808\'>(067) 943-08-08</a><br/><a href=\'tel:(050)0430808\'>(050) 043-08-08</a><br/><a href=\'tel:(063)4779898\'>(063) 477-98-98</a>");
		$('#t-price-inT').text('3.80');
		$('#t-price-outT').text('3.80');
		$('#t-time').text('0.65');
		$('#t-getIn').text('безкошт.');
		$('#t-min').text('20');
		
		$('#ac-sec-1').html('<h3>Перевезення:</h3><p>Перевезення грузових вантажів до 5-ти тонн.<br/>Перевезення вантажів легковими пікапами від 50 кг.</p><span id="ac-price-1">Договірна.</span>');		
		$('#ac-sec-2').html('<h3>Кур’єрська доставка:</h3><p>Якщо Вам необхідно оперативно доставити за певною адресою документи, кореспонденцію, квіти, піцу, подарунки чи інші речі, а також забрати їх звідки-небудь, то сміливо звертайтеся.</p><span id="ac-price-2">40 грн</span>');
		
		$('#info-text p').text('«Таксі Шанс» - це висока якість автомобілів, оптимальні терміни подачі машини та виконання замовлення і найголовніше - економні ціни!');
		$('#info-number p').html('(0352) 425065<br/>(097) 3026188<br/>shans-taxi@mail.ru');
		scrTo ();
	}	
	 
	 
	 else if (taxId == "Таксі «ТТ»")
	{
	    $('#taxi-name').text(taxId);
		$('#t-phone').html(
			  "<a href=\'tel:(0352)520077\'>(0352) 52-00-77</a><br/><a href=\'tel:(096)3954007\'>(096) 395-40-07</a><br/><a href=\'tel:(063)0766990\'>(063) 076-69-90</a><br/><a href=\'tel:(068)1475005\'>(068) 147-50-05</a>");
		$('#t-price-inT').text('3.60');
		$('#t-price-outT').text('3.60');
		$('#t-time').text('0.65');
		$('#t-getIn').text('безкошт.');
		$('#t-min').text('16');
		
		$('#ac-sec-1').html('<h3>Перевезення:</h3><p>Перевезення грузових вантажів до 5-ти тонн.<br/>Перевезення вантажів легковими пікапами від 50 кг.</p><span id="ac-price-1">Договірна.</span>');		
		$('#ac-sec-2').html('<h3>Кур’єрська доставка:</h3><p>Якщо Вам необхідно оперативно доставити за певною адресою документи, кореспонденцію, квіти, піцу, подарунки чи інші речі, а також забрати їх звідки-небудь, то сміливо звертайтеся.</p><span id="ac-price-2">40 грн</span>');
		
		$('#info-text p').text('Інформація відсутня');
		$('#info-number p').html('Інформація відсутня');
		scrTo ();
	}
	 
	 else if (taxId == "Таксі «Vip»")
	{
	    $('#taxi-name').text(taxId);
		$('#t-phone').html(
			  "<a href=\'tel:(0352)520808\'>(0352) 52-08-08</a><br/><a href=\'tel:(0352) 40-08-08\'>(0352) 40-08-08</a><br/><a href=\'tel:(067)3520303\'>(067) 352-03-03</a><br/><a href=\'tel:(050)4340303\'>(050) 434-03-03</a>");
		$('#t-price-inT').text('4');
		$('#t-price-outT').text('4');
		$('#t-time').text('0.75');
		$('#t-getIn').text('безкошт.');
		$('#t-min').text('20');
		
		$('#ac-sec-1').html('<h3>Перевезення:</h3><p>Перевезення грузових вантажів до 5-ти тонн.<br/>Перевезення вантажів легковими пікапами від 50 кг.</p><span id="ac-price-1">Договірна.</span>');		
		$('#ac-sec-2').html('<h3>Попереднє замовлення:</h3><p>Існує можливість замовити таксі заздалегідь, навіть за кілька днів.</p><span id="ac-price-2">Безкоштовно.</span>');
		
		$('#info-text p').text('Інформація відсутня');
		$('#info-number p').html('(0352) 52-50-66');
		scrTo ();
	}
	 
	 
	 
	 
	 
	else 
	{
	   alert('problem');
	}
});

*/

	
});
