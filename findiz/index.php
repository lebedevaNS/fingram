<?php
include 'assets/php/quote.php';
include 'assets/php/author.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
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
            <div class="contleft">
                <div class="blockleft">
                <div class="box">
                    <i class="fas fa-quote-left fa2"></i>
                    <div class="text"><i class="fas fa-quote-right fa1"></i>
                        <div>
                            <h4 style="font-size: 18px;">Цитата дня от <?php echo $y;?></h4>
                            <p style="font-size: 18px;">
                                <?php echo $c;?>
                            </p>
                        </div>
                    </div>
                </div>
                    <img src="assets/images/person.jpg" class="foto_person" width="520" height="570">
                </div>
            </div>
            <div class="contrigh">
                <div class="blockrigh_top">
                    <p class="blockrigh_top_p">
                        Преподаватель: Чулкова Оксана Юрьевна<br>
                        Электронная почта: *****@mail.ru<br>
                        Номер телефона: +7(***)-***-**
                    </p>
                </div>
                <div class="blockrigh_bott">
                    <div class="blockrigh_bott_1">
                        <p>
                            Уровень образования: Высшее образование "Уральский государственный экономический университет", 2014 год<br><br>
                            Квалификация: Бакалавр
                        </p>
                    </div>
                    <div class="blockrigh_bott_2">
                        <p>
                            ГБПОУ "Копейский политехнический колледж им. С.В. Хохрякова"<br>Образовательный комплекс №1 (г. Копейск, ул. Ленина 40)<br>
                        </p>
                    </div>
                </div>
            </div>
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