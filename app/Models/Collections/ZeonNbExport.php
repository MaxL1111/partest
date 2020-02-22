<?php


namespace App\Models\Collections;

use App\Models\ZeonNb;
use Maatwebsite\Excel\Concerns\FromCollection;

class ZeonNbExport implements FromCollection
{
    public function collection()
    {
        return ZeonNb::all();
    }
}