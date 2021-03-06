qa-external-shibboleth
======================

Authentification plugin Shibboleth for [Question2Answer](http://www.question2answer.org/)

Requirement
-----------

  * [Shibboleth ServiceProvider configure using Apache, mod_shib and shibd](https://services.renater.fr/federation/docs/installation/sp)

Configuration
-------------

  * **$SHIB_USERS_ROLE** : PHP array listing specific user role. Users's role must be define using Q2A constant :
    * `QA_USER_LEVEL_BASIC`
    * `QA_USER_LEVEL_EDITOR`
    * `QA_USER_LEVEL_ADMIN`
    * `QA_USER_LEVEL_SUPER`

      **Example :**

            $SHIB_USERS_ROLE = array(
              'user1' => QA_USER_LEVEL_EDITOR,
              'user2' => QA_USER_LEVEL_SUPER
            );
 
  * **SHIB_DEFAULT_USER_ROLE** : User default role define using Q2A constant (see `$SHIB_USERS_ROLE`)
  * **$SHIB_ACLS** : PHP array listing ACLs based on Shibboleth attributes values.

    **Format :**

            $SHIB_ACLS = array (
               '[attr1]' => array (
                    '[regex1]',
                    '[regex2]',
                    [...]
                 ),
                 '[attr2]' => array (
                    [...]
                 ),
                 [...]
            );

    **Access is granted if :**

      * `$SHIB_ACLS` is not defined
      * `$SHIB_ACLS` in not an array
      * if at least one regex match with at least one value of corresponding attribute

  * **SHIB_USERID_ATTR** : Shibboleth attribute corresponding to user login (ex: *eppn*)
  * **SHIB_ALTERNATE_USERID_ATTR** : Shibboleth attribute corresponding to alternative user login (ex: *mail*)
  * **SHIB_MAIL_ATTR** : Shibboleth attribute corresponding to user's mail (ex: *mail*)
  * **SHIB_ALTERNATE_MAIL_ATTR** : Shibboleth attribute corresponding to alternative user's mail (ex: *supannMailPerso*)
  * **SHIB_PUBLIC_NAME_ATTR** : Shibboleth attribute corresponding to user's full name (ex: *displayName*)
  * **SHIB_ALTERNATE_PUBLIC_NAME_ATTR** : Shibboleth attribute corresponding to alternative user's full name (ex: *cn*)
  * **SHIB_LOGOUT_URL** : Shibboleth logout URL (ex: */Shibboleth.sso/Logout*)
