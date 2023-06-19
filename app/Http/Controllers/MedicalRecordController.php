<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecords;


use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
    public function CreateRecord(Request $request)
    {
        $validatedData = $request->validate([
            'userId' => 'required|numeric',
            'xRay' => 'required',
            'ultrasoundScan' => 'required',
            'ctScan' => 'required',
            'mri' => 'required',
        ]);
        if (!is_array($validatedData['xRay'])) {
            return response([
                'message' => ['xRay must be a json containing. chest, foot... etc']
            ], 422);
        }
        if (!is_array($validatedData['ultrasoundScan'])) {
            return response([
                'message' => ["ultrasoundScan must be a json containter description, pelvis.. etc "]
            ], 422);
        }
        MedicalRecords::create([
            'userId' => $validatedData['userId'],
            'xRay' => json_encode($validatedData['xRay']),
            'ultrasoundScan' => json_encode($validatedData['ultrasoundScan']),
            'ctScan' => $validatedData['ctScan'],
            'mri' => $validatedData['mri'],
        ]);
        return response()->json([
            'message' => 'success',
        ]);
    }
    public function GetRecord($id)
    {
        $MedicalRecords = MedicalRecords::find($id);
        return response()->json($MedicalRecords);
    }
}
