# Routes

This file contains the PHP code for the routes of the HR-MS web application.

## Purpose

The routes define the URLs and actions for the various pages of the HR-MS web application.

## Usage

This file is included in the HR-MS web application and is used to define the URLs and actions for the various pages of the application.

## Routes

The file defines the following routes:

- `/`: maps to the `index()` action of the `Home` controller, which displays the home page.
- `/employee`: maps to the `Employee()` action of the `Home` controller, which displays the employee management page.
- `/add-employee`: maps to the `CreateEmployee()` action of the `Home` controller, which displays the create employee page.
- `/department`: maps to the `Department()` action of the `Home` controller, which displays the department management page.
- `/branch-master`: maps to the `BranchMaster()` action of the `Home` controller, which displays the branch management page.

## Controller

The `Home` controller is responsible for defining the actions for the various pages of the HR-MS web application. The controller is located in the `App\Controllers` namespace and includes the following actions:

- `index()`: displays the home page.
- `Employee()`: displays the employee management page.
- `CreateEmployee()`: displays the create employee page.
- `Department()`: displays the department management page.
- `BranchMaster()`: displays the branch management page.

When a user visits a URL defined in the routes, the corresponding action of the `Home` controller is executed, which returns the corresponding view.

## Views

The views are defined in the `Views` directory of the HR-MS web application. The views correspond to the actions of the `Home` controller and define the HTML code for the various pages of the application. The views include the following:

- `home/index`: the home page view.
- `employee/index`: the employee management page view.
- `employee/create`: the create employee page view.
- `department/index`: the department management page view.
- `branch-master/index`: the branch management page view.

The views are designed using the Bootstrap framework and include responsive design elements to ensure that the application is accessible on a variety of devices.

## Dependencies

The HR-MS web application depends on the following libraries and frameworks:

- PHP: the server-side scripting language.
- MySQL: the database management system.
- Bootstrap: the front-end framework.
- Boxicons: the icon library.
- Composer: the package manager for PHP.