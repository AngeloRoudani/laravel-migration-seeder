<?php

namespace Database\Seeders;

use App\Models\Train;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = self::getInfoCsv(__DIR__ . '/trains.csv');

        foreach ($data as $key => $row) {
            if($key > 0) {
                $train = new Train();
                $train->company = $row[0];
                $train->departure_station = $row[1];
                $train->arrival_station = $row[2];
                $train->departure_time = $row[3];
                $train->arrival_time = $row[4];
                $train->train_code = $row[5];
                $train->wagons_number = $row[6];
                $train->on_time = $row[7];
                $train->cancelled = $row[8];
                $train->save();

            }
        }
    }

    public static function getInfoCsv($link) {

        $data = [];

        $csv = fopen($link, 'r');

        if($csv == false) {
            throw new Exception('File non valido');
        }

        try {
            while (($row = fgetcsv($csv)) !== false) {
                $data[] = $row; 
            }
            return $data;

        } catch (Exception $e) {
            echo 'Si è verificato un errore: ' . $e->getMessage();
        }


    }
}
