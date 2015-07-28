<?php

/*
 * Шаблон письма уведомление заказчику об отказе от заказа со стороны исполнителя. (УВ-8)
 * Так же используется при отправле ЛС поэтому все переводы каретки (\n) будут заменены <br/> при выводе сообщения и при отправке письма
 */

$smail->subject = "Отказ от выполнения заказа на типовую услугу «{$order['title']}»";

$title = reformat(htmlspecialchars($order['title']), 30, 0, 1);
$order_url = $GLOBALS['host'] . tservices_helper::getOrderCardUrl($order['id']);

?>
Здравствуйте.

Сожалеем, но исполнитель <?=$frl_fullname?> отказался от выполнения вашего заказа &laquo;<a href="<?=$order_url?>"><?=$title?></a>&raquo;. Поэтому он был автоматически отменен и закрыт.
Вы можете связаться с исполнителем и уточнить у него причину отказа, а также посмотреть и заказать аналогичные услуги у других исполнителей.

<a href="<?=$order_url?>">Связаться с исполнителем</a> / <a href="<?php echo "{$GLOBALS['host']}/tu/" ?>">Посмотреть и заказать другие услуги</a>

С уважением,
команда <a href="<?php echo "{$GLOBALS['host']}/{$params}"; ?>">FL.ru</a>