CREATE TABLE `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

INSERT INTO  `users` (  `id` ,  `username` ,  `email` ) 
VALUES (NULL ,  'phpflow',  'phpflow@phpflow.com'), 
(NULL ,  'parvez',  'parvez@phpflow.com')
