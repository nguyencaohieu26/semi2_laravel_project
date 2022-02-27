<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "id" =>1,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "hieu",
                "address" => "Ha Noi",
                "phone" => '0906299314',
                "gender" =>1,
                "email" => "hieu@gmail.com",
                "date_of_birth" => "1998-06-09",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>2,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "huy",
                "address" => "Ha Noi",
                'phone' => '0910233924',
                "gender" =>1,
                "email" => "huy@gmail.com",
                "date_of_birth" => "1998-10-09",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>3,
                "avatar"=>"Avatar",
                "firstname" => "nguyen",
                "lastname" => "hieu",
                "address" => "Ha Noi",
                'phone' => '0908900895',
                "gender" =>1,
                "email" => "nguyencaohieu26@gmail.com",
                "date_of_birth" => "1996-02-06",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>4,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "thanh phong",
                "address" => "Ha Noi",
                'phone' => '0907899587',
                "gender" =>1,
                "email" => "thanhphong@gmail.com",
                "date_of_birth" => "2000-08-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>5,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "quang minh",
                "address" => "Nam Dinh",
                'phone' => '0980399873',
                "gender" =>1,
                "email" => "nguyenquangminh@gmail.com",
                "date_of_birth" => "1990-08-11",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>6,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "my linh",
                "address" => "Thai Binh",
                'phone' => '0969365732',
                "gender" =>0,
                "email" => "nguyenmylinh@gmail.com",
                "date_of_birth" => "1991-10-11",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>7,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "quynh anh",
                "address" => "Nghe An",
                'phone'=>'0908933234',
                "gender" =>0,
                "email" => "nguyenquynhanh@gmail.com",
                "date_of_birth" => "1991-10-11",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>8,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "quang dao",
                "address" => "Ha Noi",
                'phone'=>'0908933332',
                "gender" =>1,
                "email" => "nguyenquangdao@gmail.com",
                "date_of_birth" => "1991-07-13",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>9,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "cam tu",
                "address" => "Hai Phong",
                'phone'=>'0908933399',
                "gender" =>0,
                "email" => "nguyencamtu@gmail.com",
                "date_of_birth" => "1987-05-11",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>10,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "mai anh",
                "address" => "Nam Dinh",
                'phone'=>'0908933396',
                "gender" =>0,
                "email" => "nguyenmaianh@gmail.com",
                "date_of_birth" => "1992-09-09",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>11,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "van hung",
                "address" => "Bac Giang",
                'phone'=>'0903449081',
                "gender" =>1,
                "email" => "nguyenvanhung@gmail.com",
                "date_of_birth" => "1993-10-09",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>12,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "trung kien",
                "address" => "Ha Noi",
                'phone'=>'0903449991',
                "gender" =>1,
                "email" => "nguyentrungkien@gmail.com",
                "date_of_birth" => "1992-04-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>13,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "trung hieu",
                "address" => "Ha Noi",
                'phone'=>'0903449801',
                "gender" =>1,
                "email" => "nguyentrunghieu@gmail.com",
                "date_of_birth" => "1992-10-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>14,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "thuy tien",
                "address" => "Ha Noi",
                'phone'=>'0919900123',
                "gender" =>0,
                "email" => "nguyenthuytien@gmail.com",
                "date_of_birth" => "1993-10-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>15,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "hoang giang",
                "address" => "Thai Binh",
                'phone'=>'0919900781',
                "gender" =>0,
                "email" => "nguyenhoanggiangn@gmail.com",
                "date_of_birth" => "1993-03-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>16,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "binh minh",
                "address" => "Ha Noi",
                'phone'=>'0986299786',
                "gender" =>1,
                "email" => "nguyenbinhminh@gmail.com",
                "date_of_birth" => "1993-03-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>17,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "mai trang",
                "address" => "Ha Noi",
                'phone'=>'0986299809',
                "gender" =>0,
                "email" => "nguyenmaitrang@gmail.com",
                "date_of_birth" => "1998-06-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>18,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "vu",
                "lastname" => "duc nam",
                "address" => "Ha Noi",
                'phone'=>'0922299809',
                "gender" =>1,
                "email" => "vuducnam@gmail.com",
                "date_of_birth" => "1994-06-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
            [
                "id" =>19,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "thu phuong",
                "address" => "Ha Noi",
                'phone'=>'0922299879',
                "gender" =>0,
                "email" => "nguyenthuphuong@gmail.com",
                "date_of_birth" => "1994-08-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ], [
                "id" =>20,
                "avatar"=>"avatar-no-img.png",
                "firstname" => "nguyen",
                "lastname" => "hoai linh",
                "address" => "Ha Noi",
                'phone'=>'0922299071',
                "gender" =>0,
                "email" => "nguyenhoailinh@gmail.com",
                "date_of_birth" => "1994-10-10",
                "deleted_at" => NULL,
                "created_at" =>"2022-02-13 21:39:12",
                "updated_at" =>"2022-02-13 21:39:12"
            ],
        ]);
    }
}
