<?php
class Header_Service {

	public $data;

	public function __construct($data, $post_id="", $extra_data="") {

		$this->data = $data;

		$this->load_view();

	}

	public function load_view() {

		$context = Timber::get_context();

		$context['data'] = $this->data;
		$context['constants'] = get_slate_contants();

		Timber::render( theme_views . '/header.twig', $context);

	}


}
