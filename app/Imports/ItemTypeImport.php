<?php

namespace App\Imports;

use App\Models\ItemType;

use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;
use DB;

class ItemTypeImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // $exists = ItemType::where('name',$row['name'])->first();
        // if ($exists) {
        //     //LOGIC HERE TO UPDATE
        //     return null;
        // }
        $itemType = new ItemType([
            "name" => $row['name'],
            "item_code" => $row['item_code'],
            "quantity" => $row['quantity']
        
        ]);
        return $itemType;
    }
}
