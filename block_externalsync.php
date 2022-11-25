<?php

class block_externalsync extends block_base {
	public function init () {
		$this->title = get_string('externalsync', 'block_externalsync'); // "ExternalSync"
		}
	
	public function get_content () {
		
		// block content
		$this->content = new stdClass;

		$this->content->text = ""; // empty page
		
		// an empty view
		$url = new moodle_url('/blocks/externalsync/view.php');		
		$this->content->footer = html_writer::link($url, 'Empty View');
		
		return $this->content;
		}
}