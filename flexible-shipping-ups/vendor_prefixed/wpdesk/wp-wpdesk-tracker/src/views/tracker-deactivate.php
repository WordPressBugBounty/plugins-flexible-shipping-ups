<?php

namespace UpsFreeVendor;

if (!\defined('ABSPATH')) {
    exit;
}
?>

<h2><?php 
\printf(\esc_html__('You are deactivating %s plugin.', 'flexible-shipping-ups'), \esc_html($plugin_name));
?></h2>

<div class="wpdesk_tracker_deactivate">
	<div class="body">
		<div class="panel" data-panel-id="confirm"><p></p></div>
		<div class="panel active" data-panel-id="reasons">
			<h4><strong><?php 
\esc_html_e(' If you have a moment, please let us know why you are deactivating plugin (anonymous feedback):', 'flexible-shipping-ups');
?></strong></h4>
			<ul id="reasons-list">
				<li class="reason">
					<label>
					<span>
						<input type="radio" name="selected-reason" value="plugin_stopped_working">
					</span>
						<span><?php 
\esc_html_e('The plugin suddenly stopped working', 'flexible-shipping-ups');
?></span>
					</label>
				</li>
				<li class="reason">
					<label>
					<span>
						<input type="radio" name="selected-reason" value="broke_my_site">
					</span>
						<span><?php 
\esc_html_e('The plugin broke my site', 'flexible-shipping-ups');
?></span>
					</label>
				</li>
				<li class="reason has-input">
					<label>
						<span>
							<input type="radio" name="selected-reason" value="found_better_plugin">
						</span>
						<span><?php 
\esc_html_e('I found a better plugin', 'flexible-shipping-ups');
?></span>
					</label>
					<div id="found_better_plugin" class="reason-input">
						<input type="text" name="better_plugin_name" placeholder="<?php 
\esc_html_e('What\'s the plugin\'s name?', 'flexible-shipping-ups');
?>">
					</div>
				</li>
				<li class="reason">
					<label>
					<span>
						<input type="radio" name="selected-reason" value="plugin_for_short_period">
					</span>
						<span><?php 
\esc_html_e('I only needed the plugin for a short period', 'flexible-shipping-ups');
?></span>
					</label>
				</li>
				<li class="reason">
					<label>
					<span>
						<input type="radio" name="selected-reason" value="no_longer_need">
					</span>
						<span><?php 
\esc_html_e('I no longer need the plugin', 'flexible-shipping-ups');
?></span>
					</label>
				</li>
				<li class="reason">
					<label>
					<span>
						<input type="radio" name="selected-reason" value="temporary_deactivation">
					</span>
						<span><?php 
\esc_html_e('It\'s a temporary deactivation. I\'m just debugging an issue.', 'flexible-shipping-ups');
?></span>
					</label>
				</li>
				<li class="reason has-input">
					<label>
					<span>
						<input type="radio" name="selected-reason" value="other">
					</span>
						<span><?php 
\esc_html_e('Other', 'flexible-shipping-ups');
?></span>
					</label>
					<div id="other" class="reason-input">
						<input type="text" name="other" placeholder="<?php 
\esc_attr_e('Kindly tell us the reason so we can improve', 'flexible-shipping-ups');
?>">
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="footer">
		<a href="#" class="button button-secondary button-close"><?php 
\esc_html_e('Cancel', 'flexible-shipping-ups');
?></a>
		<a href="#" class="button button-primary button-deactivate allow-deactivate"><?php 
\esc_html_e('Skip &amp; Deactivate', 'flexible-shipping-ups');
?></a>
	</div>
</div><?php 
