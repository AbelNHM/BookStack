<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Нямате права за достъп до избраната страница.',
    'permissionJson' => 'Нямате права да извършите тази операция.',

    // Auth
    'error_user_exists_different_creds' => 'Потребител с емайл :email вече съществува но с други данни.',
    'email_already_confirmed' => 'Емейлът вече беше потвърден. Моля опитрайте да влезете.',
    'email_confirmation_invalid' => 'Този код за достъп не е валиден или вече е бил използван, Моля опитрайте се да се регистрирате отново.',
    'email_confirmation_expired' => 'Кодът за потвърждение изтече, нов емейл за потвърждение беше изпратен.',
    'email_confirmation_awaiting' => 'Емайл адреса, който използвате трябва да се потвърди',
    'ldap_fail_anonymous' => 'LDAP протокола прекъсна, използвайки анонимни настройки',
    'ldap_fail_authed' => 'LDAP access failed using given dn & password details',
    'ldap_extension_not_installed' => 'LDAP PHP extension not installed',
    'ldap_cannot_connect' => 'Cannot connect to ldap server, Initial connection failed',
    'saml_already_logged_in' => 'Already logged in',
    'saml_user_not_registered' => 'The user :name is not registered and automatic registration is disabled',
    'saml_no_email_address' => 'Could not find an email address, for this user, in the data provided by the external authentication system',
    'saml_invalid_response_id' => 'The request from the external authentication system is not recognised by a process started by this application. Navigating back after a login could cause this issue.',
    'saml_fail_authed' => 'Login using :system failed, system did not provide successful authorization',
    'social_no_action_defined' => 'No action defined',
    'social_login_bad_response' => "Error received during :socialAccount login: \n:error",
    'social_account_in_use' => 'This :socialAccount account is already in use, Try logging in via the :socialAccount option.',
    'social_account_email_in_use' => 'The email :email is already in use. If you already have an account you can connect your :socialAccount account from your profile settings.',
    'social_account_existing' => 'This :socialAccount is already attached to your profile.',
    'social_account_already_used_existing' => 'This :socialAccount account is already used by another user.',
    'social_account_not_used' => 'This :socialAccount account is not linked to any users. Please attach it in your profile settings. ',
    'social_account_register_instructions' => 'If you do not yet have an account, You can register an account using the :socialAccount option.',
    'social_driver_not_found' => 'Social driver not found',
    'social_driver_not_configured' => 'Your :socialAccount social settings are not configured correctly.',
    'invite_token_expired' => 'This invitation link has expired. You can instead try to reset your account password.',

    // System
    'path_not_writable' => 'File path :filePath could not be uploaded to. Ensure it is writable to the server.',
    'cannot_get_image_from_url' => 'Cannot get image from :url',
    'cannot_create_thumbs' => 'The server cannot create thumbnails. Please check you have the GD PHP extension installed.',
    'server_upload_limit' => 'The server does not allow uploads of this size. Please try a smaller file size.',
    'uploaded'  => 'The server does not allow uploads of this size. Please try a smaller file size.',
    'image_upload_error' => 'An error occurred uploading the image',
    'image_upload_type_error' => 'The image type being uploaded is invalid',
    'file_upload_timeout' => 'The file upload has timed out.',

    // Attachments
    'attachment_page_mismatch' => 'Page mismatch during attachment update',
    'attachment_not_found' => 'Attachment not found',

    // Pages
    'page_draft_autosave_fail' => 'Failed to save draft. Ensure you have internet connection before saving this page',
    'page_custom_home_deletion' => 'Cannot delete a page while it is set as a homepage',

    // Entities
    'entity_not_found' => 'Entity not found',
    'bookshelf_not_found' => 'Bookshelf not found',
    'book_not_found' => 'Book not found',
    'page_not_found' => 'Page not found',
    'chapter_not_found' => 'Chapter not found',
    'selected_book_not_found' => 'The selected book was not found',
    'selected_book_chapter_not_found' => 'The selected Book or Chapter was not found',
    'guests_cannot_save_drafts' => 'Guests cannot save drafts',

    // Users
    'users_cannot_delete_only_admin' => 'You cannot delete the only admin',
    'users_cannot_delete_guest' => 'You cannot delete the guest user',

    // Roles
    'role_cannot_be_edited' => 'This role cannot be edited',
    'role_system_cannot_be_deleted' => 'This role is a system role and cannot be deleted',
    'role_registration_default_cannot_delete' => 'This role cannot be deleted while set as the default registration role',
    'role_cannot_remove_only_admin' => 'This user is the only user assigned to the administrator role. Assign the administrator role to another user before attempting to remove it here.',

    // Comments
    'comment_list' => 'An error occurred while fetching the comments.',
    'cannot_add_comment_to_draft' => 'Не може да добавяте коментари към чернова.',
    'comment_add' => 'Възникна грешка при актуализиране/добавяне на коментар.',
    'comment_delete' => 'Възникна грешка при изтриването на коментара.',
    'empty_comment' => 'Не може да добавите празен коментар.',

    // Error pages
    '404_page_not_found' => 'Страницата не е намерена',
    'sorry_page_not_found' => 'Страницата, която търсите не може да бъде намерена.',
    'sorry_page_not_found_permission_warning' => 'Ако смятате, че тази страница съществува, най-вероятно нямате право да я преглеждате.',
    'return_home' => 'Назад към Начало',
    'error_occurred' => 'Възникна грешка',
    'app_down' => ':appName не е достъпно в момента',
    'back_soon' => 'Ще се върне обратно онлайн скоро.',

    // API errors
    'api_no_authorization_found' => 'Но беше намерен код за достъп в заявката',
    'api_bad_authorization_format' => 'В заявката имаше код за достъп, но формата изглежда е неправилен',
    'api_user_token_not_found' => 'Няма открит API код, който да отговоря на предоставения такъв',
    'api_incorrect_token_secret' => 'Секретния код, който беше предоставен за достъп до API-а е неправилен',
    'api_user_no_api_permission' => 'Собственика на АPI кода няма право да прави API заявки',
    'api_user_token_expired' => 'Кода за достъп, който беше използван, вече не е валиден',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Беше върната грешка, когато се изпрати тестовият емейл:',

];
