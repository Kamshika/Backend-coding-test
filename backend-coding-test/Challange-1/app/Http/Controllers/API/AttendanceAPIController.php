<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Imports\AttendanceImport;
use App\Src\AppHumanResources\Attendance\Application\AttendanceService;
use Excel;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

class AttendanceAPIController extends Controller
{
    
    protected ?AttendanceService $attendanceService = null;

    public function getAttendanceService(): AttendanceService
    {
        if (is_null($this->attendanceService)) {
            $this->attendanceService = new AttendanceService();
        }
        return $this->attendanceService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function importCSV(Request $request): JsonResponse
    {
        $response = new stdClass();
        try {
            Excel::import(new AttendanceImport, $request->file('attendance'));
            $response->data = "Excel imported successfully";
        } catch (Exception $exception) {
            $response->data = $exception->getMessage();
            return response()->json($response, 500);
        }
        return response()->json($response, 201);
    }

    /**
     * @return JsonResponse
     */
    public function getAttendanceSummery(): JsonResponse
    {
        $response = new stdClass();
        $response->data = $this->getAttendanceService()->getAttendanceSummery();
        return response()->json($response);
    }
}
