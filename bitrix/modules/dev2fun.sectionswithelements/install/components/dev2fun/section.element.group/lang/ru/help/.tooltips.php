<?
$MESS["IBLOCK_TYPE_TIP"] = "Из выпадающего списка можно выбрать один из созданных в системе типов инфоблоков. Инфоблоки, созданные для выбранного типа, будут подгружены после нажатия кнопки <b><i>ок</i></b>. Тип здесь можно не выбирать.";
$MESS["IBLOCK_ID_TIP"] = "В списке представлены все инфоблоки, созданные для установленного типа либо все инфоблоки системы, если тип не выбран. Можно выбрать один из инфоблоков либо пункт <i>другое</i>, тогда в поле рядом необходимо указать код инфоблока, например, ={\$_REQUEST[\"IBLOCK_ID\"]}.";
$MESS["NEWS_COUNT_TIP"] = "Указывается количество элементов, которые будут выведены на одной странице.";
$MESS["SORT_BY1_TIP"] = "В списке перечислены поля, по которым может проводиться сортировка новостей. Также можно выбрать пункт <i>другое</i> и задать в поле рядом код нужного поля.";
$MESS["SORT_ORDER1_TIP"] = "По возрастанию либо по убыванию.";
$MESS["SORT_BY2_TIP"] = "В списке перечислены поля, по которым может проводиться вторая сортировка новостей в случае совпадения значений полей первой сортировки. Также можно выбрать пункт <i>другое</i> и задать в поле рядом код нужного поля.";
$MESS["SORT_ORDER2_TIP"] = "По возрастанию либо по убыванию.";
$MESS["FILTER_NAME_TIP"] = "Задается имя переменной, в которой передается массив параметров из фильтра. Служит для определения выходящих из фильтра элементов. Поле может быть оставлено пустым, тогда используется значение по умолчанию.";
$MESS["FIELD_CODE_TIP"] = "В данном поле можно выбрать поля элементов инфоблока, по которым будет возможна фильтрация. Также можно добавить другие поля в виде символьного кода (в полях ниже).";
$MESS["PROPERTY_CODE_TIP"] = "Перечислены свойства элементов инфоблока, среди которых можно выбрать те, по которым будет возможна фильтрация. Также можно добавить другие поля в виде символьного кода (в полях ниже).";
$MESS["DETAIL_URL_TIP"] = "Указывается шаблон ссылки на страницу детального просмотра. Например, news_detail.php?ID=#ELEMENT_ID#";
$MESS["PREVIEW_TRUNCATE_LEN_TIP"] = "Если тип анонса у элемента инфоблока - текст, то можно указать максимальную длину, после которой анонс будет отсечен.";
$MESS["ACTIVE_DATE_FORMAT_TIP"] = "В списке перечислены все возможные варианты показа даты, формируемые внутри компонента. Выбрав пункт <i>другое</i>, можно сформировать свой вариант на основании php-функции <i>date</i>.";
$MESS["DISPLAY_PANEL_TIP"] = "При установленной опции кнопки будут отображены в режиме редактирования сайта на административной панели и в наборе кнопок области редактирования компонента.";
$MESS["SET_TITLE_TIP"] = "При установленной опции в качестве заголовка страницы будет установлено имя текущего инфоблока.";
$MESS["INCLUDE_IBLOCK_INTO_CHAIN_TIP"] = "При установленной опции в цепочку навигации будет добавлено имя инфоблока. ";
$MESS["ADD_SECTIONS_CHAIN_TIP"] = "Если опция установлена и в инфоблоке созданы разделы, то при переходе по разделам их названия будут добавлены в цепочку навигации.";
$MESS["HIDE_LINK_WHEN_NO_DETAIL_TIP"] = "Опция позволяет скрыть ссылку, если нет детальной информации по элементу или у пользователя нет прав на ее просмотр.";
$MESS["PARENT_SECTION_TIP"] = "В данном поле можно указать ID \"родительского\" раздела, чтобы ограничить выборку элементов по нему.";
$MESS["RETURN_SECTION_TIP"] = "В данном поле можно указать уровень \"родительского\" раздела, чтобы вывести информацию о нём в массиве ITEM. При значении \"другое\" необходимо указать уровень вложенности (DEPTH_LEVEL)";
$MESS["CACHE_TYPE_TIP"] = "<i>Авто</i>: действует при включенном кешировании в течение заданного времени;<br /><i>Кешировать</i>: для кеширования необходимо определить только время кеширования;<br /><i>Не кешировать</i>: кеширования нет в любом случае.";
$MESS["CACHE_TIME_TIP"] = "Поле служит для указания времени кеширования в секундах.";
$MESS["CACHE_FILTER_TIP"] = "При установленной опции каждый результат, полученный из фильтра будет кешироваться. Имеет смысл отмечать, если многие пользователи используют одну и ту же выборку из фильтра.";
$MESS["DISPLAY_TOP_PAGER_TIP"] = "При отмеченной опции навигация по элементам будет выведена вверху страницы, над списком.";
$MESS["DISPLAY_BOTTOM_PAGER_TIP"] = "При отмеченной опции навигация по элементам будет выведена внизу страницы, под списком.";
$MESS["PAGER_TITLE_TIP"] = "В данном поле указывается название категорий, по которым происходит перемещение по списку (например, новости, статьи и др.)";
$MESS["PAGER_SHOW_ALWAYS_TIP"] = "Если флаг не отмечен, постраничная навигация не будет выводиться, если все элементы помещаются на одной странице. Если отмечен, то будет выводиться всегда.";
$MESS["PAGER_TEMPLATE_TIP"] = "Указывается имя шаблона постраничной навигации. Если поле пусто, то выбирается шаблон по умолчанию (<i>.default</i>). Также в системе задан шаблон <i>orange</i>.";
$MESS["PAGER_DESC_NUMBERING_TIP"] = "Механизм используют, если при добавлении элемента инфоблока он попадает наверх списка. Таким образом меняется лишь последняя страница. Все предыдущие можно надолго закешировать.";
$MESS["PAGER_DESC_NUMBERING_CACHE_TIME_TIP"] = "Указывается время кеширования страниц для обратной навигации в секундах.";
$MESS["AJAX_MODE_TIP"] = "Включение для компонента режима AJAX.";
$MESS["AJAX_OPTION_SHADOW_TIP"] = "При выполнении перехода будет затенена область, которая должна измениться.";
$MESS["AJAX_OPTION_JUMP_TIP"] = "Если пользователь совершит AJAX-переход, то по окончании загрузки произойдет прокрутка к началу компонента.";
$MESS["AJAX_OPTION_STYLE_TIP"] = "При совершении AJAX-переходов будет происходить подгрузка и обработка списка стилей, вызванных компонентом.";
$MESS["AJAX_OPTION_HISTORY_TIP"] = "Когда пользователь выполняет AJAX-переходы, то при включенной опции можно использовать кнопки браузера \"Назад\" и \"Вперед\".";
$MESS["CHECK_DATES_TIP"] = "Опция служит для показа только активных элементов инфоблока.";
$MESS["SET_BROWSER_TITLE_TIP"] = "При установленной опции в качестве заголовка окна браузера будет установлено название элемента или SEO названия элемента (если используется SEO)";
?>