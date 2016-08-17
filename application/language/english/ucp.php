<?php

/**
 * Note to module developers:
 * 	Keeping a module specific language file like this
 *	in this external folder is not a good practise for
 *	portability - I do not advice you to do this for
 *	your own modules since they are non-default.
 *	Instead, simply put your language files in
 *	application/modules/yourModule/language/
 *	You do not need to change any code, the system
 *	will automatically look in that folder too.
 */

// UCP
$lang['user_panel'] = "User panel";
$lang['nickname'] = "Nickname";
$lang['location'] = "Location";
$lang['account_rank'] = "Account rank";
$lang['voting_points'] = "Voting points";
$lang['donation_points'] = "Donation points";
$lang['account_status'] = "Account status";
$lang['member_since'] = "Member since";

// Settings
$lang['settings'] = "Account settings";

$lang['nickname_error'] = "Nickname must be between 4 and 14 characters long and may only contain letters and numbers";
$lang['location_error'] = "Location may only be up to 32 characters long and may only contain letters";
$lang['pw_doesnt_match'] = "Passwords doesn't match!";
$lang['changes_saved'] = "Changes have been saved!";
$lang['invalid_pw'] = "Incorrect password!";
$lang['nickname_taken'] = "Nickname is already taken";
$lang['invalid_language'] = "Invalid language";

/**
 * Only translate these if World of Warcraft does it themselves,
 * otherwise you'll confuse people who expect to see them in English
 */
$lang['tbc'] = "The Burning Crusade";
$lang['wotlk'] = "Wrath of The Lich King";
$lang['cataclysm'] = "Cataclysm";
$lang['mop'] = "Mists of Pandaria";