<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_ASSIGNED_TO_NAME' => 'Ответственный(ая)',
    'LBL_CONTRACT_ACCOUNT' => 'Контрагент',
    'LBL_OPPORTUNITY' => 'Сделка',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Дата создания',
    'LBL_DATE_MODIFIED' => 'Дата изменения',
    'LBL_MODIFIED' => 'Изменено',
    'LBL_MODIFIED_NAME' => 'Изменено (Имя)',
    'LBL_CREATED' => 'Создано',
    'LBL_DESCRIPTION' => 'Описание',
    'LBL_DELETED' => 'Удалён',
    'LBL_NAME' => 'Договор',
    'LBL_CREATED_USER' => 'Создано',
    'LBL_MODIFIED_USER' => 'Изменено',
    'LBL_LIST_NAME' => 'Название',
    'LBL_LIST_FORM_TITLE' => 'Список договоров',
    'LBL_MODULE_NAME' => 'Договоры',
    'LBL_MODULE_TITLE' => 'Договоры',
    'LBL_HOMEPAGE_TITLE' => 'Мои договоры',
    'LNK_NEW_RECORD' => 'Создать договор',
    'LNK_LIST' => 'Договоры',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск договоров',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Мероприятия',
    'LBL_NEW_FORM_TITLE' => 'Новый договор',
    'LBL_CONTRACT_NAME' => 'Название договора',
    'LBL_REFERENCE_CODE ' => '№ договора ',
    'LBL_START_DATE' => 'Дата начала',
    'LBL_END_DATE' => 'Дата окончания',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Сумма договора',
    'LBL_STATUS' => 'Статус',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Дата подписания клиентом',
    'LBL_COMPANY_SIGNED_DATE' => 'Дата подписания контрагентом',
    'LBL_RENEWAL_REMINDER_DATE' => 'Уведомление об окончании срока действия',
    'LBL_CONTRACT_TYPE' => 'Тип договора',
    'LBL_CONTACT' => 'Контакт',
    'LBL_ADD_GROUP' => 'Добавить группу',
    'LBL_DELETE_GROUP' => 'Удалить группу',
    'LBL_GROUP_NAME' => 'Группа',
    'LBL_GROUP_TOTAL' => 'ИТОГО С НДС',
    'LBL_PRODUCT_QUANITY' => 'Количество',
    'LBL_PRODUCT_NAME' => 'Товар',
    'LBL_PART_NUMBER' => 'Артикул',
    'LBL_PRODUCT_NOTE' => 'Заметка',
    'LBL_PRODUCT_DESCRIPTION' => 'Описание',
    'LBL_LIST_PRICE' => 'Цена по прайсу',
    'LBL_DISCOUNT_AMT' => 'Скидка',
    'LBL_UNIT_PRICE' => 'Цена за единицу',
    'LBL_TOTAL_PRICE' => 'Итого без НДС',
    'LBL_VAT' => 'НДС (%)',
    'LBL_VAT_AMT' => 'НДС',
    'LBL_SERVICE_NAME' => 'Услуги',
    'LBL_SERVICE_LIST_PRICE' => 'Стоимость по прайсу',
    'LBL_SERVICE_PRICE' => 'Конечная стоимость',
    'LBL_SERVICE_DISCOUNT' => 'Скидка',
    'LBL_LINE_ITEMS' => 'Позиции',
    'LBL_SUBTOTAL_AMOUNT' => 'Итого со скидкой',
    'LBL_DISCOUNT_AMOUNT' => 'Скидка',
    'LBL_TAX_AMOUNT' => 'Всего НДС',
    'LBL_SHIPPING_AMOUNT' => 'Доставка',
    'LBL_TOTAL_AMT' => 'Итого без скидки',
    'LBL_GRAND_TOTAL' => 'ВСЕГО К ОПЛАТЕ',
    'LBL_SHIPPING_TAX' => 'НДС доставки (%)',
    'LBL_SHIPPING_TAX_AMT' => 'НДС доставки',
    'LBL_ADD_PRODUCT_LINE' => 'Добавить товар',
    'LBL_ADD_SERVICE_LINE' => 'Добавить услугу ',
    'LBL_PRINT_AS_PDF' => 'Сохранить в PDF',
    'LBL_EMAIL_PDF' => 'Отправить по почте в виде PDF',
    'LBL_PDF_NAME' => 'Договор',
    'LBL_EMAIL_NAME' => 'Договор:',
    'LBL_NO_TEMPLATE' => 'ОШИБКА\nШаблоны договоров не обнаружены.\nЕсли необходимый шаблон договора отсутствует - откройте модуль PDF-шаблонов и создайте необходимый шаблон.',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Сумма договора (основная валюта)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Итого со скидкой (основная валюта)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Скидка (основная валюта)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Всего НДС (основная валюта)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Доставка (основная валюта)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Итого без скидки (основная валюта)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'НДС доставки (основная валюта)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'ВСЕГО К ОПЛАТЕ (основная валюта)',

    'LBL_CALL_ID' => 'Номер',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Группа позиций',
    'LBL_AOS_PRODUCT_QUOTES' => 'Предложение-Товары',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Предложения : Договоры',
);