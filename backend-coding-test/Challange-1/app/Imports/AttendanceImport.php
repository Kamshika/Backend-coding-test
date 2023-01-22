<?php

namespace App\Imports;

use App\Models\Attendance;
use Illuminate\Database\Eloquent\Model;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AttendanceImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return Model|Attendance|null
     */
    public function model(array $row): Model|Attendance|null
    {
        return new Attendance([
            'employee_id' => $row['employee_id'],
            'schedule_id' => $row['schedule_id'],
            'check_in' => $row['check_in'],
            'check_out' => $row['check_out'],
            'description' => $row['description'],
        ]);
    }
}
