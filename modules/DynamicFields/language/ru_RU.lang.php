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
    'LNK_NEW_CALL' => 'Назначить звонок',
    'LNK_NEW_MEETING' => 'Назначить встречу',
    'LNK_NEW_TASK' => 'Создать задачу',
    'LNK_NEW_NOTE' => 'Создать заметку или вложение',
    'LNK_NEW_EMAIL' => 'Отправить E-mail в архив',
    'LNK_CALL_LIST' => 'Звонки',
    'LNK_MEETING_LIST' => 'Встречи',
    'LNK_TASK_LIST' => 'Задачи',
    'LNK_NOTE_LIST' => 'Заметки',
    'LBL_ADD_FIELD' => 'Добавить поле:',
    'LBL_SEARCH_FORM_TITLE' => 'Поиск модуля',
    'COLUMN_TITLE_NAME' => 'Название поля',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Отображаемая надпись',
    'COLUMN_TITLE_LABEL_VALUE' => 'Отображаемая надпись',
    'COLUMN_TITLE_LABEL' => 'Системная надпись',
    'COLUMN_TITLE_DATA_TYPE' => 'Тип данных',
    'COLUMN_TITLE_MAX_SIZE' => 'Максимальный размер',
    'COLUMN_TITLE_HELP_TEXT' => 'Справка',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Комментарий',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Обязательное поле',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Значение по умолчанию',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'Высота фрейма',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'URL по умолчанию',
    'COLUMN_TITLE_AUDIT' => 'Аудит',
    'COLUMN_TITLE_MIN_VALUE' => 'Минимальное значение',
    'COLUMN_TITLE_MAX_VALUE' => 'Максимальное значение',
    'COLUMN_TITLE_LABEL_ROWS' => 'Строк',
    'COLUMN_TITLE_LABEL_COLS' => 'Символов в строке',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# элементов отображено',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Начать автонумерацию с',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Не использовать разделитель',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Поиск в диапазоне значений',
    'LBL_DROP_DOWN_LIST' => 'Комбобокс',
    'LBL_RADIO_FIELDS' => 'Переключатели',
    'LBL_MULTI_SELECT_LIST' => 'Список',
    'COLUMN_TITLE_PRECISION' => 'Точность',
    'LBL_MODULE' => 'Модуль',
    'COLUMN_TITLE_MASS_UPDATE' => 'Массовое обновление',
    'COLUMN_TITLE_IMPORTABLE' => 'Импортирование',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Объединение дубликатов',
    'LBL_LABEL' => 'Надпись',
    'LBL_DATA_TYPE' => 'Тип данных',
    'LBL_DEFAULT_VALUE' => 'Значение по умолчанию',
    'ERR_RESERVED_FIELD_NAME' => "Название зарезервировано",
    'ERR_SELECT_FIELD_TYPE' => 'Укажите тип поля',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Поле с таким названием уже существует',
    'LBL_BTN_ADD' => 'Добавить',
    'LBL_BTN_EDIT' => 'Изменить',
    'LBL_GENERATE_URL' => 'Создать URL',
    'LBL_CALCULATED' => 'Вычисляемое значение',
    'LBL_LINK_TARGET' => 'Открыть ссылку на',
    'LBL_IMAGE_WIDTH' => 'Ширина',
    'LBL_IMAGE_HEIGHT' => 'Высота',
    'LBL_IMAGE_BORDER' => 'Граница',
    'LBL_HELP' => 'Справка' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Быстрая правка',
    'COLUMN_TITLE_PARENT_ENUM' => 'Родительский комбобокс',
);