<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page


Container::make( 'theme_options', 'Настройки темы' )
->set_icon( 'dashicons-carrot' )
->add_tab( 'Шапка', array(
	Field::make( 'select', 'bur_header_logic', 'Будет использоваться логотип?' )
		->add_options(array(
			'yes' => 'Да, я буду использовать логотип',
			'no' => 'Нет, буду использовать текст',
		)),
		
	Field::make( 'image', 'bur_header_logo', 'Логотип' )
		->set_conditional_logic(array(
			'relation' => 'AND',
			array(
				'field' => 'bur_header_logic',
				'value' => 'yes',
				'compare' => '=',
			)
		)),
		Field::make( 'text', 'bur_header_site_name', 'Название сайта' )
			
			->set_default_value('Сайт')
				->set_conditional_logic(array(
					'relation' => 'AND',
					array(
						'field' => 'bur_header_logic',
						'value' => 'yes',
						'compare' => '=',
					)
				)),

		Field::make( 'text', 'bur_header_site_desc', 'Описание сайта' )
		->set_conditional_logic(array(
			'relation' => 'AND',
			array(
				'field' => 'bur_header_logic',
				'value' => 'yes',
				'compare' => '=',
			)
		))

	
	
		
) )
	->add_tab( 'Подвал', array(
		Field::make( 'text', 'crb_email', 'Notification Email' ),
		Field::make( 'text', 'crb_phone', 'Phone Number' ),
		Field::make( 'text', 'crb_name', 'Name' )
	) );