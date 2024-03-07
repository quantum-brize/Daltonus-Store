<?php
defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', TRUE);
defined('FILE_READ_MODE') or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE') or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE') or define('DIR_WRITE_MODE', 0755);
defined('FOPEN_READ') or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE') or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE') or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE') or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE') or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE') or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT') or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT') or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');
defined('EXIT_SUCCESS') or define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR') or define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG') or define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE') or define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS') or define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') or define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT') or define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE') or define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN') or define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX') or define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

defined('rest_controller_path') or define('rest_controller_path', 'libraries/RestController.php');
defined('DATA') or define('DATA', 'data');
defined('HTTP_STATUS') or define('HTTP_STATUS', 'http_status');
defined('key_status') or define('key_status', 'status');
defined('key_message') or define('key_message', 'message');
defined('key_data') or define('key_data', 'data');
defined('http_ok') or define('http_ok', 200);
defined('header_allow_origin') or define('header_allow_origin', 'Access-Control-Allow-Origin: *');
defined('header_allow_headers') or define('header_allow_headers', 'Access-Control-Allow-Headers: *');
defined('header_allow_methods') or define('header_allow_methods', "Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE, PATCH");
defined('helper_form') or define('helper_form', 'form');
defined('helper_url') or define('helper_url', 'url');
defined('field_date') or define('field_date', 'Y-m-d');
defined('field_date_time') or define('field_date_time', 'Y-m-d H:i:s');
defined('field_location') or define('field_location', 'Asia/Kolkata');
/*
 | --------------------------------------------------------------------
 | App Namespace
 | --------------------------------------------------------------------
 |
 | This defines the default Namespace that is used throughout
 | CodeIgniter to refer to the Application directory. Change
 | this constant to change the namespace that all application
 | classes should use.
 |
 | NOTE: changing this will require manually modifying the
 | existing namespaces of App\* namespaced-classes.
 */
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');

/*
 | --------------------------------------------------------------------------
 | Composer Path
 | --------------------------------------------------------------------------
 |
 | The path that Composer's autoload file is expected to live. By default,
 | the vendor folder is in the Root directory, but you can customize that here.
 */
defined('COMPOSER_PATH') || define('COMPOSER_PATH', ROOTPATH . 'vendor/autoload.php');

/*
 |--------------------------------------------------------------------------
 | Timing Constants
 |--------------------------------------------------------------------------
 |
 | Provide simple ways to work with the myriad of PHP functions that
 | require information to be in seconds.
 */
defined('SECOND') || define('SECOND', 1);
defined('MINUTE') || define('MINUTE', 60);
defined('HOUR') || define('HOUR', 3600);
defined('DAY') || define('DAY', 86400);
defined('WEEK') || define('WEEK', 604800);
defined('MONTH') || define('MONTH', 2_592_000);
defined('YEAR') || define('YEAR', 31_536_000);
defined('DECADE') || define('DECADE', 315_360_000);

/*
 | --------------------------------------------------------------------------
 | Exit Status Codes
 | --------------------------------------------------------------------------
 |
 | Used to indicate the conditions under which the script is exit()ing.
 | While there is no universal standard for error codes, there are some
 | broad conventions.  Three such conventions are mentioned below, for
 | those who wish to make use of them.  The CodeIgniter defaults were
 | chosen for the least overlap with these conventions, while still
 | leaving room for others to be defined in future versions and user
 | applications.
 |
 | The three main conventions used for determining exit status codes
 | are as follows:
 |
 |    Standard C/C++ Library (stdlibc):
 |       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
 |       (This link also contains other GNU-specific conventions)
 |    BSD sysexits.h:
 |       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
 |    Bash scripting:
 |       http://tldp.org/LDP/abs/html/exitcodes.html
 |
 */
