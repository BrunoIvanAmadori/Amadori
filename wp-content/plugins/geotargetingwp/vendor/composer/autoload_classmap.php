<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Defuse\\Crypto\\Core' => $vendorDir . '/defuse/php-encryption/src/Core.php',
    'Defuse\\Crypto\\Crypto' => $vendorDir . '/defuse/php-encryption/src/Crypto.php',
    'Defuse\\Crypto\\DerivedKeys' => $vendorDir . '/defuse/php-encryption/src/DerivedKeys.php',
    'Defuse\\Crypto\\Encoding' => $vendorDir . '/defuse/php-encryption/src/Encoding.php',
    'Defuse\\Crypto\\Exception\\BadFormatException' => $vendorDir . '/defuse/php-encryption/src/Exception/BadFormatException.php',
    'Defuse\\Crypto\\Exception\\CryptoException' => $vendorDir . '/defuse/php-encryption/src/Exception/CryptoException.php',
    'Defuse\\Crypto\\Exception\\EnvironmentIsBrokenException' => $vendorDir . '/defuse/php-encryption/src/Exception/EnvironmentIsBrokenException.php',
    'Defuse\\Crypto\\Exception\\IOException' => $vendorDir . '/defuse/php-encryption/src/Exception/IOException.php',
    'Defuse\\Crypto\\Exception\\WrongKeyOrModifiedCiphertextException' => $vendorDir . '/defuse/php-encryption/src/Exception/WrongKeyOrModifiedCiphertextException.php',
    'Defuse\\Crypto\\File' => $vendorDir . '/defuse/php-encryption/src/File.php',
    'Defuse\\Crypto\\Key' => $vendorDir . '/defuse/php-encryption/src/Key.php',
    'Defuse\\Crypto\\KeyOrPassword' => $vendorDir . '/defuse/php-encryption/src/KeyOrPassword.php',
    'Defuse\\Crypto\\KeyProtectedByPassword' => $vendorDir . '/defuse/php-encryption/src/KeyProtectedByPassword.php',
    'Defuse\\Crypto\\RuntimeTests' => $vendorDir . '/defuse/php-encryption/src/RuntimeTests.php',
    'Dotenv\\Dotenv' => $vendorDir . '/vlucas/phpdotenv/src/Dotenv.php',
    'Dotenv\\Exception\\ExceptionInterface' => $vendorDir . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
    'Dotenv\\Exception\\InvalidCallbackException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidCallbackException.php',
    'Dotenv\\Exception\\InvalidFileException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
    'Dotenv\\Exception\\InvalidPathException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
    'Dotenv\\Exception\\ValidationException' => $vendorDir . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
    'Dotenv\\Loader' => $vendorDir . '/vlucas/phpdotenv/src/Loader.php',
    'Dotenv\\Parser' => $vendorDir . '/vlucas/phpdotenv/src/Parser.php',
    'Dotenv\\Validator' => $vendorDir . '/vlucas/phpdotenv/src/Validator.php',
    'EAMann\\Sessionz\\Handler' => $vendorDir . '/ericmann/sessionz/php/Handler.php',
    'EAMann\\Sessionz\\Handlers\\BaseHandler' => $vendorDir . '/ericmann/sessionz/php/Handlers/BaseHandler.php',
    'EAMann\\Sessionz\\Handlers\\DefaultHandler' => $vendorDir . '/ericmann/sessionz/php/Handlers/DefaultHandler.php',
    'EAMann\\Sessionz\\Handlers\\EncryptionHandler' => $vendorDir . '/ericmann/sessionz/php/Handlers/EncryptionHandler.php',
    'EAMann\\Sessionz\\Handlers\\MemoryHandler' => $vendorDir . '/ericmann/sessionz/php/Handlers/MemoryHandler.php',
    'EAMann\\Sessionz\\Handlers\\NoopHandler' => $vendorDir . '/ericmann/sessionz/php/Handlers/NoopHandler.php',
    'EAMann\\Sessionz\\Manager' => $vendorDir . '/ericmann/sessionz/php/Manager.php',
    'EAMann\\Sessionz\\Objects\\MemoryItem' => $vendorDir . '/ericmann/sessionz/php/Objects/MemoryItem.php',
    'EAMann\\WPSession\\CacheHandler' => $baseDir . '/includes/geot/Session/wp-session/CacheHandler.php',
    'EAMann\\WPSession\\DatabaseHandler' => $baseDir . '/includes/geot/Session/wp-session/DatabaseHandler.php',
    'EAMann\\WPSession\\Objects\\Option' => $baseDir . '/includes/geot/Session/wp-session/Option.php',
    'EAMann\\WPSession\\OptionsHandler' => $baseDir . '/includes/geot/Session/wp-session/OptionsHandler.php',
    'EAMann\\WPSession\\SessionHandler' => $baseDir . '/includes/geot/Session/wp-session/SessionHandler.php',
    'GeotCore\\Email\\GeotEmails' => $baseDir . '/includes/geot/Email/GeotEmails.php',
    'GeotCore\\GeotCore' => $baseDir . '/includes/geot/GeotCore.php',
    'GeotCore\\GeotUpdates' => $baseDir . '/includes/geot/GeotUpdates.php',
    'GeotCore\\Notice\\GeotNotices' => $baseDir . '/includes/geot/Notice/GeotNotices.php',
    'GeotCore\\Notification\\GeotNotifications' => $baseDir . '/includes/geot/Notification/GeotNotifications.php',
    'GeotCore\\Record\\RecordConverter' => $baseDir . '/includes/geot/Record/RecordConverter.php',
    'GeotCore\\Session\\GeotSession' => $baseDir . '/includes/geot/Session/GeotSession.php',
    'GeotCore\\Setting\\GeotSettings' => $baseDir . '/includes/geot/Setting/GeotSettings.php',
    'GeotCore\\Setting\\GeotWizard' => $baseDir . '/includes/geot/Setting/GeotWizard.php',
    'GeotCore\\Upgrade\\GeoUpgrades' => $baseDir . '/includes/geot/Upgrade/GeoUpgrades.php',
    'GeotWP\\Exception\\AddressNotFoundException' => $vendorDir . '/timersys/geotargetingwp/src/Exception/AddressNotFoundException.php',
    'GeotWP\\Exception\\GeotException' => $vendorDir . '/timersys/geotargetingwp/src/Exception/GeotException.php',
    'GeotWP\\Exception\\GeotRequestException' => $vendorDir . '/timersys/geotargetingwp/src/Exception/GeotRequestException.php',
    'GeotWP\\Exception\\InvalidIPException' => $vendorDir . '/timersys/geotargetingwp/src/Exception/InvalidIPException.php',
    'GeotWP\\Exception\\InvalidLicenseException' => $vendorDir . '/timersys/geotargetingwp/src/Exception/InvalidLicenseException.php',
    'GeotWP\\Exception\\InvalidSubscriptionException' => $vendorDir . '/timersys/geotargetingwp/src/Exception/InvalidSubscriptionException.php',
    'GeotWP\\Exception\\OutofCreditsException' => $vendorDir . '/timersys/geotargetingwp/src/Exception/OutofCreditsException.php',
    'GeotWP\\GeotargetingWP' => $vendorDir . '/timersys/geotargetingwp/src/GeotargetingWP.php',
    'GeotWP\\Record\\AbstractRecord' => $vendorDir . '/timersys/geotargetingwp/src/Record/AbstractRecord.php',
    'GeotWP\\Record\\City' => $vendorDir . '/timersys/geotargetingwp/src/Record/City.php',
    'GeotWP\\Record\\Continent' => $vendorDir . '/timersys/geotargetingwp/src/Record/Continent.php',
    'GeotWP\\Record\\Country' => $vendorDir . '/timersys/geotargetingwp/src/Record/Country.php',
    'GeotWP\\Record\\Geolocation' => $vendorDir . '/timersys/geotargetingwp/src/Record/Geolocation.php',
    'GeotWP\\Record\\GeotRecord' => $vendorDir . '/timersys/geotargetingwp/src/Record/GeotRecord.php',
    'GeotWP\\Record\\State' => $vendorDir . '/timersys/geotargetingwp/src/Record/State.php',
    'IP2Location\\Database' => $vendorDir . '/ip2location/ip2location-php/IP2Location.php',
    'IP2Location\\IpTools' => $vendorDir . '/ip2location/ip2location-php/IP2Location.php',
    'IP2Location\\WebService' => $vendorDir . '/ip2location/ip2location-php/IP2Location.php',
    'Jaybizzle\\CrawlerDetect\\CrawlerDetect' => $vendorDir . '/jaybizzle/crawler-detect/src/CrawlerDetect.php',
    'Jaybizzle\\CrawlerDetect\\Fixtures\\AbstractProvider' => $vendorDir . '/jaybizzle/crawler-detect/src/Fixtures/AbstractProvider.php',
    'Jaybizzle\\CrawlerDetect\\Fixtures\\Crawlers' => $vendorDir . '/jaybizzle/crawler-detect/src/Fixtures/Crawlers.php',
    'Jaybizzle\\CrawlerDetect\\Fixtures\\Exclusions' => $vendorDir . '/jaybizzle/crawler-detect/src/Fixtures/Exclusions.php',
    'Jaybizzle\\CrawlerDetect\\Fixtures\\Headers' => $vendorDir . '/jaybizzle/crawler-detect/src/Fixtures/Headers.php',
    'MaxMind\\Db\\Reader' => $vendorDir . '/maxmind-db/reader/src/MaxMind/Db/Reader.php',
    'MaxMind\\Db\\Reader\\Decoder' => $vendorDir . '/maxmind-db/reader/src/MaxMind/Db/Reader/Decoder.php',
    'MaxMind\\Db\\Reader\\InvalidDatabaseException' => $vendorDir . '/maxmind-db/reader/src/MaxMind/Db/Reader/InvalidDatabaseException.php',
    'MaxMind\\Db\\Reader\\Metadata' => $vendorDir . '/maxmind-db/reader/src/MaxMind/Db/Reader/Metadata.php',
    'MaxMind\\Db\\Reader\\Util' => $vendorDir . '/maxmind-db/reader/src/MaxMind/Db/Reader/Util.php',
    'Symfony\\Polyfill\\Ctype\\Ctype' => $vendorDir . '/symfony/polyfill-ctype/Ctype.php',
    'WP_Session' => $baseDir . '/includes/geot/Session/wp-session/deprecated.php',
);
