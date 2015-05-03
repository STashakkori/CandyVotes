DROP TABLE IF EXISTS votes;
CREATE TABLE votes(
       choice INTEGER(1) NOT NULL DEFAULT -1,
       tally INTEGER(15) NOT NULL DEFAULT 0,
       PRIMARY KEY(choice)  
);