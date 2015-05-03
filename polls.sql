DROP TABLE votes;
CREATE TABLE votes(
       choice integer(1),
       tally integer(15),
       PRIMARY KEY(choice)
);

INSERT INTO votes VALUES (0,0);
INSERT INTO votes VALUES (1,0);
INSERT INTO votes VALUES (2,0);
INSERT INTO votes VALUES (3,0);
INSERT INTO votes VALUES (4,0);
INSERT INTO votes VALUES (5,0);