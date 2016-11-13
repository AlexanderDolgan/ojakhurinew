<?php

//link styles
function theme_styles() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

//link scripts
function theme_js() {
	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', '', '', true );
}

add_action( 'wp_enqueue_scripts', 'theme_js' );



//add theme support
add_theme_support( 'post-thumbnails' );

// Navigation Menus
function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' )
		)
	);
}

add_action( 'init', 'register_theme_menus' );




//Add custom page post_type

if ( ! function_exists( 'structure_page_cp' ) ) {

// Опишем требуемый функционал
	function structure_page_cp() {

		$labels = array(
			'name'                => _x( 'Структура', 'Post Type General Name', 'structure_page' ),
			'singular_name'       => _x( 'Структура', 'Post Type Singular Name', 'structure_page' ),
			'menu_name'           => __( 'Структура', 'structure_page' ),
			'parent_item_colon'   => __( 'Родительский:', 'structure_page' ),
			'all_items'           => __( 'Все записи', 'structure_page' ),
			'view_item'           => __( 'Просмотреть', 'structure_page' ),
			'add_new_item'        => __( 'Добавить новую запись', 'structure_page' ),
			'add_new'             => __( 'Добавить новую', 'structure_page' ),
			'edit_item'           => __( 'Редактировать запись', 'structure_page' ),
			'update_item'         => __( 'Обновить запись', 'structure_page' ),
			'search_items'        => __( 'Найти запись', 'structure_page' ),
			'featured_image'      => __( 'Изображение', 'structure_page' ),
			'not_found'           => __( 'Не найдено', 'structure_page' ),
			'not_found_in_trash'  => __( 'Не найдено в корзине', 'structure_page' ),
		);
		$args = array(
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'excerpt', ),
			'taxonomies'          => array( 'structure_page_tax' ), // категории, которые мы создадим ниже
			'public'              => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-book',
		);
		register_post_type( 'structure_page', $args );

	}

	add_action( 'init', 'structure_page_cp', 0 ); // инициализируем

	//добавить категории для post_type

	if ( ! function_exists( 'structure_page_tax' ) ) {

// Опишем требуемый функционал
		function structure_page_tax() {

			$labels = array(
				'name'                       => _x( 'Категории Структура', 'Taxonomy General Name', 'structure_page' ),
				'singular_name'              => _x( 'Категории Структура', 'Taxonomy Singular Name', 'structure_page' ),
				'menu_name'                  => __( 'Категории Структура', 'structure_page' ),
				'all_items'                  => __( 'Категории Структура', 'structure_page' ),
				'parent_item'                => __( 'Родительская категория Структура', 'structure_page' ),
				'parent_item_colon'          => __( 'Родительская категория Структура:', 'structure_page' ),
				'new_item_name'              => __( 'Новая категория', 'structure_page' ),
				'add_new_item'               => __( 'Добавить новую категорию', 'structure_page' ),
				'edit_item'                  => __( 'Редактировать категорию', 'structure_page' ),
				'update_item'                => __( 'Обновить категорию', 'structure_page' ),
				'search_items'               => __( 'Найти', 'structure_page' ),
				'add_or_remove_items'        => __( 'Добавить или удалить категорию', 'structure_page' ),
				'choose_from_most_used'      => __( 'Поиск среди популярных', 'structure_page' ),
				'not_found'                  => __( 'Не найдено', 'structure_page' ),
			);
			$args = array(
				'labels'                     => $labels,
				'hierarchical'               => true,
				'public'                     => true,
			);
			register_taxonomy( 'structure_page_tax', array( 'structure_page' ), $args );

		}

		add_action( 'init', 'structure_page_tax', 0 ); // инициализируем

	}
}

//добавить новые поля для post_type - структура

function my_meta_box() {
	add_meta_box(
		'my_meta_box', // Идентификатор(id)
		'Дополнительные поля', // Заголовок области с мета-полями(title)
		'show_my_metabox', // Вызов(callback)
		'structure_page', // Где будет отображаться наше поле, в нашем случае в Записях
		'normal',
		'high');
}
add_action('add_meta_boxes', 'my_meta_box'); // Запускаем функцию

