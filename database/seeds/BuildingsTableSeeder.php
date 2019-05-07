<?php

use Illuminate\Database\Seeder;
use App\Buildings;

class BuildingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('buildings') -> delete();
        $json = File::get("./fullbrlist.json");
        $data = json_decode($json);

        foreach($data as $row){
            Buildings::create(
                array(
                    'bldg_name' => $row->facility_name
                )
            );
        }

    }
}
