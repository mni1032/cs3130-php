CREATE TABLE member 
( id          SERIAL       NOT NULL PRIMARY KEY
, first_name  VARCHAR(50)  NOT NULL
, last_name   VARCHAR(50)  NOT NULL
, username    VARCHAR(50)  NOT NULL
, password    VARCHAR(50)  NOT NULL
);

CREATE TABLE verse
( id          SERIAL       NOT NULL PRIMARY KEY
, book        VARCHAR(50)  NOT NULL
, chapter     INT          NOT NULL
, verse       INT          NOT NULL
, text        TEXT         NOT NULL
);

CREATE TABLE citation
( id          SERIAL       NOT NULL PRIMARY KEY
, citation    TEXT         NOT NULL
);

CREATE TABLE comment
( id          SERIAL       NOT NULL PRIMARY KEY
, author_id   INT          NOT NULL REFERENCES member(id)
, create_date DATE         NOT NULL
, verse_id    INT          NOT NULL REFERENCES verse(id)
, citation_id INT          NOT NULL REFERENCES citation(id)
, text        TEXT         NOT NULL
);