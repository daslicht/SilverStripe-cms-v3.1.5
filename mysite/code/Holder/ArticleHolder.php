<?php

class ArticleHolder extends Page {
	private static $icon = "cms/images/treeicons/home-file.png";
	private static $allowed_children = array('ArticlePage');
	public function init() {
		RSSFeed::linkToFeed($this->Link() . "rss");    
		parent::init();
	}
}

class ArticleHolder_Controller extends Page_Controller {

	private static $allowed_actions = array( 
		'rss'
	);

	public function rss() {
		$rss = new RSSFeed($this->Children(), $this->Link(), "The coolest news around");
		return $rss->outputToBrowser();
	}


}