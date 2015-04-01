<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vapestore');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'wp');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'TL]Jk=/cN-wM78J0:kj2uQ~#@JgcWRKLT-_M;B:h(*)dXYrajzJH36AQN[c|B.v>');
define('SECURE_AUTH_KEY',  '!|%xHLzFM2O2/sClOL$JSi<Z3s!T14*/,-JQaVzu#uPn_SGoM<LPW>=E{5z.`&*8');
define('LOGGED_IN_KEY',    '|s?D186RN7<!jiY-[J+_[E,|-& p)Nx@q^QrXp%:Ll<5J|(I-2098v@zX9{U9+9Y');
define('NONCE_KEY',        '[%YTj>sstvSE-zfFnb@E8Kt!S3!|Cwl<$:J_sGw{DSuU*4BnN@{zwG*bSUYUPlkh');
define('AUTH_SALT',        'I1JWsQ?YUv(a+QI&:aJDS&lJfhx_BN(NajE~*jA6rvua)|y{+.oI3js-fOBa<9-s');
define('SECURE_AUTH_SALT', '0}DlHZNgM&+&za0]sCLH(LIu-kLBO;U7c@:O |qz!&p{cZ}N|2aXd-5Mw;Dj)<Wo');
define('LOGGED_IN_SALT',   'Xd9&tv9DhpIKq(JIU<-A.cK;u&UmXC_K:n~n|yN-Q_Vi:mr2q-0E-OSYyE27d,xu');
define('NONCE_SALT',       '3Ig+5S9d(E>,|zqG,Jsoq8-R/)6;-EK5wnkcs-`$wv%+(%:qt]|ADzGtoy<Bk(=@');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
