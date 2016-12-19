<?php
/*
 * Shibboleth Auth Configuration
 */

// User's role mapping
// Roles : QA_USER_LEVEL_BASIC, QA_USER_LEVEL_EDITOR, QA_USER_LEVEL_ADMIN, QA_USER_LEVEL_SUPER
$SHIB_USERS_ROLE=array(
	'qauser1' => QA_USER_LEVEL_SUPER,
	'qauser2' => QA_USER_LEVEL_EDITOR,
);

// Shibboleth user default role
define('SHIB_DEFAULT_USER_ROLE',QA_USER_LEVEL_BASIC);

/*
 * Shibboleth attributes mapping
 */

// Shibboleth login attribute
define('SHIB_USERID_ATTR','eppn');

// Shibboleth login alternative attribute
define('SHIB_ALTERNATE_USERID_ATTR','mail');

// Shibboleth mail attribute
define('SHIB_MAIL_ATTR','mail');

// Shibboleth mail alternative attribute
define('SHIB_ALTERNATE_MAIL_ATTR','supannMailPerso');

// Shibboleth public name attribute
define('SHIB_PUBLIC_NAME_ATTR','displayName');

// Shibboleth public name alternative attribute
define('SHIB_ALTERNATE_PUBLIC_NAME_ATTR','cn');
