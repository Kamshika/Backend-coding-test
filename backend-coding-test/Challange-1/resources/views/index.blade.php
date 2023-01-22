<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>

    <h2>Attendance Sheet</h2>

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Schedule</th>
            <th>CheckIn</th>
            <th>checkOut</th>
        </tr>
        @foreach($attendanceRecords as $row)
        <tr>
            <td>{{$row->first_name}}</td>
            <td>{{$row->last_name}}</td>
            <td>{{$row->schedule}}</td>
            <td>{{$row->check_in}}</td>
            <td>{{$row->check_out}}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>