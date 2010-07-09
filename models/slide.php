<?php
class Slide extends AppModel {
	var $name = 'Slide';
	var $displayField = 'title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Study' => array(
			'className' => 'Study',
			'foreignKey' => 'study_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>