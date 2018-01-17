<?php
include('parts/header.php');
?>
<div class="margin"></div>
<div class="title-img">
	<h2 class="title-text">Все о доставке и оплате</h2>
</div>
<div class="advantages">
	<h3>С нами выгодно работать</h3>
	<div class="wrap">
		<div class="main-box" >
			<div class="advantages-box">
				<i class="fa fa-shopping-bag" aria-hidden="true"></i>
			</div>
			<div class="advantages-text">
				<div class="main-text">
					Минимальный заказ - <span>одна упаковка</span>
				</div>
				<p>Количество единиц в упаковке указано в описании каждого товара</p>
			</div>
		</div>
		<div class="main-box">
			<div class=" advantages-box">
				<i class="fa fa-calendar-check-o" aria-hidden="true"></i>
			</div>
			<div class="advantages-text">
				<div class="main-text">
					Отправка заказа в <span>течении суток</span>
				</div>
				<p>Сбор заказа происходит в тот же день или на сделующий. Исключение пятница</p>
			</div>
		</div>
		<div class="main-box">
			<div class=" advantages-box last-box">
				<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
			</div>
			<div class="advantages-text">
				<div class="main-text">
					"Утром джинсы, <span>вечером деньги</span>"
				</div>
				<p>Отправляя заказ наложенным платежомб вы можете сначала оценить товар, а потом совершить оплату.</p>
			</div>
		</div>
	</div>
</div>
<div class="payments">
	<!-- <div class="modal-payment">
		<span class="close">&times;</span>
		<h3>УКРАИНА. КАРТА ПРИВАТ БАНКА</h3>
		<ul>
			<li>0,5% комисия</li>
			<li>Скорость начисления 1 день</li>
			<li>Нет ограничения на сумму перевода</li>
		</ul>
		<h3>УКРАИНА. НАЛОЖЕННЫЙ ПЛАТЕЖ</h3>
		<ul>
			<p>Комиссия за перевод денег:</p>
			<li>Новая Почта 2%</li>
			<li>Ин-Тайм 1,5% </li>
		</ul>
		<h3>ДРУГИЕ СТРАНЫ. ДЕНЕЖНЫЙ ПЕРЕВОД.</h3>
		<p>
			Оплата денежными переводами принимается только в долларах. Также Вы можете сделать перевод в рублях, а выдачу указать в долларах, сумма выдачи должна быть равна сумме к оплате по заказу. Лимит одного платежа до 5000 долл. Если сумма Вашего заказа больше, просто оплачивайте несколькими платежами.
		</p>
		<table>
			<tr>
				<th>БАНК</th>
				<th>КОМИССИЯ</th> 
				<th>ЗАЧИСЛЕНИЕ</th>
				<th>ОГРАНИЧЕНИЯ</th>
			</tr>
			<tr>
				<td>Unistream</td>
				<td>от 1%</td> 
				<td>1 банковский день</td>
				<td>до 5000$ от одного платежа</td>
			</tr>
			<tr>
				<td>Contact</td>
				<td>от 1%</td> 
				<td>1 банковский день</td>
				<td>до 5000$ от одного платежа</td>
			</tr>
			<tr>
				<td>MoneyGram</td>
				<td>от 1%</td> 
				<td>1 банковский день</td>
				<td>до 5000$ от одного платежа</td>
			</tr>
			<tr>
				<td>Золотая Корона</td>
				<td>от 0,5%</td> 
				<td>1 банковский день</td>
				<td>до 5000$ от одного платежа</td>
			</tr>
		</table>
	</div> -->
	<!-- modal-payment -->
	<h3 class="payments-box-title">Способы оплаты</h3>
	<p>
		Выбирайте любой удобный способ оплаты.
	</p>
	<p>
		Надеемся, что 	предложенные варианты оплаты окажутся быстрыми и удобными.
	</p>
	<div class="wrap">
		<div class="ukraine-private payments-modal">
			<h3>
				Украина
				<br>
				Карта приват банка
			</h3>
			<span class="payments-icon">
				<i class="fa fa-university" aria-hidden="true"></i>
			</span>
		</div>
		<div class="ukraine-nalojka payments-modal">
			<h3>
				Украина
				<br>
				Наложенный платеж
			</h3>
			<span class="payments-icon">
				<i class="fa fa-list-alt" aria-hidden="true"></i>
			</span>
		</div>
		<div class="onother-country payments-modal ">
			<h3>
				Другие страны
				<br>
				Денежный перевод
			</h3>
			<span class="payments-icon">
				<i class="fa fa-cc-visa" aria-hidden="true"></i>
			</span>
		</div>
	</div>

