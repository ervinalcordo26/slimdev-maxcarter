<?php
defined('BASEPATH') OR exit('No direct script access allowed');


//Customer
$route['features/customers'] = 'customerctl/customer_list';
$route['ajax/editcustomer'] = 'customerctl/ajax_frmcustomer';
//Invoices
$route['features/invoices'] = 'invoicectl/invoice_list';
$route['ajax/editinvoices'] = 'invoicectl/ajax_frminvoice';
//Employee
$route['features/employees'] = 'employeectl/employee_list';
$route['ajax/editemployee'] = 'employeectl/ajax_frmemployee';
$route['logout'] = 'employeectl/logout';

$route['login'] = 'guestctl/login';
$route['default_controller'] = 'guestctl/login';
$route['(:any)'] = 'guestctl/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
