<?= $this->extend('layouts/master') ?>
<?= $this->section('body-contents') ?>

<main>
            <div class="container">
                <h1 class="title">View Employee Details</h1>
                <ul class=" emp" style="line-height: none;">
                    <li><a href="#">Home</a></li>
                    <li class="divider">/</li>
                    <li><a href="#" class="active">Employee Details</a></li>
                </ul> 
                <div class="hr"></div>

               <div class="setup">
                <div class="list mother-profile mt-3">
                    <div class="color-top"></div>
                    <div class="profile-head">
                        <h1>Profile Picture</h1>
                    </div>
                    <div class="employee-image">
                        <img src="./public/assets/img/face girl.jpg" >
                    </div>
                   
                </div>
                    <div class="event-table details-table mt-3">   
                        <div class="color-top"></div> 
                        <div class="profile-head">
                            <h1>Personal Details</h1>
                        </div>                
                        <table class="table_details">
                            <tbody>
                                <tr>
                                    <td class="begin">Name</td>
                                    <td class="end">ssewankambo Derick</td>
                                </tr>
                                <tr>
                                    <td class="begin">Email</td>
                                    <td class="end">ssewankamboderick@gmail.com</td>
                                </tr>
                                <tr>
                                    <td class="begin">Contact</td>
                                    <td class="end">+256 70556545</td>
                                </tr>
                                <tr>
                                    <td class="begin">Date of Birth</td>
                                    <td class="end">12/10/2001</td>
                                </tr>
                                <tr>
                                    <td class="begin">Gender</td>
                                    <td class="end">Male</td>
                                </tr>
                                <tr>
                                    <td class="begin">Address</td>
                                    <td class="end">Matugga</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="profile-head mt-3 mb-3">
                            <h1>Campany Details</h1>
                        </div> 
                        <table class="table_details">
                            <tbody>
                                <tr>
                                    <td class="begin">Branch</td>
                                    <td class="end">Main Branch</td>
                                </tr>
                                <tr>
                                    <td class="begin">Department</td>
                                    <td class="end">IT Department</td>
                                </tr>
                                <tr>
                                    <td class="begin">Designation</td>
                                    <td class="end">Software Engineering</td>
                                </tr>
                                <tr>
                                    <td class="begin">Contract Type</td>
                                    <td class="end">2 Years</td>
                                </tr>
                                <tr>
                                    <td class="begin">Payment Type</td>
                                    <td class="end">Monthly</td>
                                </tr>
                                <tr>
                                    <td class="begin">Job Type</td>
                                    <td class="end">Software</td>
                                </tr>
                                <tr>
                                    <td class="begin">Date of Joining</td>
                                    <td class="end">10/10/2023</td>
                                </tr>
                                <tr>
                                    <td class="begin">Document</td>
                                    <td class="end"><a href="#" class="btn btn-sm btn-primary"><i style="color: #fff; font-size: 18px;" class='bx bx-download'></i> &nbsp;Download</a></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="profile-head mt-3 mb-3">
                            <h1>Bank Details</h1>
                        </div> 
                        <table class="table_details">
                            <tbody>
                                <tr>
                                    <td class="begin">Account Holder Name</td>
                                    <td class="end">ssewankambo Derick</td>
                                </tr>
                                <tr>
                                    <td class="begin">Account Nnumber</td>
                                    <td class="end">045221484</td>
                                </tr>
                                <tr>
                                    <td class="begin">Bank Name</td>
                                    <td class="end">Centinary Bank</td>
                                </tr>
                                <tr>
                                    <td class="begin">Bank Identifier Code</td>
                                    <td class="end">0566sc4d56</td>
                                </tr>
                                <tr>
                                    <td class="begin">Tax Payer Id</td>
                                    <td class="end">53668521</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
               </div>
        </main>
<?= $this->endSection() ?>