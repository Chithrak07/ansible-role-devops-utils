# This is a bash include. White space is not trivial.

# This config corresponds to PHP 5.5, which is no longer supported.
# 5.5 is indicated by the /etc/php5/* style directory, as opposed to Ondrej's /etc/php/X.Y/* style directory.

PHP_VERSION="5"
PHP_FPM_SERVICE_NAME="php5-fpm"
readonly PHP_FPM_LOGROTATE_POSTROTATE="/usr/lib/php5/php5-fpm-reopenlogs"
readonly VHOSTLOGROOT="/var/log/vhosts"
readonly HOMEROOT="/home"
readonly NGINX_SITES_AVAILABLE="/etc/nginx/sites-available"
readonly NGINX_SITES_ENABLED="/etc/nginx/sites-enabled"
readonly APACHE_SITES_AVAILABLE="/etc/apache2/sites-available"
readonly APACHE_SITES_ENABLED="/etc/apache2/sites-enabled"
readonly NGINX_CONF_TEMPLATE="$ACROCONFROOT/nginx-vhost-template-d7${VHOST_CONF_STUB}-conf.j2"
readonly APACHE_CONF_TEMPLATE="$ACROCONFROOT/apache-vhost-template-d7${VHOST_CONF_STUB}-conf.j2"
SSLDIR="/usr/local/ssl"
readonly CERTSDIR="$SSLDIR/certs"
readonly KEYSDIR="$SSLDIR/private"
POOLDIR="/etc/php5/fpm/pool.d"
readonly FPM_CONF_TEMPLATE="$ACROCONFROOT/php5-fpm-pool-conf-template.j2"
readonly SETTINGS_LOCAL_TEMPLATE="$ACROCONFROOT/drupal-settings-local-php.j2"
readonly AUTODEPLOY_HOOKS_SRC="/usr/local/src/acro/auto-deploy-git-hooks"
readonly PRE_RECEIVE_SRC="$AUTODEPLOY_HOOKS_SRC/remote-node/pre-receive"
readonly POST_RECEIVE_SRC="$AUTODEPLOY_HOOKS_SRC/remote-node/post-receive"
readonly MAX_ACCOUNT_STRING_LENGTH=32
readonly MAX_MYSQL_DBNAME_LENGTH=64
readonly MAX_MYSQL_USERNAME_LENGTH=16
readonly LOGROTATE_CONF_TEMPLATE="$ACROCONFROOT/logrotate.d-vhost.j2"
readonly WEBSERVER_PROCESS_OWNER="www-data" # Ubuntu only. Will be 'apache' if this ever runs on red hat.
