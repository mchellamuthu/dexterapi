<?php

use Illuminate\Database\Seeder;
use App\Institute;
use App\MyInstitute;
class InstitutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user_id = '1a108360-ef86-11e7-9e1d-07af83fb065b';
         $institute1 = Institute::create([
           'name'=>'Madras University',
           'address'=>'MU Campus',
           'city'=>'Chennai',
           'state'=>'Tamilnadu',
           'country'=>'India',
           'icon'=>'madras.jpg',
           'user_id'=> $user_id,
           'type'=>'University'
         ]);
         MyInstitute::create([
           'user_id'=>$user_id,
           'institute_id'=>$institute1->id,
           'approved'=>true
         ]);
         $institute2 = Institute::create([
           'name'=>'Madras Institute of Technology',
           'address'=>'MIT Campus',
           'city'=>'Chennai',
           'state'=>'Tamilnadu',
           'country'=>'India',
           'icon'=>'madras.jpg',
           'user_id'=> $user_id,
           'type'=>'College'
         ]);
         MyInstitute::create([
           'user_id'=>$user_id,
           'institute_id'=>$institute2->id,
           'approved'=>true
         ]);
       $institute3 =   Institute::create([
           'name'=>'Indian Institute of Technology',
           'address'=>'IIT Campus',
           'city'=>'Chennai',
           'state'=>'Tamilnadu',
           'country'=>'India',
           'icon'=>'madras.jpg',
           'user_id'=> $user_id,
           'type'=>'University'
         ]);
         MyInstitute::create([
           'user_id'=>$user_id,
           'institute_id'=>$institute3->id,
           'approved'=>true
         ]);

       $institute4 =   Institute::create([
           'name'=>'Jothi High School',
           'address'=>'Solaiseri',
           'city'=>'Tirunelveli',
           'state'=>'Tamilnadu',
           'country'=>'India',
           'icon'=>'madras.jpg',
           'user_id'=> $user_id,
           'type'=>'School'
         ]);
         MyInstitute::create([
           'user_id'=>$user_id,
           'institute_id'=>$institute4->id,
           'approved'=>true
         ]);
    }
}
