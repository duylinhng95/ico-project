<?php

use Illuminate\Database\Seeder;
use App\Partner;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create( [
		'id'=>2,
		'name'=>'A caption for the above image.',
		'image'=>'1539756183_TelsaStudio_FinalLogo.png',
		'link'=>'#',
		'created_at'=>'2018-10-16 23:03:03',
		'updated_at'=>'2018-10-16 23:03:03'
		] );


					
		Partner::create( [
		'id'=>3,
		'name'=>'A caption for the above image',
		'image'=>'1539771012_TelsaStudio_FinalLogo.png',
		'link'=>'#',
		'created_at'=>'2018-10-17 03:10:12',
		'updated_at'=>'2018-10-17 03:10:12'
		] );


					
		Partner::create( [
		'id'=>4,
		'name'=>'A caption for the above image',
		'image'=>'1539771016_TelsaStudio_FinalLogo.png',
		'link'=>'#',
		'created_at'=>'2018-10-17 03:10:16',
		'updated_at'=>'2018-10-17 03:10:16'
		] );


					
		Partner::create( [
		'id'=>5,
		'name'=>'A caption for the above image',
		'image'=>'1539771019_TelsaStudio_FinalLogo.png',
		'link'=>'#',
		'created_at'=>'2018-10-17 03:10:19',
		'updated_at'=>'2018-10-17 03:10:19'
		] );


					
		Partner::create( [
		'id'=>6,
		'name'=>'A caption for the above image',
		'image'=>'1539771021_TelsaStudio_FinalLogo.png',
		'link'=>'#',
		'created_at'=>'2018-10-17 03:10:21',
		'updated_at'=>'2018-10-17 03:10:21'
		] );


					
		Partner::create( [
		'id'=>7,
		'name'=>'A caption for the above image',
		'image'=>'1539771023_TelsaStudio_FinalLogo.png',
		'link'=>'#',
		'created_at'=>'2018-10-17 03:10:23',
		'updated_at'=>'2018-10-17 03:10:23'
		] );


					
		Partner::create( [
		'id'=>8,
		'name'=>'A caption for the above image',
		'image'=>'1539771025_TelsaStudio_FinalLogo.png',
		'link'=>'#',
		'created_at'=>'2018-10-17 03:10:25',
		'updated_at'=>'2018-10-17 03:10:25'
		] );


					
		Partner::create( [
		'id'=>9,
		'name'=>'A caption for the above image',
		'image'=>'1539771031_TelsaStudio_FinalLogo.png',
		'link'=>'#',
		'created_at'=>'2018-10-17 03:10:31',
		'updated_at'=>'2018-10-17 03:10:31'
		] );
    }
}
