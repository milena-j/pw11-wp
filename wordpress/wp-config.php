<?php
/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'pw11_wp' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', '' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@bKH^#x6bWjlsYm/QAJyx<e9PF-99|.o;`^(m#~H,t,VC|q972NTu1_wEe)`B9Rl' );
define( 'SECURE_AUTH_KEY',  'G|l(o_1umkX&lcQf)Tz|T0!s2(UUQF=^o@,6rmPA/uM*@BtNQqda]7:oQX#{Fs|2' );
define( 'LOGGED_IN_KEY',    '%!&U%VO?4_3 67N[LO.q2h*4p5zS/D!&*z=e2PI@niB^inva>F4?JX*PXc;D$%1R' );
define( 'NONCE_KEY',        'Ua=G:pQ]HdnAih8@@L062..+l2FoQC`_:dP_f&%D}#IlOj}2y# 5BQgeTi;yv_{-' );
define( 'AUTH_SALT',        'be-fN#Qz<.xt]9,)W2eP`FwKM}b.fiPIVxhBDyC7[%fLz|zZ+Z-PN/,;0?:-rj#o' );
define( 'SECURE_AUTH_SALT', 'n9%IU9OLqN[S% f9?l9:HhZpd~Pb:4m=}-ZB#l&H_(8)UCPHlzRaJk3.B4p`<t%G' );
define( 'LOGGED_IN_SALT',   ':S`NB,0_T76,G1oFr ta#:l~*OcYg+plzbz>_-`E]IJlBrFfto|TK*<-+m>:U?TS' );
define( 'NONCE_SALT',       'oA9X20Zk8-l$K+Bb_*P5+{,![6)$GONZJ{@}y7GU0@bi/ww5[8O{s;NVEsZ&NrLG' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
 */
$table_prefix = 'wp_';

/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */

define('FS_METHOD', 'direct');

/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
