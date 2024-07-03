<?php
$securitySettings_var = array( 'providers' => array( array( 'type' => '%db',
'activationField' => '',
'active' => true,
'code' => '00',
'codeField' => '',
'emailField' => '',
'extUserIdField' => '',
'fullnameField' => 'Nombre y Apellido',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'Cedula',
'phoneField' => '',
'resetDateField' => '',
'resetTokenField' => '',
'table' => array( 'connId' => 'mega_ya_at_localhost',
'table' => 'usuarios' ),
'twoFactorField' => '',
'userGroupField' => 'Cedula',
'usernameField' => 'Nombre y Apellido',
'userpicField' => '' ) ),
'sessionControl' => array( 'lifeTime' => 15,
'sessionName' => 'GsmIqF4CNScvJFUK2G56',
'JWTSecret' => 'lCzODG9Z0AAreYq8djhn',
'forceExpire' => true,
'keepAlive' => false,
'warnExpire' => true ),
'registration' => array( 'passwordValidation' => array( 'strong' => false,
'minimumLength' => 8,
'uniqueCharacters' => 4,
'digitsAndSymbols' => 2,
'upperAndLowerCase' => false ),
'remindMethod' => 1,
'hashAlgorithm' => 0,
'adminEmail' => '',
'caseInsensitiveLogin' => false,
'changePasswordPage' => false,
'hashPassword' => false,
'notifyAdmin' => false,
'notifyUser' => false,
'registerPage' => false,
'remindPasswordPage' => false,
'sendActivationLink' => false ),
'captchaSettings' => array( 'captchaType' => 0,
'siteKey' => '',
'secretKey' => '',
'passesCount' => 5 ),
'emailSettings' => array( 'fromEmail' => '',
'usePHPDefinedSMTP' => true,
'useBuiltInMailer' => false,
'SMTPServer' => 'localhost',
'SMTPPort' => 25,
'SMTPUser' => '',
'SMTPPassword' => '',
'securityProtocol' => 0 ),
'advancedSecurity' => array( 'allowGuestLogin' => false ),
'auditAndLocking' => array( 'loggingTable' => array( 'connId' => 'mega_ya_at_localhost',
'table' => 'mega_ya_tecnicos_audit' ),
'lockingTable' => array( 'connId' => '',
'table' => 'mega_ya_tecnicos_locking' ),
'tables' => array(  ),
'loggingMode' => 1,
'loggingFile' => 'audit.log',
'logSecurityActions' => true,
'lockAfterUnsuccessfulLogin' => true,
'enableLocking' => false ),
'twoFactorSettings' => array( 'available' => false,
'required' => false,
'enable' => true,
'remember' => true,
'types' => array(  ),
'twoFactorField' => '',
'emailField' => '',
'phoneField' => '',
'codeField' => '',
'projectName' => '' ),
'projectName' => 'sena_projecto',
'loginDataSource' => 'admin_members',
'loginForm' => 0,
'dynamicPermissions' => true,
'dpTablePrefix' => 'mega_ya_tecnicos_',
'dpTableConnId' => 'mega_ya_at_localhost',
'hardcodedLogin' => false,
'enabled' => true,
'advancedSecurityAvailable' => true,
'userGroupsAvailable' => true,
'defaultProviderCode' => '00',
'adOnlyLogin' => false,
'dbProvider' => array( 'type' => '%db',
'activationField' => '',
'active' => true,
'code' => '00',
'codeField' => '',
'emailField' => '',
'extUserIdField' => '',
'fullnameField' => 'Nombre y Apellido',
'label' => array( 'text' => 'Database',
'type' => 0 ),
'name' => 'db',
'passwordField' => 'Cedula',
'phoneField' => '',
'resetDateField' => '',
'resetTokenField' => '',
'table' => array( 'connId' => 'mega_ya_at_localhost',
'table' => 'usuarios' ),
'twoFactorField' => '',
'userGroupField' => 'Cedula',
'usernameField' => 'Nombre y Apellido',
'userpicField' => '' ),
'adAdminGroups' => array(  ),
'showUserSource' => false,
'dbProviderCodes' => array( '00' ),
'notifications' => array(  ) );
?>