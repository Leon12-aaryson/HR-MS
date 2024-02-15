<ul>
 
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'department' ? 'active-list' : '' ?>">
        <a href="<?= base_url('department'); ?>">Department</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'designation' ? 'active-list' : '' ?>">
        <a href="<?= base_url('designation'); ?>">Designation</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'leave' ? 'active-list' : '' ?>">
        <a href="<?= base_url('leave'); ?>">Leave Type</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == ' allowance' ? 'active-list' : '' ?>">
        <a href="<?= base_url('leave'); ?>">Allowance Type</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'loan' ? 'active-list' : '' ?>">
        <a href="<?= base_url('loan'); ?>">Loan options</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'deduction' ? 'active-list' : '' ?>">
        <a href="<?= base_url('deduction'); ?>">Deduction option</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'payement' ? 'active-list' : '' ?>">
        <a href="<?= base_url('payement'); ?>">Payment Type</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'contract' ? 'active-list' : '' ?>">
        <a href="<?= base_url('contract'); ?>">Contract Type</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'user-type' ? 'active-list' : '' ?>">
        <a href="<?= base_url('job'); ?>">User Type</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
</ul>