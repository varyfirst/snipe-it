<?php

return [
    'ad'				        => 'Ang Aktibong Direktorya',
    'ad_domain'				    => 'Ang Aktibong Direktorya ng domain',
    'ad_domain_help'			=> 'Ito ay minsan kapareho ng iyong email domain, pero hindi permanente.',
    'ad_append_domain_label'    => 'Append domain name',
    'ad_append_domain'          => 'Append domain name to username field',
    'ad_append_domain_help'     => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email'            => 'CC Email',
    'admin_cc_email_help'       => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'admin_settings'            => 'Admin Settings',
    'is_ad'				        => 'Ito ay isang server ng Aktibong Direktorya',
    'alerts'                	=> 'Alerts',
    'alert_title'               => 'Update Notification Settings',
    'alert_email'				=> 'Magpadala ng mga alert sa',
    'alert_email_help'    => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled'			=> 'Ang Email Alerts ay Pinagana',
    'alert_interval'			=> 'Ang Alerts Threshold ay Mag-expire (sa iilang araw)',
    'alert_inv_threshold'		=> 'Ang Threshold ng Inventory Alert',
    'allow_user_skin'           => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids'					=> 'Ang mga ID ng asset',
    'audit_interval'            => 'Ang Pagitan ng Audit',
    'audit_interval_help'       => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days'        => 'Ang Warning Threshold ng Audit',
    'audit_warning_days_help'   => 'Mga ilang araw na makaadvans kami sa pagpaalala sa iyo kapag ang mga asset ay nakasaad na para sa pag-audit?',
    'auto_increment_assets'		=> 'Generate auto-incrementing asset tags',
    'auto_increment_prefix'		=> 'Ang prefix (opsyonal)',
    'auto_incrementing_help'    => 'Enable auto-incrementing asset tags first to set this',
    'backups'					=> 'Mga backup',
    'backups_help'              => 'Create, download, and restore backups ',
    'backups_restoring'         => 'Restoring from Backup',
    'backups_upload'            => 'Upload Backup',
    'backups_path'              => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning'   => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out'         => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large'             => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings'			=> 'Ang mga Setting sa Barcode',
    'confirm_purge'			    => 'I-kumperma ang Pag-purge',
    'confirm_purge_help'		=> 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css'				=> 'I-custom ang CSS',
    'custom_css_help'			=> 'Mag-enter ng kahit anung kustom na mag-override ng CSS na nais mong gamitin. Wag isali ang &lt;style&gt;&lt;/style&gt; mga tag.',
    'custom_forgot_pass_url'	=> 'I-custom ang URL ng Pag-reset sa Password',
    'custom_forgot_pass_url_help'	=> 'Papalitan nito ang built-in ng nakalimutang URL ng password sa skreen ng log-in, kapaki-pakinabang upang magdirekta sa panloob o ang password reset functionality ng LDAP. Ito ay epektibong hindi magpagana ng lokal na gumagamit para sa punsyonalidad sa nakalimutang password.',
    'dashboard_message'			=> 'Áng Mensahi sa Dashboard',
    'dashboard_message_help'	=> 'Ang tekstong ito ay lilitaw sa dashboard para sa sinuman na mayroong permiso na tumingin sa dashboard.',
    'default_currency'  		=> 'Ang Default na Currency',
    'default_eula_text'			=> 'Ang Default na EULA',
    'default_language'			=> 'Ang Default na Linggwahe',
    'default_eula_help_text'	=> 'Maaari kang mag-ugnay ng kustom na EULAS sa partikular na mga katergorya ng asset.',
    'acceptance_note'           => 'Add a note for your decision (Optional)',
    'display_asset_name'        => 'Ipakita ang Pangalan ng Asset',
    'display_checkout_date'     => 'Ang Petsa ng Pag-checkout ay Ipakita',
    'display_eol'               => 'Ipakita sa table view ang EOL',
    'display_qr'                => 'Ang mga Square Codes ay Ipakita',
    'display_alt_barcode'		=> 'Ipakita ang 1D barcode',
    'email_logo'                => 'Email Logo',
    'barcode_type'				=> 'Ang Uri ng 2D Barcode',
    'alt_barcode_type'			=> 'Ang uri ng 1D barcode',
    'email_logo_size'       => 'Square logos in email look best. ',
    'enabled'                   => 'Enabled',
    'eula_settings'				=> 'Ang mga Setting ng EULA',
    'eula_markdown'				=> 'Ang EULA na ito ay nagpahintulot ng <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored na markdown</a>.',
    'favicon'                   => 'Favicon',
    'favicon_format'            => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size'          => 'Favicons should be square images, 16x16 pixels.',
    'footer_text'               => 'Ang Karagdagang Teksto ng Footer ',
    'footer_text_help'          => 'Ang tekstong ito ay lilitaw sa kanang bahagsi ng footer. Ang mga links ay pinapayagan gamit ang <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored na markdown</a>. Ang biak na mga Linya, mga header, mga imahi, atbp ay maaaring magsaad ng hindi inaasahang mga resulta.',
    'general_settings'			=> 'Ang Pangakalahatang mga Setting',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
    'general_settings_help'     => 'Default EULA and more',
    'generate_backup'			=> 'Magsagawa ng Backup',
    'google_workspaces'         => 'Google Workspaces',
    'header_color'              => 'Ang Kulay ng Header',
    'info'                      => 'Ang mga settings na ito ay pwedeng magbigay paalam sa sa iyo na i-customise ng iilang mga speto ng iyong pag-iinstall.',
    'label_logo'                => 'Label Logo',
    'label_logo_size'           => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel'                   => 'Ang Laravel na Bersyon',
    'ldap'                      => 'LDAP',
    'ldap_default_group'        => 'Default Permissions Group',
    'ldap_default_group_info'   => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group'          => 'No Default Group',
    'ldap_help'                 => 'LDAP/Active Directory',
    'ldap_client_tls_key'       => 'LDAP Client TLS Key',
    'ldap_client_tls_cert'      => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled'              => 'Pinagana ang LDAP',
    'ldap_integration'          => 'Ang integrasyon ng LDAP',
    'ldap_settings'             => 'Ang mga setting ng LDAP',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_location'             => 'LDAP Location',
'ldap_location_help'             => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help'      => 'Mag-enter ng balidong LDAP username at password mula sa binatayang DN na iyong ibinatay sa itaas upang subukan kung ang iyong LDAP login ay maayos na nai-configure. DAPAT MO MUNANG I-SAVE ANG IYONG UPDATED NA MGA SETTING NG LDAP.',
    'ldap_login_sync_help'      => 'Ito ay susubok lamang sa LDAP na mag-sync nang maayos. Kapag ang iyong LDAP Authentication query ay hindi tama, ang mga gumagamit ay hindi parin makapag-login. DAPAT MO MUNANG I-SAVE ANG IYONG UPDATED NA MGA SETTING NG LDAP.',
    'ldap_manager'              => 'LDAP Manager',
    'ldap_server'               => 'Ang Serber ng LDAP',
    'ldap_server_help'          => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert'			=> 'Ang pagpapatibay sa sertipikasyon ng LDAP SSL',
    'ldap_server_cert_ignore'	=> 'Payagan ang hindi balidong Sertipiko ng SSL',
    'ldap_server_cert_help'		=> 'Piliin ang checkbox na ito kapag ikay ay gumagamit ng self signed na SSL cert at gutong tumanggap ng hindi balidong sertipiko ng SSL.',
    'ldap_tls'                  => 'Gumamit ng TLS',
    'ldap_tls_help'             => 'Ito ay dapat na mai-check lamang kung ikaw ay nagpapatakbo ng STARTTLS sa iyong serber ng LDAP. ',
    'ldap_uname'                => 'Ang Bind Username ng LDAP',
    'ldap_dept'                 => 'LDAP Department',
    'ldap_phone'                => 'LDAP Telephone Number',
    'ldap_jobtitle'             => 'LDAP Job Title',
    'ldap_country'              => 'LDAP Country',
    'ldap_pword'                => 'Ang Bind Password ng LDAP',
    'ldap_basedn'               => 'Ang Bind DN ng Base',
    'ldap_filter'               => 'Ang Filter ng LDAP',
    'ldap_pw_sync'              => 'Ang Password Sync ng LDAP',
    'ldap_pw_sync_help'         => 'Alisan ng tsek ang kahon kapag hindi mo gustong magpanatili ng mga password sync ng LDAP sa lokal na mga password. Ang hindi pagpapagana nito ay nangangahulugang na ang iyong gumagamit ay maaaring hindi makapag-login kapag ang iyong serber ng LDAP ay hindi maabot sa iilang mga kadahilanan.',
    'ldap_username_field'       => 'Ang Field ng Username',
    'ldap_lname_field'          => 'Ang Huling Pangalan',
    'ldap_fname_field'          => 'Unang Pangalan ng LDAP',
    'ldap_auth_filter_query'    => 'Ang Authentication query ng LDAP',
    'ldap_version'              => 'Ang Bersyon ng LDAP',
    'ldap_active_flag'          => 'Ang Aktibong Flag ng LDAP',
    'ldap_activated_flag_help'  => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num'              => 'Ang Numero ng Empleyado ng LDAP',
    'ldap_email'                => 'Ang Email ng LDAP',
    'ldap_test'                 => 'Test LDAP',
    'ldap_test_sync'            => 'Test LDAP Synchronization',
    'license'                   => 'Ang Lisensya ng Software',
    'load_remote'               => 'Load Remote Avatars',
    'load_remote_help_text'		=> 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login'                     => 'Login Attempts',
    'login_attempt'             => 'Login Attempt',
    'login_ip'                  => 'IP Address',
    'login_success'             => 'Success?',
    'login_user_agent'          => 'User Agent',
    'login_help'                => 'List of attempted logins',
    'login_note'                => 'Ang Note sa Pag-login',
    'login_note_help'           => 'Opsyonal na maglakip ng iilang mga pangungusap sa iyong skreen, halimbawa upang makapaghatid ng tulong sa mga taong nakakita ng nawawala o ninakaw na device. Ang field na ito ay tumatanggap ng <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored na markdown</a>',
    'login_remote_user_text'    => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo'                    	=> 'Ang Logo',
    'logo_print_assets'         => 'Use in Print',
    'logo_print_assets_help'    => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'Pagbabawal sa mga gumagamit (kasama ang mga admin) na nakatalaga sa mga asset ng kanilang kompanya.',
    'full_multiple_companies_support_text' => 'Ang Buong Suporta sa Maramihang Kompanya',
    'show_in_model_list'   => 'Ipakita sa Modelo ng mga Dropdowns',
    'optional'					=> 'opsyonal',
    'per_page'                  => 'Ang mga Resulta Bawat Pahina',
    'php'                       => 'Ang Bersyon ng PHP',
    'php_info'                  => 'PHP info',
    'php_overview'              => 'PHP',
    'php_overview_keywords'     => 'phpinfo, system, info',
    'php_overview_help'         => 'PHP System info',
    'php_gd_info'               => 'Dapat kang mag-install ng php-gd para makapag-pakita ng mga code ng QR, tingnan ang mga batayan sa pag-install.',
    'php_gd_warning'            => 'Hindi na-install ang Pagpoproseso ng Imahe ng PHP at plugin ng GD.',
    'pwd_secure_complexity'     => 'Ang Pagkakumplikado ng Password',
    'pwd_secure_complexity_help' => 'Pumili sa alin mang patakaran sa pagkakumplikado ng password ang gusto mong ipatupad.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min'            => 'Ang minimum na mga karakter ng password',
    'pwd_secure_min_help'       => 'Ang minimum na pinahihintulutang balyu ay 8',
    'pwd_secure_uncommon'       => 'Iwasan ang karaniwang mga password',
    'pwd_secure_uncommon_help'  => 'Ito ay hindi magpayag sa mga user sa paggamit ng mga karaniwang password na nagmula sa top 10,000 na mga password na nai-report sa mga paglabag.',
    'qr_help'                   => 'Paganahin muna ang mga Codes ng QR sa pagtakda nito',
    'qr_text'                   => 'Ang Teksto ng Code ng QR',
    'saml'                      => 'SAML',
    'saml_title'                => 'Update SAML settings',
    'saml_help'                 => 'SAML settings',
    'saml_enabled'              => 'SAML enabled',
    'saml_integration'          => 'SAML Integration',
    'saml_sp_entityid'          => 'Entity ID',
    'saml_sp_acs_url'           => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url'           => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert'          => 'Public Certificate',
    'saml_sp_metadata_url'      => 'Metadata URL',
    'saml_idp_metadata'         => 'SAML IdP Metadata',
    'saml_idp_metadata_help'    => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label'     => 'SAML Force Login',
    'saml_forcelogin'           => 'Make SAML the primary login',
    'saml_forcelogin_help'      => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label'            => 'SAML Single Log Out',
    'saml_slo'                  => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help'             => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings'      => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download'             => 'Download Metadata',
    'setting'                   => 'Mga Setting',
    'settings'                  => 'Ang mga Setting',
    'show_alerts_in_menu'       => 'Ipakita ang mga alert sa itaas ng pagpipilian',
    'show_archived_in_list'     => 'Ang mga Asset na Naka-archive',
    'show_archived_in_list_text'     => 'Ipakita ang mga asset na naka-archive sa listahan ng "lahat ng mga asset"',
    'show_assigned_assets'      => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email'     => 'Show images in emails',
    'show_images_in_email_help'   => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name'                 => 'Ang Pangalan ng Site',
    'integrations'               => 'Integrations',
    'slack'                     => 'Slack',
    'general_webhook'           => 'General Webhook',
    'ms_teams'                  => 'Microsoft Teams',
    'webhook'                   => ':app',
    'webhook_presave'           => 'Test to Save',
    'webhook_title'               => 'Update Webhook Settings',
    'webhook_help'                => 'Integration settings',
    'webhook_botname'             => ':app Botname',
    'webhook_channel'             => ':app Channel',
    'webhook_endpoint'            => ':app Endpoint',
    'webhook_integration'         => ':app Settings',
    'webhook_test'                 =>'Test :app integration',
    'webhook_integration_help'    => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button'    => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help'           => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'snipe_version'  			=> 'Ang bersyon ng Snipe-IT',
    'support_footer'            => 'Sumusuporta ng mga Link ng Footer ',
    'support_footer_help'       => 'I-specify kung sino ang nakakakita ng mga link sa impormasyon ng Snipe-IT Support at ang mga User Manual',
    'version_footer'            => 'Version in Footer ',
    'version_footer_help'       => 'Specify who sees the Snipe-IT version and build number.',
    'system'                    => 'Ang Impormasyon ng Sistema',
    'update'                    => 'Ang mga Setting ay I-update',
    'value'                     => 'Balyu',
    'brand'                     => 'Ang Pagkakaroon ng Brand',
    'brand_keywords'            => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help'                => 'Logo, Site Name',
    'web_brand'                 => 'Web Branding Type',
    'about_settings_title'      => 'Ang Tungkol sa mga Setting',
    'about_settings_text'       => 'Ang mga setting na ito ay nagbibigay permiso sa pag-customize ng iilang aspeto sa iyong pag-install.',
    'labels_per_page'           => 'Ang mga label ng bawat pahina',
    'label_dimensions'          => 'Ang mga dimensyon ng label (pulgada)',
    'next_auto_tag_base'        => 'Ang sumusunod na auto-increment',
    'page_padding'              => 'Ang mga margin ng pahina (pulgada)',
    'privacy_policy_link'       => 'Link to Privacy Policy',
    'privacy_policy'            => 'Privacy Policy',
    'privacy_policy_link_help'  => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge'                     => 'Ang mga Rekords na Nai-delete sa Pag-purge',
    'purge_deleted'             => 'Purge Deleted ',
    'labels_display_bgutter'    => 'Mag-label sa ilalim ng gutter',
    'labels_display_sgutter'    => 'Mag-label sa gilid ng gutter',
    'labels_fontsize'           => 'Ang sukat ng font ng label',
    'labels_pagewidth'          => 'Mag-label sa lapad ng sheet',
    'labels_pageheight'         => 'Mag-label sa taas ng sheet',
    'label_gutters'        => 'Ang label sa pagitan (pulgada)',
    'page_dimensions'        => 'Ang mga dimensyon ng pahina (pulgada)',
    'label_fields'          => 'Mag-label sa bisibol na mga fields',
    'inches'        => 'pulgada',
    'width_w'        => 'w',
    'height_h'        => 'h',
    'show_url_in_emails'                => 'I-link ang Snipe-IT sa mga Email',
    'show_url_in_emails_help_text'      => 'I-uncheck ang box na ito kung hindi mo gustong mag-link pabalik sa pag-install ng Snipe-IT sa mga footers ng iyong email. Ito ay kapaki-pakinabang kung karamihan sa iyong mga gumagamit ay kailanman hindi mag-login. ',
    'text_pt'        => 'pt',
    'thumbnail_max_h'   => 'Ang maximum na taas ng thumbnail',
    'thumbnail_max_h_help'   => 'Ang maximum na taas sa mga pixels na kung saan ang mga thumbnails ay maaaring magpapakita ng view ng mga listahan. Min 25, max 500.',
    'two_factor'        => 'Ang Dalawang Factor ng Pag-authenticate',
    'two_factor_secret'        => 'Ang Two-Factor na Code',
    'two_factor_enrollment'        => 'Ang Two-Factor Enrollment',
    'two_factor_enabled_text'        => 'Paganahin ang Dalawang Factor',
    'two_factor_reset'        => 'I-reset ang Two-Factor na Sekreto',
    'two_factor_reset_help'        => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success'          => 'Ang dalawang factor na device ay matagumpay na nai-reset',
    'two_factor_reset_error'          => 'Ang pag-reset sa dalawang factor na device ay hindi nagtagumpay',
    'two_factor_enabled_warning'        => 'Paganahin ang dalawang factor kapag ito ay kasalukuyang hindi pinagana ay maaari itong maghatid ng madalian na pagpilit na mag-authenticate gamit ang Google Auth sa na-enroll na device. Ikaw ay mayroong abilidad na i-enroll ang iyong device kapag may isa na hindi pa kasalukuyang naka-enroll.',
    'two_factor_enabled_help'        => 'Ito ay magpapagana sa two-factor authentication gamit ang Google Authenticator.',
    'two_factor_optional'        => 'Selektib (Maaaring paganahin o hindi pagaganahin ng mga gumagamit kung pahihintulutan)',
    'two_factor_required'        => 'Kinakailangan para sa lahat ng mga gumagamit',
    'two_factor_disabled'        => 'Huwag paganahin',
    'two_factor_enter_code'	=> 'I-enter ang Two-Factor Code',
    'two_factor_config_complete'	=> 'I-submit ang Code',
    'two_factor_enabled_edit_not_allowed' => 'Ang iyong tagapangasiwa ay hindi magpapahintulot sa iyo na i-edit ang mga setting na ito.',
    'two_factor_enrollment_text'	=> "Ang Two factor authentication ay kinakailangan, gayunpaman ang iyong device ay hindi ma na-enroll. Buksan mo ang itong Google Authenticator app at i-scan ang QR code sa ibaba para ma-enroll ang iyong device. Kapag na-enroll na ang device. i-enter ang code sa ibaba",
    'require_accept_signature'      => 'Nangangailangan ng Pag-lagda',
    'require_accept_signature_help_text'      => 'Sa pagpapagana ng katangian nito ay nangangailangan sa mga gumagamit na pisikal na mag-sign off sa pagtanggap ng isang asset.',
    'left'        => 'kaliwa',
    'right'        => 'kanan',
    'top'        => 'itaas',
    'bottom'        => 'ibaba',
    'vertical'        => 'bertikal',
    'horizontal'        => 'pahalang',
    'unique_serial'                => 'Unique serial numbers',
    'unique_serial_help_text'                => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count'        => 'Ang haba ng mga tags ng asset, kabilang ang zerofill',
    'username_format_help'   => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
    'oauth_title' => 'OAuth API Settings',
    'oauth_clients' => 'OAuth Clients',
    'oauth' => 'OAuth',
    'oauth_help' => 'Oauth Endpoint Settings',
    'oauth_no_clients' => 'You have not created any OAuth clients yet.',
    'oauth_secret' => 'Secret',
    'oauth_authorized_apps' => 'Authorized Applications',
    'oauth_redirect_url' => 'Redirect URL',
    'oauth_name_help' => ' Something your users will recognize and trust.',
    'oauth_scopes' => 'Scopes',
    'oauth_callback_url' => 'Your application authorization callback URL.',
    'create_client' => 'Create Client',
    'no_scopes' => 'No scopes',
    'asset_tag_title' => 'Update Asset Tag Settings',
    'barcode_title' => 'Update Barcode Settings',
    'barcodes' => 'Barcodes',
    'barcodes_help_overview' => 'Barcode &amp; QR settings',
    'barcodes_help' => 'This will attempt to delete cached barcodes. This would typically only be used if your barcode settings have changed, or if your Snipe-IT URL has changed. Barcodes will be re-generated when accessed next.',
    'barcodes_spinner' => 'Attempting to delete files...',
    'barcode_delete_cache' => 'Delete Barcode Cache',
    'branding_title' => 'Update Branding Settings',
    'general_title' => 'Update General Settings',
    'mail_test' => 'Send Test',
    'mail_test_help' => 'This will attempt to send a test mail to :replyto.',
    'filter_by_keyword' => 'Filter by setting keyword',
    'security' => 'Security',
    'security_title' => 'Update Security Settings',
    'security_keywords' => 'password, passwords, requirements, two factor, two-factor, common passwords, remote login, logout, authentication',
    'security_help' => 'Two-factor, Password Restrictions',
    'groups_keywords' => 'permissions, permission groups, authorization',
    'groups_help' => 'Account permission groups',
    'localization' => 'Localization',
    'localization_title' => 'Update Localization Settings',
    'localization_keywords' => 'localization, currency, local, locale, time zone, timezone, international, internatinalization, language, languages, translation',
    'localization_help' => 'Language, date display',
    'notifications' => 'Notifications',
    'notifications_help' => 'Email Alerts & Audit Settings',
    'asset_tags_help' => 'Incrementing and prefixes',
    'labels' => 'Labels',
    'labels_title' => 'Update Label Settings',
    'labels_help' => 'Label sizes &amp; settings',
    'purge_keywords' => 'permanently delete',
    'purge_help' => 'Ang mga Rekords na Nai-delete sa Pag-purge',
    'ldap_extension_warning' => 'It does not look like the LDAP extension is installed or enabled on this server. You can still save your settings, but you will need to enable the LDAP extension for PHP before LDAP syncing or login will work.',
    'ldap_ad' => 'LDAP/AD',
    'employee_number' => 'Employee Number',
    'create_admin_user' => 'Create a User ::',
    'create_admin_success' => 'Success! Your admin user has been added!',
    'create_admin_redirect' => 'Click here to go to your app login!',
    'setup_migrations' => 'Database Migrations ::',
    'setup_no_migrations' => 'There was nothing to migrate. Your database tables were already set up!',
    'setup_successful_migrations' => 'Your database tables have been created',
    'setup_migration_output' => 'Migration output:',
    'setup_migration_create_user' => 'Next: Create User',
    'ldap_settings_link' => 'LDAP Settings Page',
    'slack_test' => 'Test <i class="fab fa-slack"></i> Integration',
    'label2_enable'           => 'New Label Engine',
    'label2_enable_help'      => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template'         => 'Template',
    'label2_template_help'    => 'Select which template to use for label generation',
    'label2_title'            => 'Ang Pamagat',
    'label2_title_help'       => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo'       => 'Use Asset Logo',
    'label2_asset_logo_help'  => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type'          => '1D Barcode Type',
    'label2_1d_type_help'     => 'Format for 1D barcodes',
    'label2_2d_type'          => 'Ang Uri ng 2D Barcode',
    'label2_2d_type_help'     => 'Format for 2D barcodes',
    'label2_2d_target'        => '2D Barcode Target',
    'label2_2d_target_help'   => 'The URL the 2D barcode points to when scanned',
    'label2_fields'           => 'Field Definitions',
    'label2_fields_help'      => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'help_asterisk_bold'    => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use'     => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default'               => 'Default',
    'none'                  => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login'      => 'Google Workspace Login Settings',
    'enable_google_login'  => 'Enable users to login with Google Workspace',
    'enable_google_login_help'  => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',
    'profile_edit'          => 'Edit Profile',
    'profile_edit_help'          => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Upload custom default avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',

];
