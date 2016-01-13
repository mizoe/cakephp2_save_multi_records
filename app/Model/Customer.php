<?php
App::uses('AppModel', 'Model');
/**
 * Customer Model
 *
 * @property Address $Address
 */
class Customer extends AppModel {

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
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
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
		'Address' => array(
			'className' => 'Address',
			'foreignKey' => 'customer_id',
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

	// ‚·‚×‚Äˆê‚É•Û‘¶
	public function addAll($data = null) {
		if($data == null){ // ƒŒƒR[ƒh‚ª‚È‚¯‚ê‚Î return
			return false;
		}
		var_dump($data);
		$result = $this->saveAll($data); // Cusotmer ‚É•Û‘¶
		var_dump($result);
		return true;
	}

}
