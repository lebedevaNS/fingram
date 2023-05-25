<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style_auth.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <nav>
                <div class="glav">
                    <a href="index.php" class="gl">Главная</a>
                </div>
                <div class="prav">
                    <a href="courses.php" class="pr">Курсы</a>
                    <a href="#" class="pr">О важном</a>
                    <a href="auth.php" class="av">Авторизация</a>
                </div>
            </nav>
        </header>

		<div class="container">
			<form class="login">
				<div class="login_field">
					<input type="email" class="login_input" placeholder="Email">
				</div>
				<div class="login_field">
					<input type="password" class="login_input" placeholder="Пароль">
				</div>
				<button class="button login_submit">
					<span>Войти</span>					
				</button>				
			</form>
		</div>

        <footer>
			<div class="info_footer">
				<div class="row">
					<div class="footer-col">
						<h4>Контакты</h4>
						<ul>
							<li> 456618 Челябинская область, г. Копейск ул. Ленина, 40</li>
							<li>+7 (351) 393-6326</li>
							<li>kpk@kpk74.ru</li>
						</ul>
					</div>
					<div class="footer-col">
						<h4>Меню</h4>
						<ul>
							<li><a href="index.php" class="link_menu">Главная</a></li>
							<li><a href="courses.php" class="link_menu">Курсы</a></li>
							<li><a href="#" class="link_menu">О важном</a></li><br>
						</ul>
					</div>
					<div class="footer-col">
						<h4>Социальные сети</h4>
						<ul>
							<div class="foto_link">
								<img src="assets/images/logovk.png" style="margin-right: 20px;" width="50" height="50">
								<li><a href="https://vk.com/id139239759" style="margin-right: 20px;">Страница преподавателя Вконтакте</a></li>

								<img src="assets/images/college.png" style="margin-right: 20px;" class="logo_footer">
								<li><a href="https://vk.com/koppk174" style="margin-right: 20px;">Группа колледжа Вконтакте</a></li>

								<img src="assets/images/logo.png" style="margin-right: 20px;" class="logo_footer">
								<li><a href="https://www.kpk74.ru/ru/">Сайт колледжа</a></li>
							</div>
						</ul>
					</div>
				</div>
			</div>
		</footer>   	  	
    </body>
</html>