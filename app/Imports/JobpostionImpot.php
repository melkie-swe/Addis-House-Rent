<?php

namespace App\Imports;


use App\Models\JobClass;
use App\Models\WorkUnit;
use App\Models\OfficeLevel;
use App\Models\JobPosition;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithValidation;
use Illuminate\Validation\Rule;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\ToCollection;

class JobpostionImpot implements ToCollection,WithHeadingRow
{
    public function collection(Collection $rows)
    {

        $validator = Validator::make($rows->toArray(), [
            '*.workunit' => 'required',
            '*.jobclass' => 'required',
            
        ])->validate();
         
        foreach ($rows as $row) {

            
            $parentworkunit = WorkUnit::where('name',$row['parentworkunit'])->first();
            //check if the parent work unit exist and in not exist create work unit for parent work unit
           if ($row['parentworkunit']) {
                if ($parentworkunit) {
                    $parentworkunit = WorkUnit::where('name',$row['parentworkunit'])->latest()->first()->id;   
                    }
                else{
                    WorkUnit::create([
                        'name' => $row['parentworkunit'],
                    ]);
                    $parentworkunit = WorkUnit::where('name',$row['parentworkunit'])->latest()->first()->id;
                }
           }

           // check if the work unit exist and if exist update, if not exist create
           $workunitexist = WorkUnit::where('name',$row['workunit'])->first();
           if ($workunitexist) {
                $id = WorkUnit::where('name',$row['workunit'])->latest()->first()->id;
                $workunit = WorkUnit::find($id);
                $workunit->name = $row['workunit'];
                $workunit->work_unit_id = $parentworkunit;
                $workunit->update();
            }
            else{
                WorkUnit::create([
                    'name' => $row['workunit'],
                    'work_unit_id' => $parentworkunit,
                    
                ]);

            }

            // get work unit id
            $workunitname = $row['workunit'];
            $workunitid = WorkUnit::where(function ($query) use ($parentworkunit,$workunitname) {
                $query
                
                ->where('name', '=', $workunitname)
                ->where('work_unit_id', '=', $parentworkunit);
            })->latest()->first()->id;
            
            //check if job class exist and if not exist create
            $jobclassexist = JobClass::where('name',$row['jobclass'])->first();
            if (!$jobclassexist) {
                JobClass::create([
                    'name' => $row['jobclass'],
                ]);
            }
            
            // get jobclass id
            $jobclassid = JobClass::where('name',$row['jobclass'])->latest()->first()->id;
            
            // create job position 
            JobPosition::create([
                'job_class_id' => $jobclassid,
                'work_unit_id' => $workunitid,
                
            ]);

            
        }
    }
}
