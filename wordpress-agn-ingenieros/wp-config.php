<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'agn-ingenieros');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', 'daniel123');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd<(a7$W(# bCJ@FP?UIEu~/9pt;d6V_&u+F2!isO/MGk+o;ZGhLl-J-|uzj{eA:i');
define('SECURE_AUTH_KEY',  '8%^8d7Y?=$TT6. Y)%v?NFZ]m1es3ASE@M/myH*dT5|d.hYXlizk4N}-^:Mv(ETW');
define('LOGGED_IN_KEY',    'V-[/BNOWRD^|mq9!#LA-54Ekv~]Ru}+B61$MyiF<+n=6W+U{ lwtz*m|+Wo$W8,E');
define('NONCE_KEY',        'g>b^8,{pdNRotrRMqa2 eXfwPm:DnromB-n>T.Hl:oL[RMGt@DEd^8+Gk(ir6l-V');
define('AUTH_SALT',        'mn1{*49|gr3Zh3MOaK:O:4-BN!K:r_PL9<|+OHy*2{F,Jws7!Q}SLfZu++-tvWp#');
define('SECURE_AUTH_SALT', ';XY+&+%^fxjXr!}wzHz07^(x+-zkr8*u ,?;%9ZU%s:B>)$#q|`-$|[2w@YnN&1}');
define('LOGGED_IN_SALT',   '-k-5v4!k<)l@r#ueAGY47yMZk]14XL]l^=C8[m|+uNXu6&)w]2a}_3,wI&|+l0(b');
define('NONCE_SALT',       '1+D)->7mu`aNmS wO.;5SpFVJ1Bk[jGRyOUf{at92 Rq>%{(|jAC|cvLD(GT5&+!');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
