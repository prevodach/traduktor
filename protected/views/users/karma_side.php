<div class='tools'>
<h5>Карма</h5>
<p>
<?php if($dir != "out"): ?>
	Карма е сума от оценките на други преводачи, по която може да се определи харесва ли се <?=$user->login; ?> на останалите потребители в сайта.
	Хора с отрицателна карма не могат да оценяват варианти на превод и могат да бъдат ощетени откъм други права.
	Моля, имайте предвид, че опитите да „напомпате“ кармата си могат да доведат до блокировка на регистрацията ви и ще нанесат неизмиваемо позорно петно на репутацията ви.
<?php else: ?>
	А на тази страница виждаме какви оценки на други потребители е давал<?=$user->sexy() . " " . $user->login; ?>.
<?php endif; ?>
</p>
</div>

<div class='tools'>
	<h5>Направление</h5>
	<ul class='nav nav-pills'>
		<li <?=$dir != "out" ? "class='active'" : ""; ?>><a href='<?=$user->getUrl("karma"); ?>' title='Оценки, които други преводачи са дали на <?=$user->login; ?>'>за <?=$user->login; ?></a></li>
		<li <?=$dir == "out" ? "class='active'" : ""; ?>><a href='?dir=out' title='Оценки, които <?=$user->login; ?> е дал на други преводачи'>от <?=$user->login; ?></a></li>
	</ul>
</div>
