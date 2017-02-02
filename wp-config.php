<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wp_brunsmex');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '=fmtzH&ixoBf_PL:KnvMrV2-_~vATM}Nuv*Oe{el{9)2c6v[ -K+x+Xq#Kz9=nWd');
define('SECURE_AUTH_KEY', '%s$/j:^I1@WBC=i0myS_*,Nq=IMJ_-yc 71NAbYOfT*ont~t3!*)8xJRwd+/.lrd');
define('LOGGED_IN_KEY', '{*V6!p1=F46|48p(.A&+m<if&p5Fm,Qb(|%d,zt-Hx%/M+JEkXOc?*C3DY79?6ws');
define('NONCE_KEY', '})gXA`b<%Bji>}V3lk_FO&@Lc^b!:~|i}sAb8G=/VSP@=7X-m?{Iy7Mn!IlpZEJg');
define('AUTH_SALT', 'p}DP(J`9TVR~.}(w%1]~8fOJ@>s> aaj)|<>~wCe(tnfzaP^L|Q~(B3n{r&]h1B1');
define('SECURE_AUTH_SALT', '}8.>gR2_`=V*VQ#:RIQW0.{d1qhpwqQ{fp*M^ip3:$QXv2](k/bYG_FC*,I!9)-e');
define('LOGGED_IN_SALT', 'LcnH`vjol|_p<ah_JU >M;I sd;WTI34+{(SJ`B^+%sF<<JA?--+#M:$cLTP;AF<');
define('NONCE_SALT', '1WyCfN7NIAl@kH M>!f$61bO+>FnPcn)yIE$zkIWE=b~+FEg6YeFW?>yb=JuZ7Yz');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