</div>
<div class="delivery">
	<h3 class="payments-box-title">
		Мы готовы отправить заказ в любую точку мира
	</h3>
	<p>
		Мы работаем с ведущими транспортными компаниями, а также используем альтернативные способы доставки. 
	</p>
	<p>
		Наши посылки попадают заказчикам гарантированно в срок, в целости и сохранности.
	</p>
	<div class="delivery-ukraine">
		<!-- <div class="modal-ukraine" id="ukraine">
			<span class="close">&times;</span>
			<h3>Новая почта</h3>

			<p>
				Новая почта - быстрый и надежный способ доставки
			</p>
			<div class="plus">
				<h5> + Плюсы:</h5>
				<ul>
					<li>скорость доставки</li>
					<li>большое количество отделений</li>
				</ul>
			</div>
			<div class="minus">
				<h5> + Минусы:</h5>
				<ul>
					<li>высокая цена</li>
				</ul>
			</div>
			<div class="clear"></div>
			<h3>Интайм</h3>
			<p>
				Ин-тайм - надежный способ при невысокой цене
			</p>
			<div class="plus">
				<h5> + Плюсы:</h5>
				<ul>
					<li>низкая цена</li>
				</ul>
			</div>
			<div class="minus">
				<h5> + Минусы:</h5>
				<ul>
					<li>медленная доставка</li>
					<li>небольшое количество отделений</li>
				</ul>
			</div>
			<div class="clear"></div>
			<h3>САМОВЫВОЗ</h3>
			<p>
				Самовывоз - кому выгодно самостоятельно забирать товар из Одессы или получать его через автобус с рынка 7-ой км.
			</p>
			<div class="plus">
				<h5> + Плюсы:</h5>
				<ul>
					<li>самый быстрый способ</li>
					<li>самый дешевый способ</li>
				</ul>
			</div>
			<div class="minus">
				<h5> + Минусы:</h5>
				<ul>
					<li>нет гарантий сохранности товара</li>
				</ul>
			</div>
			<div class="clear"></div>
		</div> -->
		<!-- modal-ukraine -->
		<h4>
			Украина:
		</h4>
		<div class="wrap">
			<div class="nova bg delivery-box ukraine-modal">
				<span>Новая почта</span>
			</div>
			<div class="intaim bg delivery-box ukraine-modal">
				<span>Интайм</span>
			</div>
			<div class="pickup bg delivery-box ukraine-modal">
				<span>Самовывоз</span>
			</div>
		</div>
	</div>
	<div class="delivery-another">
		<h4>
			Другие страны:
		</h4>
		<div class="wrap">
			<div class="express bg delivery-box delivery-box-country">
				<span>Экспресс доставка</span>
			</div>
			<div class="modal-country modal-express">
				<span class="close">&times;</span>
				<h3>ЭКСПРЕСС-ДОСТАВКА</h3>
				<p>
					Самый быстрый и надежный способ доставки
				</p>
				<p>
					Доставка в Россию осуществляется нашим курьером до города Белгород, далее груз передается на выбранную Вами транспортную компанию.
				</p>
				<table>
					<tr>
						<th>КОМПАНИЯ</th>
						<th>ВРЕМЯ ДОСТАВКИ</th> 
						<th>ОФИЦИАЛЬНЫЙ САЙТ</th>
					</tr>
					<tr>
						<td>ПЭК</td>
						<td>от 2-х дней</td> 
						<td>
							<a href="http://pecom.ru/ru">
								http://pecom.ru/ru					
							</a>
						</td>
					</tr>
					<tr>
						<td>Деловые линии</td>
						<td>от 2х дней</td> 
						<td>
							<a href="http://www.dellin.ru/">http://www.dellin.ru
							</a>
						</td>
					</tr>
					<tr>
						<td>КСЕ</td>
						<td>от 1-го дня</td> 
						<td>
							<a href="http://www.cse.ru/">http://www.cse.ru/
							</a>
						</td>
					</tr>
					<tr>
						<td>Байкал Сервис</td>
						<td>от 1-го дня</td> 
						<td>
							<a href="http://www.baikalsr.ru/">http://www.baikalsr.ru/
							</a>
						</td>
					</tr>
					<tr>
						<td>СДЕК АВИА</td>
						<td>от 1-го дня</td> 
						<td>
							<a href="http://www.edostavka.ru/">http://www.edostavka.ru/
							</a>
						</td>
					</tr>
					<tr>
						<td>ЖелДорЭкспедиция</td>
						<td>от 1-го дня</td> 
						<td>
							<a href="http://www.jde.ru/">http://www.jde.ru/
							</a>
						</td>
					</tr>
					<tr>
						<td>Почта России</td>
						<td>2 - 30 дней</td> 
						<td>
							<a href="http://www.russianpost.ru/">http://www.russianpost.ru/
							</a>
						</td>
					</tr>
				</table>
			</div>
			<!-- modal -->
			<div class="ems bg delivery-box delivery-box-country">
				<span>EMS</span>
			</div>
			<div class="modal-country">
				<span class="close">&times;</span>
				<h3>EMS</h3>
				<p>
					<a href="http://www.emsukraine.com.ua/">
						http://www.emsukraine.com.ua/
					</a>
					<br/>
				</p>
				<p>
					Сроки доставки - от 7 до 14 дней, в зависимости от скорости прохождения таможни. Стоимость доставки включена в счет. Доставка курьером до двери.
				</p>
				<p>
					Стоимость доставки 40 долларов за первый кг., и по 6 долларов за каждый последующий кг. Также к стоимости доставки EMS будет прибавлена сумма 3 доллара за упаковку посылки. Пользоваться услугами компании выгодно при отправке посылок 10-15 кг.
				</p>
			</div>
			<!-- modal -->
			<div class="dimex bg delivery-box delivery-box-country">
				<span>DIMEX</span>
			</div>
		</div>
		<div class="wrap">
			<div class="pochta bg delivery-box delivery-box-country">
				<span>Доставка почтой</span>
			</div>
			<div class="train bg delivery-box delivery-box-country">
				<span>Доставка поездом</span>
			</div>
			<div class="bus bg delivery-box delivery-box-country">
				<span>Доставка автобусом</span>
			</div>
		</div>
	</div>
