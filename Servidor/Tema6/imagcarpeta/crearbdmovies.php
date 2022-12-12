<?php
//connect to MySQL
$db = mysqli_connect('localhost', 'root', '') or 
    die ('Unable to connect. Check your connection parameters.');

//create the main database if it doesn't already exist
$query = 'CREATE DATABASE IF NOT EXISTS moviesite';
mysqli_query($db,$query) or die(mysql_error($db));

//make sure our recently created database is the active one
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

//create the movie table
$query = 'CREATE TABLE movie (
        movie_id        INTEGER UNSIGNED  NOT NULL AUTO_INCREMENT, 
        movie_name      VARCHAR(255)      NOT NULL, 
        movie_type      TINYINT           NOT NULL DEFAULT 0, 
        movie_year      SMALLINT UNSIGNED NOT NULL DEFAULT 0, 
        movie_leadactor INTEGER UNSIGNED  NOT NULL DEFAULT 0, 
        movie_director  INTEGER UNSIGNED  NOT NULL DEFAULT 0, 

        PRIMARY KEY (movie_id),
        KEY movie_type (movie_type, movie_year) 
    ) 
    ENGINE=MyISAM';
mysqli_query( $db,$query) or die (mysqli_error($db));

//create the movietype table
$query = 'CREATE TABLE movietype ( 
        movietype_id    TINYINT UNSIGNED NOT NULL AUTO_INCREMENT, 
        movietype_label VARCHAR(100)     NOT NULL, 
        PRIMARY KEY (movietype_id) 
    ) 
    ENGINE=MyISAM';
mysqli_query( $db,$query) or die (mysqli_error($db));

//create the people table
$query = 'CREATE TABLE people ( 
        people_id         INTEGER UNSIGNED    NOT NULL AUTO_INCREMENT, 
        people_fullname   VARCHAR(255)        NOT NULL, 
        people_isactor    TINYINT(1) UNSIGNED NOT NULL DEFAULT 0, 
        people_isdirector TINYINT(1) UNSIGNED NOT NULL DEFAULT 0, 

        PRIMARY KEY (people_id)
    ) 
    ENGINE=MyISAM';
mysqli_query( $db,$query) or die (mysqli_error($db));

echo 'Movie database successfully created!<br>';
// insert data into the movie table
$query = 'INSERT INTO movie
        (movie_id, movie_name, movie_type, movie_year, movie_leadactor,
        movie_director)
    VALUES
        (1, "Bruce Almighty", 5, 2003, 1, 2),
        (2, "Office Space", 5, 1999, 5, 6),
        (3, "Grand Canyon", 2, 1991, 4, 3)';
mysqli_query( $db,$query) or die (mysqli_error($db));

// insert data into the movietype table
$query = 'INSERT INTO movietype 
        (movietype_id, movietype_label)
    VALUES 
        (1,"Sci Fi"),
        (2, "Drama"), 
        (3, "Adventure"),
        (4, "War"), 
        (5, "Comedy"),
        (6, "Horror"),
        (7, "Action"),
        (8, "Kids")';
mysqli_query( $db,$query) or die (mysqli_error($db));

// insert data into the people table
$query  = 'INSERT INTO people
        (people_id, people_fullname, people_isactor, people_isdirector)
    VALUES
        (1, "Jim Carrey", 1, 0),
        (2, "Tom Shadyac", 0, 1),
        (3, "Lawrence Kasdan", 0, 1),
        (4, "Kevin Kline", 1, 0),
        (5, "Ron Livingston", 1, 0),
        (6, "Mike Judge", 0, 1)';
mysqli_query( $db,$query) or die (mysqli_error($db));

echo 'Data inserted successfully!<br>';
//alter the movie table to include running time, cost and takings fields
$query = 'ALTER TABLE movie ADD COLUMN (
    movie_running_time TINYINT UNSIGNED NULL,
    movie_cost         DECIMAL(4,1)     NULL,
    movie_takings      DECIMAL(4,1)     NULL)';
mysqli_query( $db,$query) or die (mysqli_error($db));

//insert new data into the movie table for each movie
$query = 'UPDATE movie SET
        movie_running_time = 101,
        movie_cost = 81,
        movie_takings = 242.6
    WHERE
        movie_id = 1';
mysqli_query( $db,$query) or die (mysqli_error($db));

$query = 'UPDATE movie SET
        movie_running_time = 89,
        movie_cost = 10,
        movie_takings = 10.8
    WHERE
        movie_id = 2';
mysqli_query( $db,$query) or die (mysqli_error($db));

$query = 'UPDATE movie SET
        movie_running_time = 134,
        movie_cost = NULL,
        movie_takings = 33.2
    WHERE
        movie_id = 3';
mysqli_query( $db,$query) or die (mysqli_error($db));
//create the reviews table
$query = 'CREATE TABLE reviews (
        review_movie_id INTEGER UNSIGNED NOT NULL, 
        review_date     DATE             NOT NULL, 
        reviewer_name   VARCHAR(255)     NOT NULL, 
        review_comment  VARCHAR(255)     NOT NULL, 
        review_rating   TINYINT UNSIGNED NOT NULL  DEFAULT 0, 

        KEY (review_movie_id)
    )
    ENGINE=MyISAM';
mysqli_query( $db,$query) or die (mysqli_error($db));

//insert new data into the reviews table
$query = <<<ENDSQL
INSERT INTO reviews
    (review_movie_id, review_date, reviewer_name, review_comment,
        review_rating)
VALUES 
    (1, "2008-09-23", "John Doe", "I thought this was a great movie
        Even though my girlfriend made me see it against my will.", 4),
    (1, "2008-09-23", "Billy Bob", "I liked Eraserhead better.", 2),
    (1, "2008-09-28", "Peppermint Patty", "I wish I'd have seen it
        sooner!", 5),
    (2, "2008-09-23", "Marvin Martian", "This is my favorite movie. I
        didn't wear my flair to the movie but I loved it anyway.", 5),
    (3, "2008-09-23", "George B.", "I liked this movie, even though I
        Thought it was an informational video from my travel agent.", 3)
ENDSQL;
mysqli_query( $db,$query) or die (mysqli_error($db));
echo 'Movie database successfully updated!<br>';
//create the images table
$query = 'CREATE TABLE images (
        image_id       INTEGER      NOT NULL AUTO_INCREMENT,
        image_caption  VARCHAR(255) NOT NULL,
        image_username VARCHAR(255) NOT NULL,
        image_filename VARCHAR(255) NOT NULL DEFAULT "",
        image_date     DATE         NOT NULL,
        PRIMARY KEY (image_id)
    )
    ENGINE=MyISAM';
mysqli_query( $db,$query) or die (mysqli_error($db));

echo 'Images table successfully created.<br>';
?>