$meta_fields = array(

	array(
		'label' => 'Заголовок 1',
		'desc'  => ' ',
		'id'    => 'header1', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'Текстовое поле 1',
		'desc'  => 'Описание для поля.',
		'id'    => 'text_area1',  // даем идентификатор.
		'type'  => 'textarea'  // Указываем тип поля.
	),
	array(
		'label' => 'Заголовок 2',
		'desc'  => ' ',
		'id'    => 'header2', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'Текстовое поле 2',
		'desc'  => 'Описание для поля.',
		'id'    => 'text_area2',  // даем идентификатор.
		'type'  => 'textarea'  // Указываем тип поля.
	),
	array(
		'label' => 'Заголовок 3',
		'desc'  => ' ',
		'id'    => 'header3', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'Текстовое поле 3',
		'desc'  => 'Описание для поля.',
		'id'    => 'text_area3',  // даем идентификатор.
		'type'  => 'textarea'  // Указываем тип поля.
	),
	array(
		'label' => 'Заголовок 4',
		'desc'  => ' ',
		'id'    => 'header4', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'Текстовое поле 4',
		'desc'  => 'Описание для поля.',
		'id'    => 'text_area4',  // даем идентификатор.
		'type'  => 'textarea'  // Указываем тип поля.
	),
	array(
		'label' => 'Заголовок 5',
		'desc'  => ' ',
		'id'    => 'header5', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'Текстовое поле 5',
		'desc'  => 'Описание для поля.',
		'id'    => 'text_area5',  // даем идентификатор.
		'type'  => 'textarea'  // Указываем тип поля.
	),
	array(
		'label' => 'Текстовое поле 5',
		'desc'  => 'Описание для поля.',
		'id'    => 'text_area5',  // даем идентификатор.
		'type'  => 'textarea'  // Указываем тип поля.
	),
	//carousel
	array(
		'label' => 'галерея 1',
		'desc'  => ' ',
		'id'    => 'gal1', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'галерея 2',
		'desc'  => ' ',
		'id'    => 'gal2', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'галерея 3',
		'desc'  => ' ',
		'id'    => 'gal3', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'галерея 4',
		'desc'  => ' ',
		'id'    => 'gal4', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'галерея 5',
		'desc'  => ' ',
		'id'    => 'gal5', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'галерея 6',
		'desc'  => ' ',
		'id'    => 'gal6', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'галерея 7',
		'desc'  => ' ',
		'id'    => 'gal7', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'галерея 8',
		'desc'  => ' ',
		'id'    => 'gal8', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
	array(
		'label' => 'галерея 9',
		'desc'  => ' ',
		'id'    => 'gal9', // даем идентификатор.
		'type'  => 'text'  // Указываем тип поля.
	),
//	array(
//		'label' => 'Чекбоксы (флажки)',
//		'desc'  => 'Описание для поля.',
//		'id'    => 'mycheckbox',  // даем идентификатор.
//		'type'  => 'checkbox'  // Указываем тип поля.
//	),
//	array(
//		'label' => 'Всплывающий список',
//		'desc'  => 'Описание для поля.',
//		'id'    => 'myselect',
//		'type'  => 'select',
//		'options' => array (  // Параметры, всплывающие данные
//			'one' => array (
//				'label' => 'Вариант 1',  // Название поля
//				'value' => '1'  // Значение
//			),
//			'two' => array (
//				'label' => 'Вариант 2',  // Название поля
//				'value' => '2'  // Значение
//			),
//			'three' => array (
//				'label' => 'Вариант 3',  // Название поля
//				'value' => '3'  // Значение
//			)
//		)
//	)
);

// Вызов метаполей
function show_my_metabox() {
	global $meta_fields; // Обозначим наш массив с полями глобальным
	global $post;  // Глобальный $post для получения id создаваемого/редактируемого поста
// Выводим скрытый input, для верификации. Безопасность прежде всего!
	echo '<input type="hidden" name="custom_meta_box_nonce" value="'.wp_create_nonce(basename(__FILE__)).'" />';

	// Начинаем выводить таблицу с полями через цикл
	echo '<table class="form-table">';
	foreach ($meta_fields as $field) {
		// Получаем значение если оно есть для этого поля
		$meta = get_post_meta($post->ID, $field['id'], true);
		// Начинаем выводить таблицу
		echo '<tr>
                <th><label for="'.$field['id'].'">'.$field['label'].'</label></th>
                <td>';
		switch($field['type']) {
			case 'text':
				echo '<input type="text" name="'.$field['id'].'" id="'.$field['id'].'" value="'.$meta.'" size="30" />
        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'textarea':
				echo '<textarea name="'.$field['id'].'" id="'.$field['id'].'" cols="60" rows="4">'.$meta.'</textarea>
        <br /><span class="description">'.$field['desc'].'</span>';
				break;
			case 'checkbox':
				echo '<input type="checkbox" name="'.$field['id'].'" id="'.$field['id'].'" ',$meta ? ' checked="checked"' : '','/>
        <label for="'.$field['id'].'">'.$field['desc'].'</label>';
				break;
// Всплывающий список
			case 'select':
				echo '<select name="'.$field['id'].'" id="'.$field['id'].'">';
				foreach ($field['options'] as $option) {
					echo '<option', $meta == $option['value'] ? ' selected="selected"' : '', ' value="'.$option['value'].'">'.$option['label'].'</option>';
				}
				echo '</select><br /><span class="description">'.$field['desc'].'</span>';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}

// Пишем функцию для сохранения
function save_my_meta_fields($post_id) {
	global $meta_fields;  // Массив с нашими полями

	// проверяем наш проверочный код
	if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__)))
		return $post_id;
	// Проверяем авто-сохранение
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
		return $post_id;
	// Проверяем права доступа
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id))
			return $post_id;
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}

	// Если все отлично, прогоняем массив через foreach
	foreach ($meta_fields as $field) {
		$old = get_post_meta($post_id, $field['id'], true); // Получаем старые данные (если они есть), для сверки
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {  // Если данные новые
			update_post_meta($post_id, $field['id'], $new); // Обновляем данные
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old); // Если данных нету, удаляем мету.
		}
	} // end foreach
}
add_action('save_post', 'save_my_meta_fields'); // Запускаем функцию сохранения

/**
 * Link all post thumbnails to the post permalink.
 *
 * @param string $html          Post thumbnail HTML.
 * @param int    $post_id       Post ID.
 * @param int    $post_image_id Post image ID.
 * @return string Filtered post image HTML.
 */
function wpdocs_post_image_html( $html, $post_id, $post_image_id ) {
	$html = '<a href="' . get_permalink( $post_id ) . '" alt="' . esc_attr( get_the_title( $post_id ) ) . '">' . $html . '</a>';
	return $html;
}
add_filter( 'post_thumbnail_html', 'wpdocs_post_image_html', 10, 3 );

//Get top ancestor for menu navigation

function get_top_ancestor_id() {

	global $post;

	if ( $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );

		return $ancestors[0];
	}

	return $post->ID;
}


