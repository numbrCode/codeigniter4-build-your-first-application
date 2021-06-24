<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class InsertNewsSeeder extends Seeder
{
        /*
            INSERT INTO `news` (`id`, `title`, `slug`, `body`) VALUES
            (1, 'Elvis sighted', 'elvis-sighted', 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
            (2, 'Say it isn\'t so!', 'say-it-isnt-so', 'Scientists conclude that some programmers have a sense of humor.'),
            (3, 'Caffeination, Yes!', 'caffeination-yes', 'World\'s largest coffee shop open onsite nested coffee shop for staff only.');
        */
    public function run()
    {
            // $data = [
                    // 'username' => 'darth',
                    // 'email'    => 'darth@theempire.com'
            // ];

            // Simple Queries
            // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
                    // $data
            // );

            $sql_query = "INSERT INTO `news` (`id`, `title`, `slug`, `body`) VALUES
            (1, 'Elvis sighted', 'elvis-sighted', 'Elvis was sighted at the Podunk internet cafe. It looked like he was writing a CodeIgniter app.'),
            (2, 'Say it isn\'t so!', 'say-it-isnt-so', 'Scientists conclude that some programmers have a sense of humor.'),
            (3, 'Caffeination, Yes!', 'caffeination-yes', 'World\'s largest coffee shop open onsite nested coffee shop for staff only.');";

            // Simple Queries
            $this->db->query($sql_query);
            
            // Using Query Builder
            // $this->db->table('news')->insert($data);
    }
}