defined('EXIT_SUCCESS') || define('EXIT_SUCCESS', 0);        // no errors
defined('EXIT_ERROR') || define('EXIT_ERROR', 1);          // generic error
defined('EXIT_CONFIG') || define('EXIT_CONFIG', 3);         // configuration error
defined('EXIT_UNKNOWN_FILE') || define('EXIT_UNKNOWN_FILE', 4);   // file not found
defined('EXIT_UNKNOWN_CLASS') || define('EXIT_UNKNOWN_CLASS', 5);  // unknown class
defined('EXIT_UNKNOWN_METHOD') || define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT') || define('EXIT_USER_INPUT', 7);     // invalid user input
defined('EXIT_DATABASE') || define('EXIT_DATABASE', 8);       // database error
defined('EXIT__AUTO_MIN') || define('EXIT__AUTO_MIN', 9);      // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX') || define('EXIT__AUTO_MAX', 125);    // highest automatically-assigned error code

define('EVENT_PRIORITY_LOW', 200);
define('EVENT_PRIORITY_NORMAL', 100);
define('EVENT_PRIORITY_HIGH', 10);




//////////////////////////////////////////////__URL
//defined('BASE_URL') || define('BASE_URL', 'https://daltonusstore.com' );
defined('BASE_URL') || define('BASE_URL', 'http://localhost/Daltonus-Store' );


//////////////////////////////////////////////__DATABASE
defined('DB_TEST_hostname') || define('DB_TEST_hostname', '103.92.235.18');
defined('DB_TEST_username') || define('DB_TEST_username', 'jungleef');
defined('DB_TEST_password') || define('DB_TEST_password', 'Y-eCdY3Jts5#');
defined('DB_TEST_database') || define('DB_TEST_database', 'jungleef_DEV_daltonusstore');
defined('DB_TEST_DBDriver') || define('DB_TEST_DBDriver', 'MySQLi');

//////////////////////////////////////////////__TABLE
defined('TABLE_USERS')      || define('TABLE_USERS', 'users');
defined('TABLE_OTP')        || define('TABLE_OTP', 'otp');
defined('TABLE_CATEGORIES') || define('TABLE_CATEGORIES', 'categories');


//////////////////////////////////////////////__UID_PRIFIX
defined('UID_USER')         || define('UID_USER', 'USR');
defined('UID_OTP')          || define('UID_OTP', 'OTP');
defined('UID_CATEGORY')     || define('UID_CATEGORY', 'CAT');


//////////////////////////////////////////////__STATUS
defined('STATUS_PENDING')   || define('STATUS_PENDING', 'pending');
defined('STATUS_ACTIVE')    || define('STATUS_ACTIVE', 'active');
defined('STATUS_DEACTIVE')  || define('STATUS_DEACTIVE', 'deactive');


//////////////////////////////////////////////__TYPE
defined('TYPE_USER')        || define('TYPE_USER', 'user');
defined('TYPE_ADMIN')       || define('TYPE_ADMIN', 'admin');
defined('TYPE_VENDOR')      || define('TYPE_VENDOR', 'vendor');



//////////////////////////////////////////////__SESSION
defined('SES_USER_USER_ID')  || define('SES_USER_USER_ID', 'USER_user_id');
defined('SES_USER_TYPE')     || define('SES_USER_TYPE', 'USER_user_type');
defined('SES_ADMIN_USER_ID') || define('SES_ADMIN_USER_ID', 'ADMIN_user_id');
defined('SES_ADMIN_TYPE')    || define('SES_ADMIN_TYPE', 'ADMIN_user_type');


//////////////////////////////////////////////__PAGEDATA
define(
    'PAGE_DATA_ADMIN',
    [
        'data_page' => [],
        'data_header' => [
            'header_link' => [],
            'title' => '',
            'header' => [],
            'sidebar' => [],
            'site' => 'admin'
        ],
        'data_footer' => [
            'footer_link' => [],
            'footer' => [],
            'site' => 'admin'
        ]
    ]
);

define(
    'PAGE_DATA_FRONTEND',
    [
        'data_page' => [],
        'data_header' => [
            'header_link' => [],
            'title' => '',
            'header' => [],
            'sidebar' => [],
            'site' => 'frontend'
        ],
        'data_footer' => [
            'footer_link' => [],
            'footer' => [],
            'site' => 'frontend'
        ]
    ]
);
?>