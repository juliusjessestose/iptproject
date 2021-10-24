<?php

use Illuminate\Database\Seeder;

class Accounts extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $accounts_list = [
            [
                'id' => 1,
                'user_id' => 1,
                'acct_name' => 'Account 1',
                'init_invest' => 3123178.12,
                'start_date' => '2021-10-10',
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'acct_name' => 'Account 2',
                'init_invest' => 236526.23,
                'start_date' => '2021-05-12',
            ],
            [
                'id' => 3,
                'user_id' => 3,
                'acct_name' => 'Account 3',
                'init_invest' => 12312554.21,
                'start_date' => '2021-12-11',
            ]
        ];
        foreach ($accounts_list as $account) {
            \App\Accounts::create($account);
        }
    }
}
