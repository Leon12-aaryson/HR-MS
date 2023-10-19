<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('employee', 'Home::Employee');
$routes->get('add-employee', 'Home::CreateEmployee');
$routes->get('department', 'Home::Department');
$routes->get('branch-master', 'Home::BranchMaster');
$routes->get('job', 'Home::Job');
$routes->get('deduction', 'Home::Deduction');
$routes->get('contract', 'Home::Contract');
$routes->get('payement', 'Home::Payement');
$routes->get('designation', 'Home::Designation');
$routes->get('leave', 'Home::Leave');
$routes->get('loan', 'Home::Loan');
$routes->get('shift', 'Home::Shift');
$routes->get('permission', 'Home::Permission');
$routes->get('payroll', 'Home::Payroll');
$routes->get('create-payroll', 'Home::CreatePayroll');
$routes->get('create-attendance', 'Home::CreateAttendance');
//The following route is not yet linked anywhere
$routes->get('view-employee', 'Home::ViewEmployee');

// Working with employees
$routes->post('fetchemployees', 'EmployeeController::fetchEmployees');

// Working with branch manager
$routes->post('fetchbranchmanager', 'BranchmasterController::fetchbranchmanager');

// Working with department
$routes->post('fetchdepartment', 'DepartmentController::fetchdepartment');

// Working with designation
$routes->post('fetchdesignation', 'DesignationController::fetchdesignation');

// Working with leave
$routes->post('fetchleave', 'LeaveController::fetchleave');

// Working with loan
$routes->post('fetchloan', 'LoanController::fetchloan');

// Working with shift type
$routes->post('fetchshiftype', 'ShifttypeController::fetchshiftype');

// Working with deduction options
$routes->post('fetchdeduction', 'DeductionController::fetchdeduction');

// Working with payment
$routes->post('fetchpayment', 'PaymentController::fetchpayment');

// Working with contract
$routes->post('fetchcontract', 'ContractController::fetchcontract');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
