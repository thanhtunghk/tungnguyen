<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<?php 
global $base_url;
/*function get_file_name ($uri) {
	$file_name = str_replace("public://", "", $uri);
	return $file_name;
}*/
?>

<?php
$month = format_date($node->created, 'custom', 'F');
$day = format_date($node->created, 'custom', 'd');

$options = array('absolute' => TRUE);
$nid = 1; // Node ID
$source_url = url('node/' . $node->nid, $options);
//$source_url = 'http://tungnguyen.tk';
$url = "http://api.facebook.com/restserver.php?method=links.getStats&urls=".urlencode($source_url);
$xml = file_get_contents($url);
$xml = simplexml_load_string($xml);
$shares =  $xml->link_stat->share_count;
$likes =  $xml->link_stat->like_count;
$comments = $xml->link_stat->comment_count;
$total = $xml->link_stat->total_count;
$max = max($shares,$likes,$comments);

?>

<?php if (!$display_submitted): ?>
<div class="submitted">
	<?php print $submitted; ?>
</div>
<?php endif; ?>
<?php //krumo($content);?>
<div class="blog-item">
	<div class="row">
		<div class="col-lg-2 col-sm-2">
			<div class="date-wrap">
				<span class="date"> <?php print $day; ?> </span>
                    <span class="month"> <?php print $month; ?> </span>
			</div>

		</div>
		<div class="col-lg-10 col-sm-10">
			<div class="blog-img">
				<img src="<?php print file_create_url($content['body']['#object']->field_blog_image['und'][0]['uri']);?>" alt="" />
			</div>

		</div>
	</div>
	<div class="row">
		<div class="col-lg-2 col-sm-2 text-right">
			<div class="author">
				<?php print $posted; ?>
			</div>
			<div class="st-view">
				<ul class="list-unstyled">
					<li><a href="javascript:;"> <?php print $likes;?> Like </a>
					</li>
					<li><a href="javascript:;"> <?php print $shares; ?> Share </a>
					</li>
					<li><a href="javascript:;"> <?php print $comments;?> comments </a>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-lg-10 col-sm-10">
			<h1>
				<a href="<?php print $node_url; ?>"><?php print $title; ?></a>
			</h1>
			<?php
				// We hide the comments and links now so that we can render them later.
				hide($content['comments']);
				hide($content['links']);
				print render($content['body']);
			?>
			<?php print render($content['links']); ?>
			<?php print render($content['comments']); ?>
		</div>
	</div>
</div>
