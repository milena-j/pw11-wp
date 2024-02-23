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
define( 'DB_NAME', 'PW11' );

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
define( 'AUTH_KEY',         'az1Z#^Nc+iZWUvq4%vrOcwekLI3_I)+0UUo9W0*po&9kQNY+yzloh)Rf}sULL]+E' );
define( 'SECURE_AUTH_KEY',  '=TXGF^TsZUeoPi+48r7f3GWOE<~g!rQ``Q[|3zu,MeW|h|%16n,2P)r}KHlS<zvw' );
define( 'LOGGED_IN_KEY',    '%}[:^kZ=*U~`CE@]0;ymYXCU[5,nuBF*{todr*I|P?WG/R:Gp68D0/%fkI?<5b35' );
define( 'NONCE_KEY',        '0{|kN]~>h;o# *.n40s<tL8x7,i1@:sjG_.|h- p6My=}.F>orJ&W%0M%D~$AE!n' );
define( 'AUTH_SALT',        'Cq!7O>xB_6ZyDiS8w)r4>SkVpg8=#4FgtU6|l&wgAk/7JKhlk A`=QY<53d]>212' );
define( 'SECURE_AUTH_SALT', '`[Is?Es~Zq-1f9t(1JfEB3(DEk4=X|Mf/dBpLelF /Od<A|CSX$+@y{;rS=b^{JF' );
define( 'LOGGED_IN_SALT',   '|2|IG_=He}yav:UF(,ifu9+~>_Ew5:;Acu4#<*nYC%:!<19qq+q,fO?GsJa1h2)x' );
define( 'NONCE_SALT',       '~S6MaCoKqROXybU#rV@AJov@TVCid(ezpZZyepfq}[++VVB`wmeZE_6Y:LWzf+nG' );

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
