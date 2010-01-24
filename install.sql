CREATE TABLE IF NOT EXISTS `state_changes` (
  `when` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `what` tinyint(4) NOT NULL,
  `id` char(36) NOT NULL DEFAULT '' PRIMARY KEY
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 ;
