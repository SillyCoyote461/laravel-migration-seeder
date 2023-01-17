<?php
use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains=[
            [
                'serial_code'=> 123456,
                'operating_region'=> 'Calabria',
                'working_start_date'=> '2010-01-01',
                'last_mainteinance'=> '2022-01-01',
                'next_mainteinance'=> '2023-01-07',
                'retirement_date'=> '2030-01-01',
            ]
        ];

        foreach( $trains as $train){
            $newTrain = new Train();
            $newTrain->serial_code = $train['serial_code'];
            $newTrain->operating_region = $train['operating_region'];
            $newTrain->working_start_date = $train['working_start_date'];
            $newTrain->last_mainteinance = $train['last_mainteinance'];
            $newTrain->next_mainteinance = $train['next_mainteinance'];
            $newTrain->retirement_date = $train['retirement_date'];
            $newTrain->save();
        }
    }
}
