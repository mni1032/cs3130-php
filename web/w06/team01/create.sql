DROP TABLE IF EXISTS scripture_topic;
DROP TABLE IF EXISTS topic;
DROP TABLE IF EXISTS Scriptures;

CREATE TABLE Scriptures (
  id SERIAL NOT NULL PRIMARY KEY,
  book VARCHAR(100) NOT NULL,
  chapter INT NOT NULL,
  verse INT NOT NULL,
  content VARCHAR(400) NOT NULL
);

CREATE TABLE topic (
  id SERIAL NOT NULL PRIMARY KEY,
  name VARCHAR(100) NOT NULL
);

CREATE TABLE scripture_topic (
  id SERIAL NOT NULL PRIMARY KEY,
  scripture_id INT NOT NULL REFERENCES Scriptures(id),
  topic_id INT NOT NULL REFERENCES topic(id)
);

INSERT INTO topic (name)
VALUES ('faith');
INSERT INTO topic (name)
VALUES ('sacrifice');
INSERT INTO topic (name)
VALUES ('charity');

SELECT s.id, s.book, s.chapter, s.verse, string_agg(t.name, ', ') AS topics FROM Scriptures s INNER JOIN scripture_topic st ON s.id = st.scripture_id INNER JOIN topic t ON st.topic_id = t.id GROUP BY s.id;
