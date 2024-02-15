<ul>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'branch-master' ? 'active-list' : '' ?>">
        <a href="<?= base_url('branch-master') ?>">Branch Manager</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
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

    <li class="<?= basename($_SERVER['PHP_SELF']) == 'loan' ? 'active-list' : '' ?>">
        <a href="<?= base_url('loan'); ?>">Loan options</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'shift' ? 'active-list' : '' ?>">
        <a href="<?= base_url('shift'); ?>">Shift type</a>
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
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'job' ? 'active-list' : '' ?>">
        <a href="<?= base_url('job'); ?>">Job Type</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
    <li class="<?= basename($_SERVER['PHP_SELF']) == 'allowances' ? 'active-list' : '' ?>">
        <a href="<?= base_url('allowances'); ?>">Allowances</a>
        <i class='bx bxs-chevron-right arrow'></i>
    </li>
</ul>