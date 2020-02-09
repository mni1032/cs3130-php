INSERT INTO member
( first_name
, last_name
, username
, password
) VALUES
( 'Spencer'
, 'Rhoades'
, 'spencerrhoades'
, 'password'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '1 Nephi'
, 1
, 1
, 'I, Nephi, having been born of goodly parents, therefore I was taught somewhat in all the learning of my father; and having seen many afflictions in the course of my days, nevertheless, having been highly favored of the Lord in all my days; yea, having had a great knowledge of the goodness and the mysteries of God, therefore I make a record of my proceedings in my days.'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '1 Nephi'
, 1
, 2
, 'Yea, I make a record in the language of my father, which consists of the learning of the Jews and the language of the Egyptians.'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '1 Nephi'
, 1
, 3
, 'And I know that the record which I make is true; and I make it with mine own hand; and I make it according to my knowledge.'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '1 Nephi'
, 2
, 1
, 'test 1 Nephi 2:1'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '1 Nephi'
, 2
, 2
, 'test 1 Nephi 2:2'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '1 Nephi'
, 2
, 3
, 'test 1 Nephi 2:3'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '1 Nephi'
, 3
, 1
, 'test 1 Nephi 3:1'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '1 Nephi'
, 3
, 2
, 'test 1 Nephi 3:2'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '1 Nephi'
, 3
, 3
, 'test 1 Nephi 3:3'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '2 Nephi'
, 1
, 1
, 'test 2 Nephi 1:1'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '2 Nephi'
, 1
, 2
, 'test 2 Nephi 1:2'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '2 Nephi'
, 1
, 3
, 'test 2 Nephi 1:3'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '2 Nephi'
, 2
, 1
, 'test 2 Nephi 2:1'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '2 Nephi'
, 2
, 2
, 'test 2 Nephi 2:2'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '2 Nephi'
, 2
, 3
, 'test 2 Nephi 2:3'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '2 Nephi'
, 3
, 1
, 'test 2 Nephi 3:1'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '2 Nephi'
, 3
, 2
, 'test 2 Nephi 3:2'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( '2 Nephi'
, 3
, 3
, 'test 2 Nephi 3:3'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( 'Jacob'
, 1
, 1
, 'test Jacob 1:1'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( 'Jacob'
, 1
, 2
, 'test Jacob 1:2'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( 'Jacob'
, 1
, 3
, 'test Jacob 1:3'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( 'Jacob'
, 2
, 1
, 'test Jacob 2:1'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( 'Jacob'
, 2
, 2
, 'test Jacob 2:2'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( 'Jacob'
, 2
, 3
, 'test Jacob 2:3'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( 'Jacob'
, 3
, 1
, 'test Jacob 3:1'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( 'Jacob'
, 3
, 2
, 'test Jacob 3:2'
);

INSERT INTO verse
( book
, chapter
, verse
, text
) VALUES
( 'Jacob'
, 3
, 3
, 'test Jacob 3:3'
);

INSERT INTO citation
( citation
) VALUES
( 'BoM Seminary Student Manual'    
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '1 Nephi' AND chapter = 1 AND verse = 1)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 1 Nephi 1:1'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '1 Nephi' AND chapter = 1 AND verse = 2)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 1 Nephi 1:2'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '1 Nephi' AND chapter = 1 AND verse = 3)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 1 Nephi 1:3'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '1 Nephi' AND chapter = 2 AND verse = 1)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 1 Nephi 2:1'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '1 Nephi' AND chapter = 2 AND verse = 2)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 1 Nephi 2:2'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '1 Nephi' AND chapter = 2 AND verse = 3)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 1 Nephi 2:3'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '1 Nephi' AND chapter = 3 AND verse = 1)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 1 Nephi 3:1'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '1 Nephi' AND chapter = 3 AND verse = 2)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 1 Nephi 3:2'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '1 Nephi' AND chapter = 3 AND verse = 3)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 1 Nephi 3:3'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '2 Nephi' AND chapter = 1 AND verse = 1)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 2 Nephi 1:1'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '2 Nephi' AND chapter = 1 AND verse = 2)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 2 Nephi 1:2'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '2 Nephi' AND chapter = 1 AND verse = 3)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 2 Nephi 1:3'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '2 Nephi' AND chapter = 2 AND verse = 1)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 2 Nephi 2:1'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '2 Nephi' AND chapter = 2 AND verse = 2)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 2 Nephi 2:2'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '2 Nephi' AND chapter = 2 AND verse = 3)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 2 Nephi 2:3'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '2 Nephi' AND chapter = 3 AND verse = 1)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 2 Nephi 3:1'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '2 Nephi' AND chapter = 3 AND verse = 2)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 2 Nephi 3:2'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = '2 Nephi' AND chapter = 3 AND verse = 3)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment 2 Nephi 3:3'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = 'Jacob' AND chapter = 1 AND verse = 1)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment Jacob 1:1'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = 'Jacob' AND chapter = 1 AND verse = 2)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment Jacob 1:2'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = 'Jacob' AND chapter = 1 AND verse = 3)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment Jacob 1:3'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = 'Jacob' AND chapter = 2 AND verse = 1)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment Jacob 2:1'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = 'Jacob' AND chapter = 2 AND verse = 2)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment Jacob 2:2'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = 'Jacob' AND chapter = 2 AND verse = 3)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment Jacob 2:3'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = 'Jacob' AND chapter = 3 AND verse = 1)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment Jacob 3:1'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = 'Jacob' AND chapter = 1 AND verse = 2)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment Jacob 3:2'   
);

INSERT INTO comment
( author_id
, create_date
, verse_id
, citation_id
, text
) VALUES
( (SELECT id FROM member WHERE username = 'spencerrhoades')
, (SELECT CURRENT_DATE)
, (SELECT id FROM verse WHERE book = 'Jacob' AND chapter = 1 AND verse = 3)
, (SELECT id FROM citation WHERE citation = 'BoM Seminary Student Manual') 
, 'test comment Jacob 3:3'   
);