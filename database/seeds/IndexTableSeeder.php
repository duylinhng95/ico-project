<?php

use Illuminate\Database\Seeder;
use App\Index;

class IndexTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Index::create( [
		'id'=>5,
		'section'=>'page1',
		'name'=>'title1',
		'content'=>'Title1',
		'url'=>NULL,
		'created_at'=>'2018-10-12 08:55:11',
		'updated_at'=>'2018-10-12 09:00:33'
		] );
					
		Index::create( [
		'id'=>6,
		'section'=>'page1',
		'name'=>'title2',
		'content'=>'Title2',
		'url'=>NULL,
		'created_at'=>'2018-10-12 08:55:12',
		'updated_at'=>'2018-10-12 08:55:12'
		] );
					
		Index::create( [
		'id'=>7,
		'section'=>'page1',
		'name'=>'description',
		'content'=>'Des',
		'url'=>NULL,
		'created_at'=>'2018-10-12 08:55:12',
		'updated_at'=>'2018-10-12 08:55:12'
		] );
					
		Index::create( [
		'id'=>8,
		'section'=>'page1',
		'name'=>'linkvideo',
		'content'=>'Link',
		'url'=>NULL,
		'created_at'=>'2018-10-12 08:55:12',
		'updated_at'=>'2018-10-12 08:55:12'
		] );
					
		Index::create( [
		'id'=>21,
		'section'=>'social',
		'name'=>'reddit',
		'content'=>'Reddit',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:17:20',
		'updated_at'=>'2018-10-12 09:17:20'
		] );
					
		Index::create( [
		'id'=>22,
		'section'=>'social',
		'name'=>'telegram',
		'content'=>'Telegram',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:17:20',
		'updated_at'=>'2018-10-12 09:17:20'
		] );
					
		Index::create( [
		'id'=>23,
		'section'=>'social',
		'name'=>'twitter',
		'content'=>'Twitter',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:17:20',
		'updated_at'=>'2018-10-12 09:17:20'
		] );
					
		Index::create( [
		'id'=>24,
		'section'=>'social',
		'name'=>'bitcointalk',
		'content'=>'Bitcointalk',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:17:20',
		'updated_at'=>'2018-10-12 09:17:20'
		] );
					
		Index::create( [
		'id'=>25,
		'section'=>'social',
		'name'=>'medium',
		'content'=>'Medium',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:17:20',
		'updated_at'=>'2018-10-12 09:17:20'
		] );
					
		Index::create( [
		'id'=>28,
		'section'=>'page2',
		'name'=>'whitepaper',
		'content'=>'Whitepaper link',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:57:02',
		'updated_at'=>'2018-10-13 03:08:33'
		] );
					
		Index::create( [
		'id'=>29,
		'section'=>'page2',
		'name'=>'image1',
		'content'=>'Ky nguyen.png',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:57:02',
		'updated_at'=>'2018-10-14 06:13:55'
		] );
					
		Index::create( [
		'id'=>30,
		'section'=>'page2',
		'name'=>'image2',
		'content'=>'logo1.jpg',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:57:02',
		'updated_at'=>'2018-10-13 03:08:33'
		] );
					
		Index::create( [
		'id'=>31,
		'section'=>'page2',
		'name'=>'image3',
		'content'=>'logo2.jpg',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:57:02',
		'updated_at'=>'2018-10-13 03:08:33'
		] );
					
		Index::create( [
		'id'=>32,
		'section'=>'page2',
		'name'=>'image4',
		'content'=>'new0112-jpg.jpg',
		'url'=>NULL,
		'created_at'=>'2018-10-12 09:57:02',
		'updated_at'=>'2018-10-13 03:08:33'
		] );
					
		Index::create( [
		'id'=>33,
		'section'=>'page2',
		'name'=>'title1',
		'content'=>'Title 1',
		'url'=>NULL,
		'created_at'=>'2018-10-12 10:04:46',
		'updated_at'=>'2018-10-13 03:08:33'
		] );
					
		Index::create( [
		'id'=>34,
		'section'=>'page2',
		'name'=>'description1',
		'content'=>'Des 1',
		'url'=>NULL,
		'created_at'=>'2018-10-12 10:04:46',
		'updated_at'=>'2018-10-13 03:08:33'
		] );
					
		Index::create( [
		'id'=>35,
		'section'=>'page2',
		'name'=>'title2',
		'content'=>'Title 2',
		'url'=>NULL,
		'created_at'=>'2018-10-12 10:04:46',
		'updated_at'=>'2018-10-13 03:08:33'
		] );
					
		Index::create( [
		'id'=>36,
		'section'=>'page2',
		'name'=>'description2',
		'content'=>'Des 2',
		'url'=>NULL,
		'created_at'=>'2018-10-12 10:04:46',
		'updated_at'=>'2018-10-13 03:08:33'
		] );
					
		Index::create( [
		'id'=>37,
		'section'=>'page3',
		'name'=>'title1',
		'content'=>'Title 1',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>38,
		'section'=>'page3',
		'name'=>'description1',
		'content'=>'Des 1',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>39,
		'section'=>'page3',
		'name'=>'title2',
		'content'=>'Title 2',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>40,
		'section'=>'page3',
		'name'=>'description2',
		'content'=>'Des 2',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>41,
		'section'=>'page3',
		'name'=>'title3',
		'content'=>'Title 3',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>42,
		'section'=>'page3',
		'name'=>'description3',
		'content'=>'Des 3',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>43,
		'section'=>'page3',
		'name'=>'title4',
		'content'=>'Title 4',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>44,
		'section'=>'page3',
		'name'=>'description4',
		'content'=>'Des 4',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>45,
		'section'=>'page3',
		'name'=>'logo1',
		'content'=>'Capture import xero.PNG',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>46,
		'section'=>'page3',
		'name'=>'logo2',
		'content'=>'cay_hong_loc-2.jpg',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>47,
		'section'=>'page3',
		'name'=>'logo3',
		'content'=>'cay-hong-loc-3a.jpg',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>48,
		'section'=>'page3',
		'name'=>'logo4',
		'content'=>'cay-trau-ba.jpg',
		'url'=>NULL,
		'created_at'=>'2018-10-13 02:53:52',
		'updated_at'=>'2018-10-13 02:53:52'
		] );
					
		Index::create( [
		'id'=>49,
		'section'=>'page4',
		'name'=>'title',
		'content'=>'Timeline title',
		'url'=>NULL,
		'created_at'=>'2018-10-13 03:44:48',
		'updated_at'=>'2018-10-13 03:44:48'
		] );
					
		Index::create( [
		'id'=>50,
		'section'=>'page4',
		'name'=>'description',
		'content'=>'Timeline Des',
		'url'=>NULL,
		'created_at'=>'2018-10-13 03:44:48',
		'updated_at'=>'2018-10-13 03:44:48'
		] );
					
		Index::create( [
		'id'=>51,
		'section'=>'page4',
		'name'=>'timeline',
		'content'=>'imgpsh_fullsize.jpg',
		'url'=>NULL,
		'created_at'=>'2018-10-13 03:45:00',
		'updated_at'=>'2018-10-13 03:45:00'
		] );
							
		Index::create( [
		'id'=>53,
		'section'=>'page5',
		'name'=>'title',
		'content'=>'Title Page 5',
		'url'=>NULL,
		'created_at'=>'2018-10-14 07:23:12',
		'updated_at'=>'2018-10-14 07:23:12'
		] );
					
		Index::create( [
		'id'=>54,
		'section'=>'page5',
		'name'=>'description',
		'content'=>'Description Page 5',
		'url'=>NULL,
		'created_at'=>'2018-10-14 07:23:12',
		'updated_at'=>'2018-10-14 07:23:12'
		] );
					
		Index::create( [
		'id'=>56,
		'section'=>'page6',
		'name'=>'title',
		'content'=>'Title Page 6',
		'url'=>NULL,
		'created_at'=>'2018-10-14 07:24:37',
		'updated_at'=>'2018-10-14 07:24:37'
		] );
					
		Index::create( [
		'id'=>57,
		'section'=>'page6',
		'name'=>'description',
		'content'=>'Description Page 6',
		'url'=>NULL,
		'created_at'=>'2018-10-14 07:24:37',
		'updated_at'=>'2018-10-14 07:24:37'
		] );
    }
}
