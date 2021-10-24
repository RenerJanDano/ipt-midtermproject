<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id' => 1,
                'acct_name' => 'Dano R.J. Regular Account',
                'init_invest' => 300000,
                'start_date' => '2021-12-06',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 2,
                'acct_name' => 'Golosinda A. Regular Account',
                'init_invest' => 342500,
                'start_date' => '2021-10-15',
                'remarks' => 'Done with normal transaction'
            ],
            [
                'user_id' => 3,
                'acct_name' => 'Astacaan A.J. Trust Fund',
                'init_invest' => 533600,
                'start_date' => '2021-07-20',
                'remarks' => 'Done with normal transaction'
            ],
        ];
        foreach($data as $acc){
            App\Account::create($acc);
        }
    }
}
