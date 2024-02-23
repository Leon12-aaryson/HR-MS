<?php

namespace Config;

use App\Controllers\Car;

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
$routes->get('allowances', 'Home::Allowances');
$routes->get('create-payroll', 'Home::CreatePayroll');
$routes->get('create-attendance', 'Home::CreateAttendance');

// Working with Attendance (Admin)
$routes->post('fetchattendance', 'AttendanceController::index');
$routes->post('updateattendance', 'AttendanceController::updatebranchmanager');

// Working with employees
$routes->get('employeespage', 'EmployeeController::page');
$routes->get('createpage', 'EmployeeController::createpage');
$routes->post('fetchemployees', 'EmployeeController::index');
$routes->post('addemployee', 'EmployeeController::create');
$routes->get('employee/edit/(:num)', 'EmployeeController::edit/$1');
$routes->post('employee/update/(:num)', 'EmployeeController::update/$1');
$routes->post('deleteemployee', 'EmployeeController::delete');


// $routes->get('update-employee/:id', 'EmployeeController::updateEmployee');

// Working with branch manager
$routes->post('fetchbranchmanagers', 'BranchmasterController::fetchbranchmanagers');
$routes->post('fetchbranchmanager', 'BranchmasterController::fetchbranchmanager');
$routes->post('addbranchmanager', 'BranchmasterController::addbranchmanager');
$routes->post('updatebranchmanager', 'BranchmasterController::updatebranchmanager');
$routes->post('deletebranchmanager', 'BranchmasterController::deletebranchmanager');


// Working with department
$routes->post('fetchdepartments', 'DepartmentController::fetchdepartments');
$routes->post('fetchdepartment', 'DepartmentController::fetchdepartment');
$routes->post('adddepartment', 'DepartmentController::adddepartment');
$routes->post('updatedepartment', 'DepartmentController::updatedepartment');
$routes->post('deletedepartment', 'DepartmentController::deletedepartment');

// Working with designation
$routes->post('fetchdesignations', 'DesignationController::fetchdesignations');
$routes->post('fetchdesignation', 'DesignationController::fetchdesignation');
$routes->post('adddesignation', 'DesignationController::adddesignation');
$routes->post('updatedesignation', 'DesignationController::updatedesignation');
$routes->post('deletedesignation', 'DesignationController::deletedesignation');

// Working with leave
$routes->post('fetchleaves', 'LeaveController::fetchleaves');
$routes->post('fetchleave', 'LeaveController::fetchleave');
$routes->post('addleave', 'LeaveController::addleave');
$routes->post('updateleave', 'LeaveController::updateleave');
$routes->post('deleteleave', 'LeaveController::deleteleave');

// Working with loan
$routes->post('fetchloans', 'LoanController::fetchloans');
$routes->post('fetchloan', 'LoanController::fetchloan');
$routes->post('addloan', 'LoanController::addloan');
$routes->post('updateloan', 'LoanController::updateloan');
$routes->post('deleteloan', 'LoanController::deleteloan');

// Working with shift type
$routes->post('fetchshiftypes', 'ShifttypeController::fetchshiftypes');
$routes->post('fetchshiftype', 'ShifttypeController::fetchshiftype');
$routes->post('addshiftype', 'ShifttypeController::addshiftype');
$routes->post('updateshiftype', 'ShifttypeController::updateshiftype');
$routes->post('deleteshiftype', 'ShifttypeController::deleteshiftype');

// Working with deduction options
$routes->post('fetchdeductions', 'DeductionController::fetchdeductions');
$routes->post('fetchdeduction', 'DeductionController::fetchdeduction');
$routes->post('adddeduction', 'DeductionController::adddeduction');
$routes->post('updatededuction', 'DeductionController::updatededuction');
$routes->post('deletededuction', 'DeductionController::deletededuction');

// Working with payment
$routes->post('fetchpayments', 'PaymentController::fetchpayments');
$routes->post('fetchpayment', 'PaymentController::fetchpayment');
$routes->post('addpayment', 'PaymentController::addpayment');
$routes->post('updatepayment', 'PaymentController::updatepayment');
$routes->post('deletepayment', 'PaymentController::deletepayment');

// Working with contract
$routes->post('fetchcontracts', 'ContractController::fetchcontracts');
$routes->post('fetchcontract', 'ContractController::fetchcontract');
$routes->post('addcontract', 'ContractController::addcontract');
$routes->post('updatecontract', 'ContractController::updatecontract');
$routes->post('deletecontract', 'ContractController::deletecontract');

// Working with job type
$routes->post('fetchjobtypes', 'JobtypeController::fetchjobtypes');
$routes->post('fetchjobtype', 'JobtypeController::fetchjobtype');
$routes->post('addjobtype', 'JobtypeController::addjobtype');
$routes->post('updatejobtype', 'JobtypeController::updatejobtype');
$routes->post('deletejobtype', 'JobtypeController::deletejobtype');

// Working with Allowances
$routes->post('fetchallowances', 'AllowanceController::fetchallowances');
$routes->post('fetchallowance', 'AllowanceController::fetchallowance');
$routes->post('addallowance', 'AllowanceController::addallowance');
$routes->post('updateallowance', 'AllowanceController::updateallowance');
$routes->post('deleteallowance', 'AllowanceController::deleteallowance');

// Working with payroll
$routes->post('fetchmanagepayroll', 'ManagepayrollController::fetchmanagepayroll');

//fetching department on dashboard
// $routes->get('countdepartment', 'DashboardController::department');
$routes->get('home', 'Home::Dashboard');

//inserting data into events table
$routes->post('insertintoevents','Home::add_event');


$routes->get('getevents','Home::fetchDataFromEventsTable');




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
