<?php declare(strict_types = 1);

$ignoreErrors = [];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\Assets\\:\\:admin_enqueue_scripts\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/Assets.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\OptInOptOut\\:\\:create_objects\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/OptInOptOut.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\OptInPage\\:\\:__construct\\(\\) has parameter \\$shop with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/OptInPage.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\OptInPage\\:\\:add_submenu_page\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/OptInPage.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\OptInPage\\:\\:admin_init\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/OptInPage.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\OptInPage\\:\\:wpdesk_tracker_page\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/OptInPage.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @param references unknown parameter\\: \\$shop_url$#',
	'identifier' => 'parameter.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/OptInPage.php',
];
$ignoreErrors[] = [
	'message' => '#^Property WPDesk\\\\Tracker\\\\OptInPage\\:\\:\\$plugin_file is never read, only written\\.$#',
	'identifier' => 'property.onlyWritten',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/OptInPage.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\OptOut\\:\\:handle_opt_out\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/OptOut.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/PluginActionLinks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\PluginActionLinks\\:\\:append_opt_link\\(\\) has parameter \\$links with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/PluginActionLinks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\PluginActionLinks\\:\\:append_opt_link\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/PluginActionLinks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\PluginActionLinks\\:\\:append_plugin_action_links_to_row_meta\\(\\) has parameter \\$plugin_meta with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/PluginActionLinks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\PluginActionLinks\\:\\:append_plugin_action_links_to_row_meta\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/PluginActionLinks.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk\\\\Tracker\\\\Shop\\:\\:prepare_shop_from_shop_url\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/Shop.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$allow_url string\\)\\: Unexpected token "\\$allow_url", expected type at offset 64 on line 4$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$logo_url  string\\)\\: Unexpected token "\\$logo_url", expected type at offset 12 on line 2$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$shop_name string\\)\\: Unexpected token "\\$shop_name", expected type at offset 142 on line 7$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$skip_url  string\\)\\: Unexpected token "\\$skip_url", expected type at offset 90 on line 5$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$terms_url string\\)\\: Unexpected token "\\$terms_url", expected type at offset 116 on line 6$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^PHPDoc tag @var has invalid value \\(\\$username  string\\)\\: Unexpected token "\\$username", expected type at offset 38 on line 3$#',
	'identifier' => 'phpDoc.parseError',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$allow_url might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$logo_url might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$shop_name might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$skip_url might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$terms_url might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$username might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/PSR/WPDesk/Tracker/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Interface\\:\\:set_sender\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker-interface.php',
];
$ignoreErrors[] = [
	'message' => '#^Function remove_action invoked with 4 parameters, 2\\-3 required\\.$#',
	'identifier' => 'arguments.count',
	'count' => 2,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:__construct\\(\\) has parameter \\$plugin_basename with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:admin_bar_menu\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:admin_init\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:admin_menu\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:admin_notices\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:default_option_wpdesk_helper_options\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:default_option_wpdesk_helper_options\\(\\) has parameter \\$default with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:default_option_wpdesk_helper_options\\(\\) has parameter \\$option with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:default_option_wpdesk_helper_options\\(\\) has parameter \\$passed_default with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:get_data_from_providers\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:get_tracking_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:init\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:init\\(\\) has parameter \\$foo with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:init_hooks\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:init_schedule\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:option_wpdesk_helper_options\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:option_wpdesk_helper_options\\(\\) has parameter \\$option with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:option_wpdesk_helper_options\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:read_context_from_request\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:send_deactivation_data\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:send_payload_to_wpdesk\\(\\) has parameter \\$payload with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:send_tracking_data\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:send_tracking_data\\(\\) has parameter \\$additional_data with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:send_tracking_data\\(\\) has parameter \\$click_action with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:set_sender\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:update_option_wpdesk_helper_options\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:update_option_wpdesk_helper_options\\(\\) has parameter \\$old_value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:update_option_wpdesk_helper_options\\(\\) has parameter \\$option with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:update_option_wpdesk_helper_options\\(\\) has parameter \\$value with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:wp_ajax_wpdesk_tracker_deactivation_handler\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:wp_ajax_wpdesk_tracker_notice_handler\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:wpdesk_tracker_deactivate\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:wpdesk_tracker_message_version\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:wpdesk_tracker_message_version\\(\\) has parameter \\$data with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker\\:\\:wpdesk_tracker_page\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/class-wpdesk-tracker.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property WooCommerce\\:\\:\\$payment_gateways\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-gateways.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Gateways\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-gateways.php',
];
$ignoreErrors[] = [
	'message' => '#^Constant NONCE_SALT not found\\.$#',
	'identifier' => 'constant.notFound',
	'count' => 3,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-identification-gdpr.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Identification_Gdpr\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-identification-gdpr.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Identification\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-identification.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Jetpack\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-jetpack.php',
];
$ignoreErrors[] = [
	'message' => '#^Implicit array creation is not allowed \\- variable \\$data does not exist\\.$#',
	'identifier' => 'variable.implicitArray',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-license-emails.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_License_Emails\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-license-emails.php',
];
$ignoreErrors[] = [
	'message' => '#^Implicit array creation is not allowed \\- variable \\$data does not exist\\.$#',
	'identifier' => 'variable.implicitArray',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-orders-country.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Orders_Country\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-orders-country.php',
];
$ignoreErrors[] = [
	'message' => '#^Implicit array creation is not allowed \\- variable \\$data does not exist\\.$#',
	'identifier' => 'variable.implicitArray',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-orders-month.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Orders_Month\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-orders-month.php',
];
$ignoreErrors[] = [
	'message' => '#^Offset \'orders\' on array\\{orders_per_month\\: array\\{first\\: mixed, last\\: mixed, months\\: mixed\\}\\} in isset\\(\\) does not exist\\.$#',
	'identifier' => 'isset.offset',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-orders-month.php',
];
$ignoreErrors[] = [
	'message' => '#^Result of && is always false\\.$#',
	'identifier' => 'booleanAnd.alwaysFalse',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-orders-month.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Orders\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-orders.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Plugins\\:\\:get_all_plugins\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-plugins.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Plugins\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-plugins.php',
];
$ignoreErrors[] = [
	'message' => '#^Path in include\\(\\) "\\.//wp\\-admin/includes/plugin\\.php" is not a file or it does not exist\\.$#',
	'identifier' => 'include.fileNotFound',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-plugins.php',
];
$ignoreErrors[] = [
	'message' => '#^Implicit array creation is not allowed \\- variable \\$data does not exist\\.$#',
	'identifier' => 'variable.implicitArray',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-products-variations.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Products_Variations\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-products-variations.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Products\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-products.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Server\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-server.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Settings\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-settings.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function is_array\\(\\) with array will always evaluate to true\\.$#',
	'identifier' => 'function.alreadyNarrowedType',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-shipping-classes.php',
];
$ignoreErrors[] = [
	'message' => '#^Implicit array creation is not allowed \\- variable \\$data does not exist\\.$#',
	'identifier' => 'variable.implicitArray',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-shipping-classes.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Shipping_Classes\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-shipping-classes.php',
];
$ignoreErrors[] = [
	'message' => '#^Implicit array creation is not allowed \\- variable \\$data does not exist\\.$#',
	'identifier' => 'variable.implicitArray',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-shipping-methods-zones.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Shipping_Methods_Zones\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-shipping-methods-zones.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$data might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-shipping-methods-zones.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property WooCommerce\\:\\:\\$shipping\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-shipping-methods.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Shipping_Methods\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-shipping-methods.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Templates\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-templates.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property WP_Theme\\:\\:\\$Name\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-theme.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to an undefined property WP_Theme\\:\\:\\$Version\\.$#',
	'identifier' => 'property.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-theme.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Theme\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-theme.php',
];
$ignoreErrors[] = [
	'message' => '#^Call to function array_filter\\(\\) requires parameter \\#2 to be passed to avoid loose comparison semantics\\.$#',
	'identifier' => 'arrayFilter.strict',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-user-agent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_User_Agent\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-user-agent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Users\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-users.php',
];
$ignoreErrors[] = [
	'message' => '#^Constant WP_MEMORY_LIMIT not found\\.$#',
	'identifier' => 'constant.notFound',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-wordpress.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider_Wordpress\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider-wordpress.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Data_Provider\\:\\:get_data\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/data_provider/class-wpdesk-tracker-data-provider.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Persistence_Consent\\:\\:get_helper_options\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/persistence/class-wpdesk-tracker-persistence-consent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Persistence_Consent\\:\\:set_active\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/persistence/class-wpdesk-tracker-persistence-consent.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Exception_WpError\\:\\:__construct\\(\\) has parameter \\$message with no type specified\\.$#',
	'identifier' => 'missingType.parameter',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/Exception/class-wpdesk-tracker-sender-exception-wperror.php',
];
$ignoreErrors[] = [
	'message' => '#^Access to constant DEBUG on an unknown class WPDesk_Logger\\.$#',
	'identifier' => 'class.notFound',
	'count' => 2,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-logged.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Logged\\:\\:do_send\\(\\) has parameter \\$payload with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-logged.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Logged\\:\\:do_send\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-logged.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Logged\\:\\:do_send_deprecated\\(\\) has parameter \\$payload with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-logged.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Logged\\:\\:do_send_deprecated\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-logged.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Logged\\:\\:send_payload\\(\\) has parameter \\$payload with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-logged.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Logged\\:\\:send_payload\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-logged.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Wordpress_To_WPDesk\\:\\:get_api_url\\(\\) has no return type specified\\.$#',
	'identifier' => 'missingType.return',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-wordpress-to-wpdesk.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Wordpress_To_WPDesk\\:\\:send_payload\\(\\) has parameter \\$payload with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-wordpress-to-wpdesk.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender_Wordpress_To_WPDesk\\:\\:send_payload\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender-wordpress-to-wpdesk.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender\\:\\:send_payload\\(\\) has parameter \\$payload with no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender.php',
];
$ignoreErrors[] = [
	'message' => '#^Method WPDesk_Tracker_Sender\\:\\:send_payload\\(\\) return type has no value type specified in iterable type array\\.$#',
	'identifier' => 'missingType.iterableValue',
	'count' => 1,
	'path' => __DIR__ . '/src/sender/class-wpdesk-tracker-sender.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$allow_url might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$skip_url might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$terms_url might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$username might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/views/tracker-connect.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$plugin_name might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 1,
	'path' => __DIR__ . '/src/views/tracker-deactivate.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$terms_url might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 2,
	'path' => __DIR__ . '/src/views/tracker-notice.php',
];
$ignoreErrors[] = [
	'message' => '#^Variable \\$username might not be defined\\.$#',
	'identifier' => 'variable.undefined',
	'count' => 2,
	'path' => __DIR__ . '/src/views/tracker-notice.php',
];

return ['parameters' => ['ignoreErrors' => $ignoreErrors]];
