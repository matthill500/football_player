<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;
class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $player1 = new Player();
      $player1->name='Alan Shearer';
      $player1->image='C:\Users\matth\my-laravel-projects\football_player\storage\app\images\alan.jpg';
      $player1->save();

      $player2 = new Player();
      $player2->name='Theirry Henry';
      $player2->image='C:\Users\matth\my-laravel-projects\football_player\storage\app\images\henry.jpg';
      $player2->save();

      $player3 = new Player();
      $player3->name='Paul Scholes';
      $player3->image='C:\Users\matth\my-laravel-projects\football_player\storage\app\images\paul.jpg';
      $player3->save();

      $player4 = new Player();
      $player4->name='Cristiano Ronaldo';
      $player4->image='C:\Users\matth\my-laravel-projects\football_player\storage\app\images\ronaldo.jpg';
      $player4->save();

      $player5 = new Player();
      $player5->name='Roy Keane';
      $player5->image='C:\Users\matth\my-laravel-projects\football_player\storage\app\images\roy.jpg';
      $player5->save();

      $player6 = new Player();
      $player6->name='Wayne Rooney';
      $player6->image='C:\Users\matth\my-laravel-projects\football_player\storage\app\images\wayne.jpg';
      $player6->save();
    }
}
