# Master Layout Page

This file contains the HTML code for the master layout page of the HR-MS web application.

## Purpose

The master layout page defines the basic structure and styling of the HR-MS web application. It includes the header, sidebar, and footer sections, as well as the CSS and JavaScript files.

## Layout

The page defines the basic layout of the HR-MS web application, including the header, sidebar, and footer sections. The header section includes the HR-MS logo and the color switcher. The sidebar section includes the navigation menu with links to various pages of the application. The footer section includes the copyright information.

## Usage

This file is included in all pages of the HR-MS web application and is used to define the basic structure and styling of the application.

## Package

This file is part of the `HR-MS` package.

## Subpackage

This file is not part of any subpackage.

## HTML Structure

The HTML structure of the page includes the `head` section with the meta tags, title, CSS and JavaScript files, and the `body` section with the header, sidebar, and footer sections.

## CSS Classes

The page uses several CSS classes to style the HTML elements, including `sidebar`, `logo-details`, `logo_name`, `nav-links`, `bx`, `active`, `bx-tada`, `bx-chevron-left`, `bx-chevron-right`, `bx-menu`, `bx-search`, `bx-user`, `bx-bell`, `bx-log-out`, `bx-help-circle`, `bx-plus`, `bx-edit`, `bx-trash`, `bx-dots-vertical-rounded`, `bx-check`, `bx-x`, `bx-loader`, `bxl-ok-ru`, `bxl-dashboard`, `bxl-user`, `bxl-building-house`, `bxl-briefcase-alt-2`, `bxl-money`, `bxl-calendar`, `bxl-file`, `bxl-message`, `bxl-bell`, `bxl-help-circle`, `bxl-plus`, `bxl-edit`, `bxl-trash`, `bxl-dots-vertical-rounded`, `bxl-check`, `bxl-x`, `bxl-loader`, `alternate-style`, `color-1`, `color-2`, `color-3`, `color-4`, and `color-5`.

## JavaScript

The page uses JavaScript to handle the color switcher and the sidebar menu.

## Dependencies

The page depends on the Bootstrap CSS library, the Boxicons CSS library, and the custom CSS and JavaScript files of the HR-MS web application.

<!-- Controller Docs -->
# Home Controller

This file contains the PHP code for the Home controller of the HR-MS web application.

## Purpose

The Home controller defines the actions for the home page and the navigation links to other pages of the application.

## Namespace

The controller is part of the `App\Controllers` namespace.

## Usage

This file is included in the HR-MS web application and is used to define the actions for the home page and the navigation links to other pages of the application.

## Class

The controller defines the `Home` class, which extends the `BaseController` class.

## Actions

The controller defines the following actions:

- `index()`: displays the home page.
- `Employee()`: displays the employee management page.
- `CreateEmployee()`: displays the create employee page.
- `Department()`: displays the department management page.
- `BranchMaster()`: displays the branch management page.

## Views

The actions return the following views:

- `index`: the home page view.
- `employee`: the employee management page view.
- `create-employee`: the create employee page view.
- `department`: the department management page view.
- `branch-master`: the branch management page view.
<!-- End of Controllers -->

<!-- Index page -->
# Dashboard Page

This file contains the HTML code for the dashboard page of the HR-MS web application.

## Purpose

The dashboard page displays various statistics related to departments, employees, jobs, leaves, disciplinary actions, and loans. The statistics are displayed using cards with icons and numbers.

The page also includes a form for adding events to a calendar and a table for viewing existing events.

## Layout

The page extends the `layouts/master` template and defines the `body-contents` section.

## Usage

This file is included in the HR-MS web application and is used to display the dashboard page.

## Package

This file is part of the `HR-MS` package.

## Subpackage

This file is part of the `Dashboard` subpackage.

<!-- End of Index Page -->


<!-- Employee Page -->
# Employee Page

This file contains the HTML code for the employee management page of the HR-MS web application.

## Purpose

The employee management page displays a table of employees with their details, such as name, email, branch, department, designation, and date of joining. The page also includes buttons for adding, editing, and deleting employees.

## Layout

The page extends the `layouts/master` template and defines the `body-contents` section.

## Usage

This file is included in the HR-MS web application and is used to display the employee management page.

## Package

This file is part of the `HR-MS` package.

## Subpackage

This file is part of the `Employee` subpackage.

<!-- Department Page -->
# Department Page

This file contains the HTML code for the department management page of the HR-MS web application.

