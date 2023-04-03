<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TransactionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transactions')->delete();
        
        \DB::table('transactions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 4,
                'amount' => 15.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 250.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:47:16',
                'updated_at' => '2023-03-12 13:47:16',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 4,
                'amount' => 15.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 250.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 3,
                'amount' => 4.5,
                'type' => 'Credit',
                'purpose' => 'IB Royalty',
                'reference_number' => '2',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => NULL,
                'stake_duration' => NULL,
                'from_user_id' => 4,
                'royalty_gen' => 1,
                'royalty_level' => 1,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 3,
                'amount' => 120.0,
                'type' => 'Credit',
                'purpose' => 'Deposit',
                'reference_number' => 'ch_3Ml8MIJT650yro7l0E0dzhto',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => 'Stripe',
                'stake_amount' => NULL,
                'stake_duration' => NULL,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-13 10:12:04',
                'updated_at' => '2023-03-13 10:12:04',
            ),
            4 => 
            array (
                'id' => 5,
                'user_id' => 3,
                'amount' => 230.0,
                'type' => 'Credit',
                'purpose' => 'Deposit',
                'reference_number' => 'ch_3Ml8N1JT650yro7l12rWggvF',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => 'Stripe',
                'stake_amount' => NULL,
                'stake_duration' => NULL,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-13 10:12:48',
                'updated_at' => '2023-03-13 10:12:48',
            ),
            5 => 
            array (
                'id' => 6,
                'user_id' => 3,
                'amount' => 550.0,
                'type' => 'Debit',
                'purpose' => 'Withdraw',
                'reference_number' => '5',
                'transaction_fee' => 15.0,
                'net_amount' => 535.0,
                'wallet_address' => 'Dhaka, BD',
                'transaction_hash' => '45sa255sa22',
                'card_number' => '123456789',
                'network' => 'USDT. TRC 20',
                'payment_gateway' => 'Crypto',
                'stake_amount' => NULL,
                'stake_duration' => NULL,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-13 10:12:04',
                'updated_at' => '2023-03-13 10:12:04',
            ),
            6 => 
            array (
                'id' => 7,
                'user_id' => 10,
                'amount' => 20.0,
                'type' => 'Credit',
                'purpose' => 'Invitation Gift',
                'reference_number' => NULL,
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => NULL,
                'stake_duration' => NULL,
                'from_user_id' => 1,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-13 11:21:48',
                'updated_at' => '2023-03-13 11:21:48',
            ),
            7 => 
            array (
                'id' => 8,
                'user_id' => 3,
                'amount' => 1.0,
                'type' => 'Credit',
                'purpose' => 'Invitation Gift',
                'reference_number' => NULL,
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => NULL,
                'stake_duration' => NULL,
                'from_user_id' => 10,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-13 11:21:48',
                'updated_at' => '2023-03-13 11:21:48',
            ),
            8 => 
            array (
                'id' => 9,
                'user_id' => 3,
                'amount' => 12.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 500.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            9 => 
            array (
                'id' => 10,
                'user_id' => 3,
                'amount' => 125.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 592.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            10 => 
            array (
                'id' => 11,
                'user_id' => 3,
                'amount' => 13.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 560.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 2,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            11 => 
            array (
                'id' => 12,
                'user_id' => 3,
                'amount' => 22.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 5556.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 2,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            12 => 
            array (
                'id' => 13,
                'user_id' => 3,
                'amount' => 65.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 488.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            13 => 
            array (
                'id' => 14,
                'user_id' => 3,
                'amount' => 3.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 318.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            14 => 
            array (
                'id' => 15,
                'user_id' => 3,
                'amount' => 11.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 656.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            15 => 
            array (
                'id' => 16,
                'user_id' => 3,
                'amount' => 15.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '5',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 278.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 2,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            16 => 
            array (
                'id' => 17,
                'user_id' => 3,
                'amount' => 2.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 151.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            17 => 
            array (
                'id' => 18,
                'user_id' => 3,
                'amount' => 55.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 6565.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 2,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            18 => 
            array (
                'id' => 19,
                'user_id' => 3,
                'amount' => 36.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 12121.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            19 => 
            array (
                'id' => 20,
                'user_id' => 3,
                'amount' => 22.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 15415.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            20 => 
            array (
                'id' => 21,
                'user_id' => 3,
                'amount' => 15.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 21321.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 2,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            21 => 
            array (
                'id' => 22,
                'user_id' => 3,
                'amount' => 21.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 2152.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            22 => 
            array (
                'id' => 23,
                'user_id' => 3,
                'amount' => 0.2,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 6565.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            23 => 
            array (
                'id' => 24,
                'user_id' => 3,
                'amount' => 45.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 1541.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            24 => 
            array (
                'id' => 25,
                'user_id' => 3,
                'amount' => 5.3,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 326.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            25 => 
            array (
                'id' => 26,
                'user_id' => 3,
                'amount' => 45.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 123.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 2,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            26 => 
            array (
                'id' => 27,
                'user_id' => 3,
                'amount' => 23.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 48484.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            27 => 
            array (
                'id' => 28,
                'user_id' => 3,
                'amount' => 1.2,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 6565.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            28 => 
            array (
                'id' => 29,
                'user_id' => 3,
                'amount' => 26.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 1554.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            29 => 
            array (
                'id' => 30,
                'user_id' => 3,
                'amount' => 33.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 15.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 2,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            30 => 
            array (
                'id' => 31,
                'user_id' => 3,
                'amount' => 22.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 33.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 2,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            31 => 
            array (
                'id' => 32,
                'user_id' => 3,
                'amount' => 45.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 22.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            32 => 
            array (
                'id' => 33,
                'user_id' => 3,
                'amount' => 66.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 2551.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            33 => 
            array (
                'id' => 34,
                'user_id' => 3,
                'amount' => 79.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '4',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 2341.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            34 => 
            array (
                'id' => 35,
                'user_id' => 3,
                'amount' => 98.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '5',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 366.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 2,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            35 => 
            array (
                'id' => 36,
                'user_id' => 3,
                'amount' => 85.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '5',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 1554.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            36 => 
            array (
                'id' => 37,
                'user_id' => 3,
                'amount' => 64.0,
                'type' => 'Credit',
                'purpose' => 'Staking ROI',
                'reference_number' => '5',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 1569.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => NULL,
                'status' => 0,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            37 => 
            array (
                'id' => 38,
                'user_id' => 3,
                'amount' => 2.0,
                'type' => 'Credit',
                'purpose' => 'Rewards',
                'reference_number' => '55',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => 151.0,
                'stake_duration' => 6,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => 'IB',
                'contest_title' => NULL,
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
            38 => 
            array (
                'id' => 39,
                'user_id' => 3,
                'amount' => 20.0,
                'type' => 'Credit',
                'purpose' => 'Contest',
                'reference_number' => '55',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => NULL,
                'stake_duration' => NULL,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => 'January',
                'status' => 1,
                'created_at' => '2023-03-12 13:52:30',
                'updated_at' => '2023-03-12 13:52:30',
            ),
            39 => 
            array (
                'id' => 40,
                'user_id' => 3,
                'amount' => 40.0,
                'type' => 'Credit',
                'purpose' => 'Contest',
                'reference_number' => '55',
                'transaction_fee' => 0.0,
                'net_amount' => 0.0,
                'wallet_address' => NULL,
                'transaction_hash' => NULL,
                'card_number' => NULL,
                'network' => NULL,
                'payment_gateway' => NULL,
                'stake_amount' => NULL,
                'stake_duration' => NULL,
                'from_user_id' => NULL,
                'royalty_gen' => NULL,
                'royalty_level' => NULL,
                'reward_title' => NULL,
                'contest_title' => 'February',
                'status' => 1,
                'created_at' => '2023-03-12 13:52:20',
                'updated_at' => '2023-03-12 13:52:20',
            ),
        ));
        
        
    }
}