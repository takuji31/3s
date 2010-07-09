<?php
class Study extends AppModel {
	var $name = 'Study';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Slide' => array(
			'className' => 'Slide',
			'foreignKey' => 'study_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'Slide.page asc',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>