## Purpose

The department management page displays a table of departments with their details, such as branch, department name, and salary. The page also includes buttons for adding, editing, and deleting departments.

## Layout

The page extends the `layouts/master` template and defines the `body-contents` section.

## Usage

This file is included in the HR-MS web application and is used to display the department management page.

## Package

This file is part of the `HR-MS` package.

## Subpackage

This file is part of the `Department` subpackage.

## HTML Structure

The HTML structure of the page includes a main section with a container div, a title, a navigation menu, and a setup div. The setup div contains a list of management options and a table of departments. The table includes columns for branch, department name, salary, and actions.

## CSS Classes

The page uses several CSS classes to style the HTML elements, including `title`, `emp`, `divider`, `active`, `hr`, `setup`, `list`, `event-table`, `dropdown`, `hidden-arrow`, `update`, `delete`, `btn`, `btn-sm`, and `arrow`.

## JavaScript

The page uses JavaScript to handle the dropdown menu for each department row. The dropdown menu includes options for editing and deleting the department.

## Dependencies

The page depends on the `layouts/master` template and the `bx` icon library.

<!-- Create employee  Page-->
# Create Employee Page

This file contains the HTML code for the create employee page of the HR-MS web application.

## Purpose

The create employee page displays a form for adding a new employee with their personal details, bank details, and company details. The page includes fields for name, contact, date of birth, gender, email, password, image, address, account holder name, account number, bank name, bank identifier code, branch location, tax payer id, branch, department, designation, contract type, payment type, job type, permissions, and company date of joining.

## Layout

The page extends the `layouts/master` template and defines the `body-contents` section.

## Usage

This file is included in the HR-MS web application and is used to display the create employee page.

## Package

This file is part of the `HR-MS` package.

## Subpackage

This file is part of the `Employee` subpackage.

## HTML Structure

The HTML structure of the page includes a main section with a container div, a title, a navigation menu, and a setup div. The setup div contains a form with several sections for personal details, bank details, and company details. The form includes input fields, radio buttons, select options, and a file upload field.

## CSS Classes

The page uses several CSS classes to style the HTML elements, including `title`, `emp`, `divider`, `active`, `hr`, `create-employee`, `personal-details`, `heading`, `color-top`, `begin`, `form-control`, `form-check`, `form-check-input`, `form-check-label`, `form-label`, `inputGroupFile01`, `btn`, `btn-sm`, `submit`, and `mt-3`.

## JavaScript

The page does not use any JavaScript.

## Dependencies

The page depends on the `layouts/master` template and the `bx` icon library.

<!-- Branch master page -->
# Branch Management Page

This file contains the HTML code for the branch management page of the HR-MS web application.

## Purpose

The branch management page displays a table of branches with their details, such as name and actions. The page also includes buttons for adding, editing, and deleting branches.

## Layout

The page extends the `layouts/master` template and defines the `body-contents` section.

## Usage

This file is included in the HR-MS web application and is used to display the branch management page.

## Package

This file is part of the `HR-MS` package.

## Subpackage

This file is part of the `Branch` subpackage.

## HTML Structure

The HTML structure of the page includes a main section with a container div, a title, a navigation menu, and a setup div. The setup div contains a list of management options and a table of branches. The table includes columns for name and actions.

## CSS Classes

The page uses several CSS classes to style the HTML elements, including `title`, `emp`, `divider`, `active`, `hr`, `setup`, `list`, `event-table`, `dropdown`, `hidden-arrow`, `update`, `delete`, `btn`, `btn-sm`, `arrow`, `mt-3`, `color-top`, `begin`, `form-control`, `form-check`, `form-check-input`, `form-check-label`, `form-label`, `inputGroupFile01`, `submit`, and `event-table`.

## JavaScript

The page uses JavaScript to handle the dropdown menu for each branch row. The dropdown menu includes options for editing and deleting the branch.

## Dependencies

The page depends on the `layouts/master` template and the `bx` icon library.


<!-- Routes -->
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

The routes work together with the `Home` controller to define the actions for the various pages of the HR-MS web application. The `Home` controller defines the actions for the home page, employee management page, create employee page, department management page, and branch management page. When a user visits a URL defined in the routes, the corresponding action of the `Home` controller is executed, which returns the corresponding view.

## Views

The views are defined in the `Views` directory of the HR-MS web application. The views correspond to the actions of the `Home` controller and define the HTML code for the various pages of the application.