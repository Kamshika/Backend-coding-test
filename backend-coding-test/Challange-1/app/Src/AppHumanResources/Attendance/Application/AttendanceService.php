<?php

namespace App\Src\AppHumanResources\Attendance\Application;

use Illuminate\Support\Facades\DB;

class AttendanceService 
{

    public function getAttendanceSummery()
    {
        $attendanceRecords = DB::SELECT('SELECT e.fname AS first_name, e.lname AS last_name, s.name as schedule, IFNULL(a.check_in, "NA") AS check_in, IFNULL(a.check_out, "NA") AS check_out, IFNULL((SELECT TIMEDIFF(a.check_out,  a.check_in)), "NA") as total_working_hours
                FROM attendances a
                LEFT JOIN employees e ON a.employee_id = e.id
                LEFT JOIN schedules s ON a.schedule_id = s.id');
        return $attendanceRecords;
    }
}
