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
define('DB_NAME', 'hayemple_malu');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', 'j-`e Dc%~qGh]xe[^(U(DW tci~QQ{`iBcuVyGi<R.0hx2AGxTN-fUZIc~,@%{$L'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'anLi^K-d4.^Z>@8wq}7xFG<e6)$UMaV~DcK:@|c&5rg=~gp4m4YH-^}tWKVoj*4o'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'd?<^e1!b`ma.e^J4.xOSgcK?Z0s33f3:H5$-NCleNc<h}|j}|u-Z)5Ot3RIsU4L='); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'uyW2.- WsvYSg#Mue[XSKgJ|I?2D=JbMMZAEW[c{tbieQy{Ky%Q@Fs,i}I0jNKkn'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'hbmUf!LXpP*cR|]bE6,T,N3;IrqH_llcnaS{-0PYXv=b6!}}62;Bxp$gMdK3X{$h'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'G[+Nne<4yDnjT=0@gu(}n4XD)</bkv]X8#Pw]}Ugvo4K# #(Ig**YJ)X^_PZI-0&'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'WfdU/7&Nf5a1w:sl_Bpl8KRsMdSzhH4hB`wta/P3FpWjEB&@Dr+}+zq[Xe_Ng1n?'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'ixLYTP87ahrW8;h}].KoSqr7t5o-VERSWE#}cHUY01rq*|X(q8K7nM4-5^`l)M8U'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_malu_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

