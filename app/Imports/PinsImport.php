<?php

namespace App\Imports;

use App\Pins;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;

class PinsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pins([
            //
            'PinCode'=>$row[0],
            'SerialNo'=>$row[1],
            'BatchNo'=>$row[2],
        ]);
    }
    public function batchSize():int
    {
      return 1000;
    }
}
