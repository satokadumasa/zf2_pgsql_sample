CREATE TABLE album (
  id int(11) NOT NULL auto_increment,
  artist varchar(100) NOT NULL,
  title varchar(100) NOT NULL,
  PRIMARY KEY (id)
);
INSERT INTO album (id, artist, title)
    VALUES  (1, 'The  Military  Wives',  'In  My  Dreams');
INSERT INTO album (artist, title)
    VALUES  (2, 'Adele',  '21');
INSERT INTO album (artist, title)
    VALUES  (3, 'Bruce  Springsteen',  'Wrecking Ball (Deluxe)');
INSERT INTO album (artist, title)
    VALUES  (4, 'Lana  Del  Rey',  'Born  To  Die');
INSERT INTO album (artist, title)
    VALUES  (5, 'Gotye',  'Making  Mirrors');