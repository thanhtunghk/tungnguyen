<?php

function tungnguyen_preprocess_node(&$vars) {
	$vars['submitted'] =  t('Posted by !username on !datetime',
		array(
			'!username' => $vars['name'],
			'!datetime' => $vars['date'],
		)
	);
	
	$vars['posted'] = t('By !username',
		array(
			'!username' => $vars['name']
		)		
	);
	
	if (isset($vars['content']['links']['node']['#links']['node-readmore'])) {
	
		// make a copy of the old link and change the link's title
		$readmore = $vars['content']['links']['node']['#links']['node-readmore'];
		$readmore['title'] = t('Continue Reading &raquo;');
	
		// remove the old link
		unset($vars['content']['links']['node']['#links']['node-readmore']);
	
		// creat a new link under a different name
		$vars['content']['links']['node']['#links']['node-readmore'] = $readmore;
		
		unset($vars['content']['links']['comment']['#links']['comment-add']);
	}
}