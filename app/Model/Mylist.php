<?php
App::uses('AppModel', 'Model');
/**
 * Mylist Model
 *
 * @property Movie $Movie
 */
class Mylist extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => array('invalidMyListName')
			),
			'isUnique' => array(
				'rule' => array('isUnique'),
				//'message' => 'overlapMyListName'
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Movie' => array(
			'className' => 'Movie',
			'foreignKey' => 'mylist_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
