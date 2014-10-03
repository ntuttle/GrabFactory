<? 
# Configuration Settings
#---------------------------------------------------
  $SVR = 'GrabFactory'; 
  $_ = ['host'=>$SVR];
  $_['debug']   =  true;
  $_['user']    = 'root';
  $_['pass']    = '1t3f5s7e';
  $_['domain']  = 'grabfactory.com';
  $_['wwwPort'] =  80;
  $_['mtaPort'] =  8080;
# Php.ini - more in /core/conf/ini.php
#---------------------------------------------------
  $I['display_errors']  = 1;
  $I['date.timezone']   = 'America/Los_Angeles';
# Database Connections
#---------------------------------------------------
  $H['DB']      = [
      # IncomingEmail,PMTAlogs,metadata
      'public'  =>'207.158.26.18',
      'private' => false,
      'port'    => 3306
      ];
# DO NOT EDIT BELOW HERE
#---------------------------------------------------
  $_['hosts'] = $H;
  $_['ini']   = $I;
  Req('conf.php',CONF);
?>