<h2 class="b-layout__title b-layout__title_padtop_50"><a class="b-layout__link b-layout__link_bordbot_dot_0f71c8" href="javascript:void(0)" onclick="toggleServices('sbr', this)">Работа без риска</a></h2>
<div class="b-layout__txt b-layout__txt_fontsize_11 services-sbr-default">Наш сервис «Безопасная Сделка» защитит вас от безответственных исполнителей и поможет вести бизнес легально и открыто. Используя «Безопасную Сделку», вы сведете до минимума все возможные риски, которые могут возникнуть в процессе сотрудничества с фрилансером.</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout__txt_relative b-layout_hide services-sbr"><span class="b-icon b-icon_absolute b-icon_left_-140 b-icon_big_sbr"></span>«Безопасная Сделка» &ndash; это сервис, который позволяет снизить все риски, возникающие в процессе сотрудничества фрилансеров и работодателей, до минимума. Воспользовавшись «Безопасной Сделкой», работодатель может быть уверен в том, что его задание будет выполнено согласно установленным требованиям и в срок, а фрилансеру гарантирована оплата в полном объеме в том случае, если он вовремя предоставит заказчику выполненный проект.</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout_hide services-sbr">Безопасность сотрудничеству обеспечивает официальное документальное сопровождение &ndash; в полном соответствии с законодательством заключаются договора и предоставляются все необходимые «закрывающие» документы:</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout_hide services-sbr">&mdash; оферта на заключение договора об использовании «Безопасной Сделки»;</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout_hide services-sbr">&mdash; агентский договор или договор подряда;</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout_hide services-sbr">&mdash; акт и счет-фактура по договору.</div>
<div class="b-layout__txt b-layout_hide services-sbr"><a class="b-layout__link" href="/promo/sbr/" target="_blank">Подробнее о &laquo;Безопасной Сделке&raquo;</a></div>

<input type="hidden" name="pro-emp" value="<?= $pro_emp ? $pro_emp : "0" ?>" id="pro-emp"> 
<h2 class="b-layout__title b-layout__title_padtop_50"><a class="b-layout__link <?= $pro_emp == 1 ? "b-layout__link_bordbot_dot_000" : "b-layout__link_bordbot_dot_0f71c8" ?>" href="javascript:void(0)" onclick="toggleServices('pro', this); if($(this).hasClass('b-layout__link_bordbot_dot_0f71c8')) { $('pro-emp').set('value', 0); } else { $('pro-emp').set('value', 1); }">Профессиональный аккаунт</a></h2>
<div class="b-layout__txt b-layout__txt_fontsize_11 services-pro-default <?= $pro_emp == 1 ? "b-layout_hide" : "" ?>">Повышает доверие к вам со стороны профессиональных фрилансеров. С аккаунтом <a href="/payed-emp/" target="_blank"><span class="b-icon b-icon_main_epro" title="PRO"></span></a> вы сможете добавить логотип своей компании, все ваши проекты будут автоматически выделяться цветом, а также вы получите еще больше бонусов и преимуществ на сайте.</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout__txt_relative <?= $pro_emp == 0 ? "b-layout_hide" : "" ?> services-pro"><span class="b-icon b-icon_absolute b-icon_left_-140 b-icon_big_epro"></span>Профессиональные исполнители предпочитают работать с владельцами аккаунта  <a href="/payed-emp/" target="_blank"><span class="b-icon b-icon_main_epro" title="PRO"></span></a>.</div>
<div class="b-layout__txt b-layout__txt_padbot_10 <?= $pro_emp == 0 ? "b-layout_hide" : "" ?> services-pro">Вот некоторые преимущества профессионального аккаунта:</div>
<div class="b-layout__txt b-layout__txt_padbot_10 <?= $pro_emp == 0 ? "b-layout_hide" : "" ?> services-pro">&mdash; бесплатное выделение цветом всех ваших проектов;</div>
<div class="b-layout__txt b-layout__txt_padbot_10 <?= $pro_emp == 0 ? "b-layout_hide" : "" ?> services-pro">&mdash; возможность добавить логотип вашей компании;</div>
<div class="b-layout__txt b-layout__txt_padbot_10 <?= $pro_emp == 0 ? "b-layout_hide" : "" ?> services-pro">&mdash; возможность указать о себе дополнительную информацию в личном кабинете.</div>
<div class="b-layout__txt b-layout__txt_padbot_10 <?= $pro_emp == 0 ? "b-layout_hide" : "" ?> services-pro">Приобрести аккаунт <a href="/payed-emp/" target="_blank"><span class="b-icon b-icon_main_epro" title="PRO"></span></a>    на  
    <div class="b-combo b-combo_inline-block b-combo_margtop_-5">
        <div class="b-combo__input b-combo__input_width_25">
            <input type="text" class="b-combo__input-text b-combo__input-text_fontsize_15" name="week_pro" size="80" maxlength="3" value="<?= $week_pro ? $week_pro : 1 ?>" onkeyup="calcPRO(300, this.value)" >
        </div>
    </div>
    <span id="count_pro_name">месяц</span> за <span class="b-layout__txt b-layout__txt_color_fd6c30 b-layout__txt_bold"><span id="amount_price_pro">300</span> руб.</span> </div>
