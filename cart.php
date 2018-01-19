<?php
	include('parts/header.php');
?>
<div class="margin"></div>
<h2 class="title-cart">Оформление заказа</h2>
<div class="wrap-cart">
	<div class="info">
		<h3>
			Контактная информация
		</h3>
		<form action="#" autocomplete="on" method="post">
			<ul>
				<li>
					<label> Страна </label>
					<select name="country" class="info-country">
						<option disabled selected>Выберите страну</option>
						<option value="ua">Украина</option>
						<option value="ru">Росиия</option>
					</select>
				</li>
				<li>
					<label> Город </label>
					<input class="town" name="town" type="text">
				</li>
				<li>
					<label alt="Обязательное поле для заполнения"> ФИО <span> *</span></label>

					<input class="info-name" name="info-name" type="text" required>
				</li>
				<li>
					<label> Телефон <span> *</span></label>
					<input class="phone-info" name="phone-info" placeholder="+38 ( _ _ _ ) _  _  _  _  _  _  _" type="number" required>
				</li>
			</ul>
			<div class="cart-payment">
				<h3>
					Выберите способ оплаты:
				</h3>
				<input  class="radio" name="payment" type="radio" id="privat-radio">
				<label for="privat-radio"> Карта Приват Банка </label>
				<input  class="radio" name="payment" type="radio" id="imposed-radio">
				<label for="imposed-radio"> Наложенный платеж </label>
				<input  class="radio" name="payment" type="radio" id="pickup-radio">
				<label for="pickup-radio"> Самовывоз (наличные) </label>
			</div>
			<div class="cart-delivery">
				<h3>
					Выберите способ доставки:
				</h3>
				<input  class="radio" name="delivery" type="radio" id="delivery-pickup-radio">
				<label for="delivery-pickup-radio"> Самовывоз (Одесса, 7 км) </label>
				<input  class="radio" name="delivery" type="radio" id="delivery-nova-radio">
				<label for="delivery-nova-radio"> Новая почта </label>
				<input  class="radio" name="delivery" type="radio" id="delivery-intaim-radio">
				<label for="delivery-intaim-radio"> Интайм </label>
			</div>
			<p>Комментарий к заказу:</p>
			<textarea name="text-area" class="text-area" placeholder="Здесь вы можете написать комментарий или уточнение по поводу заказа..."></textarea>
			<div class="product-number info-number">
				<p>После оформления заказа с вами обязательно свяжется менеджер для уточнения подробностей и только после этого заказ будет сформирован !</p>
			</div>
			<input class="cart-submit" type="submit" value="Оформить заказ">
		</form>
	</div>
	<div class="order-contents">
		<h3>
			Содержимое заказа
		</h3>
		<table>
			<tr>
				<th>Наименование товара</th>
				<th>Цена за шт.</th> 
				<th>Кол-во</th>
				<th>Общая стоимость</th>
			</tr>
			<tr>
				<td>
					<div class="cart-product-info">
						<img src="img/tovar2.jpg" alt="%name%">
						<div>
							<a href="#" class="cart-product-company">Dicesil</a>
							<br>
							<a href="#" class="cart-product-title">
								5155 Dicesil (25-30, 7 ед.) джинсы женские весенние стрейчевые
							</a>
							<p class="cart-product-code"><span># </span> 76548 </p>
						</div>
					</div>
				</td>
				<td class="font-politica">15.5<span> $</span></td> 
				<td class="cart-quantity">
					<span>
						<i class="fa fa-minus-circle" aria-hidden="true"></i>
					</span>
					<p>7</p>
					<span>
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
					</span>
				</td>
				<td class="font-politica">129 <span> $</span></td>
			</tr>
			<tr>
				<td>
					<div class="cart-product-info">
						<img src="img/tovar2.jpg" alt="%name%">
						<div>
							<a href="#" class="cart-product-company">Dicesil</a>
							<br>
							<a href="#" class="cart-product-title">
								5155 Dicesil (25-30, 7 ед.) джинсы женские весенние стрейчевые
							</a>
							<p class="cart-product-code"><span># </span> 76548 </p>
						</div>
					</div>
				</td>
				<td class="font-politica">8.00<span> $</span></td> 
				<td class="cart-quantity">
					<span>
						<i class="fa fa-minus-circle" aria-hidden="true"></i>
					</span>
					<p>6</p>
					<span>
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
					</span>
				</td>
				<td class="font-politica">274 <span> $</span></td>
			</tr>
			<tr>
				<td>
					<div class="cart-product-info">
						<img src="img/tovar2.jpg" alt="%name%">
						<div>
							<a href="#" class="cart-product-company">Dicesil</a>
							<br>
							<a href="#" class="cart-product-title">
								5155 Dicesil (25-30, 7 ед.) джинсы женские весенние стрейчевые
							</a>
							<p class="cart-product-code"><span># </span> 76548 </p>
						</div>
					</div>
				</td>
				<td class="font-politica">8.00<span> $</span></td> 
				<td class="cart-quantity">
					<span>
						<i class="fa fa-minus-circle" aria-hidden="true"></i>
					</span>
					<p>6</p>
					<span>
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
					</span>
				</td>
				<td class="font-politica">274 <span> $</span></td>
			</tr>
			<tr>
				<td>
					<div class="cart-product-info">
						<img src="img/tovar2.jpg" alt="%name%">
						<div>
							<a href="#" class="cart-product-company">Dicesil</a>
							<br>
							<a href="#" class="cart-product-title">
								5155 Dicesil (25-30, 7 ед.) джинсы женские весенние стрейчевые
							</a>
							<p class="cart-product-code"><span># </span> 76548 </p>
						</div>
					</div>
				</td>
				<td class="font-politica">8.00<span> $</span></td> 
				<td class="cart-quantity">
					<span>
						<i class="fa fa-minus-circle" aria-hidden="true"></i>
					</span>
					<p>6</p>
					<span>
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
					</span>
				</td>
				<td class="font-politica">274 <span> $</span></td>
			</tr>
			<tr>
				<td>
					<div class="cart-product-info">
						<img src="img/tovar2.jpg" alt="%name%">
						<div>
							<a href="#" class="cart-product-company">Dicesil</a>
							<br>
							<a href="#" class="cart-product-title">
								5155 Dicesil (25-30, 7 ед.) джинсы женские весенние стрейчевые
							</a>
							<p class="cart-product-code"><span># </span> 76548 </p>
						</div>
					</div>
				</td>
				<td class="font-politica">12.00<span> $</span></td> 
				<td class="cart-quantity">
					<span>
						<i class="fa fa-minus-circle" aria-hidden="true"></i>
					</span>
					<p>10</p>
					<span>
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
					</span>
				</td>
				<td class="font-politica">156 <span> $</span></td>
			</tr>
			<tr>
				<td>
					<div class="cart-product-info">
						<img src="img/tovar2.jpg" alt="%name%">
						<div>
							<a href="#" class="cart-product-company">Dicesil</a>
							<br>
							<a href="#" class="cart-product-title">
								5155 Dicesil (25-30, 7 ед.) джинсы женские весенние стрейчевые
							</a>
							<p class="cart-product-code"><span># </span> 76548 </p>
						</div>
					</div>
				</td>
				<td class="font-politica">8.00<span> $</span></td> 
				<td class="cart-quantity">
					<span>
						<i class="fa fa-minus-circle" aria-hidden="true"></i>
					</span>
					<p>6</p>
					<span>
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
					</span>
				</td>
				<td class="font-politica">274 <span> $</span></td>
			</tr>
			<tr>
				<td>
					<div class="cart-product-info">
						<img src="img/tovar2.jpg" alt="%name%">
						<div>
							<a href="#" class="cart-product-company">Dicesil</a>
							<br>
							<a href="#" class="cart-product-title">
								5155 Dicesil (25-30, 7 ед.) джинсы женские весенние стрейчевые
							</a>
							<p class="cart-product-code"><span># </span> 76548 </p>
						</div>
					</div>
				</td>
				<td class="font-politica">8.00<span> $</span></td> 
				<td class="cart-quantity">
					<span>
						<i class="fa fa-minus-circle" aria-hidden="true"></i>
					</span>
					<p>6</p>
					<span>
						<i class="fa fa-plus-circle" aria-hidden="true"></i>
					</span>
				</td>
				<td class="font-politica">274 <span> $</span></td>
			</tr>
		</table>
		<div class="total">
			<h4>
				Итого к оплате  <span>1567.3</span>$
			</h4>
		</div>
	</div>
</div>
<?php
	include('parts/footer.php');
?>