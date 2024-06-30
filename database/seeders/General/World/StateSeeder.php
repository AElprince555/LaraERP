<?php

namespace Database\Seeders\General\World;

use App\Models\General\World\Country;
use App\Models\General\World\State;
use Illuminate\Database\Seeder;
use PHPUnit\Framework\Constraint\Count;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        State::insert([
            //egypt states
            [
                'name' => 'cairo',
                'code' => Country::where('short', 'EGY')->first()->code . '-CAI',
                'short' => 'CAIRO',
                'country_id'
                =>
                    Country::where('short', 'EGY')
                        ->first()->id
            ],
            [
                'name' => 'alexandria',
                'code' => Country::where('short', 'EGY')->first()->code . '-ALX',
                'short' => 'ALEXANDRIA',
                'country_id'
                =>
                    Country::where
                    ('short', 'EGY')->first()->id
            ],
            [
                'name' => 'giza',
                'code' => Country::where('short', 'EGY')->first()->code . '-GZ',
                'short' => 'GIZA',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')
                        ->first()->id
            ],
            [
                'name' => 'luxor',
                'code' => Country::where('short', 'EGY')->first()->code . '-LX',
                'short' => 'LUXOR',
                'country_id'
                =>
                    Country::where
                    ('short', 'EGY')
                        ->first()->id
            ],
            [
                'name' => 'asyut',
                'code' => Country::where('short', 'EGY')->first()->code . '-AST',
                'short' => 'ASYUT',
                'country_id'
                =>
                    Country::where('short', 'EGY')
                        ->first()->id
            ],
            [
                'name' => 'beheira',
                'code' => Country::where('short', 'EGY')->first()->code . '-BH',
                'short' => 'BEHEIRA',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'beni suef',
                'code' => Country::where('short', 'EGY')->first()->code . '-BNS',
                'short' => 'BENI SUEF',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'dakahlia',
                'code' => Country::where('short', 'EGY')->first()->code . '-DK',
                'short' => 'DAKAHLIA',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'damietta',
                'code' => Country::where('short', 'EGY')->first()->code . '-DT',
                'short' => 'DAMIETTA',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'faiyum',
                'code' => Country::where('short', 'EGY')->first()->code . '-FYM',
                'short' => 'FAIYUM',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')
                        ->first()->id
            ],
            [
                'name' => 'gharbia',
                'code' => Country::where('short', 'EGY')->first()->code . '-GH',
                'short' => 'GHARBIA',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'ismailia',
                'code' => Country::where('short', 'EGY')->first()->code . '-IS',
                'short' => 'ISMAILIA',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'minya',
                'code' => Country::where('short', 'EGY')->first()->code . '-MN',
                'short' => 'MINYA',
                'country_id'
                =>
                    Country::where
                    ('short', 'EGY')
                        ->first()->id
            ],
            [
                'name' => 'monufia',
                'code' => Country::where('short', 'EGY')->first()->code . '-MNF',
                'short' => 'MONUFIA',
                'country_id'
                =>
                    Country::where('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'qalyubia',
                'code' => Country::where('short', 'EGY')->first()->code . '-KB',
                'short' => 'QALYUBIA',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'new valley',
                'code' => Country::where('short', 'EGY')->first()->code . '-WAD',
                'short' => 'NEW VALLEY',
                'country_id'
                =>
                    Country::where
                    ('short', 'EGY')->first()->id
            ],
            [
                'name' => 'suez',
                'code' => Country::where('short', 'EGY')->first()->code . '-SUZ',
                'short' => 'SUEZ',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')
                        ->first()->id
            ],
            [
                'name' => 'aswan',
                'code' => Country::where('short', 'EGY')->first()->code . '-ASN',
                'short' => 'ASWAN',
                'country_id'
                =>
                    Country::where('short', 'EGY')
                        ->first()->id
            ],
            [
                'name' => 'aswan',
                'code' => Country::where('short', 'EGY')->first()->code . '-AST',
                'short' => 'ASWAN',
                'country_id'
                =>
                    Country::where('short', 'EGY')
                        ->first()->id
            ],
            [
                'name' => 'red sea',
                'code' => Country::where('short', 'EGY')->first()->code . '-BA',
                'short' => 'RED SEA',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'qena',
                'code' => Country::where('short', 'EGY')->first()->code . '-KN',
                'short' => 'QENA',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')
                        ->first()->id
            ],
            [
                'name' => 'north sinai',
                'code' => Country::where('short', 'EGY')->first()->code . '-SIN',
                'short' => 'NORTH SINAI',
                'country_id'
                =>
                    Country::where('short', 'EGY')->first()->id
            ],
            [
                'name' => 'south sinai',
                'code' => Country::where('short', 'EGY')->first()->code . '-JS',
                'short' => 'SOUTH SINAI',
                'country_id'
                =>
                    Country::where('short', 'EGY')->first()->id
            ],
            [
                'name' => 'matrouh',
                'code' => Country::where('short', 'EGY')->first()->code . '-MT',
                'short' => 'MATROUH',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'port said',
                'code' => Country::where('short', 'EGY')->first()->code . '-PTS',
                'short' => 'PORT SAID',
                'country_id'
                =>
                    Country::where
                    ('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'sharqia',
                'code' => Country::where('short', 'EGY')->first()->code . '-SHR',
                'short' => 'SHARQIA',
                'country_id'
                =>
                    Country::where('short',
                        'EGY')->first()->id
            ],
            [
                'name' => 'sohag',
                'code' => Country::where('short', 'EGY')->first()->code . '-SHG',
                'short' => 'SOHAG',
                'country_id'
                =>
                    Country::where('short', 'EGY')
                        ->first()->id
            ],
            // saudi arabia states
            [
                'name' => 'riyadh',
                'code' => Country::where('short', 'SAU')->first()->code . '-01',
                'short' => 'RIYADH',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'makkah al mukarramah',
                'code' => Country::where('short', 'SAU')->first()->code . '-02',
                'short' => 'MAKKAH AL MUKARRAMAH',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'al madinah al munawwarah',
                'code' => Country::where('short', 'SAU')->first()->code . '-03',
                'short' => 'AL MADINAH AL MUNAWWARAH',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'ash sharqiyah',
                'code' => Country::where('short', 'SAU')->first()->code . '-04',
                'short' => 'ASH SHARQIYAH',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'al qasim',
                'code' => Country::where('short', 'SAU')->first()->code . '-05',
                'short' => 'AL QASIM',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'ha\'il',
                'code' => Country::where('short', 'SAU')->first()->code . '-06',
                'short' => 'HA\'IL',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'tabuk',
                'code' => Country::where('short', 'SAU')->first()->code . '-07',
                'short' => 'TABUK',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'al hudud ash shamaliyah',
                'code' => Country::where('short', 'SAU')->first()->code . '-08',
                'short' => 'AL HUDUD ASH SHAMALIYAH',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'jazan',
                'code' => Country::where('short', 'SAU')->first()->code . '-09',
                'short' => 'JAZAN',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'najran',
                'code' => Country::where('short', 'SAU')->first()->code . '-10',
                'short' => 'NAJRAN',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'al baha',
                'code' => Country::where('short', 'SAU')->first()->code . '-11',
                'short' => 'AL BAHA',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'al jawf',
                'code' => Country::where('short', 'SAU')->first()->code . '-12',
                'short' => 'AL JAWF',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
            [
                'name' => 'asir',
                'code' => Country::where('short', 'SAU')->first()->code . '-14',
                'short' => 'ASIR',
                'country_id' => Country::where('short', 'SAU')->first()->id
            ],
        ]);

    }
}
