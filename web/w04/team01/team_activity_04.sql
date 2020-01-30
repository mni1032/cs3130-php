drop table note;
drop table person;
drop table speaker_conf;
drop table speaker;
drop table conference;


CREATE TABLE person (
    person_id INT PRIMARY KEY,
    USER_NAME VARCHAR(80)
);

CREATE TABLE speaker (
    speaker_id INT PRIMARY KEY, --primary key
    speaker_name VARCHAR(80)
);

CREATE TABLE conference (
    conference_id INT PRIMARY KEY,
    year INT,
    month INT
);

CREATE TABLE speaker_conf (
    s_c_id INT PRIMARY KEY,
    speaker_id INT REFERENCES speaker(speaker_id),
    conference_id INT REFERENCES conference(conference_id) 
);


CREATE TABLE note (
    note_id INT PRIMARY KEY,
    note_content TEXT,
    person INT REFERENCES person(person_id), --foreign key
    s_c_id INT REFERENCES speaker_conf(s_c_id) 
 );

INSERT INTO person(person_id, USER_NAME)
VALUES (1, 'mni1032');

INSERT INTO speaker(speaker_id, speaker_name)
VALUES (1, 'Russel M. Nelson');

INSERT INTO speaker(speaker_id, speaker_name)
VALUES (2, 'Jeffrey R. Holland');

INSERT INTO conference(conference_id, year, month)
VALUES (1, 1999, 4);

INSERT INTO conference(conference_id, year, month)
VALUES (2, 1999, 10);

INSERT INTO speaker_conf(s_c_id, speaker_id, conference_id)
VALUES (1, 1, 1);

INSERT INTO speaker_conf(s_c_id, speaker_id, conference_id)
VALUES (2, 2, 1);

INSERT INTO speaker_conf(s_c_id, speaker_id, conference_id)
VALUES (3, 1, 2);

INSERT INTO note(note_id, note_content)
VALUES (1, 'This is a note');

INSERT INTO note(note_id, note_content)
VALUES (2, 'This is also a note');