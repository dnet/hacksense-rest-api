CREATE TABLE IF NOT EXISTS `state_changes` (
  `id` int(11) NOT NULL auto_increment,
  `when` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `what` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;