</div>
<div class="return">
	<h3 class="payments-box-title">
		Условия по возврату и обмену
	</h3>
	<p>
		Мы лояльно относимся к решению о возврате товара. 
	</p>
	<p>
		Если при получении заказа Вы приняли решение вернуть товар или обменять его мы не требуем объяснения причин.
	</p>
	<p>
		ВНИМАНИЕ. НЕ ПОЛНЫЕ УПАКОВКИ ОБМЕНУ И ВОЗВРАТУ НЕ ПОДЛЕЖАТ.
	</p>
	<div class="return-box">
		<div class="return-icon">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</div>
		<p>
			Сообщите в смс сообщении на любой из номеров нашего сайта номер посылки с возвратом и фамилию отправителя.
		</p>
	</div>
	<div class="return-box return-box2">
		<div class="return-icon">
			<i class="fa fa-archive" aria-hidden="true"></i>
		</div>
		<p>
			Отправьте, пожалуйста, возврат в течении 14 дней после получения. Посылку оплачивает клиент.
		</p>
	</div>
	<div class="return-box return-box3">
		<div class="return-icon">
			<i class="fa fa-tags" aria-hidden="true"></i>
		</div>
		<p>
			Возврат полученных денег или обмен на другой товар производится только после получения нами вашего возврата.
		</p>
	</div>
</div>

<?php
include('parts/footer.php');
?>