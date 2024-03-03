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
$routes->setAutoRoute(true);

$routes->get("genete-pdf", "Student::generatePdf");
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
//Route for displinary module
$routes->get('displinary','Disciplinary::index');
$routes->post('insert_disciplinary', 'Disciplinary::Insert_displinary');
$routes->post('fetchDisplinary', 'Disciplinary::fetchDisplinary');


// Working with Attendance (Admin)
$routes->post('fetchattendance', 'AttendanceController::index');
$routes->post('updateattendance', 'AttendanceController::updatebranchmanager');
//The following routes are for employee's dashboard
$routes->get('employee-dashboard', 'Home::employeeDashboard');


// Working with employees
$routes->post('fetchemployees', 'EmployeeController::fetchEmployees');

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

// Working with payroll
$routes->post('fetchmanagepayroll', 'ManagepayrollController::fetchmanagepayroll');

//insert data in employee table
$routes->post('insertintoemployee', 'EmployeeDataInsert::index');

//insert data into payroll table
$routes->post('insert_in_to_payroll', 'PayrollDataInsertController::index');
// $routes->get('update_payroll/' . $row['payroll_id'] . '', 'PayrollDataInsertController::update');
// $routes->match(['get','post'], 'insert_in_to_payroll','PayrollDataInsertController::index');


//fetching department on dashboard
// $routes->get('countdepartment', 'DashboardController::department');
$routes->get('home', 'Home::Dashboard');

//inserting data into events table
$routes->post('insertintoevents','Home::add_event');

$routes->get('getevents','Home::fetchDataFromEventsTable');





// ROUTES FOR HANDLING EMPLOYEE USER 
  //returns the emp-dashboard view
$routes->get('emp-dashboard','EmpHomeController::index');

//returns the emp-attendance view
$routes->get('emp-attendance','EmpHomeController::EmpAttendance');

//returns the emp-login view
$routes->get('emp-login','EmpHomeController::EmpLogin');

//returns the emp-loan view
// $routes->get('emp-loan','EmpHomeController::empLoan');

//returns the vacancy view
$routes->get('vacancy','EmpHomeController::Vacancy');

//returns the application view
$routes->get('application','EmpHomeController::application');

//returns the user view
$routes->get('user','EmpHomeController::User');


//route for login details
$routes->post('sendlogindetails','EmpHomeController::HandleLoginCredentials');

//route for inserting login time into the database
$routes->post('insertintoattendance','EmpHomeController::insertTime');

//route for employee payroll
$routes->get('emp-payroll','EmpHomeController::empPayroll');

//route for employee leave
$routes->get('emp-leave','EmpHomeController::empLeave');

//route for payroll report
$routes->get('payroll-report','EmpHomeController::payrollReport');

//route for leave report
$routes->get('leave-report','EmpHomeController::leaveReport');

//route for attendancereport
$routes->get('attendance-report','EmpHomeController::reportAttendance');

//route for leave approval
$routes->get('leave-approve','EmpHomeController::leaveApprove');









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
