<?php

// Netcup-Kundennummer
$customer_id = getenv('CUSTOMER_ID') ?: '12345';
define('CUSTOMERNR', $customer_id);

// Netcup API-Zugangsdaten
$api_password = getenv('APIPASSWORD') ?: '12345';
define('APIPASSWORD', $api_password);

$api_key = getenv('APIKEY') ?: '12345';
define('APIKEY', $api_key);

// Domains/Subdomains für Dynamic DNS
$domainlist = getenv('DOMAINLIST') ?: 'myfirstdomain.com: server, dddns; myseconddomain.com: @, *, some-subdomain';
define('DOMAINLIST', $domainlist);

// IPv4 / IPv6 Erkennung URLs
define('IPV4_ADDRESS_URL', getenv('IPV4_ADDRESS_URL') ?: 'https://get-ipv4.steck.cc');
define('IPV4_ADDRESS_URL_FALLBACK', getenv('IPV4_ADDRESS_URL_FALLBACK') ?: 'https://ipv4.seeip.org');
define('IPV6_ADDRESS_URL', getenv('IPV6_ADDRESS_URL') ?: 'https://get-ipv6.steck.cc');
define('IPV6_ADDRESS_URL_FALLBACK', getenv('IPV6_ADDRESS_URL_FALLBACK') ?: 'https://v6.ident.me');

// IPv4 und IPv6 aktivieren
define('USE_IPV4', getenv('USE_IPV4') !== 'false');
define('USE_IPV6', getenv('USE_IPV6') === 'true');

// TTL-Einstellungen
define('CHANGE_TTL', getenv('CHANGE_TTL') !== 'false');

// Netcup API-URL
define('APIURL', getenv('APIURL') ?: 'https://ccp.netcup.net/run/webservice/servers/endpoint.php?JSON');