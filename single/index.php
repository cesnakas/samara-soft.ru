<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Главная');
?> 

<style>
.row.items {
	background-color: white;
	padding: 20px;
	box-sizing: border-box;
}
.col-3 img {
	margin-bottom: 10px;
}
p {
	color:  #43494e;
	font-size: 15px;/* Приближение из-за подстановки шрифтов */
	font-weight: 400;
	line-height: 22px;/
}

</style>
<script>
	$("a.image").fancybox();
</script>
<section class="section section-projects single-page">
		<div class="container">
			<div class="row items">
				<div class="col-3">
					<a href="/local/templates/main/img/news01.jpg" class="image"><img class="" src="/local/templates/main/img/news01.jpg" alt=""></a>
					<a href="/local/templates/main/img/news02.jpg" class="image"><img class="" src="/local/templates/main/img/news02.jpg" alt=""></a>
					<a href="/local/templates/main/img/news03.jpg" class="image"><img class="" src="/local/templates/main/img/news03.jpg" alt=""></a>
				</div>
				<div class="col-9" style="margin-top: 30px;padding-right: 94px;">
					<div class="section-headline">
						
						<p class="section-subtitle">Заголовок статьи</p>
					</div>
					<p>Идейные соображения высшего порядка, а также реализация намеченных плановых заданий способствует подготовки и реализации модели развития. Задача организации, в особенности же сложившаяся структура организации требуют от нас анализа направлений прогрессивного развития. Идейные соображения высшего порядка, а также реализация намеченных плановых заданий обеспечивает широкому кругу (специалистов) участие в формировании новых предложений.</p>
					<p>Повседневная практика показывает, что постоянное информационно- пропагандистское обеспечение нашей деятельности позволяет оценить значение модели развития. Равным образом новая модель организационной деятельности требуют определения и уточнения модели развития. Значимость этих проблем настолько очевидна, что сложившаяся структура организации в значительной степени обуславливает создание новых предложений. Повседневная практика показывает, что дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации соответствующий условий активизации.</p>
					<div class="quotes">
						<div class="quotes-block">
							<div class="first-quotes-block"></div>
							<div class="second-quotes-block"><div></div></div>
							<div class="three-quotes-block"></div>
							<div class="clr"></div>
						</div>
						<div class="citata">
							Идейные соображения высшего порядка, а также реализация намеченных плановых заданий способствует подготовки и реализации модели развития. Задача организации, в особенности же сложившаяся структура организации требуют
						</div>
						<div class="bottom-citata">
							<span>Константин Преображенский</span>
							<span>Технический директор</span>
						</div>
					</div>
					<h2>Нумерованный список</h2>
						<ul class="number-list">
							<li><span>1</span>Эксперимент проверки новых предложений</li>
							<li><span>2</span>Сложившаяся структура организации представляет</li>
							<li><span>3</span>Начало повседневной работы по формированию</li>
							<li><span>4</span>Значимость этих проблем настолько очевидна</li>
							<li><span>5</span>Процесс внедрения и модернизации новых предложений</li>
						</ul>
					<h2>Маркерованный список</h2>
						<ul class="marker-list">
							<li><span></span>Эксперимент проверки новых предложений</li>
							<li><span></span>Сложившаяся структура организации представляет</li>
							<li><span></span>Начало повседневной работы по формированию</li>
							<li><span></span>Значимость этих проблем настолько очевидна</li>
							<li><span></span>Процесс внедрения и модернизации новых предложений</li>
						</ul>
				</div>
			</div>
		</div>
</section>



<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>