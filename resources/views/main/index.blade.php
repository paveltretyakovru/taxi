<!DOCTYPE html>
<html lang="uk">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="На нашому сайті Таксі Тернополя Ви знайдете всі номера Тернопільських таксі.">
    <meta name="author" content="sibitri.com">
    <title>Таксі Тернополя - номера тернопільських таксі | taxi.sibitri.com</title>
    <!-- Bootstrap -->

    {!! HTML::style('css/bootstrap.css') !!}
    {!! HTML::style('css/style.css') !!}
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    	<!-- Favicons
	================================================== -->

  </head>

  @include('modals.taxiform')


  <body>
    <header>
		<div class="container">
			<div class="row">
				<div class="col-lg-12"><a href="#" class="logo"></a></div>
			</div>
		</div>
		@include('admin.messages')
    </header>
    <section class="slide" id="slide">
				<div class="text-vertical-center">
					<span class="big-t">
						Виберіть <b>Ваше</b> таксі						
					</span>
					<section>
						<select class="cs-select cs-skin-border" id="taxi-list">
							<option value="" disabled selected>натисніть для вибору:</option>
							
							@foreach ($data_array as $key => $taxi_array)
								<option value="{{$key}}">Таксі «{{ $taxi_array['taxi-name'] }}»</option>
							@endforeach

							<!--
							<option value="tax7">Таксі «ТТ»</option>
							<option value="tax2">Таксі «Джокер»</option>
							<option value="tax8">Таксі «Шанс»</option>
							<option value="tax9">Таксі «Vip»</option>
							-->
							
						</select>
					</section>
				</div>
    </section>


    <div class="container-fluid pattern" id="pattern"></div>
    
   
	<div class="container phones" id="phones">
		<div class="row">
			<div class="col-lg-12">
				<div class="table-body">
					<div class="th">
						 <div class="td">Назва таксі</div>
						 <div class="td">Номера замовлення</div>
						 <div class="td">Тариф по місту</div>
						 <div class="td">Тариф за містом</div>
						 <div class="td">Простій</div>
						 <div class="td">Посадка</div>
						 <div class="td">Мінімальний</div>
					</div>
					{{-- 
					<div class="tr">
						 <div class="td" id="title"></div>
						 <div class="td" id="phone"></div>
						 <div class="td km" id="cityprice"></div>
						 <div class="td km" id="outcityprice"></div>
						 <div class="td" id="simple"></div>
						 <div class="td" id="landing"></div>
						 <div class="td" id="min"></div>
					</div>
					 --}}

					
					<div class="tr">
						 <div class="td" id="taxi-name"></div>
						 <div class="td" id="t-phone"></div>
						 <div class="td km" id="t-price-inT"></div>
						 <div class="td km" id="t-price-outT"></div>
						 <div class="td" id="t-time"></div>
						 <div class="td" id="t-getIn"></div>
						 <div class="td" id="t-min"></div>
					</div>
					
				</div>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
    <section class="info" id="info">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-5 col-md-5">
    			<h1>ДОДАТКОВІ ПОСЛУГИ ТА ІНФОРМАЦІЯ:</h1>
<div class="accordian">

<!--
<section class="acc-content is-active" id="ac-sec-1">
		<h3>Попереднє замовлення: </h3>
	<p>Існує можливість замовити таксі заздалегідь, навіть за кілька днів наперед.</p>
	<span id="ac-price-1">10 грн</span>
</section>

<section class="acc-content"  id="ac-sec-2">
		<h3>Тверезий водій:</h3>
	<p>Послуга тверезий водій принесе Вам масу позитиву і позбавить від небажаних незручностей. Замовивши послугу в нашій компанії, ви абсолютно точно отримаєте тверезого водія, який забезпечить ваше безпечне повернення додому.</p>
	<span id="ac-price-2">25 грн</span>
</section>
-->

</div>
    			</div>
    			<div class="col-lg-7 col-md-7">
    				
					<section class="info-taxi" id="info-taxi">
					<span id="info-text">
					<h3>Контактна інформація:</h3>
					<p></p>
					</span>
					<span id="info-number">
						<h3>Номера для скарг та пропозицій:</h3>
						<p></p>
					</span>
					</section>
    			</div>
    		</div>
    	</div>
    </section>
    <footer>
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 middle-parrent" >
					<div class="middle-child tel-mail">
					<header>Реклама та співпраця:</header>
					<a href="tel:(096)4993334" class="f-tel">(096) 499 33 34</a><br/>
					<a href="mailto:hello@sibitri.com" class="f-mail">hello@sibitri.com</a>
					</div>
					</div>
    			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 middle-parrent copyright ">
    				<div class="middle-child">© 2014 ТАКСІ ТЕРНОПОЛЯ</div>
    			</div>
    			<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 middle-parrent">
					<div class="middle-child sibi-log">
					зроблено в:
					<h1>
					  <a href="http://sibitri.com" class="sibitri" title="Створення сайтів Тернопіль «Sibitri.com»">
						<img alt="Створення сайтів Тернопіль «Sibitri.com»" src="img/sibitri.png">
					  </a>
					</h1>
      				
    				</div>
    			</div>
    		</div>
    	</div>
    </footer>   
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->    

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    	var taxi_data = {!! $data_json !!}
    </script>

    {!! HTML::script('js/system/my.js') !!} 
	{!! HTML::script('js/libs/classie.js') !!}	
	{!! HTML::script('js/libs/selectFx.js') !!}

		<script>
			(function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
		</script>

  </body>
</html>