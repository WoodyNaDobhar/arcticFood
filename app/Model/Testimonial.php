<?php
App::uses('AppModel', 'Model');
/**
 * Testimonial Model
 *
 */
class Testimonial extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'quoter';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'quote' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'quoter' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
}