<div class="b-layout__txt b-layout_hide services-pro"><a class="b-layout__link" href="/payed-emp/" target="_blank">Подробнее о профессиональном аккаунте</a></div>

<h2 class="b-layout__title b-layout__title_padtop_50"><a class="b-layout__link b-layout__link_bordbot_dot_0f71c8" href="javascript:void(0)" onclick="toggleServices('catalog', this)">Каталог фрилансеров</a></h2>
<div class="b-layout__txt b-layout__txt_fontsize_11 services-catalog-default">Когда вам нужно быстро найти исполнителя, можно обратиться к каталогу фрилансеров. В каталоге вы найдете всю необходимую информацию о пользователе &ndash; отзывы о нем от фрилансеров и работодателей, примеры работ, стоимость услуг. Для вашего удобства каталог разбит на разделы, в нем работает фильтр для точного поиска.  </div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout__txt_relative b-layout_hide services-catalog"><span class="b-icon b-icon_absolute b-icon_left_-140 b-icon_big_cat"></span>На нашем сайте есть огромный каталог фрилансеров, в котором вы найдете нужного вам исполнителя. В каталоге вы найдете всю необходимую информацию о пользователе — отзывы о нем от других пользователей, его работы и стоимость.</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout_hide services-catalog">Для удобства использования в каталоге есть разделы и фильтр для тонкого поиска.</div>
<div class="b-layout__txt b-layout_hide services-catalog"><a class="b-layout__link" href="/masssending/" target="_blank">Подробнее о каталоге фрилансеров</a></div>

<h2 class="b-layout__title b-layout__title_padtop_50"><a class="b-layout__link b-layout__link_bordbot_dot_0f71c8" href="javascript:void(0)" onclick="toggleServices('blog', this)">Блоги и сообщества</a></h2>
<div class="b-layout__txt b-layout__txt_fontsize_11 services-blog-default">У нас одно из крупнейших сообществ фрилансеров и работодателей в Рунете. Каждый день в «Блогах» публикуются сотни сообщений на самые различные темы. Вы можете задать любой вопрос пользователям нашего сайта.</div>
<div class="b-layout__txt b-layout__txt_padtop_10 b-layout__txt_fontsize_11 services-blog-default">Также у нас есть сообщества &ndash; это группы пользователей по интересам. Выбирайте понравившиеся вам сообщества, вступайте, общайтесь и ищите единомышленников.</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout__txt_relative b-layout_hide services-blog"><span class="b-icon b-icon_absolute b-icon_left_-140 b-icon_big_blog"></span>На нашем сайте одно из крупнейших сообществ фрилансеров и заказчиков. Каждый день публикуется около 1000 новых постов, каждый пост в среднем комментирует 10 человек.</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout_hide services-blog">Пользователи общаются на различные темы, как профессиональные, так и общечеловеческие: <?php foreach($themes_blogs as $key=>$theme) { ?> <a class="b-layout__link" href="/blogs/<?=$theme['link']?>/" target="_blank"><?= ($theme['t_name'])?></a><?= ($key+1 != count($themes_blogs)) ? ",":""?><?php }//foreach?> и другие.</div>
<div class="b-layout__txt b-layout__txt_padbot_10 b-layout_hide services-blog">Кроме блогов есть сообщества &ndash; это группы пользователей по интересам. Есть множество интересных сообществ в которых вы найдете единомышленников: <?php foreach($themes_commune as $key=>$ctheme) { ?> <a class="b-layout__link" href="<?= getFriendlyURL('commune_commune', $ctheme['id']) ?>" target="_blank"><?= ($ctheme['name'])?></a><?= ($key+1 != count($themes_commune)) ? ",":""?><?php }//foreach?> и многие другие.</div>