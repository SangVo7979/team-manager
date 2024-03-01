<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Illuminate\Support\Facades\DB;

class TeamExport implements FromCollection,WithHeadings,WithMapping,WithEvents,WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $teams = DB::table('department')->join('team', 'department.department_id', '=', 'team.department_id')->select('*');
        $teams = $teams->get();
        return $teams;
    }

    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 30,
            'C' => 40,            
        ];
    }

    /**
     * Returns headers for report
     * @return array
     */
    public function headings(): array {
        return [
            'Team ID',
            'Team Name',
            'Department Name'  
        ];
    }

    public function map($user): array {
        return [
            $user->team_id,
            $user->team_name,
            $user->department_name
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $cellRange = 'A1:C1';
                $color = '93ccea';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFill()
                    ->setFillType(Fill::FILL_SOLID)
                    ->getStartColor()->setRGB($color);
            }
        ];
    }
}
