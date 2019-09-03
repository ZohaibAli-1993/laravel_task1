<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class seed_birds_table extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('birds')->insert([
            'name'=>'pengin', 
            'color'=>'black',  
            'family'=>"Non flying ",  
            'speed'=>'4mph',
            'can_fly'=>"false",  
            'created_at'=>Carbon::now(),  
            'Updated_at'=>Carbon::now()
        ]); 
        DB::table('birds')->insert([
            'name'=>'chicken', 
            'color'=>'white',  
            'family'=>"non flying",  
            'speed'=>'5mph',
            'can_fly'=>"false",  
            'created_at'=>Carbon::now(),  
            'Updated_at'=>Carbon::now()
        ]);  
        DB::table('birds')->insert([
            'name'=>'crow', 
            'color'=>'Black ',  
            'family'=>"flying",  
            'speed'=>'10mph',
            'can_fly'=>"true",  
            'created_at'=>Carbon::now(),  
            'Updated_at'=>Carbon::now()
        ]);  
        DB::table('birds')->insert([
            'name'=>'sparrow', 
            'color'=>'brown',  
            'family'=>"flying",  
            'speed'=>'2mph',
            'can_fly'=>"true",  
            'created_at'=>Carbon::now(),  
            'Updated_at'=>Carbon::now()
        ]);   
        DB::table('birds')->insert([
            'name'=>'blue jay', 
            'color'=>'blue',  
            'family'=>"flying",  
            'speed'=>'4mph',
            'can_fly'=>"true",  
            'created_at'=>Carbon::now(),  
            'Updated_at'=>Carbon::now()
        ]);   
        DB::table('birds')->insert([
            'name'=>'ostrich', 
            'color'=>'grey',  
            'family'=>"non flying",  
            'speed'=>'10mph',
            'can_fly'=>"false",  
            'created_at'=>Carbon::now(),  
            'Updated_at'=>Carbon::now()
        ]);    
        DB::table('birds')->insert([
            'name'=>'Dippers', 
            'color'=>'Black',  
            'family'=>"Caprimulgidae",  
            'speed'=>'8mph',
            'can_fly'=>"true",  
            'created_at'=>Carbon::now(),  
            'Updated_at'=>Carbon::now()
        ]); 
        DB::table('birds')->insert([
            'name'=>'Cuckoos', 
            'color'=>'blue',  
            'family'=>"Cuculidae",  
            'speed'=>'12mph',
            'can_fly'=>"true",  
            'created_at'=>Carbon::now(),  
            'Updated_at'=>Carbon::now()
        ]);
 


    }
}
