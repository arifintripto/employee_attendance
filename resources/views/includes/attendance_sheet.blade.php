<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Attendance</title>
    <style>
        #table {
            font-family: Arial, sans-serif;
            border-collapse: collapse;
            border-spacing: 0;
            width: 100%;
            overflow-x: scroll;
            font-size: 8px;
            margin: 0 auto;
            table-layout: fixed;
        }
        #table td, table th {
            border: 1px solid #000;
            padding: 2px;
            word-break: normal;
        }
        #table td {
            text-align: center;
            font-weight: bold;
        }
        #table th {
            font-weight: bold;
        }
        #table .rotate_table_th_text {
            height: 80px;
            white-space: nowrap;
        }
        #table .rotate_table_th_text > div {
            transform:
                translate(-6px, 0px)
                rotate(-90deg);
            width: 30px;
        }
        .holiday, .gray-bg {
            background: #ccc;
        }
        .green-bg {
            background: #6bbd6b;
        }
        .red-bg {
            background: #ffaaaa;
        }
        .nowrap {
            white-space: nowrap;
        }
        .tr-no-border {
            border-top: 0;
            border-bottom: 0;
            border-right: 0;
        }

    </style>
</head>
<body>

<table id="table">
    <tr>
        <th style="width: 5%">P=PRESENT</th>
        <th style="width: 5%">GH=GOVT. HOLIDAY</th>
        <th style="width: 6%">DO=DOING</th>
        <th colspan="34" class="tr-no-border">ATTENDANCE FOR THE MONTH OF: FEB-21</th>
    </tr>
    <tr>
        <th style="width: 5%">L=LEAVE</th>
        <th style="width: 5%">A=ABSENT</th>
        <th style="width: 6%">WFH=WORK FROM HOME</th>
        <th colspan="34" class="tr-no-border"></th>
    </tr>
    <tr>
        <th style="width: 9%" class="gray-bg">Name</th>
        <th style="width: 6%" class="gray-bg">Area/Territory</th>
        <th style="width: 5%" class="gray-bg">Designation</th>
        <th style="width: 5.5%" class="gray-bg">Mob No</th>
        @foreach ($dates as $date)
            <th style="width: 2%" class="dates rotate_table_th_text @if(date('D',strtotime($date)) === 'Fri') gray-bg @endif"><div>{{ date('D-d-M',strtotime($date)) }}</div></th>
        @endforeach
        <th style="width: 2%">P</th>
        <th style="width: 2%">L</th>
        <th style="width: 2%">Do</th>
        <th style="width: 2%">WFH</th>
        <th style="width: 3%"><div>Total Working Day</div></th>
    </tr>
    @foreach($users as $user)
        @php $datex = $dates @endphp
        <tr>
            <td style="text-align: left">{{ $user->employee->first_name }} {{ $user->employee->last_name }}</td>
            <td style="text-align: left">Developer</td>
            <td>Executive MIS(SFA)</td>
            <td style="text-align: left">01913223368</td>

            @foreach($datex as $key => $date)

                @forelse($user->employee->attendance as $attendance)

                    @if( $attendance->created_at->toDateString() == date('Y-m-d',strtotime($date)) )


                        @if ($attendance->registered == 'yes')
                            <td class="green-bg">P</td>
                            @php goto point89; @endphp
                        @elseif($attendance->registered == 'leave')
                            <td>L</td>
                            @php goto point89; @endphp
                        @elseif($attendance->registered == 'holiday')
                            <td>GH</td>
                            @php goto point89; @endphp
                        @endif
                    @else
                        @continue
                    @endif
                @empty
                    @if(date('D',strtotime($date)) === 'Fri')
                        <td class="gray-bg">DO</td>
                        @php goto point89; @endphp
                    @endif
                    <td class="red-bg">AA</td>
                    @continue

                @endforelse
                    @if(date('D',strtotime($date)) === 'Fri')
                        <td class="gray-bg">DO</td>
                        @php goto point89; @endphp
                    @endif
                    <td class="red-bg">A</td>
                    @php point89: @endphp
            @endforeach



            <td>9</td>
            <td>1</td>
            <td>4</td>
            <td>11</td>
            <td><div>25</div></td>
        </tr>

    @endforeach
</table>


</body>
</html>
