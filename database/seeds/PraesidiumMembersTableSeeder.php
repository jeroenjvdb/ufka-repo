<?php

use Illuminate\Database\Seeder;

class PraesidiumMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('praesidium_members')->truncate();
        
        $file = file(asset('ufka-praesidium-1920.csv'),FILE_SKIP_EMPTY_LINES); 
        $csv = array_map("str_getcsv",$file, array_fill(0, count($file), ';'));
        $keys = array_shift($csv);
        foreach ($csv as $i=>$row) {
            $csv[$i] = array_combine($keys, $row);
        }
        
        foreach ($csv as $m) {
            DB::table('praesidium_members')->insert($m);
        }
    }
}
