<?php

use Appwrite\Database\Database;

$collections = [
    'movies' => [
        '$collection' => Database::COLLECTION_COLLECTIONS,
        '$permissions' => ['read' => ['*']],
        'name' => 'Movies',
        'rules' => [
            [
                '$collection' => Database::COLLECTION_RULES,
                '$permissions' => ['read' => ['*']],
                'label' => 'Name',
                'key' => 'name',
                'type' => Database::VAR_TEXT,
                'default' => '',
                'required' => true,
                'array' => false,
            ],
            [
                '$collection' => Database::COLLECTION_RULES,
                '$permissions' => ['read' => ['*']],
                'label' => 'Release Year',
                'key' => 'releaseYear',
                'type' => Database::VAR_INTEGER,
                'default' => 0,
                'required' => true,
                'array' => false,
            ],
            [
                '$collection' => Database::COLLECTION_RULES,
                '$permissions' => ['read' => ['*']],
                'label' => 'Director',
                'key' => 'director',
                'type' => Database::VAR_TEXT,
                'default' => '',
                'required' => true,
                'array' => false,
            ],
            [
                '$collection' => Database::COLLECTION_RULES,
                '$permissions' => ['read' => ['*']],
                'label' => 'Generes',
                'key' => 'generes',
                'type' => Database::VAR_TEXT,
                'default' => '',
                'required' => true,
                'array' => true,
            ],
            [
                '$collection' => Database::COLLECTION_RULES,
                '$permissions' => ['read' => ['*']],
                'label' => 'Langauges',
                'key' => 'langauges',
                'type' => Database::VAR_TEXT,
                'default' => '',
                'required' => true,
                'array' => true,
            ],
        ]
    ]
];
$movies = [
    // [
    //     'name' => '',
    //     'releaseYear' => 0,
    //     'director' => '',
    //     'generes' => [],
    //     'langauges' => [],
    // ],
    [
        'name' => 'Shang-Chi and the Legend of the Ten Rings',
        'releaseYear' => 2021,
        'director' => 'Destin Daniel Cretton',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Eternals',
        'releaseYear' => 2021,
        'director' => 'Chloé Zhao',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The New Mutants',
        'releaseYear' => 2020,
        'director' => 'Josh Boone',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Black Widow',
        'releaseYear' => 2020,
        'director' => 'Cate Shortland',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Captain Marvel',
        'releaseYear' => 2019,
        'director' => 'Anna Boden, Ryan Fleck',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Avengers: Endgame',
        'releaseYear' => 2019,
        'director' => 'Joe Russo, Anthony Russo',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'X-Men: Dark Phoenix',
        'releaseYear' => 2019,
        'director' => 'Simon Kinberg',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Black Panther',
        'releaseYear' => 2018,
        'director' => 'Ryan Coogler',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['Xhosa', 'English', 'Korean', 'Swahili'],
    ],
    [
        'name' => 'Venom',
        'releaseYear' => 2018,
        'director' => 'Ruben Fleischer',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Avengers: Infinity War',
        'releaseYear' => 2018,
        'director' => 'Joe Russo, Anthony Russo',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Ant-Man and the Wasp',
        'releaseYear' => 2018,
        'director' => 'Peyton Reed',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Spider-Man: Homecoming',
        'releaseYear' => 2017,
        'director' => 'Jon Watts',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Spider-Man: Far From Home',
        'releaseYear' => 2019,
        'director' => 'Jon Watts',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Spider-Man: Into the Spider-Verse',
        'releaseYear' => 2018,
        'director' => 'Peter Ramsey, Rodney Rothman, Bob Persichetti',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Deadpool 2',
        'releaseYear' => 2018,
        'director' => 'David Leitch',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Thor: Ragnarok',
        'releaseYear' => 2017,
        'director' => 'Taika Waititi',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Guardians of the Galaxy Vol. 2',
        'releaseYear' => 2017,
        'director' => 'James Gunn',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Logan',
        'releaseYear' => 2017,
        'director' => 'James Mangold',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Doctor Strange',
        'releaseYear' => 2016,
        'director' => 'Scott Derrickson',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Captain America: Civil War',
        'releaseYear' => 2016,
        'director' => 'Joe Russo, Anthony Russo',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Doctor Strange',
        'releaseYear' => 2016,
        'director' => 'Scott Derrickson',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Deadpool',
        'releaseYear' => 2016,
        'director' => 'Tim Miller',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Avengers: Age of Ultron',
        'releaseYear' => 2015,
        'director' => 'Joss Whedon',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Ant-Man',
        'releaseYear' => 2015,
        'director' => 'Peyton Reed',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Guardians of the Galaxy',
        'releaseYear' => 2014,
        'director' => 'James Gunn',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Captain America: The Winter Soldier',
        'releaseYear' => 2014,
        'director' => 'Joe Russo, Anthony Russo',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Iron Man 3',
        'releaseYear' => 2013,
        'director' => 'Shane Black',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Thor: The Dark World',
        'releaseYear' => 2013,
        'director' => 'Alan Taylor',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Avengers',
        'releaseYear' => 2012,
        'director' => 'Joss Whedon',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Captain America: The First Avenger',
        'releaseYear' => 2011,
        'director' => 'Joe Johnston',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Thor',
        'releaseYear' => 2011,
        'director' => 'Kenneth Branagh',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'X-Men: First Class',
        'releaseYear' => 2011,
        'director' => 'Matthew Vaughn',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Iron Man 2',
        'releaseYear' => 2010,
        'director' => 'Jon Favreau',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Iron Man',
        'releaseYear' => 2008,
        'director' => 'Jon Favreau',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Incredible Hulk',
        'releaseYear' => 2008,
        'director' => 'Louis Leterrier',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Elektra',
        'releaseYear' => 2005,
        'director' => 'Rob Bowman',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Suicide Squad',
        'releaseYear' => 2021,
        'director' => 'James Gunn',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Batman',
        'releaseYear' => 2021,
        'director' => 'Matt Reeves',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Wonder Woman 1984',
        'releaseYear' => 2020,
        'director' => 'Patty Jenkins',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Birds of Prey',
        'releaseYear' => 2020,
        'director' => 'Cathy Yan',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Shazam!',
        'releaseYear' => 2019,
        'director' => 'David F. Sandberg',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'joker',
        'releaseYear' => 2019,
        'director' => 'Todd Phillips',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Suicide Squad: Hell to Pay',
        'releaseYear' => 2018,
        'director' => 'Alan Burnett',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Aquaman',
        'releaseYear' => 2018,
        'director' => 'James Wan',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Wonder Woman',
        'releaseYear' => 2017,
        'director' => 'Patty Jenkins',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Justice League',
        'releaseYear' => 2017,
        'director' => 'Zack Snyder',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Suicide Squad',
        'releaseYear' => 2016,
        'director' => 'David Ayer',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Batman v Superman: Dawn of Justice',
        'releaseYear' => 2016,
        'director' => 'Zack Snyder',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Man of Steel',
        'releaseYear' => 2013,
        'director' => 'Zack Snyder',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Dark Knight Rises',
        'releaseYear' => 2012,
        'director' => 'Christopher Nolan',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Green Lantern',
        'releaseYear' => 2011,
        'director' => 'Martin Campbell',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Jonah Hex',
        'releaseYear' => 2010,
        'director' => 'Jimmy Hayward',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Watchmen',
        'releaseYear' => 2009,
        'director' => 'Zack Snyder',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Dark Knight',
        'releaseYear' => 2008,
        'director' => 'Christopher Nolan',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Batman Begins',
        'releaseYear' => 2005,
        'director' => 'Christopher Nolan',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Constantine',
        'releaseYear' => 2005,
        'director' => 'Francis Lawrence',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Catwoman',
        'releaseYear' => 2004,
        'director' => 'Jean-Christophe "Pitof" Comar',
        'generes' => ['Action', 'Adventure'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Snow White and the Seven Dwarfs',
        'releaseYear' => 1937,
        'director' => 'David Hand, William Cottrell',
        'generes' => ['Romantic', 'Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Pinocchio',
        'releaseYear' => 1940,
        'director' => 'Ben Sharpsteen, Hamilton Luske, Bill Roberts ',
        'generes' => ['Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Fantasia',
        'releaseYear' => 1940,
        'director' => 'Samuel Armstrong, Bill Roberts, James Algar, Ben Sharpsteen ',
        'generes' => ['Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Dumbo',
        'releaseYear' => 1941,
        'director' => 'Ben Sharpsteen, Norman Ferguson, Wilfred Jackson, Bill Roberts',
        'generes' => ['Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Bambi',
        'releaseYear' => 1942,
        'director' => 'David Hand, James Algar, Bill Roberts',
        'generes' => ['Romantic', 'Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Cinderella',
        'releaseYear' => 1950,
        'director' => 'Clyde Geronimi, Hamilton Luske, Wilfred Jackson',
        'generes' => ['Romantic', 'Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Alice in Wonderland',
        'releaseYear' => 1951,
        'director' => 'Clyde Geronimi, Hamilton Luske, Wilfred Jackson',
        'generes' => ['Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Peter Pan',
        'releaseYear' => 1953,
        'director' => 'Clyde Geronimi, Hamilton Luske, Wilfred Jackson',
        'generes' => ['Romantic', 'Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Lady and the Tramp',
        'releaseYear' => 1955,
        'director' => 'Clyde Geronimi, Hamilton Luske, Wilfred Jackson',
        'generes' => ['Romantic', 'Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Sleeping Beauty',
        'releaseYear' => 1959,
        'director' => 'Clyde Geronimi, Eric Larson',
        'generes' => ['Romantic', 'Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'One Hundred and One Dalmatians',
        'releaseYear' => 1961,
        'director' => 'Clyde Geronimi, Wolfgang Reitherman',
        'generes' => ['Romantic', 'Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Sword in the Stone',
        'releaseYear' => 1963,
        'director' => 'Wolfgang Reitherman',
        'generes' => ['Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Mary Poppins',
        'releaseYear' => 1964,
        'director' => 'Robert Stevenson',
        'generes' => ['Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Jungle Book',
        'releaseYear' => 1967,
        'director' => 'Wolfgang Reitherman',
        'generes' => ['Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Aristocats',
        'releaseYear' => 1970,
        'director' => 'Wolfgang Reitherman',
        'generes' => ['Romantic, Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Robin Hood',
        'releaseYear' => 1973,
        'director' => 'Wolfgang Reitherman',
        'generes' => ['Romantic, Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Many Adventures of Winnie the Pooh',
        'releaseYear' => 1977,
        'director' => 'John Lounsbery, Wolfgang Reitherman',
        'generes' => ['Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Rescuers',
        'releaseYear' => 1977,
        'director' => 'John Lounsbery, Wolfgang Reitherman',
        'generes' => ['Romantic, Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Fox and the Hound',
        'releaseYear' => 1981,
        'director' => 'Ted Berman, Richard Rich, Art Stevens',
        'generes' => ['Adventure, Romantic, Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Black Cauldron',
        'releaseYear' => 1985,
        'director' => 'Ted Berman, Richard Rich',
        'generes' => ['Sdenture, Romantic, Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Great Mouse Detective',
        'releaseYear' => 1986,
        'director' => 'Ron Clements, Burny Mattinson',
        'generes' => ['Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Oliver & Company',
        'releaseYear' => 1988,
        'director' => 'George Scribner',
        'generes' => ['Adventure, Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Honey, I Shrunk the Kids',
        'releaseYear' => 1989,
        'director' => 'Joe Johnston',
        'generes' => ['Adventure, Science Fictio, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Little Mermaid',
        'releaseYear' => 1989,
        'director' => 'Ron Clements, John Musker',
        'generes' => ['Animation, Romantic, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'DuckTales the Movie: Treasure of the Lost Lamp',
        'releaseYear' => 1990,
        'director' => 'Bob Hathcock',
        'generes' => ['Adventure, Animation, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Rescuers Down Under',
        'releaseYear' => 1990,
        'director' => 'Hendel Butoy, Mike Gabriel',
        'generes' => ['Animation, Adventure, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Beauty and the Beastr',
        'releaseYear' => 1991,
        'director' => 'Kirk Wise, Gary Trousdale',
        'generes' => ['Animation, Romantic, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Honey, I Blew Up the Kid',
        'releaseYear' => 1992,
        'director' => 'Randal Kleiser, ',
        'generes' => ['Animation, Adventure, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Aladdin',
        'releaseYear' => 1992,
        'director' => 'Ron Clements, John Musker ',
        'generes' => ['Animation, Romantic, Adventure, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Nightmare Before Christmas',
        'releaseYear' => 1993,
        'director' => 'Henry Selick, Tim Burton',
        'generes' => ['Animation, Romantic, Adventure, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'The Lion King',
        'releaseYear' => 1994,
        'director' => 'Rob Minkoff, Roger Allers',
        'generes' => ['Animation, Romantic, Adventure, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'A Goofy Movie',
        'releaseYear' => 1995,
        'director' => 'Kevin Lima',
        'generes' => ['Animation, Romantic, Adventure, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Pocahontas',
        'releaseYear' => 1995,
        'director' => 'Mike Gabriel, Eric Goldberg',
        'generes' => ['Animation, Romantic, Adventure, Musical, Family'],
        'langauges' => ['English'],
    ],
    [
        'name' => 'Frank and Ollie',
        'releaseYear' => 1995,
        'director' => 'Theodore Thomas',
        'generes' => ['Animation, Adventure, Musical, Family'],
        'langauges' => ['English'],
    ],
];

return [
    'collections' => $collections,
    'movies' => $movies,
];