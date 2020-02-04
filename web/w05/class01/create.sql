DROP TABLE IF EXISTS family_members;
DROP TABLE IF EXISTS relationships;

CREATE TABLE relationships
( id            SERIAL       NOT NULL PRIMARY KEY
, description   VARCHAR(500) NOT NULL
);

CREATE TABLE family_members
( id            SERIAL       NOT NULL PRIMARY KEY
, first_name    VARCHAR(100) NOT NULL
, last_name     VARCHAR(100) NOT NULL
, rel_id        INT          NOT NULL REFERENCES relationships(id)
);

INSERT INTO relationships (description) VALUES ('mother');
INSERT INTO relationships (description) VALUES ('father');
INSERT INTO relationships (description) VALUES ('wife');
INSERT INTO relationships (description) VALUES ('husband');
INSERT INTO relationships (description) VALUES ('son');
INSERT INTO relationships (description) VALUES ('daughter');

INSERT INTO family_members 
( first_name
, last_name
, rel_id
) VALUES
( 'Rebecca'
, 'Rhoades'
, (SELECT id FROM relationships WHERE description = 'wife'));

INSERT INTO family_members 
( first_name
, last_name
, rel_id
) VALUES
( 'Paul-Allen'
, 'Rhoades'
, (SELECT id FROM relationships WHERE description = 'son'));

INSERT INTO family_members 
( first_name
, last_name
, rel_id
) VALUES
( 'Cory'
, 'Rhoades'
, (SELECT id FROM relationships WHERE description = 'father'));