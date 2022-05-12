<?php

namespace App\Imports;

use App\Models\Residuo;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ResiduosImport implements ToModel, WithChunkReading, ShouldQueue
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function model(array $row)
    {
        if($this->notTitle($row) && $this->notNull($row)) {
            return new Residuo([
                'name' => $row[1],
                'residue_type' => $row[2],
                'category' => $row[3],
                'treatment_tec' => $row[4],
                'class' => $row[5],
                'measurement' => $row[6]
            ]);
        }
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    // public function collection(Collection $rows)
    // {
    //     foreach ($rows as $row) {

    //         if($this->notTitle($row) && $this->notNull($row)) {
    //             Residuo::create([
    //                 'name' => $row[1],
    //                 'residue_type' => $row[2],
    //                 'category' => $row[3],
    //                 'treatment_tec' => $row[4],
    //                 'class' => $row[5],
    //                 'measurement' => $row[6]
    //             ]);
    //         }
    //     }
    // }

    public function notTitle($row) {
        return strcmp($row[1], 'Nome Comum do Resíduo') == 0 ? false : true;            
    }

    public function notNull($row) {
        if($row[1] && $row[2] && $row[3] && $row[4] && $row[5] && $row[6]) {
            return true;
        }

        return false;
    }
    
}
