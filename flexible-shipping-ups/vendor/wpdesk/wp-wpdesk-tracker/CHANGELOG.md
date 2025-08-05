## [3.9.3]- 2025-07-23
### Fixed
- Changed sanitization

## [3.9.2]- 2025-07-22
### Fixed
- Added plugin checking to avoid duplicate survey form

## [3.9.1]- 2025-06-09
### Added
- Security fixes

## [3.9.0] - 2025-05-21
### Changed
- Plugin activation option key.

## [3.8.0] - 2025-05-21
### Changed
- Move javascript code to external files.
- Fixed security issues.

## [3.7.1] - 2024-08-19
### Changed
- Tracker with logging support can now handle any `psr/log` compatible library.
- Opt-in/out links location moved permanently to plugin's meta on plugins page.

## [3.7.0] - 2024-05-16
### Added
- Opt link location controled by filter `wpdesk_opt_link_location`

## [3.6.1] - 2024-04-24
### Changed
- Simplify data structure for allowed selling locations data entry.

## [3.6.0] - 2024-03-20
### Added
- Track source of action for enabling and disabling telemetry.

### Fixed
- Handle invalid URLs in `Shop` instance without PHP warnings.
- Don't escape safe HTML tags in tracking notice.
- Improve sanitization and escaping of data.

### Changed
- Change "Opt-in"/"Opt-out" phrases to more actionable text.
- Append telemetry link at the end in plugin links.

## [3.5.12] - 2024-03-12
### Fixed
- permissions check in AJAX deactivation data action

## [3.5.10] - 2024-03-10
### Fixed
- check_ajax_referer instead of wp_verify_nonce

## [3.5.9] - 2024-03-07
### Fixed
- Missing nonce and role permissions verification in AJAX actions

## [3.5.8] - 2024-02-16
### Changed
- Include recent WooCommerce features in dataset.

## [3.5.7] - 2023-12-12
### Fixed
- Fixed deprecated functions

## [3.5.6] - 2023-03-29

### Fixed
- Improved PHP >8 compatibility

## [3.5.5] - 2023-03-15
### Fixed
- Errors in php 8.1

## [3.5.4] - 2023-02-15
### Fixed
- Parse error: missing dot

## [3.5.3] - 2023-02-10
### Changed
- Removed `suhosin` extension detection to pass woocommerce.com plugin submission process

## [3.5.2] - 2022-10-18
### Fixed
- skip action

## [3.5.1] - 2022-08-30
### Fixed
- de_DE translators

## [3.5.0] - 2022-08-16
### Added
- en_CA, en_GB translators

## [3.4.0] - 2022-08-16
### Added
- de_DE translators

## [3.3.0] - 2022-08-09
### Added
- en_AU and es_ES translators

## [3.2.0] - 2022-06-21
### Added
- Ability to replace sender in filter wpdesk/tracker/sender/$plugin_slug

## [3.1.1] - 2022-04-12
### Fixed
- Rename Octolize logo file

## [3.1.0] - 2022-04-12
### Added
- Information about Octolize

## [3.0.2] - 2020-10-07
### Fixed
- escaping outputs
- update wp-view to v2

## [3.0.1] - 2020-09-30
### Fixed
- opt in/opt out Polish translations

## [3.0.0] - 2020-09-27
### Added
- opt in/opt out plugin action links

## [2.3.2] - 2020-12-22
### Fixed
- opt in notice should be displayed only once

## [2.3.1] - 2020-10-26
### Fixed
- Typo in translation

## [2.3.0] - 2020-07-10
### Added
- Class to verify status of tracking consent

## [2.2.1] - 2020-04-15
### Fixed
- wpdesk_tracker_notice_content show when used

## [2.2.0] - 2020-04-14
### Added
- wpdesk_tracker_notice_content filter to change notice content

## [2.1.2] - 2020-03-06
### Fixed
- sanitization

## [2.1.1] - 2019-11-13
### Changed
- lang dir moved outsite the src

## [2.1.0] - 2019-11-13
### Changed
- Removed .mo file
- Translation set in composer extra section

## [2.0.4] - 2019-08-17
### Added
- WPDesk_Tracker_Interface
### Changed
- Ensure that only one tracker is loaded moved to plugin flow

## [2.0.0] - 2019-07-30
### Added
- WPDesk_Tracker_Factory_Prefixed
### Fixed
- Security for templates as side effect is generated there. Also required for prefixer compatibility

## [1.0.4] - 2019-07-16
### Fixed
- Removed console.log

## [1.0.2] - 2019-04-23
### Fixed
- Should enable tracker function
- Tests

## [1.0.1] - 2019-04-17
### Changed
- Deactivate buttons switched

## [1.0.0] - 2019-04-17
### Added
- First version
