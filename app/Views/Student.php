<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 75%;
            margin: 0 auto;
            height: 200px;

            h2 {
                color: #fff;
                font-size: 2rem;
            }

            .direction {
                text-align: center;
                color: #fff;
            }
        }

        .outer {
            background-color: hsl(106, 66%, 53%);
            clip-path: polygon(0 0, 100% 0%, 100% 100%, 0 78%);
            margin-bottom: 30px;
        }

        .title_emp {
            width: 75%;
            background-color: hsl(106, 66%, 53%);
            margin: 0 auto;
            text-align: center;
            color: #fff;
            font-size: 20px;
            padding: 5px;
        }

        .both_tables {
            width: 75%;
            margin: 0 auto;
            display: flex;

            table {
                width: 100%;
                border-collapse: collapse;

                td {
                    border: 1px solid #000;
                    padding: 2%;
                }
            }
        }
        .both_allow_deduct{
            width: 75%;
            margin: 0 auto;
            display: flex;
            gap: 10px;
            table {
                width: 100%;
                border-collapse: collapse;

                td {
                    border: 1px solid #000;
                    padding: 2%;
                }
            }
        }
        .title_allow{
            width: 100%;
            background-color: hsl(106, 66%, 53%);
            margin: 0 auto;
            text-align: center;
            color: #fff;
            font-size: 20px;
            padding: 5px;
        }
        .allowance{
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="body">
        <div class="outer">
            <div class="header">
                <div>
                    <h2>SALARY SLIP</h2>
                </div>
                <div class="direction">
                    <h2>HR-MS</h2>
                    <p>12345 Street Road, Kampala, Uganda</p>
                    <p>phone: +256 785-575-1235</p>
                </div>
            </div>
        </div>
        <div style="margin-bottom: 20px;">
            <div class="title_emp">
                <h4>Employee information</h4>
            </div>
            <div class="both_tables">
                <table>
                    <tr>
                        <td>Employee_Id</td>
                        <td>74110</td>
                    </tr>
                    <tr>
                        <td>Employee Name</td>
                        <td>Ssewankambo Derick</td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>IT</td>
                    </tr>
                    <tr>
                        <td>Desigination</td>
                        <td>Software</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td>Salary</td>
                        <td>7100000</td>
                    </tr>
                    <tr>
                        <td>Pay Date</td>
                        <td>7/8/2024</td>
                    </tr>
                    <tr>
                        <td>Pay Type</td>
                        <td>Bank</td>
                    </tr>
                    <tr>
                        <td>AC/NO.</td>
                        <td>1100</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="both_allow_deduct">
            <div class="allowance">
                <div class="title_allow">
                    <h4>Allowances</h4>
                </div>
                <table>
                    <tr>
                        <td>Employee_Id</td>
                        <td>74110</td>
                    </tr>
                    <tr>
                        <td>Employee Name</td>
                        <td>Ssewankambo Derick</td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>IT</td>
                    </tr>
                    <tr>
                        <td>Desigination</td>
                        <td>Software</td>
                    </tr>
                </table>
            </div>
            <div class="allowance">
                <div class="title_allow">
                    <h4>Deduction</h4>
                </div>
                <table>
                    <tr>
                        <td>Employee_Id</td>
                        <td>74110</td>
                    </tr>
                    <tr>
                        <td>Employee Name</td>
                        <td>Ssewankambo Derick</td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>IT</td>
                    </tr>
                    <tr>
                        <td>Desigination</td>
                        <td>Software</td>
                    </tr>
                </table>
            </div>
        </div>
        <div></div>
    </div>
</body>

</html>