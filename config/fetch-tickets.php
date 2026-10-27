<?php
ob_start();
(!isset($_SESSION)) ? session_start() : '';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../vendor/autoload.php';

//fetch tickets
use App\Model\Ticket\Ticket;

$ticketController = new Ticket;

$ticketList = $ticketController->getTicketsByType(1);

var_dump($ticketList);
