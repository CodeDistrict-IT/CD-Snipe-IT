<?php

return [
    'ad' => 'செயலில் உள்ள அடைவு',
    'ad_domain' => 'Active Directory டொமைன்',
    'ad_domain_help' => 'இது சில நேரங்களில் உங்கள் மின்னஞ்சல் டொமைன் போலவே இருக்கும், ஆனால் எப்போதும் இல்லை.',
    'ad_append_domain_label' => 'Append domain name',
    'ad_append_domain' => 'Append domain name to username field',
    'ad_append_domain_help' => 'User isn\'t required to write "username@domain.local", they can just type "username".',
    'admin_cc_email' => 'CC Email',
    'admin_cc_email_help' => 'If you would like to send a copy of checkin/checkout emails that are sent to users to an additional email account, enter it here. Otherwise leave this field blank.',
    'admin_settings' => 'Admin Settings',
    'is_ad' => 'இது ஒரு Active Directory சேவையகம்',
    'alerts' => 'Alerts',
    'alert_title' => 'Update Notification Settings',
    'alert_email' => 'எச்சரிக்கைகள் அனுப்ப',
    'alert_email_help' => 'Email addresses or distribution lists you want alerts to be sent to, comma separated',
    'alerts_enabled' => 'எச்சரிக்கைகள் இயக்கப்பட்டன',
    'alert_interval' => 'அலாரங்கள் முற்றுப்பெறல் (நாட்களில்)',
    'alert_inv_threshold' => 'சரக்கு அலர்ட் த்ரொல்ஹோல்',
    'allow_user_skin' => 'Allow User Skin',
    'allow_user_skin_help_text' => 'Checking this box will allow a user to override the UI skin with a different one.',
    'asset_ids' => 'சொத்து ID கள்',
    'audit_interval' => 'ஆடிட் இடைவேளை',
    'audit_interval_help' => 'If you are required to regularly physically audit your assets, enter the interval in months that you use. If you update this value, all of the "next audit dates" for assets with an upcoming audit date will be updated.',
    'audit_warning_days' => 'தணிக்கை எச்சரிக்கை புராணம்',
    'audit_warning_days_help' => 'தணிக்கைக்கு ஆட்கள் தடையின்றி எத்தனை நாட்கள் முன்கூட்டியே நாம் எச்சரிக்க வேண்டும்?',
    'auto_increment_assets' => 'Generate auto-incrementing asset tags',
    'auto_increment_prefix' => 'முன்னுரிமை (விரும்பினால்)',
    'auto_incrementing_help' => 'Enable auto-incrementing asset tags first to set this',
    'backups' => 'காப்புப்பிரதிகளில்',
    'backups_help' => 'Create, download, and restore backups ',
    'backups_restoring' => 'Restoring from Backup',
    'backups_clean' => 'Clean the backed-up database before restore',
    'backups_clean_helptext' => "This can be useful if you're changing between database versions",
    'backups_upload' => 'Upload Backup',
    'backups_path' => 'Backups on the server are stored in <code>:path</code>',
    'backups_restore_warning' => 'Use the restore button <small><span class="btn btn-xs btn-warning"><i class="text-white fas fa-retweet" aria-hidden="true"></i></span></small> to restore from a previous backup. (This does not currently work with S3 file storage or Docker.)<br><br>Your <strong>entire :app_name database and any uploaded files will be completely replaced</strong> by what\'s in the backup file.  ',
    'backups_logged_out' => 'All existing users, including you, will be logged out once your restore is complete.',
    'backups_large' => 'Very large backups may time out on the restore attempt and may still need to be run via command line. ',
    'barcode_settings' => 'பார்கோடு அமைப்புகள்',
    'confirm_purge' => 'தூய்மையை உறுதிப்படுத்துக',
    'confirm_purge_help' => 'Enter the text "DELETE" in the box below to purge your deleted records. This action cannot be undone and will PERMANENTLY delete all soft-deleted items and users. (You should make a backup first, just to be safe.)',
    'custom_css' => 'தனிப்பயன் CSS',
    'custom_css_help' => 'நீங்கள் பயன்படுத்த விரும்பும் தனிப்பயன் CSS மீறல்களை உள்ளிடுக. &lt;style&gt;&lt;/style&gt; குறிச்சொற்களை சேர்க்க வேண்டாம்.',
    'custom_forgot_pass_url' => 'Custom Password Reset URL',
    'custom_forgot_pass_url_help' => 'This replaces the built-in forgotten password URL on the login screen, useful to direct people to internal or hosted LDAP password reset functionality. It will effectively disable local user forgotten password functionality.',
    'dashboard_message' => 'Dashboard Message',
    'dashboard_message_help' => 'This text will appear on the dashboard for anyone with permission to view the dashboard.',
    'default_currency' => 'இயல்புநிலை நாணயம்',
    'default_eula_text' => 'இயல்புநிலை EULA',
    'default_language' => 'இயல்புநிலை மொழி',
    'default_eula_help_text' => 'நீங்கள் தனிபயன் EULA களை குறிப்பிட்ட சொத்து வகையுடன் இணைக்கலாம்.',
    'acceptance_note' => 'Add a note for your decision (Optional)',
    'display_asset_name' => 'சொத்து பெயரைக் காட்டு',
    'display_checkout_date' => 'காட்சி புதுப்பிப்பு தேதி',
    'display_eol' => 'அட்டவணை பார்வையில் EOL காட்டவும்',
    'display_qr' => 'சதுரக் குறியீடுகள் காட்டவும்',
    'display_alt_barcode' => '1D பார்கோடு காட்டவும்',
    'email_logo' => 'Email Logo',
    'barcode_type' => '2 டி பார்கோடு வகை',
    'alt_barcode_type' => '1 டி பார்கோடு வகை',
    'email_logo_size' => 'Square logos in email look best. ',
    'enabled' => 'Enabled',
    'eula_settings' => 'EULA அமைப்புகள்',
    'eula_markdown' => 'இந்த EULA <a href="https://help.github.com/articles/github-flavored-markdown/"> கிட் ருசியான மார்க் டவுன் 12335_1_321 ஐ அனுமதிக்கிறது.',
    'favicon' => 'Favicon',
    'favicon_format' => 'Accepted filetypes are ico, png, and gif. Other image formats may not work in all browsers.',
    'favicon_size' => 'Favicons should be square images, 16x16 pixels.',
    'footer_text' => 'Additional Footer Text ',
    'footer_text_help' => 'This text will appear in the right-side footer. Links are allowed using <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a>. Line breaks, headers, images, etc may result in unpredictable results.',
    'general_settings' => 'பொது அமைப்புகள்',
    'general_settings_keywords' => 'company support, signature, acceptance, email format, username format, images, per page, thumbnail, eula, gravatar, tos, dashboard, privacy',
    'general_settings_help' => 'Default EULA and more',
    'generate_backup' => 'காப்பு உருவாக்குதல்',
    'google_workspaces' => 'Google Workspaces',
    'header_color' => 'தலைப்பு வண்ணம்',
    'info' => 'உங்கள் நிறுவலின் சில அம்சங்களைத் தனிப்பயனாக்க இந்த அமைப்புகள் உங்களை அனுமதிக்கின்றன.',
    'label_logo' => 'Label Logo',
    'label_logo_size' => 'Square logos look best - will be displayed in the top right of each asset label. ',
    'laravel' => 'லாரேவல் பதிப்பு',
    'ldap' => 'LDAP',
    'ldap_default_group' => 'Default Permissions Group',
    'ldap_default_group_info' => 'Select a group to assign to newly synced users. Remember that a user takes on the permissions of the group they are assigned.',
    'no_default_group' => 'No Default Group',
    'ldap_help' => 'LDAP/Active Directory',
    'ldap_client_tls_key' => 'LDAP Client TLS Key',
    'ldap_client_tls_cert' => 'LDAP Client-Side TLS Certificate',
    'ldap_enabled' => 'LDAP இயக்கப்பட்டது',
    'ldap_integration' => 'LDAP ஒருங்கிணைப்பு',
    'ldap_settings' => 'LDAP அமைப்புகள்',
    'ldap_client_tls_cert_help' => 'Client-Side TLS Certificate and Key for LDAP connections are usually only useful in Google Workspace configurations with "Secure LDAP." Both are required.',
    'ldap_location' => 'LDAP Location',
    'ldap_location_help' => 'The Ldap Location field should be used if <strong>an OU is not being used in the Base Bind DN.</strong> Leave this blank if an OU search is being used.',
    'ldap_login_test_help' => 'Enter a valid LDAP username and password from the base DN you specified above to test whether your LDAP login is configured correctly. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_login_sync_help' => 'This only tests that LDAP can sync correctly. If your LDAP Authentication query is not correct, users may still not be able to login. YOU MUST SAVE YOUR UPDATED LDAP SETTINGS FIRST.',
    'ldap_manager' => 'LDAP Manager',
    'ldap_server' => 'LDAP சேவையகம்',
    'ldap_server_help' => 'This should start with ldap:// (for unencrypted) or ldaps:// (for TLS or SSL)',
    'ldap_server_cert' => 'LDAP SSL சான்றிதழ் சரிபார்ப்பு',
    'ldap_server_cert_ignore' => 'தவறான SSL சான்றிதழை அனுமதி',
    'ldap_server_cert_help' => 'நீங்கள் சுயமாக கையொப்பமிடப்பட்ட SSL சான்றிதழைப் பயன்படுத்துகிறீர்கள் என்றால், இந்த செல்லாத பெட்டியை தேர்வுசெய்து தவறான SSL சான்றிதழை ஏற்றுக்கொள்ள விரும்புகிறேன்.',
    'ldap_tls' => 'TLS ஐப் பயன்படுத்துக',
    'ldap_tls_help' => 'நீங்கள் உங்கள் LDAP சர்வரில் STARTTLS ஐ இயங்கினால் மட்டுமே இதை சோதிக்க வேண்டும்.',
    'ldap_uname' => 'LDAP Bind பயனர்பெயர்',
    'ldap_dept' => 'LDAP Department',
    'ldap_phone' => 'LDAP Telephone Number',
    'ldap_jobtitle' => 'LDAP Job Title',
    'ldap_country' => 'LDAP Country',
    'ldap_pword' => 'LDAP Bind கடவுச்சொல்',
    'ldap_basedn' => 'அடிப்படை பிணை DN',
    'ldap_filter' => 'LDAP வடிகட்டி',
    'ldap_pw_sync' => 'LDAP கடவுச்சொல் ஒத்திசைவு',
    'ldap_pw_sync_help' => 'உள்ளூர் கடவுச்சொற்களை ஒத்திசைத்த LDAP கடவுச்சொற்களை வைத்திருக்க விரும்பவில்லை என்றால், இந்த பெட்டியை தேர்வுநீக்கம் செய்யவும். இதன் விளைவாக உங்கள் LDAP சேவையகம் சில காரணங்களுக்காக கிடைக்கவில்லை என்றால் உங்கள் பயனர் உள்நுழைய முடியாது என்று அர்த்தம்.',
    'ldap_username_field' => 'பயனாளர் புலம்',
    'ldap_lname_field' => 'கடைசி பெயர்',
    'ldap_fname_field' => 'LDAP முதல் பெயர்',
    'ldap_auth_filter_query' => 'LDAP அங்கீகார வினவல்',
    'ldap_version' => 'LDAP பதிப்பு',
    'ldap_active_flag' => 'LDAP செயலில் கொடி',
    'ldap_activated_flag_help' => 'This value is used to determine whether a synced user can login to Snipe-IT. <strong>It does not affect the ability to check items in or out to them</strong>, and should be the <strong>attribute name</strong> within your AD/LDAP, <strong>not the value</strong>. <br><br>If this field is set to a field name that does not exist in your AD/LDAP, or the value in the AD/LDAP field is set to <code>0</code> or <code>false</code>, <strong>user login will be disabled</strong>. If the value in the AD/LDAP field is set to <code>1</code> or <code>true</code> or <em>any other text</em> means the user can log in. When the field is blank in your AD, we respect the <code>userAccountControl</code> attribute, which usually allows non-suspended users to log in.',
    'ldap_emp_num' => 'LDAP பணியாளர் எண்',
    'ldap_email' => 'LDAP மின்னஞ்சல்',
    'ldap_test' => 'Test LDAP',
    'ldap_test_sync' => 'Test LDAP Synchronization',
    'license' => 'Software License',
    'load_remote' => 'Load Remote Avatars',
    'load_remote_help_text' => 'Uncheck this box if your install cannot load scripts from the outside internet. This will prevent Snipe-IT from trying load avatars from Gravatar or other outside sources.',
    'login' => 'Login Attempts',
    'login_attempt' => 'Login Attempt',
    'login_ip' => 'IP Address',
    'login_success' => 'Success?',
    'login_user_agent' => 'User Agent',
    'login_help' => 'List of attempted logins',
    'login_note' => 'குறிப்பு குறிப்பு',
    'login_note_help' => 'விருப்பமாக உங்கள் உள்நுழைவுத் திரையில் சில விதிமுறைகளைச் சேர்க்கலாம், உதாரணமாக இழந்த அல்லது களவாடப்பட்ட சாதனத்தை கண்டறிந்தவர்களுக்கு உதவவும். இந்த புலம் <a href="https://help.github.com/articles/github-flavored-markdown/"> ஜி.ஐ.டி ருசியான மார்க் டவுன் </a> ஐ ஏற்றுக்கொள்கிறது',
    'login_remote_user_text' => 'Remote User login options',
    'login_remote_user_enabled_text' => 'Enable Login with Remote User Header',
    'login_remote_user_enabled_help' => 'This option enables Authentication via the REMOTE_USER header according to the "Common Gateway Interface (rfc3875)"',
    'login_common_disabled_text' => 'Disable other authentication mechanisms',
    'login_common_disabled_help' => 'This option disables other authentication mechanisms. Just enable this option if you are sure that your REMOTE_USER login is already working',
    'login_remote_user_custom_logout_url_text' => 'Custom logout URL',
    'login_remote_user_custom_logout_url_help' => 'If a url is provided here, users will get redirected to this URL after the user logs out of Snipe-IT. This is useful to close the user sessions of your Authentication provider correctly.',
    'login_remote_user_header_name_text' => 'Custom user name header',
    'login_remote_user_header_name_help' => 'Use the specified header instead of REMOTE_USER',
    'logo' => 'சின்னம்',
    'logo_print_assets' => 'Use in Print',
    'logo_print_assets_help' => 'Use branding on printable asset lists ',
    'full_multiple_companies_support_help_text' => 'தங்கள் நிறுவனத்தின் சொத்துக்களுக்கு நிறுவனங்களுக்கு ஒதுக்கப்பட்டுள்ள பயனர்களை (நிர்வாகிகள் உட்பட) கட்டுப்படுத்துதல்.',
    'full_multiple_companies_support_text' => 'முழு பல நிறுவனங்கள் ஆதரவு',
    'show_in_model_list' => 'Show in Model Dropdowns',
    'optional' => 'விருப்ப',
    'per_page' => 'பக்கம் ஒன்றுக்கு முடிவு',
    'php' => 'PHP பதிப்பு',
    'php_info' => 'PHP info',
    'php_overview' => 'PHP',
    'php_overview_keywords' => 'phpinfo, system, info',
    'php_overview_help' => 'PHP System info',
    'php_gd_info' => 'நீங்கள் QR குறியீடுகள் காட்ட PHP- ஜிடி நிறுவ வேண்டும், நிறுவல் வழிமுறைகளை பார்க்கவும்.',
    'php_gd_warning' => 'PHP பட செயலாக்கம் மற்றும் GD சொருகி நிறுவப்படவில்லை.',
    'pwd_secure_complexity' => 'கடவுச்சொல் சிக்கல்',
    'pwd_secure_complexity_help' => 'நீங்கள் செயலாக்க விரும்பும் எந்த கடவுச்சொல் சிக்கலான விதிகள் என்பதைத் தேர்ந்தெடுக்கவும்.',
    'pwd_secure_complexity_disallow_same_pwd_as_user_fields' => 'Password cannot be the same as first name, last name, email, or username',
    'pwd_secure_complexity_letters' => 'Require at least one letter',
    'pwd_secure_complexity_numbers' => 'Require at least one number',
    'pwd_secure_complexity_symbols' => 'Require at least one symbol',
    'pwd_secure_complexity_case_diff' => 'Require at least one uppercase and one lowercase',
    'pwd_secure_min' => 'கடவுச்சொல் குறைந்தபட்ச எழுத்துகள்',
    'pwd_secure_min_help' => 'குறைந்தபட்சம் அனுமதிக்கப்பட்ட மதிப்பு 8 ஆகும்',
    'pwd_secure_uncommon' => 'பொதுவான கடவுச்சொற்களைத் தடுக்கவும்',
    'pwd_secure_uncommon_help' => 'இது முரண்பாடுகளில் அறிவிக்கப்பட்ட மேல்மட்ட கடவுச்சொற்களைவிட பொதுவான கடவுச்சொற்களைப் பயன்படுத்துவதை அனுமதிக்காது.',
    'qr_help' => 'முதலில் அமைக்க QR குறியீடுகள் இயக்கவும்',
    'qr_text' => 'QR குறியீடு உரை',
    'saml' => 'SAML',
    'saml_title' => 'Update SAML settings',
    'saml_help' => 'SAML settings',
    'saml_enabled' => 'SAML enabled',
    'saml_integration' => 'SAML Integration',
    'saml_sp_entityid' => 'Entity ID',
    'saml_sp_acs_url' => 'Assertion Consumer Service (ACS) URL',
    'saml_sp_sls_url' => 'Single Logout Service (SLS) URL',
    'saml_sp_x509cert' => 'Public Certificate',
    'saml_sp_metadata_url' => 'Metadata URL',
    'saml_idp_metadata' => 'SAML IdP Metadata',
    'saml_idp_metadata_help' => 'You can specify the IdP metadata using a URL or XML file.',
    'saml_attr_mapping_username' => 'Attribute Mapping - Username',
    'saml_attr_mapping_username_help' => 'NameID will be used if attribute mapping is unspecified or invalid.',
    'saml_forcelogin_label' => 'SAML Force Login',
    'saml_forcelogin' => 'Make SAML the primary login',
    'saml_forcelogin_help' => 'You can use \'/login?nosaml\' to get to the normal login page.',
    'saml_slo_label' => 'SAML Single Log Out',
    'saml_slo' => 'Send a LogoutRequest to IdP on Logout',
    'saml_slo_help' => 'This will cause the user to be first redirected to the IdP on logout. Leave unchecked if the IdP doesn\'t correctly support SP-initiated SAML SLO.',
    'saml_custom_settings' => 'SAML Custom Settings',
    'saml_custom_settings_help' => 'You can specify additional settings to the onelogin/php-saml library. Use at your own risk.',
    'saml_download' => 'Download Metadata',
    'setting' => 'அமைப்பை',
    'settings' => 'அமைப்புகள்',
    'show_alerts_in_menu' => 'Show alerts in top menu',
    'show_archived_in_list' => 'Archived Assets',
    'show_archived_in_list_text' => 'Show archived assets in the "all assets" listing',
    'show_assigned_assets' => 'Show assets assigned to assets',
    'show_assigned_assets_help' => 'Display assets which were assigned to the other assets in View User -> Assets, View User -> Info -> Print All Assigned and in Account -> View Assigned Assets.',
    'show_images_in_email' => 'Show images in emails',
    'show_images_in_email_help' => 'Uncheck this box if your Snipe-IT installation is behind a VPN or closed network and users outside the network will not be able to load images served from this installation in their emails.',
    'site_name' => 'தள பெயர்',
    'integrations' => 'Integrations',
    'slack' => 'Slack',
    'general_webhook' => 'General Webhook',
    'ms_teams' => 'Microsoft Teams',
    'webhook' => ':app',
    'webhook_presave' => 'Test to Save',
    'webhook_title' => 'Update Webhook Settings',
    'webhook_help' => 'Integration settings',
    'webhook_botname' => ':app Botname',
    'webhook_channel' => ':app Channel',
    'webhook_endpoint' => ':app Endpoint',
    'webhook_integration' => ':app Settings',
    'webhook_test' => 'Test :app integration',
    'webhook_integration_help' => ':app integration is optional, however the endpoint and channel are required if you wish to use it. To configure :app integration, you must first <a href=":webhook_link" target="_new" rel="noopener">create an incoming webhook</a> on your :app account. Click on the <strong>Test :app Integration</strong> button to confirm your settings are correct before saving. ',
    'webhook_integration_help_button' => 'Once you have saved your :app information, a test button will appear.',
    'webhook_test_help' => 'Test whether your :app integration is configured correctly. YOU MUST SAVE YOUR UPDATED :app SETTINGS FIRST.',
    'shortcuts_enabled' => 'Enable Shortcuts',
    'shortcuts_help_text' => '<strong>Windows</strong>: Alt + Access key, <strong>Mac</strong>: Control + Option + Access key',
    'snipe_version' => 'ஸ்னாப்-ஐடி பதிப்பு',
    'support_footer' => 'Support Footer Links ',
    'support_footer_help' => 'Specify who sees the links to the Snipe-IT Support info and Users Manual',
    'version_footer' => 'Version in Footer ',
    'version_footer_help' => 'Specify who sees the Snipe-IT version and build number.',
    'system' => 'கணினி தகவல்',
    'update' => 'அமைப்புகள் புதுப்பிக்கவும்',
    'value' => 'மதிப்பு',
    'brand' => 'பிராண்டிங்',
    'brand_keywords' => 'footer, logo, print, theme, skin, header, colors, color, css',
    'brand_help' => 'Logo, Site Name',
    'web_brand' => 'Web Branding Type',
    'about_settings_title' => 'அமைப்புகள் பற்றி',
    'about_settings_text' => 'உங்கள் நிறுவலின் சில அம்சங்களைத் தனிப்பயனாக்க இந்த அமைப்புகள் உங்களை அனுமதிக்கின்றன.',
    'labels_per_page' => 'பக்கத்திற்கு லேபிள்கள்',
    'label_dimensions' => 'லேபிள் பரிமாணங்கள் (அங்குலங்கள்)',
    'next_auto_tag_base' => 'அடுத்த ஆட்டோ-அதிகரிப்பு',
    'page_padding' => 'பக்க விளிம்புகள் (அங்குலங்கள்)',
    'privacy_policy_link' => 'Link to Privacy Policy',
    'privacy_policy' => 'Privacy Policy',
    'privacy_policy_link_help' => 'If a url is included here, a link to your privacy policy will be included in the app footer and in any emails that the system sends out, in compliance with GDPR. ',
    'purge' => 'நீக்கப்பட்ட ரெகார்டுகளை அகற்றவும்',
    'purge_deleted' => 'Purge Deleted ',
    'labels_display_bgutter' => 'லேபிள் கீழ்க்காணும்',
    'labels_display_sgutter' => 'லேபிள் பக்க ஜட்டர்',
    'labels_fontsize' => 'லேபிள் எழுத்துரு அளவு',
    'labels_pagewidth' => 'லேபிள் தாள் அகலம்',
    'labels_pageheight' => 'லேபிள் தாள் உயரம்',
    'label_gutters' => 'லேபிள் இடைவெளி (அங்குலங்கள்)',
    'page_dimensions' => 'பக்க பரிமாணங்கள் (அங்குலங்கள்)',
    'label_fields' => 'லேபிள் புலங்கள்',
    'inches' => 'அங்குல',
    'width_w' => 'W',
    'height_h' => 'மணி',
    'show_url_in_emails' => 'மின்னஞ்சல்களில் Snipe-IT இணைப்பு',
    'show_url_in_emails_help_text' => 'உங்கள் மின்னஞ்சல் அடிக்குறிப்புகளில் உங்கள் கத்தோலிக்க-தகவல் நிறுவலுக்கு மீண்டும் இணைக்க விரும்பவில்லை என்றால் இந்த பெட்டியைத் தேர்வுநீக்குக. உங்கள் பயனர்களில் பெரும்பாலானவர்கள் உள்நுழையவில்லை என்றால் பயனுள்ளதாக இருக்கும்.',
    'text_pt' => 'புள்',
    'thumbnail_max_h' => 'அதிகபட்ச சிறு உயரம்',
    'thumbnail_max_h_help' => 'பட்டியல் பார்வையில் சிறுபடங்களைக் காட்டக்கூடிய பிக்சல்களில் அதிகபட்ச உயரம். குறைந்தபட்சம் 25, அதிகபட்சம் 500.',
    'two_factor' => 'இரண்டு காரணி அங்கீகாரம்',
    'two_factor_secret' => 'இரண்டு காரணி குறியீடு',
    'two_factor_enrollment' => 'இரண்டு காரணி பதிவு',
    'two_factor_enabled_text' => 'இரு காரணி இயக்கு',
    'two_factor_reset' => 'இரண்டு காரணி இரகசியத்தை மீட்டமை',
    'two_factor_reset_help' => 'This will force the user to enroll their device with their authenticator app again. This can be useful if their currently enrolled device is lost or stolen. ',
    'two_factor_reset_success' => 'இரண்டு காரணி சாதனம் வெற்றிகரமாக மீட்டமைக்கப்பட்டது',
    'two_factor_reset_error' => 'இரண்டு காரணி சாதன மீட்டமைப்பு தோல்வியடைந்தது',
    'two_factor_enabled_warning' => 'தற்போது இயங்கவில்லையெனில் இரண்டு-காரணி செயல்படுத்துவதால், உடனடியாக Google Auth பதிவுசெய்யப்பட்ட சாதனத்துடன் அங்கீகரிக்கும்படி கட்டாயப்படுத்தும். ஒருவர் தற்போது பதிவுசெய்யப்படவில்லை என்றால், உங்கள் சாதனம் பதிவுசெய்யும் திறனை நீங்கள் பெறுவீர்கள்.',
    'two_factor_enabled_help' => 'இது Google Authenticator ஐ பயன்படுத்தி இரு காரணி அங்கீகாரத்தை இயக்கும்.',
    'two_factor_optional' => 'தேர்ந்தெடுக்கப்பட்டவர்கள் (அனுமதிக்கப்பட்டால் பயனர்கள் இயக்கலாம் அல்லது முடக்கலாம்)',
    'two_factor_required' => 'எல்லா பயனர்களுக்கும் தேவை',
    'two_factor_disabled' => 'முடக்கப்பட்டது',
    'two_factor_enter_code' => 'இரு காரணி குறியீடு உள்ளிடவும்',
    'two_factor_config_complete' => 'கோட் சமர்ப்பிக்கவும்',
    'two_factor_enabled_edit_not_allowed' => 'இந்த அமைப்பைத் திருத்த உங்கள் நிர்வாகி அனுமதிக்கவில்லை.',
    'two_factor_enrollment_text' => 'இரண்டு காரணி அங்கீகாரம் தேவைப்படுகிறது, ஆனால் உங்கள் சாதனம் இதுவரை பதிவுசெய்யப்படவில்லை. உங்கள் Google Authenticator பயன்பாட்டைத் திறந்து உங்கள் சாதனத்தை சேர்ப்பதற்கு கீழே உள்ள QR குறியீட்டை ஸ்கேன் செய்யவும். உங்கள் சாதனத்தை நீங்கள் சேர்ந்தவுடன், கீழே உள்ள குறியீட்டை உள்ளிடுக',
    'require_accept_signature' => 'கையொப்பம் தேவை',
    'require_accept_signature_help_text' => 'இந்த அம்சத்தை இயக்குவதால், சொத்துக்களை ஏற்கும் வகையில் பயனர்கள் உடனே உள்நுழைய வேண்டும்.',
    'left' => 'விட்டு',
    'right' => 'வலது',
    'top' => 'மேல்',
    'bottom' => 'கீழே',
    'vertical' => 'செங்குத்து',
    'horizontal' => 'கிடைமட்ட',
    'unique_serial' => 'Unique serial numbers',
    'unique_serial_help_text' => 'Checking this box will enforce a uniqueness constraint on asset serials',
    'zerofill_count' => 'சொரெஃபைல் உள்ளிட்ட சொத்தின் குறிச்சொற்களை நீளம்',
    'username_format_help' => 'This setting will only be used by the import process if a username is not provided and we have to generate a username for you.',
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
    'purge_help' => 'நீக்கப்பட்ட ரெகார்டுகளை அகற்றவும்',
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
    'label2_enable' => 'New Label Engine',
    'label2_enable_help' => 'Switch to the new label engine. <b>Note: You will need to save this setting before setting others.</b>',
    'label2_template' => 'Template',
    'label2_template_help' => 'Select which template to use for label generation',
    'label2_title' => 'தலைப்பு',
    'label2_title_help' => 'The title to show on labels that support it',
    'label2_title_help_phold' => 'The placeholder <code>{COMPANY}</code> will be replaced with the asset&apos;s company name',
    'label2_asset_logo' => 'Use Asset Logo',
    'label2_asset_logo_help' => 'Use the logo of the asset&apos;s assigned company, rather than the value at <code>:setting_name</code>',
    'label2_1d_type' => '1D Barcode Type',
    'label2_1d_type_help' => 'Format for 1D barcodes',
    'label2_2d_type' => '2 டி பார்கோடு வகை',
    'label2_2d_type_help' => 'Format for 2D barcodes',
    'label2_2d_target' => '2D Barcode Target',
    'label2_2d_target_help' => 'The URL the 2D barcode points to when scanned',
    'label2_fields' => 'Field Definitions',
    'label2_fields_help' => 'Fields can be added, removed, and reordered in the left column. For each field, multiple options for Label and DataSource can be added, removed, and reordered in the right column.',
    'help_asterisk_bold' => 'Text entered as <code>**text**</code> will be displayed as bold',
    'help_blank_to_use' => 'Leave blank to use the value from <code>:setting_name</code>',
    'help_default_will_use' => '<code>:default</code> will use the value from <code>:setting_name</code>. <br>Note that the value of the barcodes must comply with the respective barcode spec in order to be successfully generated. Please see <a href="https://snipe-it.readme.io/docs/barcodes">the documentation <i class="fa fa-external-link"></i></a> for more details. ',
    'default' => 'Default',
    'none' => 'None',
    'google_callback_help' => 'This should be entered as the callback URL in your Google OAuth app settings in your organization&apos;s <strong><a href="https://console.cloud.google.com/" target="_blank">Google developer console <i class="fa fa-external-link" aria-hidden="true"></i></a></strong>.',
    'google_login' => 'Google Workspace Login Settings',
    'enable_google_login' => 'Enable users to login with Google Workspace',
    'enable_google_login_help' => 'Users will not be automatically provisioned. They must have an existing account here AND in Google Workspace, and their username here must match their Google Workspace email address. ',
    'mail_reply_to' => 'Mail Reply-To Address',
    'mail_from' => 'Mail From Address',
    'database_driver' => 'Database Driver',
    'bs_table_storage' => 'Table Storage',
    'timezone' => 'Timezone',
    'profile_edit' => 'Edit Profile',
    'profile_edit_help' => 'Allow users to edit their own profiles.',
    'default_avatar' => 'Upload custom default avatar',
    'default_avatar_help' => 'This image will be displayed as a profile if a user does not have a profile photo.',
    'restore_default_avatar' => 'Restore <a href=":default_avatar" data-toggle="lightbox" data-type="image">original system default avatar</a>',
    'restore_default_avatar_help' => '',
    'due_checkin_days' => 'Due For Checkin Warning',
    'due_checkin_days_help' => 'How many days before the expected checkin of an asset should it be listed in the "Due for checkin" page?',

];
