<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FinancialOrganization;

class FinancialOrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $f_organizatons = [
            [
                'name' => 'IFIC Bank Limited',
                'short_name' => 'IFICBL',
                'address' => NULL,
                'created_at' => now(),
                'updated_at' => NULL,
            ],
            [
                'name' => 'South East Bank Limited',
                'short_name' => 'SEBL',
                'address' => NULL,
                'created_at' => now(),
                'updated_at' => NULL,
            ],
            [
                'name' => 'The City Bank Limited',
                'short_name' => 'CBL',
                'address' => NULL,
                'created_at' => now(),
                'updated_at' => NULL,
            ],
        ];

        foreach ($f_organizatons as $f_organizaton) {
            $data = FinancialOrganization::where('short_name', $f_organizaton['short_name'])->first();
            if(!$data){
                FinancialOrganization::create($f_organizaton);
            }
        }
    }
}
