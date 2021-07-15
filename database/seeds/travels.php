<?php

use Illuminate\Database\Seeder;
use App\Travel;

class travels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayTravel=config('travel');

        foreach ($arrayTravel as $item) {
            $travel = new Travel();

            $travel->name=$item['name'];
            $travel->surname=$item['surname'];
            $travel->resident_in=$item['resident_in'];
            $travel->provence_of=$item['provence_of'];
            $travel->postal_code=$item['postal_code'];
            $travel->number_telephone=$item['number_telephone'];
            $travel->destination=$item['destination'];
            $travel->name_hotel=$item['name_hotel'];
            $travel->date_and_time=$item['date_and_time'];
            $travel->airport_name=$item['airport_name'];
            $travel->number_of_days=$item['number_of_days'];
            $travel->number_of_people=$item['number_of_people'];
            $travel->price=$item['price'];
            
            $travel->save();
            
        }
    }
}
