<?php

use Illuminate\Database\Seeder;

class AdvisorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Advisor::create( [
		'id'=>1,
		'name'=>'Card 1',
		'position'=>'Customer Services Manager',
		'description'=>'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
		'created_at'=>'2018-10-16 22:43:39',
		'updated_at'=>'2018-10-16 22:43:39',
		'avatar'=>'1539755019_advisor-avatar-01.png'
		] );
					
		Advisor::create( [
		'id'=>2,
		'name'=>'Card 2',
		'position'=>'Customer Services Manager',
		'description'=>'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
		'created_at'=>'2018-10-16 22:43:53',
		'updated_at'=>'2018-10-16 22:43:53',
		'avatar'=>'1539755033_advisor-avatar-02.png'
		] );
					
		Advisor::create( [
		'id'=>3,
		'name'=>'Card 3',
		'position'=>'Customer Services Manager',
		'description'=>'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.',
		'created_at'=>'2018-10-16 22:43:59',
		'updated_at'=>'2018-10-16 22:43:59',
		'avatar'=>'1539755039_advisor-avatar-03.png'
		] );
    }
}
