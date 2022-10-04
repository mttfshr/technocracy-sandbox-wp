<?php
# Database Configuration
define( 'DB_NAME', 'wp_techsandbox' );
define( 'DB_USER', 'techsandbox' );
define( 'DB_PASSWORD', 'r9N7UctweI58TIaoKag4' );
define( 'DB_HOST', '127.0.0.1:3306' );
define( 'DB_HOST_SLAVE', '127.0.0.1:3306' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         '[nv|tA=eHwJX@Yr)`cv3VvCjVS~$G{ QYsgYp: [Q@RhR=8orwi,K>jz9AT7?q.C');
define('SECURE_AUTH_KEY',  '`KxLO7 BfQ4-/Bhx.T(E)<@i8>]0;)[33;U?JHPShAK_h(O{a[{Qc=JbIB1n<8q/');
define('LOGGED_IN_KEY',    '2Q!LC.g(}=[z-L&fu/.I= mK&GwDaRml~Jb-Vq~6eIAz,6?+D~yB/}Ntp:-v>1)b');
define('NONCE_KEY',        '7<muygKy,Ms^169dCV=6.B9-vUfnm!Q,+JZ(oqKgkQD0x?aqu2*_Qd)c_5l!%|F8');
define('AUTH_SALT',        'EsT>^:vI*u}#dNgei0wPqv@QDU(IN_?>Z}-d`MaT%.a_6q(*Z{38Iy%SN_B/FEl{');
define('SECURE_AUTH_SALT', 'tObxzm$O1Y +.iv~aZ-cch-#>~eH;9K9-3mH~+/GAcNp<3d+5|G)t<C/8vTPol#$');
define('LOGGED_IN_SALT',   '(/f`lEzeKcn%sb7Yo-1l4Kk2M?-C)ixs/[Ek=&hP{O9.K4p &lFc*_ME-H@M/[f.');
define('NONCE_SALT',       'mdJRpa-^r:7v)c+D|6*VJq58z;U9VWLUUIi^:;.fCWhk_gXNn=4#2/C8AQiLozu]');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'techsandbox' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

define( 'WPE_APIKEY', '2b39793b6a1c771b90585b62c8b400802985846c' );

define( 'WPE_CLUSTER_ID', '156563' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

umask(0002);

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'techsandbox.wpengine.com', 1 => 'techsandbox.wpenginepowered.com', );

$wpe_varnish_servers=array ( 0 => 'pod-156563', );

$wpe_special_ips=array ( 0 => '35.193.8.106', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
