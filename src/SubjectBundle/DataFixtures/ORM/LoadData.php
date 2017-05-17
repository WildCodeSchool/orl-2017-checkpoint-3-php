<?php

namespace SubjectBundle\DataFixtures\ORM;

use TvShowManagerBundle\Entity\TvShow;
use TvShowManagerBundle\Entity\Episode;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $tvshows['Scrubs'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'My First Day', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'My Mentor', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'My Best Friend\'s Mistake', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'My Old Lady', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'My Two Dads', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'My Bad', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'My Super Ego', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'My Fifteen Minutes', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'My Day Off', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'My Nickname', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'My Own Personal Jesus', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'My Blind Date', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'My Balancing Act', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'My Drug Buddy', 'season'=>1,'number'=>14,'note'=>4],
                14=> ['title'=>'My Bed Banter & Beyond', 'season'=>1,'number'=>15,'note'=>4],
                15=> ['title'=>'My Heavy Meddle', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'My Student', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'My Tuscaloosa Heart', 'season'=>1,'number'=>18,'note'=>4],
                18=> ['title'=>'My Old Man', 'season'=>1,'number'=>19,'note'=>4],
                19=> ['title'=>'My Way or the Highway', 'season'=>1,'number'=>20,'note'=>4],
            ]
        ];
        $tvshows['James May\'s 20th Century'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Honey, I Shrunk The World', 'season'=>1,'number'=>1,'note'=>0],
                1=> ['title'=>'Blast Off', 'season'=>1,'number'=>2,'note'=>0],
                2=> ['title'=>'Body Fantastic', 'season'=>1,'number'=>3,'note'=>0],
                3=> ['title'=>'Take Cover', 'season'=>1,'number'=>4,'note'=>0],
                4=> ['title'=>'Inventing The Teenager', 'season'=>1,'number'=>5,'note'=>0],
                5=> ['title'=>'Big City, Bright Lights', 'season'=>1,'number'=>6,'note'=>0],
            ]
        ];
        $tvshows['True Blood'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Strange Love', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'The First Taste', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'Mine', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'Escape from Dragon House', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'Sparks Fly Out', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'Cold Ground', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'Burning House of Love', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'The Fourth Man in the Fire', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Plaisir D\'Amour', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'I Don\'t Wanna Know', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'To Love is to Bury', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'You\'ll Be the Death of Me', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'Nothing But the Blood', 'season'=>2,'number'=>1,'note'=>4],
                13=> ['title'=>'Keep This Party Going', 'season'=>2,'number'=>2,'note'=>4],
                14=> ['title'=>'Scratches', 'season'=>2,'number'=>3,'note'=>4],
                15=> ['title'=>'Shake and Fingerpop', 'season'=>2,'number'=>4,'note'=>4],
                16=> ['title'=>'Never Let Me Go', 'season'=>2,'number'=>5,'note'=>4],
                17=> ['title'=>'Hard-Hearted Hannah', 'season'=>2,'number'=>6,'note'=>4],
                18=> ['title'=>'Release Me', 'season'=>2,'number'=>7,'note'=>4],
                19=> ['title'=>'Timebomb', 'season'=>2,'number'=>8,'note'=>4],
            ]
        ];
        $tvshows['Star Driver Kagayaki no Takuto'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Galactic Pretty Boy', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'The Challenge of the Holy Order of Glittering Stars', 'season'=>1,'number'=>2,'note'=>3],
                2=> ['title'=>'Adult Bank', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'Wako\'s Singing Voice', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'The Meaning of Mandrake', 'season'=>1,'number'=>5,'note'=>5],
                5=> ['title'=>'Pillar of the King', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'The Faraway World', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'Always Like a Shooting Star', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Mizuno\'s First Love', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'And Marino\'s First Love', 'season'=>1,'number'=>10,'note'=>5],
                10=> ['title'=>'Personal Uses of Cybodies', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'A Kiss Through the Glass', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'The Red Sword in Love', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'Ayingott`s Eyes', 'season'=>1,'number'=>14,'note'=>4],
                14=> ['title'=>'Maidens of the Seal', 'season'=>1,'number'=>15,'note'=>4],
                15=> ['title'=>'Takuto\'s Mark ', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'Banishing Age', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'Keito`s Morning and Night', 'season'=>1,'number'=>18,'note'=>4],
                18=> ['title'=>'The Trio`s Sunday', 'season'=>1,'number'=>19,'note'=>4],
                19=> ['title'=>'The Rainbow Painted That Day ', 'season'=>1,'number'=>20,'note'=>5],
            ]
        ];
        $tvshows['Lost'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Pilot (1)', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'Pilot (2)', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'Tabula Rasa', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'Walkabout', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'White Rabbit', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'House of the Rising Sun', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'The Moth', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'Confidence Man', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Solitary', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'Raised by Another', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'All the Best Cowboys Have Daddy Issues', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'Whatever the Case May Be', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'Hearts and Minds', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'Special', 'season'=>1,'number'=>14,'note'=>4],
                14=> ['title'=>'Homecoming', 'season'=>1,'number'=>15,'note'=>4],
                15=> ['title'=>'Outlaws', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'...In Translation', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'Numbers', 'season'=>1,'number'=>18,'note'=>5],
                18=> ['title'=>'Deus Ex Machina', 'season'=>1,'number'=>19,'note'=>4],
                19=> ['title'=>'Do No Harm', 'season'=>1,'number'=>20,'note'=>4],
            ]
        ];
        $tvshows['Delta State'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'First Contact: Part 1', 'season'=>1,'number'=>1,'note'=>0],
                1=> ['title'=>'First Contact: Part 2', 'season'=>1,'number'=>2,'note'=>0],
                2=> ['title'=>'Case Study', 'season'=>1,'number'=>3,'note'=>0],
                3=> ['title'=>'The Reading', 'season'=>1,'number'=>4,'note'=>0],
                4=> ['title'=>'The Fusion', 'season'=>1,'number'=>5,'note'=>0],
                5=> ['title'=>'The Girlfriend', 'season'=>1,'number'=>6,'note'=>0],
                6=> ['title'=>'Vote Rifter', 'season'=>1,'number'=>7,'note'=>0],
                7=> ['title'=>'Cabin Fever', 'season'=>1,'number'=>8,'note'=>0],
                8=> ['title'=>'Mind Over Matter', 'season'=>1,'number'=>9,'note'=>0],
                9=> ['title'=>'Blast from the Past', 'season'=>1,'number'=>10,'note'=>0],
                10=> ['title'=>'Curse of the Undead', 'season'=>1,'number'=>11,'note'=>0],
                11=> ['title'=>'Awakening', 'season'=>1,'number'=>12,'note'=>0],
                12=> ['title'=>'Claire\'s Crack Up', 'season'=>1,'number'=>13,'note'=>0],
                13=> ['title'=>'Road Not Taken', 'season'=>1,'number'=>14,'note'=>0],
                14=> ['title'=>'Couch Time', 'season'=>1,'number'=>15,'note'=>0],
                15=> ['title'=>'Labyrinth', 'season'=>1,'number'=>16,'note'=>0],
                16=> ['title'=>'Mix-Up Of Genres', 'season'=>1,'number'=>17,'note'=>0],
                17=> ['title'=>'Training Day', 'season'=>1,'number'=>18,'note'=>0],
                18=> ['title'=>'Sweet Dreams', 'season'=>1,'number'=>19,'note'=>0],
                19=> ['title'=>'Brain Scan', 'season'=>1,'number'=>20,'note'=>0],
            ]
        ];
        $tvshows['How I Met Your Mother'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Pilot', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'Purple Giraffe', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'Sweet Taste of Liberty', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'Return of the Shirt', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'Okay Awesome', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'The Slutty Pumpkin', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'Matchmaker', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'The Duel', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Belly Full of Turkey', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'The Pineapple Incident', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'The Limo', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'The Wedding', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'Drumroll, Please', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'Zip, Zip, Zip', 'season'=>1,'number'=>14,'note'=>4],
                14=> ['title'=>'Game Night', 'season'=>1,'number'=>15,'note'=>5],
                15=> ['title'=>'Cupcake', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'Life Among the Gorillas', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'Nothing Good Happens After 2 AM', 'season'=>1,'number'=>18,'note'=>4],
                18=> ['title'=>'Mary the Paralegal', 'season'=>1,'number'=>19,'note'=>4],
                19=> ['title'=>'Best Prom Ever', 'season'=>1,'number'=>20,'note'=>4],
            ]
        ];
        $tvshows['24'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'12:00 A.M. - 1:00 A.M.', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'1:00 A.M. - 2:00 A.M.', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'2:00 A.M. - 3:00 A.M.', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'3:00 A.M. - 4:00 A.M.', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'4:00 A.M. - 5:00 A.M.', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'5:00 A.M. - 6:00 A.M.', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'6:00 A.M. - 7:00 A.M.', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'7:00 A.M. - 8:00 A.M.', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'8:00 A.M. - 9:00 A.M.', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'9:00 A.M. - 10:00 A.M.', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'10:00 A.M. - 11:00 A.M.', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'11:00 A.M. - 12:00 P.M.', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'12:00 P.M. - 1:00 P.M.', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'1:00 P.M. - 2:00 P.M.', 'season'=>1,'number'=>14,'note'=>4],
                14=> ['title'=>'2:00 P.M. - 3:00 P.M.', 'season'=>1,'number'=>15,'note'=>4],
                15=> ['title'=>'3:00 P.M. - 4:00 P.M.', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'4:00 P.M. - 5:00 P.M.', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'5:00 P.M. - 6:00 P.M.', 'season'=>1,'number'=>18,'note'=>4],
                18=> ['title'=>'6:00 P.M. - 7:00 P.M.', 'season'=>1,'number'=>19,'note'=>4],
                19=> ['title'=>'7:00 P.M. - 8:00 P.M.', 'season'=>1,'number'=>20,'note'=>4],
            ]
        ];
        $tvshows['Prison Break'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Pilot', 'season'=>1,'number'=>1,'note'=>5],
                1=> ['title'=>'Allen', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'Cell Test', 'season'=>1,'number'=>3,'note'=>5],
                3=> ['title'=>'Cute Poison', 'season'=>1,'number'=>4,'note'=>5],
                4=> ['title'=>'English, Fitz or Percy', 'season'=>1,'number'=>5,'note'=>5],
                5=> ['title'=>'Riots, Drills and the Devil (1)', 'season'=>1,'number'=>6,'note'=>5],
                6=> ['title'=>'Riots, Drills and the Devil (2)', 'season'=>1,'number'=>7,'note'=>5],
                7=> ['title'=>'The Old Head', 'season'=>1,'number'=>8,'note'=>5],
                8=> ['title'=>'Tweener', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'Sleight of Hand', 'season'=>1,'number'=>10,'note'=>5],
                10=> ['title'=>'And Then There Were 7', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'Odd Man Out', 'season'=>1,'number'=>12,'note'=>5],
                12=> ['title'=>'End of the Tunnel', 'season'=>1,'number'=>13,'note'=>5],
                13=> ['title'=>'The Rat', 'season'=>1,'number'=>14,'note'=>5],
                14=> ['title'=>'By the Skin and the Teeth', 'season'=>1,'number'=>15,'note'=>4],
                15=> ['title'=>'Brother\'s Keeper', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'J-Cat', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'Bluff', 'season'=>1,'number'=>18,'note'=>5],
                18=> ['title'=>'The Key', 'season'=>1,'number'=>19,'note'=>5],
                19=> ['title'=>'Tonight', 'season'=>1,'number'=>20,'note'=>5],
            ]
        ];
        $tvshows['Heroes'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Genesis', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'Don\'t Look Back', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'One Giant Leap', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'Collision', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'Hiros', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'Better Halves', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'Nothing to Hide', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'Seven Minutes to Midnight', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Homecoming', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'Six Months Ago', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'Fallout', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'Godsend', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'The Fix', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'Distractions', 'season'=>1,'number'=>14,'note'=>4],
                14=> ['title'=>'Run!', 'season'=>1,'number'=>15,'note'=>4],
                15=> ['title'=>'Unexpected', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'Company Man', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'Parasite', 'season'=>1,'number'=>18,'note'=>4],
                18=> ['title'=>'.07%', 'season'=>1,'number'=>19,'note'=>4],
                19=> ['title'=>'Five Years Gone', 'season'=>1,'number'=>20,'note'=>4],
            ]
        ];
        $tvshows['The Simpsons'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Simpsons Roasting on an Open Fire', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'Bart the Genius', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'Homer\'s Odyssey', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'There\'s No Disgrace Like Home', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'Bart the General', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'Moaning Lisa', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'The Call of the Simpsons', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'The Telltale Head', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Life on the Fast Lane', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'Homer\'s Night Out', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'The Crepes of Wrath', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'Krusty Gets Busted', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'Some Enchanted Evening', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'Bart Gets an F', 'season'=>2,'number'=>1,'note'=>4],
                14=> ['title'=>'Simpson and Delilah', 'season'=>2,'number'=>2,'note'=>4],
                15=> ['title'=>'Treehouse of Horror', 'season'=>2,'number'=>3,'note'=>4],
                16=> ['title'=>'Two Cars in Every Garage and Three Eyes on Every Fish', 'season'=>2,'number'=>4,'note'=>4],
                17=> ['title'=>'Dancin\' Homer', 'season'=>2,'number'=>5,'note'=>4],
                18=> ['title'=>'Dead Putting Society', 'season'=>2,'number'=>6,'note'=>4],
                19=> ['title'=>'Bart vs. Thanksgiving', 'season'=>2,'number'=>7,'note'=>4],
            ]
        ];
        $tvshows['Chuck'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Chuck Versus the Intersect', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'Chuck Versus the Helicopter', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'Chuck Versus the Tango', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'Chuck Versus the Wookiee', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'Chuck Versus the Sizzling Shrimp', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'Chuck Versus the Sandworm', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'Chuck Versus the Alma Mater', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'Chuck Versus the Truth', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Chuck Versus the Imported Hard Salami', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'Chuck Versus the Nemesis', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'Chuck Versus the Crown Vic', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'Chuck Versus the Undercover Lover', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'Chuck Versus the Marlin', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'Chuck Versus the First Date', 'season'=>2,'number'=>1,'note'=>4],
                14=> ['title'=>'Chuck Versus the Seduction', 'season'=>2,'number'=>2,'note'=>4],
                15=> ['title'=>'Chuck Versus the Break-Up', 'season'=>2,'number'=>3,'note'=>4],
                16=> ['title'=>'Chuck Versus the Cougars', 'season'=>2,'number'=>4,'note'=>4],
                17=> ['title'=>'Chuck Versus Tom Sawyer', 'season'=>2,'number'=>5,'note'=>4],
                18=> ['title'=>'Chuck Versus the Ex', 'season'=>2,'number'=>6,'note'=>4],
                19=> ['title'=>'Chuck Versus the Fat Lady', 'season'=>2,'number'=>7,'note'=>4],
            ]
        ];
        $tvshows['The Big Bang Theory'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Pilot', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'The Big Bran Hypothesis', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'The Fuzzy Boots Corollary', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'The Luminous Fish Effect', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'The Hamburger Postulate', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'The Middle Earth Paradigm', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'The Dumpling Paradox', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'The Grasshopper Experiment', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'The Cooper-Hofstadter Polarization', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'The Loobenfeld Decay', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'The Pancake Batter Anomaly', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'The Jerusalem Duality', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'The Bat Jar Conjecture', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'The Nerdvana Annihilation', 'season'=>1,'number'=>14,'note'=>4],
                14=> ['title'=>'The Pork Chop Indeterminacy', 'season'=>1,'number'=>15,'note'=>4],
                15=> ['title'=>'The Peanut Reaction', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'The Tangerine Factor', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'The Bad Fish Paradigm', 'season'=>2,'number'=>1,'note'=>4],
                18=> ['title'=>'The Codpiece Topology', 'season'=>2,'number'=>2,'note'=>4],
                19=> ['title'=>'The Barbarian Sublimation', 'season'=>2,'number'=>3,'note'=>4],
            ]
        ];
        $tvshows['The Law of Ueki'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Kosuke Ueki\'s Law of Righteousness', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'The Law of the Battle Commencement!', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'The Law of Talent', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'The Law of Li Ho, the Man of Physical Skills!', 'season'=>1,'number'=>4,'note'=>5],
                4=> ['title'=>'The Strongest Ability-Holder, Law of Robert Haydn', 'season'=>1,'number'=>5,'note'=>5],
                5=> ['title'=>'The Law of Goodbyes', 'season'=>1,'number'=>6,'note'=>0],
                6=> ['title'=>'The Law of Mr. K', 'season'=>1,'number'=>7,'note'=>0],
                7=> ['title'=>'Fair and Square!  The Law of Onimon!', 'season'=>1,'number'=>8,'note'=>0],
                8=> ['title'=>'The Law of Onimon\'s Training', 'season'=>1,'number'=>9,'note'=>0],
                9=> ['title'=>'The Law of Justice That Never Comes', 'season'=>1,'number'=>10,'note'=>5],
                10=> ['title'=>'The Law of Robert\'s Ten', 'season'=>1,'number'=>11,'note'=>5],
                11=> ['title'=>'The Law of Heavenly Beings', 'season'=>1,'number'=>12,'note'=>5],
                12=> ['title'=>'The Law of the Heavenly Beast', 'season'=>1,'number'=>13,'note'=>5],
                13=> ['title'=>'The Law of the Awakening Organ', 'season'=>1,'number'=>14,'note'=>5],
                14=> ['title'=>'The Law of Rinko', 'season'=>1,'number'=>15,'note'=>0],
                15=> ['title'=>'The Law of Neo', 'season'=>1,'number'=>16,'note'=>0],
                16=> ['title'=>'The Law of the Two Powers', 'season'=>1,'number'=>17,'note'=>0],
                17=> ['title'=>'Tremble!   The Law of Dogura Mansion', 'season'=>1,'number'=>18,'note'=>4],
                18=> ['title'=>'The Law of Cossack Dance', 'season'=>1,'number'=>19,'note'=>4],
                19=> ['title'=>'The Law of Cat and Mouse', 'season'=>1,'number'=>20,'note'=>4],
            ]
        ];
        $tvshows['Family Guy'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Death has a Shadow', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'I Never Met the Dead Man', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'Chitty Chitty Death Bang', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'Mind Over Murder', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'A Hero Sits Next Door', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'The Son Also Draws', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'Brian: Portrait of a Dog', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'Peter, Peter, Caviar Eater', 'season'=>2,'number'=>1,'note'=>4],
                8=> ['title'=>'Holy Crap', 'season'=>2,'number'=>2,'note'=>4],
                9=> ['title'=>'Da Boom', 'season'=>2,'number'=>3,'note'=>4],
                10=> ['title'=>'Brian in Love', 'season'=>2,'number'=>4,'note'=>4],
                11=> ['title'=>'Love Thy Trophy', 'season'=>2,'number'=>5,'note'=>4],
                12=> ['title'=>'Death is a Bitch', 'season'=>2,'number'=>6,'note'=>4],
                13=> ['title'=>'The King is Dead', 'season'=>2,'number'=>7,'note'=>4],
                14=> ['title'=>'I Am Peter, Hear Me Roar', 'season'=>2,'number'=>8,'note'=>4],
                15=> ['title'=>'If I\'m Dyin\', I\'m Lyin\'', 'season'=>2,'number'=>9,'note'=>4],
                16=> ['title'=>'Running Mates', 'season'=>2,'number'=>10,'note'=>4],
                17=> ['title'=>'A Picture\'s Worth A Thousand Bucks', 'season'=>2,'number'=>11,'note'=>4],
                18=> ['title'=>'Fifteen Minutes of Shame', 'season'=>2,'number'=>12,'note'=>4],
                19=> ['title'=>'Road to Rhode Island', 'season'=>2,'number'=>13,'note'=>4],
            ]
        ];
        $tvshows['Californication'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Pilot', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'Hell-A Woman', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'The Whore of Babylon', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'Fear and Loathing at the Fundraiser', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'LOL', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'Absinthe Makes the Heart Grow Fonder', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'Girls, Interrupted', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'California Son', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Filthy Lucre', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'The Devil\'s Threesome', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'Turn the Page', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'The Last Waltz', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'Slip of the Tongue', 'season'=>2,'number'=>1,'note'=>4],
                13=> ['title'=>'The Great Ashby', 'season'=>2,'number'=>2,'note'=>4],
                14=> ['title'=>'No Way to Treat a Lady', 'season'=>2,'number'=>3,'note'=>4],
                15=> ['title'=>'The Raw and the Cooked', 'season'=>2,'number'=>4,'note'=>4],
                16=> ['title'=>'Vaginatown', 'season'=>2,'number'=>5,'note'=>4],
                17=> ['title'=>'Coke Dick & First Kick', 'season'=>2,'number'=>6,'note'=>4],
                18=> ['title'=>'In a Lonely Place', 'season'=>2,'number'=>7,'note'=>4],
                19=> ['title'=>'Going Down and Out in Beverly Hills', 'season'=>2,'number'=>8,'note'=>4],
            ]
        ];
        $tvshows['Gossip Girl'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Pilot', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'The Wild Brunch', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'Poison Ivy', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'Bad News Blair', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'Dare Devil', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'The Handmaiden\'s Tale', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'Victor (Victrola)', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'Seventeen Candles', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Blair Waldorf Must Pie!', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'Hi, Society', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'Roman Holiday', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'School Lies', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'The Thin Line Between Chuck and Nate', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'The Blair Bitch Project', 'season'=>1,'number'=>14,'note'=>4],
                14=> ['title'=>'Desperately Seeking Serena', 'season'=>1,'number'=>15,'note'=>4],
                15=> ['title'=>'All About My Brother', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'Woman on the Verge', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'Much \'I Do\' About Nothing', 'season'=>1,'number'=>18,'note'=>4],
                18=> ['title'=>'Summer, Kind of Wonderful', 'season'=>2,'number'=>1,'note'=>4],
                19=> ['title'=>'Never Been Marcused', 'season'=>2,'number'=>2,'note'=>4],
            ]
        ];
        $tvshows['NCIS'] = [
            'date'      => '2003',
            'image_url' => 'https://www.betaseries.com/images/fonds/show/19_1002473.jpg',
            'genres'    => 'Action',
            'episodes' => [
                0=> ['title'=>'Yankee White', 'season'=>1,'number'=>1,'note'=>4],
                1=> ['title'=>'Hung Out to Dry', 'season'=>1,'number'=>2,'note'=>4],
                2=> ['title'=>'Seadog', 'season'=>1,'number'=>3,'note'=>4],
                3=> ['title'=>'The Immortals', 'season'=>1,'number'=>4,'note'=>4],
                4=> ['title'=>'The Curse', 'season'=>1,'number'=>5,'note'=>4],
                5=> ['title'=>'High Seas', 'season'=>1,'number'=>6,'note'=>4],
                6=> ['title'=>'Sub Rosa', 'season'=>1,'number'=>7,'note'=>4],
                7=> ['title'=>'Minimum Security', 'season'=>1,'number'=>8,'note'=>4],
                8=> ['title'=>'Marine Down', 'season'=>1,'number'=>9,'note'=>4],
                9=> ['title'=>'Left for Dead', 'season'=>1,'number'=>10,'note'=>4],
                10=> ['title'=>'Eye Spy', 'season'=>1,'number'=>11,'note'=>4],
                11=> ['title'=>'My Other Left Foot', 'season'=>1,'number'=>12,'note'=>4],
                12=> ['title'=>'One Shot, One Kill', 'season'=>1,'number'=>13,'note'=>4],
                13=> ['title'=>'The Good Samaritan', 'season'=>1,'number'=>14,'note'=>4],
                14=> ['title'=>'Enigma', 'season'=>1,'number'=>15,'note'=>4],
                15=> ['title'=>'Bête Noire', 'season'=>1,'number'=>16,'note'=>4],
                16=> ['title'=>'The Truth Is Out There', 'season'=>1,'number'=>17,'note'=>4],
                17=> ['title'=>'UnSEALed', 'season'=>1,'number'=>18,'note'=>4],
                18=> ['title'=>'Dead Man Talking', 'season'=>1,'number'=>19,'note'=>4],
                19=> ['title'=>'Missing', 'season'=>1,'number'=>20,'note'=>4],
            ]
        ];




        foreach ($tvshows as $title =>$tvshow){
            $show = new TvShow();
            $show->setName($title);
            $show->setType($tvshow['genres']);
            $show->setUrl($tvshow['image_url']);
            $show->setYear($tvshow['date']);
            $manager->persist($show);
            foreach ($tvshow['episodes'] as $epi) {
                $episode = new Episode();
                $episode->setTvShow($show);
                $episode->setName($epi['title']);
                $episode->setSeason($epi['season']);
                $episode->setNumber($epi['number']);
                $episode->setNote(round($epi['note']));
                $manager->persist($episode);
            }

        }
        $manager->flush();
    }
}
