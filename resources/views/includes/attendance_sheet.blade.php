<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attendance</title>
    <link rel="stylesheet" href="/fonts/stylesheet.css">
    <style>
        #table {
            font-family: 'Raleway', sans-serif;
            font-weight: 400;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            overflow-x: scroll;
            font-size: 6px;
            margin: 0 auto;
            table-layout: fixed;
        }
        #table td, table th {
            border: 1px solid #000;
            padding: 5px 3px;
            word-break: normal;
        }
        #table td {
            text-align: center;
        }
        #table th {
            font-weight: 700;
        }
        #table .rotate_table_th_text {
            height: 40px;
            white-space: nowrap;
        }
        #table .rotate_table_th_text > div {
            transform:
                translate(12px, 0px)
                rotate(-90deg);
            width: 30px;
        }
        .holiday {
            background: #ccc;
        }
        .nowrap {
            white-space: nowrap;
        }


    </style>
</head>
<body>
<table id="table">
    <tr>
        <th style="width: 5%">Name</th>
        <th style="width: 5%">Area/Territory</th>
        <th style="width: 6%">Designation</th>
        <th style="width: 5%">Mob No</th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Fri/26/Feb</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Sat/27/Feb</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Sun/28/Feb</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Mon/01/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Tue/02/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Wed/03/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Thu/04/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Fri/05/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Sat/06/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Sun/07/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Mon/08/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Tue/09/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Wed/10/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Thu/11/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Fri/12/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Sat/13/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Sun/14/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Mon/15/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Tue/16/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Wed/17/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Thu/18/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Fri/19/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Sat/20/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Sun/21/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Mon/22/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Tue/23/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Wed/24/Mar</div></th>
        <th style="width: 2%" class="dates rotate_table_th_text"><div>Thu/25/Mar</div></th>
        <th style="width: 2%">P</th>
        <th style="width: 2%">L</th>
        <th style="width: 2%">Do</th>
        <th style="width: 2%">WFH</th>
        <th style="width: 2%"><div>Total Working Day</div></th>
    </tr>
    <tr>
        <td>Md Alif Arifin</td>
        <td>Developer</td>
        <td>Executive MIS(SFA)</td>
        <td>01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
    <tr>
        <td class="nowrap">Md Alif Arifin</td>
        <td>Developer</td>
        <td class="nowrap">Executive MIS(SFA)</td>
        <td class="nowrap">01913223368</td>
        <td class="">DO</td>
        <td>L</td>
        <td>L</td>
        <td>L</td>
        <td>P</td>
        <td>P</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td>WFH</td>
        <td class="">DO</td>
        <td>P</td>
        <td class="">DO</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>P</td>
        <td>9</td>
        <td>1</td>
        <td>4</td>
        <td>11</td>
        <td><div>25</div></td>
    </tr>
</table>
</body>
</html>
