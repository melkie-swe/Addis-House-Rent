<?php

namespace App\Imports;

use App\Models\Person;
use App\Models\EmploymentInformation;
use App\Models\Gender;
use App\Models\JobClass;
use App\Models\WorkUnit;
use App\Models\OfficeLevel;
use App\Models\JobPosition;
use App\Models\EmployemetType;
use App\Models\Education;
use App\Models\Qualification;
use App\Models\StudyField;
use App\Models\SalaryHistory;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;

class EmployeeImport implements ToCollection,WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

        
        $workUnit = WorkUnit::where('name',$row['workunit'])->first()->id ?? null;
        $jobClass = JobClass::where('name',$row['jobclass'])->first()->id ?? null;
        $positionid = $row['positionid'] ?? null;

        $jobpositionid = JobPosition::where(function ($query) use ($workUnit,$jobClass,$positionid) {
            $query
            
            ->where('work_unit_id', '=', $workUnit)
            ->where('job_class_id', '=', $jobClass)
            ->where('position_id', '=', $positionid);
                
        })->latest()->first()->id ?? null;

        $row->put('joppostion',$jobpositionid);

       

    }

        

        $validator = Validator::make($rows->toArray(), [
            
            
            
            '*.full_name' => 'required',
            // '*.email' => ['email'],
            '*.id_number' => ['required','unique:App\Models\Person,id_number'],
            '*.workunit' => ['required','exists:App\Models\Person,id_number'],
            '*.workunit' => 'required',
            '*.jobclass' => 'required',
            '*.positionid' => 'required',
            '*.joppostion' => ['exists:App\Models\JobPosition,id','unique:App\Models\EmploymentInformation,job_position_id'],
        ])->validate();
         
        foreach ($rows as $row) {
            
            // if this job position already taken, then skip
            $joppostionexist = EmploymentInformation::where('job_position_id',$row['joppostion'])->first();
            if ($joppostionexist) {
                    return null;
                }



            $gender = Gender::where('name',$row['gender'])->first()->id ?? null;
            Person::create([
                'full_name' => $row['full_name'],
                'id_number' => $row['id_number'],
                'gender_id' => $gender,
                'email' => $row['email'],
                'dob' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['dob']),
                'pension_no' => $row['pension_no'],
                'mobile' => $row['mobile'],
                
            ]);
            $personid = Person::where('id_number',$row['id_number'])->latest()->first()->id ?? null;

            // $workUnit = WorkUnit::where('name',$row['workunit'])->first()->id;
            // $jobClass = JobClass::where('name',$row['jobclass'])->first()->id;
            // $positionid = $row['positionid'];

            // $jobpositionid = JobPosition::where(function ($query) use ($workUnit,$jobClass,$positionid) {
            //     $query
                
            //     ->where('work_unit_id', '=', $workUnit)
            //     ->where('job_class_id', '=', $jobClass)
            //     ->where('position_id', '=', $positionid);
                    
            // })->latest()->first()->id;
            
            
            $employemetType = EmployemetType::where('name',$row['employemettype'])->first()->id ?? null;
            EmploymentInformation::create([
                'person_id' => $personid,
                'basic_salary' => (int)$row['basic_salary'],
                'allowance' => (int)$row['allowance'],
                'job_position_id' => $row['joppostion'],
                'employementtype_id' => $employemetType,
                'start_date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['start_date']),
            ]);

            $Qualification = Qualification::where('name',$row['qualification'])->first()->id ?? null;
            $StudyField = StudyField::where('name',$row['studyfield'])->first()->id ?? null;
            Education::create([
                'person_id' => $personid,
                'study_field_id' => $StudyField,
                'qualification_id' => $Qualification,
                
                
            ]);

            // beginning salary
            SalaryHistory::create([
                'person_id' => $personid,
                'basic_salary' => (int)$row['beginning_basic_salary'],
                'allowance' => (int)$row['beginning_allowance'],
                // 'work_unit' => $row['workunit'],
                // 'job_class' => $row['jobclass'],
                // 'job_postion' => $row['positionid'],
                'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['start_date']),
                'reason_id' => 1,
                
            ]);

            // current salary
            SalaryHistory::create([
                'person_id' => $personid,
                'basic_salary' => (int)$row['basic_salary'],
                'allowance' => (int)$row['allowance'],
                'work_unit' => $row['workunit'],
                'job_class' => $row['jobclass'],
                'job_postion' => $row['positionid'],
                'date' => \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['date_of_nearest_salary_increment']),
                
                
            ]);
        }
    }
}
