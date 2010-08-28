<?php
/*
Plugin Name: TweetButton
Plugin URI: http://goredmonster.com
Description: Adds official Twitter button to posts.
Version: 1.0
Author: Paul Redmond
Author URI: http://goredmonster.com
*/

class TweetButton
{
	private $widgets_js_src = 'http://platform.twitter.com/widgets.js';
	
	private $share_url = 'http://twitter.com/share';
	
	private $data_attributes = array(
		'data-url',
		'data-via',
		'data-text',
		'data-related',
		'data-count',
	);
	
	public function __construct()
	{
		$this->Html = new HtmlHelper();
		add_filter('the_content', array($this, 'theContentFilter'));
	}
	
	public function theContentFilter($content)
	{
		$out = $this->_buildTwitterHtml();
		
		return $content . "\n" . $out;
	}

	private function _buildTwitterHtml()
	{
		# Get attributes
		$link_attributes = array_merge(
			array('class' => 'twitter-share-button', 'data-count' => 'horizontal'),
			$this->_getDataAttributes( get_permalink() )
		);
		
		# Create HTML
		$out  = $this->Html->comment('Start TwitterButton');
		$out .= $this->Html->javascriptlink($this->widgets_js_src);
		$out .= $this->Html->div(
			$this->Html->link('Tweet', $this->share_url, $link_attributes),
			array('class' => "twitter-button")
		);
		return $out;
	}
	
	/**
	 * Get options for twitter button from options table.
	 */
	private function _getDataAttributes($data_url)
	{
		$attributes = array();
		$option_prefix = 'twitter-button-';
		
		foreach($this->data_attributes as $attr)
		{
			if($attr == 'data-url') {
				$val = $data_url;
			} else {
				$val = '';//get_option();
			}
			
			if(!empty($val)) {
				$attributes[$attr] = $val;
			}
			unset($val);
		}
		return $attributes;
	}
}

$tweet_button = new TweetButton(); # Init plugin.




/**
 * Basic helper for this plugin.
 */
class HtmlHelper
{
	public $tags = array(
		'javascriptlink' => '<script type="text/javascript" src="%s"></script>',
		'div'            => '<div%s>%s</div>',
		'link'           => '<a href="%s"%s>%s</a>',
		'comment'        => "<!-- %s -->\n",
	);
	
	public function javascriptlink($src)
	{
		return sprintf($this->tags['javascriptlink'], $src);
	}
	
	public function div($innerHTML, $attributes=array())
	{
		$attrs = $this->_parseAttributes($attributes);
		return sprintf($this->tags['div'], $attrs, $innerHTML);
	}
	
	public function link($text, $href, $attributes=array(), $escape=true)
	{
		$attrs = $this->_parseAttributes($attributes);
		if($escape === true)
		{
			$text = htmlentities($text);
		}
		return sprintf($this->tags['link'], $href, $attrs, $text);
	}
	
	public function comment($comment)
	{
		return sprintf($this->tags['comment'], $comment);
	}
	
	private function _parseAttributes($attributes)
	{
		if(empty($attributes)) { return false; }
		
		$pattern = '%s="%s"';
		$out = array();
		foreach($attributes as $attr => $val)
		{
			$out[] = sprintf($pattern, $attr, $val);
		}
		return ' ' . implode(" ", $out); # extra space at beginning.
	}
}