<?php function renderTweetButtonOptions(TweetButton $tweetbutton) { ?>
	
	<div class="wrap">
		<h2>TweetButton Options</h2>
		
		<p class="author">Created by <a href="http://goredmonster.com">Paul Redmond</a>.</p>
		
		<form method="post" action="options.php">

			<?php
				wp_nonce_field('update-options');
				settings_fields($tweetbutton->getOptionGroup());
			?>
			<table class="form-table">
				<tbody>
					<tr valign="top">
						<th scope="row"><label for="tweetbutton-data-via">Via @<strong id="twitterbutton-at-via">&nbsp;</strong></label></th>
						<td>
							<?php echo $tweetbutton->Html->input('text', 'tweetbutton-data-via', null, array('class' => 'regular-text')) ?>
							<span class="description">This user will be mentioned in the tweet (optional)</span>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row"><label for="tweetbutton-data-related">Related Twitter Account</label></th>
						<td>
								<?php echo $tweetbutton->Html->input('text', 'tweetbutton-data-related', null, array('class' => 'regular-text')) ?>
							<span class="description">This could be a partner or related account. (optional)</span>
						</td>
					</tr>
					<tr valign="top">
						<th scope="row"><label for="tweetbutton-data-count">Count Options</label></th>
						<td>
							<?php
							echo $tweetbutton->Html->select('tweetbutton-data-count', array(
								'horizontal' => 'Horizontal',
								'vertical' => 'Vertical',
								'none' => 'None'
							));
							?>
							
							<div id="twitterbutton-visual">
								<?php
								$count_option = get_option('tweetbutton-data-count');
								$count_examples = array(
									'horizontal' => 'tweet-hoiz.png',
									'vertical' => 'tweet-vert.png',
									'none' => 'tweet-none.png');
								$selected = false;
								foreach($count_examples as $k => $v)
								{
									$class = 'hide';
									$src = _TB_IMAGES_URL_ . '/' . $v;
									if($count_option == $k) {
										$class = false;
									}
									echo "<img src='$src' class='$k $class' />";
								}
								?>
							</div>
						</td>
					</tr>
					<!-- <tr valign="top">
							<th scope="row">Output Options</th>
							<td>
								<fieldset><legend class="screen-reader-text"><span>Membership</span></legend>
									<label for="users_can_register">
										<?php echo $tweetbutton->Html->input('checkbox', 'tweetbutton-disable-auto', 1) ?>
										Disable Auto-Output
									</label>
								</fieldset>
							</td>
						</tr> -->
				</tbody>
			</table>
			
			<?php echo $tweetbutton->Html->submit(); ?>
		</form>
	</div>
	
<?php } ?>