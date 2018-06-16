<?php

//Enable/Disable debug mode
define('DEBUG', true);
define('LOG_DRIVER', 'stdout'); // Other drivers are: syslog, stdout, stderr, system or file

//Enable/disable url rewrite
define('ENABLE_URL_REWRITE', false);

//Database settings
// Run automatically database migrations
// If set to false, you will have to run manually the SQL migrations from the CLI during the next Kanboard upgrade
// Do not run the migrations from multiple processes at the same time (example: web page + background worker)
define('DB_RUN_MIGRATIONS', true);
// Database driver: sqlite, mysql or postgres (sqlite by default)
define('DB_DRIVER', 'mysql');
// Mysql/Postgres username
define('DB_USERNAME', 'admin');
// Mysql/Postgres password
define('DB_PASSWORD', 'zaq12wsx');
// Mysql/Postgres hostname
define('DB_HOSTNAME', 'devops-kanboarddb');
// Mysql/Postgres database name
define('DB_NAME', 'kanboard');

//LDAP settings
// Enable LDAP authentication (false by default)
define('LDAP_AUTH', true);
// LDAP server hostname
define('LDAP_SERVER', 'devops-ldap');
// LDAP server port (389 by default)
define('LDAP_PORT', 389);
// By default Kanboard lowercase the ldap username to avoid duplicate users (the database is case sensitive)
// Set to true if you want to preserve the case
define('LDAP_USERNAME_CASE_SENSITIVE', true);
// LDAP bind type: "anonymous", "user" or "proxy"
define('LDAP_BIND_TYPE', 'user');
// LDAP username to use with proxy mode
// LDAP username pattern to use with user mode
define('LDAP_USERNAME', 'cn=admin,dc=ibm,dc=com');
// LDAP password to use for proxy mode
define('LDAP_PASSWORD', 'zaq12wsx');
// LDAP DN for users
// Example for ActiveDirectory: CN=Users,DC=kanboard,DC=local
// Example for OpenLDAP: ou=People,dc=example,dc=com
define('LDAP_USER_BASE_DN', 'dc=ibm,dc=com');
// LDAP pattern to use when searching for a user account
// Example for ActiveDirectory: '(&(objectClass=user)(sAMAccountName=%s))'
// Example for OpenLDAP: 'uid=%s'
define('LDAP_USER_FILTER', 'uid=%s');
// LDAP attribute for username
// Example for ActiveDirectory: 'samaccountname'
// Example for OpenLDAP: 'uid'
define('LDAP_USER_ATTRIBUTE_USERNAME', 'uid');
// LDAP attribute for user full name
// Example for ActiveDirectory: 'displayname'
// Example for OpenLDAP: 'cn'
define('LDAP_USER_ATTRIBUTE_FULLNAME', 'cn');
// LDAP attribute for user email
define('LDAP_USER_ATTRIBUTE_EMAIL', 'mail');
// LDAP attribute to find groups in user profile
define('LDAP_USER_ATTRIBUTE_GROUPS', 'memberof');
// Allow automatic LDAP user creation
define('LDAP_USER_CREATION', true);
// LDAP DN for administrators
// Example: CN=Kanboard-Admins,CN=Users,DC=kanboard,DC=local
//define('LDAP_GROUP_ADMIN_DN', 'cn=DevOps Admin,dc=ibm,dc=com');

//RememberMe Authentication settings
// Enable/disable remember me authentication
define('REMEMBER_ME_AUTH', true);


