<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 

<style>
h4 { 
	font-size: 17px;
    font-weight: bold;
}
.col-4 p {
	font-size: 14px;
}
.block-cart {
	display: none;
}
.cart.visibility {
	display: block !important;
}
</style>
<script type="text/javascript">
	$( document ).ready(function() {
    	$('#show-cart').click( function() {
    		$('.cart-disabled-fast').toggle(300);
    		$('.cart').toggleClass("visibility");  		
	   	});
	   
	
		/*$('body').click( function() {
			$('label.active').removeClass('active');
		});*/
		
    	$('.md-form').click(function (event) {
    		$(this).find('label').addClass('active');
		});


	});
</script>
	<section class="section section-about section-news">
		<div class="container">
			<div class="row">
				<div class="col-6 d-flex">
					<h3 class="about-title">Контакты</h3>
				</div>
				<div class="col-6">
				</div>
			</div>
		</div>
	</section>

<section class="section section-projects page-projects" style="max-height: 463px;">
		<div class="container">
			<div class="row items">
				<div class="col-5">
					<div class="back-white">
						<h3 style="margin-bottom: 30px;color:  #1e2c38;font-size: 18px;font-weight: 700">Оставьте нам сообщение</h3>
						<form>
						<div class="md-form">
						    <input type="text" id="form-name int" class="form-control">
						    <label for="form-name" class="">Ваше имя</label>
						</div>
						<div class="md-form">
					
	                        <input type="text" id="form-email int" class="form-control"
>	                        <label for="form-email" class="">Телефон или email (для ответа)</label>
                    	</div>
						<div class="md-form">
						
	                        <input type="text" id="form-text int" class="form-control">
	                        <label for="form-text" class="">Текст сообщения</label>
                    	</div>
						<div class="text-right" style="margin-top: 80px;">
		                    <button class="btn btn-default waves-effect waves-light">Отправить</button>
		                </div>
		            	</form>
					</div>
				</div>
				<div class="col-7">
					<div class="row">
					<div class="col-4 cart-disabled-fast">
						<h4>Фактический адрес</h4>
						<p>440100, г.Самара<br>
						ул.Петровская 18, офис 116</p>
					</div>
					<div class="col-8 cart-disabled-fast">
						<h4>Телефон</h4>
						<p>8 (846) 909-35-35<br>
						8 (800) 311-20-20</p>
					</div>
					</div>
					<div class="row">
					<div class="col-4 cart-disabled-fast">
						<h4>Эл. почта</h4>
						<p>hello@samarasoft.ru<br>
						job@samarasoft.ru</p>
					</div>
					<div class="col-8 cart-disabled-fast cart">
						<img src="/images/map.svg" style="width: 50px;">						
						<span id="show-cart" style="display: block;">Схема проезда</span>
						<div class="cart block-cart">	
						<a href="https://yandex.ru/maps/?um=constructor%3A37af1a018d5c542f5e03f4cc8a41da0baf52d9664c56967dacd21c5bbb6404fb&amp;source=constructorStatic" target="_blank"><img src="https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3A37af1a018d5c542f5e03f4cc8a41da0baf52d9664c56967dacd21c5bbb6404fb&amp;width=500&amp;height=400&amp;lang=ru_RU" alt="" style="border: 0;" /></a>
						
						
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>
	</section>



<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>