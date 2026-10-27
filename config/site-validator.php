<?php
ob_start();
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';

use App\Model\Auth\Auth;
use App\Model\GeoApi;
use App\Helpers\UserCategoryHelper;

$authController = new Auth();
$geoLocator = new GeoApi();

// $token = $_COOKIE['access_token'] ?? null;

// if (!$token) {
//     UserCategoryHelper::redirect2Register();
// }
// if ($token) {
//     $userClass = UserCategoryHelper::userClass($token);
//     // var_dump($userClass);
//     if ($userClass['respCode'] !== 200) {
//         UserCategoryHelper::redirect2Register();
//     }
// }
