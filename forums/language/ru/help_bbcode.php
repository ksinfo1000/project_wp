<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*/

/**
*/
if (!defined('IN_PHPBB'))
{
exit;
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$help = array(
array(
			0 => '--',
			1 => 'Вступление'
	),
array(
			0 => 'Что такое BBCode?',
			1 => 'BBCode — это специальная реализация языка HTML, предоставляющая более удобные возможности по форматированию сообщений. Возможность использования BBCode в сообщениях определяется администратором форума. Кроме этого, BBCode может быть отключен вами в любое время в любом размещаемом сообщении прямо из формы его написания. Сам BBCode по стилю очень похож на HTML, но теги в нем заключаются в квадратные скобки [ … ], а не в &lt; … &gt;. При использовании некоторых шаблонов вы сможете добавлять BBCode в сообщения, пользуясь простым интерфейсом, расположенным над полем для ввода текста. Но даже в этом случае чтение данного руководства может оказаться вам полезным.'
	),
array(
			0 => '--',
			1 => 'Форматирование текста'
	),
array(
			0 => 'Как сделать текст жирным, курсивным или подчеркнутым?',
			1 => 'BBCode включает теги для быстрого изменения стиля основного текста. Сделать это можно следующими способами: <ul><li>Чтобы сделать текст жирным, заключите его в теги <strong>[b][/b]</strong>. Пример: <br /><br /><strong>[b]</strong>Привет<strong>[/b]</strong><br /><br />выдаст <strong>Привет</strong></li><li>Для подчеркивания используйте теги <strong>[u][/u]</strong>. Пример:<br /><br /><strong>[u]</strong>Доброе утро<strong>[/u]</strong><br /><br />выдаст <span style="text-decoration: underline">Доброе утро</span></li><li>Курсив делается тегами <strong>[i][/i]</strong>. Пример:<br /><br />Это <strong>[i]</strong>здорово!<strong>[/i]</strong><br /><br />выдаст Это <i>здорово!</i></li></ul>'
	),
array(
			0 => 'Как изменить цвет или размер текста?',
			1 => 'Для изменения цвета или размера шрифта могут быть использованы следующие теги (окончательный вид будет зависеть от системы и браузера пользователя): <ul><li>Цвет текста можно изменить, окружив его тегами <strong>[color=][/color]</strong>. Вы можете указать либо известное имя цвета (red, blue, yellow и т.п.), либо его шестнадцатеричное представление (#FFFFFF, #000000 и т.п.). Таким образом, для создания красного текста вы можете использовать:<br /><br /><strong>[color=red]</strong>Привет!<strong>[/color]</strong><br /><br />или<br /><br /><strong>[color=#FF0000]</strong>Привет!<strong>[/color]</strong><br /><br />Оба способа дадут в результате <span style="color:red">Привет!</span></li><li>Изменение размера достигается аналогичным образом при использовании тега <strong>[size=][/size]</strong>. Этот тег зависит от используемых шаблонов, но рекомендуемым форматом является числовое значение, показывающее размер текста в процентах, начиная от 20 (очень маленький) до 200 (очень большой) от размера по умолчанию. Пример:<br /><br /><strong>[size=30]</strong>МЕЛКИЙ<strong>[/size]</strong><br /><br />скорее всего выдаст <span style="font-size:30%;">МЕЛКИЙ</span><br /><br />в то время как:<br /><br /><strong>[size=200]</strong>ОЧЕНЬ БОЛЬШОЙ!<strong>[/size]</strong><br /><br />выдаст <span style="font-size:200%;">ОЧЕНЬ  БОЛЬШОЙ!</span></li></ul>'
	),
array(
			0 => 'Можно ли комбинировать теги форматирования?',
			1 => 'Да, конечно можно. Например, для привлечения внимания вы можете написать:<br /><br /><strong>[size=200][color=red][b]</strong>ПОСМОТРИТЕ НА МЕНЯ!<strong>[/b][/color][/size]</strong><br /><br />что выдаст <span style="color:red;font-size:200%;"><strong>ПОСМОТРИТЕ НА МЕНЯ!</strong></span><br /><br />Мы не рекомендуем писать таким вот образом длинные тексты! Помните, что вы — автор сообщения и должны сами позаботиться о корректном закрытии и вложенности тегов. Например, следующая запись некорректна:<br /><br /><strong>[b][u]</strong>Такая запись некорректна<strong>[/b][/u]</strong>'
	),
array(
			0 => '--',
			1 => 'Цитирование и вывод форматированных текстов'
	),
array(
			0 => 'Цитирование текста в ответах',
			1 => 'Имеется два способа цитирования текстов: с указанием автора и без указания.<ul><li>При использовании кнопки «Цитата» для ответа на сообщение, текст сообщения добавляется в поле для ввода текста, окруженный тегами <strong>[quote=&quot;&quot;][/quote]</strong>. Этот метод позволяет цитировать со ссылкой на автора, либо на что-то еще, что вы впишете в кавычках. Например, для цитирования фрагмента текста, написанного автором Mr. Blobby, введите:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Сюда введите текст от Mr. Blobby<strong>[/quote]</strong><br /><br />В результате перед вашим ответом на сообщение будет вставлен текст «Mr. Blobby писал(а):». Помните, <strong>необходимо</strong> заключить имя в кавычки (&quot;&quot;), они не могут быть опущены.</li><li>Второй метод просто позволяет вам процитировать что-либо. Для этого поместите текст между тегами <strong>[quote][/quote]</strong>. При просмотре сообщения этот текст будет находиться в блоке цитирования.</li></ul>'
	),
array(
			0 => 'Вывод кода или форматированного текста',
			1 => 'Если вам надо вывести часть кода программы или еще что-нибудь, что должно быть отображено шрифтом фиксированной ширины (Courier), то заключите текст в теги <strong>[code][/code]</strong>. Пример:<br /><br /><strong>[code]</strong>echo &quot;Это код программы&quot;;<strong>[/code]</strong><br /><br />Все форматирование, используемое внутри тегов <strong>[code][/code]</strong>, будет сохранено. Подсветку синтаксиса кода PHP можно произвести с помощью тега <strong>[code=php][/code]</strong> и рекомендуется при размещении сообщений, содержащих фрагменты кодов PHP.'
	),
array(
			0 => '--',
			1 => 'Создание списков'
	),
array(
			0 => 'Создание маркированного списка',
			1 => 'BBCode поддерживает два вида списков: маркированные и нумерованные. Они практически идентичны своим эквивалентам из HTML. В маркированном списке все элементы выводятся последовательно, каждый отмечается символом-маркером. Для создания маркированного списка используйте теги <strong>[list][/list]</strong> и определяйте каждый элемент списка при помощи <strong>[*]</strong>. Например, для вывода своих любимых цветов вы можете использовать:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Красный<br /><strong>[*]</strong>Синий<br /><strong>[*]</strong>Желтый<br /><strong>[/list]</strong><br /><br />Это выдаст такой список:<ul><li>Красный</li><li>Синий</li><li>Желтый</li></ul>'
	),
array(
			0 => 'Создание нумерованного списка',
			1 => 'Второй тип списка — нумерованный, позволяет выбрать, что именно будет выводиться перед каждым элементом. Для создания нумерованного списка используйте теги <strong>[list=1][/list]</strong>, или <strong>[list=a][/list]</strong> для создания алфавитного списка. Как и в случае маркированного списка, элементы списка определяются с помощью <strong>[*]</strong>. Пример:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Пойти в магазин<br /><strong>[*]</strong>Купить новый компьютер<br /><strong>[*]</strong>Обругать компьютер, когда случится ошибка<br /><strong>[/list]</strong><br /><br />выдаст следующее:<ol style="list-style-type: arabic-numbers"><li>Пойти в магазин</li><li>Купить новый компьютер</li><li>Обругать компьютер, когда случится ошибка</li></ol>Для алфавитного списка используйте следующее:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Первый возможный ответ<br /><strong>[*]</strong>Второй возможный ответ<br /><strong>[*]</strong>Третий возможный ответ<br /><strong>[/list]</strong><br /><br />что выдаст<ol style="list-style-type: lower-alpha"><li>Первый возможный ответ</li><li>Второй возможный ответ</li><li>Третий возможный ответ</li></ol>'
	),
	// This block will switch the FAQ-Questions to the second template column
	array(
		0 => '--',
		1 => '--'
	),
array(
			0 => '--',
			1 => 'Создание ссылок'
	),
array(
			0 => 'Ссылки на другой сайт',
			1 => 'BBCode поддерживает несколько способов создания ссылок.<ul><li>Первый из них использует тег <strong>[url=][/url]</strong>, где после знака = должен идти нужный адрес URL. Например, для ссылки на phpBB.com можно использовать:<br /><br /><strong>[url=https://www.phpbb.com/]</strong>Посетите phpBB!<strong>[/url]</strong><br /><br />В результате будет создана следующая ссылка: <a href="https://www.phpbb.com/">Посетите phpBB!</a> Учтите, что ссылка откроется в том же или в новом окне, в зависимости от настроек браузера.</li><li>Если необходимо, чтобы в качестве текста ссылки был показан сам адрес URL, можно просто использовать:<br /><br /><strong>[url]</strong>https://www.phpbb.com/<strong>[/url]</strong><br /><br />В результате будет сгенерирована ссылка: <a href="https://www.phpbb.com/">https://www.phpbb.com/</a></li><li>Кроме того, phpBB поддерживает так называемые <i>Автоматические ссылки</i>, когда любой синтаксически правильный адрес URL преобразовывается в ссылку без необходимости использовать теги или префикс http://. Например, текст www.phpbb.com в сообщении будет автоматически преобразован в ссылку <a href="http://www.phpbb.com/">www.phpbb.com</a>.</li><li>То же самое относится и к адресам email. Можно указать адрес либо в явном виде:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />который будет преобразован в <a href="mailto:no.one@domain.adr">no.one@domain.adr</a>, либо просто ввести в сообщении текст no.one@domain.adr, который будет автоматически преобразован в адрес при просмотре.</li></ul>Как и с другими тегами BBCode, в теги ссылок можно заключать любые другие теги, например <strong>[img][/img]</strong> (см. следующий пункт), <strong>[b][/b]</strong> и т. д. По аналогии с тегами форматирования, правильный порядок их открывания и закрывания зависит от пользователя, например:<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/url][/img]</strong><br /><br /> <span style="text-decoration: underline">неверно</span>, что может привести к последующему удалению вашего сообщения, поэтому надо быть внимательным.'
	),
array(
			0 => '--',
			1 => 'Отображение рисунков в сообщениях'
	),
array(
			0 => 'Добавление изображения в сообщение',
			1 => 'BBCode включает тег для добавления картинки в ваше сообщение. При этом следует помнить две очень важные вещи: во-первых, многих пользователей раздражает большое количество изображений, во-вторых, ваше изображение уже должно быть размещено в интернете (т. е. оно не может быть расположено только на вашем компьютере, если, конечно, вы не запустили на нём веб-сервер!). На данный момент нет возможности хранить изображения локально на phpBB (ожидается, что это ограничение будет снято в следующей версии phpBB). Для вывода изображения вы должны окружить его URL тегами <strong>[img][/img]</strong>. Например:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Как указано в предыдущем пункте, вы можете заключить изображение в теги <strong>[url][/url]</strong>, то есть<br /><br /><strong>[url=https://www.phpbb.com/][img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img][/url]</strong><br /><br />выдаст:<br /><br /><a href="https://www.phpbb.com/"><img src="https://www.phpbb.com/theme/images/logos/blue/160x52.png" alt="" /></a>'
	),
array(
			0 => 'Добавление вложений в сообщение',
			1 => 'Теперь вложения могут быть отображены в любой части сообщения при помощи нового тега <strong>[attachment=][/attachment]</strong>, если вложения разрешены администратором, и если вы имеете необходимые права доступа. На странице размещения сообщения находится выпадающий список для размещения вложений в сообщении.'
	),
array(
			0 => '--',
			1 => 'Прочее'
	),
array(
			0 => 'Могу ли я добавить собственные теги?',
			1 => 'Если вы являетесь администратором этого форума имеете соответствующие права, то вы можете добавлять новые теги BBCode в администраторском разделе.'
	),
array(
			0 => 'Перевод руководства',
			1 => 'Адаптирован перевод руководства, выполненный <a href="http://www.teosofia.ru/phpbb3-documentation/" target="_blank">Kastaneda</a>'
),
);
