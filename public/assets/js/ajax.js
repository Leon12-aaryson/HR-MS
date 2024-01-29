
/**
* HR System Setup
*/
$(document).ready(function () {
    // Branch Manager
    let branchmanagerDataTable = $("#branchmanagerDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',


        "ajax": {
            url: "fetchbranchmanagers",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Add branch
    $(document).on("submit", "#branchmasterForm", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "addbranchmanager",
            data: new FormData($("#branchmasterForm")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#addbranchmodal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#branchmasterForm").trigger('reset');
                branchmanagerDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch branch data and populate the update form
    $(document).on('click', '#branchupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchbranchmanager',
            data: { branchid: id },
            success: function (response) {
                $('#updatebranchname').val(response.branch);
                $('#branchid').val(id);
                $('#updatebranchmodal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated branch data
    $(document).on('submit', '#branchmasterFormUpdate', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updatebranchmanager',
            data: {
                'branchname': $("#updatebranchname").val(),
                'branchid': $('#branchid').val(),
            },
            success: function (response) {
                $('#updatebranchmodal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#branchmasterFormUpdate').trigger('reset');
                branchmanagerDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#branchdeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deletebranchmanager",
                    data: {
                        branchid: branchid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        branchmanagerDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Branch data is safe :)',
                    'error'
                )
            }
        });

    });

    // Branch Manager Validation
    $("#branchmasterForm").validate({
        rules: {
            'branchname': {
                required: true
            }
        },
        messages: {
            'branchname': {
                required: "Branch name is required!"
            }
        },

    })


    // Department
    let departmentDataTable = $("#departmentDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',

        "ajax": {
            url: "fetchdepartments",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [4]
        }],
    })

    // Add department
    $(document).on("submit", "#departmentform", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "adddepartment",
            data: new FormData($("#departmentform")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#departmentModal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#departmentform").trigger('reset');
                departmentDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch department data and populate the update form
    $(document).on('click', '#departmentupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchdepartment',
            data: { departmentid: id },
            success: function (response) {
                $('#updatebranchname').val(response.branch);
                $('#updatedepartmentname').val(response.department_name);
                $('#updatesalary').val(response.salary);
                $('#departmentid').val(id);
                $('#updatedepartmentModal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated department data
    $(document).on('submit', '#updatedepartmentform', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updatedepartment',
            data: {
                'branchname': $("#updatebranchname").val(),
                'departmentname': $("#updatedepartmentname").val(),
                'salary': $("#updatesalary").val(),
                'departmentid': $('#departmentid').val(),
            },
            success: function (response) {
                $('#updatedepartmentModal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#updatedepartmentform').trigger('reset');
                departmentDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#departmentdeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deletedepartment",
                    data: {
                        departmentid: departmentid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        departmentDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Department data is safe :)',
                    'error'
                )
            }
        });

    });


     // Department Validation
     $("#departmentform").validate({
        rules: {
            'branchname': {
                required: true
            },
            'departmentname': {
                required: true
            },
            'salary': {
                required: true
            }
        },
        messages: {
            'branchname': {
                required: "Select Branch name!"
            },
            'departmentname': {
                required: "Department name is required!"
            },
            'salary': {
                required: "Enter designated salary"
            }
        },

    })



    // Designation
    let designationDataTable = $("#designationDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',

        "ajax": {
            url: "fetchdesignations",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Add designation
    $(document).on("submit", "#designationform", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "adddesignation",
            data: new FormData($("#designationform")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#designationModal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#designationform").trigger('reset');
                designationDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch designation data and populate the update form
    $(document).on('click', '#designationupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchdesignation',
            data: { designationid: id },
            success: function (response) {
                $('#updatedesignation').val(response.designation);
                $('#designationid').val(id);
                $('#updatedesignationModal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated designation data
    $(document).on('submit', '#updatedesignationform', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updatedesignation',
            data: {
                'designation': $("#updatedesignation").val(),
                'designationid': $('#designationid').val(),
            },
            success: function (response) {
                $('#updatedesignationModal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#updatedesignationform').trigger('reset');
                designationDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#designationdeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deletedesignation",
                    data: {
                        designationid: designationid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        designationDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Designation data is safe :)',
                    'error'
                )
            }
        });

    });


    
     // Designationform Validation
    $("#designationform").validate({
        rules: {
            'designation': {
                required: true
            },
        },
        messages: {
            'designation': {
                required: "Designation is required!"
            }
        },

    })


    // Leave Type
    let leaveDataTable = $("#leaveDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',

        "ajax": {
            url: "fetchleaves",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })


    // Add leave
    $(document).on("submit", "#leaveform", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "addleave",
            data: new FormData($("#leaveform")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#leaveModal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#leaveform").trigger('reset');
                leaveDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch leave data and populate the update form
    $(document).on('click', '#leaveupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchleave',
            data: { leaveid: id },
            success: function (response) {
                $('#updateleavetype').val(response.leave_type);
                $('#leaveid').val(id);
                $('#updateleaveModal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated leave data
    $(document).on('submit', '#updateleaveform', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updateleave',
            data: {
                'leavetype': $("#updateleavetype").val(),
                'leaveid': $('#leaveid').val(),
            },
            success: function (response) {
                $('#updateleaveModal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#updateleaveform').trigger('reset');
                leaveDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#leavedeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deleteleave",
                    data: {
                        leaveid: leaveid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        leaveDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Leave data is safe :)',
                    'error'
                )
            }
        });

    });

// Designationform Validation
$("#leaveform").validate({
    rules: {
        'leavetype': {
            required: true
        },
    },
    messages: {
        'leavetype': {
            required: "Leave type is required!"
        }
    },

})

    // Loan
    let loanDataTable = $("#loanDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',

        "ajax": {
            url: "fetchloans",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Add leave
    $(document).on("submit", "#loanform", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "addloan",
            data: new FormData($("#loanform")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#loanModal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#loanform").trigger('reset');
                loanDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch leave data and populate the update form
    $(document).on('click', '#loanupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchloan',
            data: { loanid: id },
            success: function (response) {
                $('#updateloantype').val(response.loan_type);
                $('#loanid').val(id);
                $('#updateloanModal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated leave data
    $(document).on('submit', '#updateloanform', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updateloan',
            data: {
                'loantype': $("#updateloantype").val(),
                'loanid': $('#loanid').val(),
            },
            success: function (response) {
                $('#updateloanModal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#updateloanform').trigger('reset');
                loanDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#loandeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deleteloan",
                    data: {
                        loanid: loanid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        loanDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Loan data is safe :)',
                    'error'
                )
            }
        });

    });



    // Shift type
    let shiftypeDataTable = $("#shiftypeDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',

        "ajax": {
            url: "fetchshiftypes",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })

    // Add shift
    $(document).on("submit", "#shiftform", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "addshiftype",
            data: new FormData($("#shiftform")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#shiftModal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#shiftform").trigger('reset');
                shiftypeDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch shift data and populate the update form
    $(document).on('click', '#shiftupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchshiftype',
            data: { shiftid: id },
            success: function (response) {
                $('#updateshiftype').val(response.shift);
                $('#shiftid').val(id);
                $('#updateshiftModal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated shift data
    $(document).on('submit', '#updateshiftform', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updateshiftype',
            data: {
                'shift': $("#updateshiftype").val(),
                'shiftid': $('#shiftid').val(),
            },
            success: function (response) {
                $('#updateshiftModal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#updateshiftform').trigger('reset');
                shiftypeDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#shiftdeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deleteshiftype",
                    data: {
                        shiftid: shiftid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        shiftypeDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Shift data is safe :)',
                    'error'
                )
            }
        });

    });



    // Deduction Options
    let deductionDataTable = $("#deductionDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',

        "ajax": {
            url: "fetchdeductions",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })


    // Add deduction
    $(document).on("submit", "#deductionform", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "adddeduction",
            data: new FormData($("#deductionform")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#deductionModal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#deductionform").trigger('reset');
                deductionDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch deduction data and populate the update form
    $(document).on('click', '#deductionupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchdeduction',
            data: { deductionid: id },
            success: function (response) {
                $('#updatedeductiontype').val(response.deduction_option);
                $('#deductionid').val(id);
                $('#updatedeductionModal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated deduction data
    $(document).on('submit', '#updatedeductionform', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updatededuction',
            data: {
                'deduction': $("#updatedeductiontype").val(),
                'deductionid': $('#deductionid').val(),
            },
            success: function (response) {
                $('#updatedeductionModal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#updatedeductionform').trigger('reset');
                deductionDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#deductiondeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deletededuction",
                    data: {
                        deductionid: deductionid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        deductionDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Deduction data is safe :)',
                    'error'
                )
            }
        });

    });


    // Payment
    let paymentDataTable = $("#paymentDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',

        "ajax": {
            url: "fetchpayments",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })


    // Add payment type
    $(document).on("submit", "#paymentForm", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "addpayment",
            data: new FormData($("#paymentForm")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#paymentModal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#paymentForm").trigger('reset');
                paymentDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch payment type data and populate the update form
    $(document).on('click', '#paymentupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchpayment',
            data: { paymentid: id },
            success: function (response) {
                $('#updatepayment').val(response.payement_type);
                $('#paymentid').val(id);
                $('#updatepaymentModal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated payment type data
    $(document).on('submit', '#updatepaymentForm', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updatepayment',
            data: {
                'payment': $("#updatepayment").val(),
                'paymentid': $('#paymentid').val(),
            },
            success: function (response) {
                $('#updatepaymentModal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#updatepaymentForm').trigger('reset');
                paymentDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#paymentdeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deletepayment",
                    data: {
                        paymentid: paymentid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        paymentDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Payment type data is safe :)',
                    'error'
                )
            }
        });

    });


    // Contract
    let contractDataTable = $("#contractDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',

        "ajax": {
            url: "fetchcontracts",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })


    // Add contract type
    $(document).on("submit", "#contractform", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "addcontract",
            data: new FormData($("#contractform")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#contractModal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#contractform").trigger('reset');
                contractDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch contract type data and populate the update form
    $(document).on('click', '#contractupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchcontract',
            data: { contractid: id },
            success: function (response) {
                $('#updatecontracttype').val(response.contract_type);
                $('#contractid').val(id);
                $('#updatecontractModal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated contract type data
    $(document).on('submit', '#updatecontractform', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updatecontract',
            data: {
                'contract': $("#updatecontracttype").val(),
                'contractid': $('#contractid').val(),
            },
            success: function (response) {
                $('#updatecontractModal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#updatecontractform').trigger('reset');
                contractDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#contractdeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deletecontract",
                    data: {
                        contractid: contractid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        contractDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Contract type data is safe :)',
                    'error'
                )
            }
        });

    });


    //job type
    let jobtypeDataTable = $("#jobtypeDataTable").DataTable({
        "processing": true,
        "serverSide": true,
        "stateSave": false, // Remembers data table state
        "order": [],

        "dom": '<"row"<"col-md-6"><"col-md-6"f>>' +
            '<"row"<"col-md-12"t>>' +
            '<"row"<"col-md-5"i><"col-md-7"p>>',

        "ajax": {
            url: "fetchjobtypes",
            method: "POST",
        },
        "columnDefs": [{
            "orderable": false,
            "targets": [2]
        }],
    })


    // Add job type
    $(document).on("submit", "#jobtypeform", (event) => {
        event.preventDefault();
        $.ajax({
            method: "POST",
            url: "addjobtype",
            data: new FormData($("#jobtypeform")[0]),
            processData: false,
            contentType: false,
            success: function (response) {
                $("#jobtypeModal").modal('hide');
                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $("#jobtypeform").trigger('reset');
                jobtypeDataTable.ajax.reload();
            }
        });
    });


    // Update
    // STEP 1: Fetch job type type data and populate the update form
    $(document).on('click', '#jobtypeupdatebtn', function (event) {
        event.preventDefault();
        const id = $(this).val();

        $.ajax({
            method: 'POST',
            url: 'fetchjobtype',
            data: { jobtypeid: id },
            success: function (response) {
                $('#updatejobtype').val(response.job_type);
                $('#jobtypeid').val(id);
                $('#updatejobtypeModal').modal('show');
            }
        });
    });

    // STEP 2: Submit the updated job type type data
    $(document).on('submit', '#updatejobtypeform', function (event) {
        event.preventDefault();

        $.ajax({
            method: 'POST',
            url: 'updatejobtype',
            data: {
                'jobtype': $("#updatejobtype").val(),
                'jobtypeid': $('#jobtypeid').val(),
            },
            success: function (response) {
                $('#updatejobtypeModal').modal('hide');

                Swal.fire({
                    position: 'center',
                    icon: response.status,
                    title: response.message,
                    showConfirmButton: false,
                    timer: 2000 // 2 seconds
                })

                $('#updatejobtypeform').trigger('reset');
                jobtypeDataTable.ajax.reload();
            }
        });
    });

    // Delete
    $(document).on('click', '#jobtypedeletebtn', function (event) {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {

                $.ajax({
                    method: "POST",
                    url: "deletejobtype",
                    data: {
                        jobtypeid: jobtypeid = $(this).val()
                    },
                    success: function (response) {

                        Swal.fire({
                            position: 'center',
                            icon: response.status,
                            title: response.message,
                            showConfirmButton: false,
                            timer: 2000 // 2 seconds
                        })

                        jobtypeDataTable.ajax.reload();
                    }
                });
            } else if (

                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire(
                    'Cancelled',
                    'Job type data is safe :)',
                    'error'
                )
            }
        });

    });


});
