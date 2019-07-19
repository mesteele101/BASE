<?php
/*******************************************************************************
** Basic Analysis and Security Engine (BASE)
** Copyright (C) 2004 BASE Project Team
** Copyright (C) 2000 Carnegie Mellon University
**
** (see the file 'base_main.php' for license details)
**
** Project Leads: Kevin Johnson <kjohnson@secureideas.net>
**                Sean Muller <samwise_diver@users.sourceforge.net>
** Built upon work by Roman Danyliw <rdd@cert.org>, <roman@danyliw.com>
**
** Purpose: Norwegian language file
**
** Estimated completion status: 60% 
**
********************************************************************************
** Authors: Ole-Martin Bækkeli  (olebakk@pdapath.com)
********************************************************************************
** Kevin Johnson <kjohnson@secureideas.net
** Joel Esler <joelesler@users.sourceforge.net>
********************************************************************************
*/

$UI_Spacing = 1; // Inter Character Spacing.
$UI_ILC = 'no'; // ISO 639-1 Language Code.
$UI_IRC = ''; // Region Code.
// Locales.
$UI_Locales = array( 'eng_ENG.ISO8859-1', 'eng_ENG.utf-8', 'english' );
// Time Format - See strftime() syntax.
$UI_Timefmt = '%a %B %d, %Y %H:%M:%S';
// UI Init.
$UI_Charset = 'utf-8';
$UI_Title = 'Basic Analysis and Security Engine';
// Common Words.
$UI_CW_Edit = 'Endre';
$UI_CW_Delete = 'Slett';
$UI_CW_Src = 'Kilde';
$UI_CW_Dst = 'Destinasjon';
$UI_CW_Id = 'ID';
$UI_CW_Name = 'Navn';
$UI_CW_Int = 'Grensesnitt';
$UI_CW_Filter = 'Filter';
$UI_CW_Desc = 'Beskrivelse';
$UI_CW_SucDesc = 'Vellykket';
$UI_CW_Sensor = 'Sensor';
$UI_CW_Sig = 'Signatur';
$UI_CW_Role = 'Rolle';
$UI_CW_Pw = 'Passord';
$UI_CW_Ts = 'Tidsmerke';
$UI_CW_Addr = 'Adresse';
$UI_CW_Layer = 'Lag';
$UI_CW_Proto = 'Protokoll';
$UI_CW_Pri = 'Prioritet';
$UI_CW_Event = 'Hendelse';
$UI_CW_Type = 'Type';
$UI_CW_ML1 = 'Januar';
$UI_CW_ML2 = 'Februar';
$UI_CW_ML3 = 'Mars';
$UI_CW_ML4 = 'April';
$UI_CW_ML5 = 'Mai';
$UI_CW_ML6 = 'Juni';
$UI_CW_ML7 = 'Juli';
$UI_CW_ML8 = 'August';
$UI_CW_ML9 = 'September';
$UI_CW_ML10 = 'Oktober';
$UI_CW_ML11 = 'November';
$UI_CW_ML12 = 'Desember';
$UI_CW_Last = 'Siste';
$UI_CW_First = 'Frste';
$UI_CW_Total = 'Total';
// Common Phrases.
$UI_CP_SrcName = array($UI_CW_Src,$UI_CW_Name);
$UI_CP_DstName = array('Dest.',$UI_CW_Name);
$UI_CP_SrcDst = array($UI_CW_Src,'eller','Dest.');
$UI_CP_SrcAddr = array($UI_CW_Src,$UI_CW_Addr);
$UI_CP_DstAddr = array($UI_CW_Dst,$UI_CW_Addr);
$UI_CP_L4P = array($UI_CW_Layer,'4',$UI_CW_Proto);
// Authentication Data.
$UI_AD_UND = 'Brukernavn';
$UI_AD_RID = array($UI_CW_Role,$UI_CW_Id);
$UI_AD_ASD = 'Aktivert';

//common phrases
DEFINE('_ALERT','Hendelser');
DEFINE('_ADDRESS','Adresse');
DEFINE('_UNKNOWN','ukjent');
DEFINE('_AND','AND'); //NEW
DEFINE('_OR','OR'); //NEW
DEFINE('_IS','is'); //NEW
DEFINE('_ON','on'); //NEW
DEFINE('_IN','in'); //NEW
DEFINE('_ANY','any'); //NEW
DEFINE('_NONE','none'); //NEW
DEFINE('_HOUR','Hour'); //NEW
DEFINE('_DAY','Day'); //NEW
DEFINE('_MONTH','Month'); //NEW
DEFINE('_YEAR','Year'); //NEW
DEFINE('_ALERTGROUP','Alert Group'); //NEW
DEFINE('_ALERTTIME','Alert Time'); //NEW
DEFINE('_CONTAINS','contains'); //NEW
DEFINE('_DOESNTCONTAIN','does not contain'); //NEW
DEFINE('_SOURCEPORT','source port'); //NEW
DEFINE('_DESTPORT','dest port'); //NEW
DEFINE('_HAS','has'); //NEW
DEFINE('_HASNOT','has not'); //NEW
DEFINE('_PORT','Port'); //NEW
DEFINE('_FLAGS','Flags'); //NEW
DEFINE('_MISC','Misc'); //NEW
DEFINE('_BACK','Back'); //NEW
DEFINE('_DISPYEAR','{ year }'); //NEW
DEFINE('_DISPMONTH','{ month }'); //NEW
DEFINE('_DISPHOUR','{ hour }'); //NEW
DEFINE('_DISPDAY','{ day }'); //NEW
DEFINE('_DISPTIME','{ time }'); //NEW
DEFINE('_ADDADDRESS','ADD Addr'); //NEW
DEFINE('_ADDIPFIELD','ADD IP Field'); //NEW
DEFINE('_ADDTIME','ADD TIME'); //NEW
DEFINE('_ADDTCPPORT','ADD TCP Port'); //NEW
DEFINE('_ADDTCPFIELD','ADD TCP Field'); //NEW
DEFINE('_ADDUDPPORT','ADD UDP Port'); //NEW
DEFINE('_ADDUDPFIELD','ADD UDP Field'); //NEW
DEFINE('_ADDICMPFIELD','ADD ICMP Field'); //NEW
DEFINE('_ADDPAYLOAD','ADD Payload'); //NEW
DEFINE('_MOSTFREQALERTS','Most Frequent Alerts'); //NEW
DEFINE('_MOSTFREQPORTS','Most Frequent Ports'); //NEW
DEFINE('_MOSTFREQADDRS','Most Frequent IP addresses'); //NEW
DEFINE('_LASTALERTS','Last Alerts'); //NEW
DEFINE('_LASTPORTS','Last Ports'); //NEW
DEFINE('_LASTTCP','Last TCP Alerts'); //NEW
DEFINE('_LASTUDP','Last UDP Alerts'); //NEW
DEFINE('_LASTICMP','Last ICMP Alerts'); //NEW
DEFINE('_QUERYDB','Query DB'); //NEW
DEFINE('_QUERYDBP','Query+DB'); //NEW - Equals to _QUERYDB where spaces are '+'s. 
                                //Should be something like: DEFINE('_QUERYDBP',str_replace(" ", "+", _QUERYDB));
DEFINE('_SELECTED','Selected'); //NEW
DEFINE('_ALLONSCREEN','ALL on Screen'); //NEW
DEFINE('_ENTIREQUERY','Entire Query'); //NEW
DEFINE('_OPTIONS','Options'); //NEW
DEFINE('_LENGTH','length'); //NEW
DEFINE('_CODE','code'); //NEW
DEFINE('_DATA','data'); //NEW
DEFINE('_TYPE',$UI_CW_Type); //NEW
DEFINE('_NEXT','Next'); //NEW
DEFINE('_PREVIOUS','Previous'); //NEW

//Menu items
DEFINE('_HOME','Hjem');
DEFINE('_SEARCH','S&oslash;k');

DEFINE('_AGMAINT','Hendelsesgruppe vedlikehold');
DEFINE('_USERPREF','Brukerpreferanser');
DEFINE('_CACHE','Cache & status');
DEFINE('_ADMIN','Administrasjon');
DEFINE('_GALERTD','Plott hendelser');
DEFINE('_GALERTDT','Plott hendelser etter deteksjonstid');
DEFINE('_USERMAN','Brukerbehandling');
DEFINE('_LISTU','Vis brukere');
DEFINE('_CREATEU','Opprett en bruker');
DEFINE('_ROLEMAN',$UI_CW_Role.'behanding');
DEFINE('_LISTR','Vis roller');
DEFINE('_CREATER',"Opprett en $UI_CW_Role");
DEFINE('_LISTALL','Vis alle');
DEFINE('_CREATE','Opprett');
DEFINE('_VIEW','Vis');
DEFINE('_CLEAR','Rens');
DEFINE('_LISTGROUPS','Vis grupper');
DEFINE('_CREATEGROUPS','Opprett gruppe');
DEFINE('_VIEWGROUPS','Vis gruppe');
DEFINE('_EDITGROUPS','Endre gruppe');
DEFINE('_DELETEGROUPS','Slett gruppe');
DEFINE('_CLEARGROUPS','Rens gruppe');
DEFINE('_CHNGPWD','Bytt '.strtolower($UI_CW_Pw));
DEFINE('_DISPLAYU','Vis bruker');

//base_footer.php
DEFINE('_FOOTER','( by <A class="largemenuitem" href="mailto:base@secureideas.net">Kevin Johnson</A> and the <A class="largemenuitem" href="http://sourceforge.net/project/memberlist.php?group_id=103348">BASE Project Team</A><BR>Built on ACID by Roman Danyliw<BR>');

//index.php --Log in Page
DEFINE('_LOGINERROR','Enten eksisterer ikke brukeren, ellers så var '.strtolower($UI_CW_Pw).'et feil!<br>Vennligst prv igjen');

// base_main.php
DEFINE('_MOSTRECENT','Seneste ');
DEFINE('_MOSTFREQUENT','Mest aktive ');
DEFINE('_ALERTS',' hendelser:');
DEFINE('_ADDRESSES',' adresser:');
DEFINE('_ANYPROTO','alle protokoller');
DEFINE('_UNI','unike');
DEFINE('_LISTING','listing');
DEFINE('_SOURCEIP','Source IP'); //NEW
DEFINE('_DESTIP','Destination IP'); //NEW
DEFINE('_TALERTS','Dagens hendelser: ');
DEFINE('_L24ALERTS','Hendelser de '.$UI_CW_Last.' 24 timene: ');
DEFINE('_L72ALERTS','Hendelser de '.$UI_CW_Last.' 72 timene: ');
DEFINE('_UNIALERTS',' unike hendelser');
DEFINE('_LSOURCEPORTS',$UI_CW_Last.' kildeporter: ');
DEFINE('_LDESTPORTS',$UI_CW_Last.' destinasjonsporter: ');
DEFINE('_FREGSOURCEP','Mest aktive kildeporter: ');
DEFINE('_FREGDESTP','Mest aktive destinasjonsporter: ');
# Not sure about the next line (context and case...)
DEFINE('_QUERIED','hentet');
DEFINE('_DATABASE','Database:');
DEFINE('_SCHEMAV','Schema versjon:');
DEFINE('_USEALERTDB','Use Alert Database'); //NEW
DEFINE('_USEARCHIDB','Use Archive Database'); //NEW
DEFINE('_TRAFFICPROBPRO','Traffic Profile by Protocol'); //NEW
DEFINE('_TIMEWIN','Tidsvindu:');
DEFINE('_NOALERTSDETECT','ingen hendelser detektert');

//base_auth.inc.php
DEFINE('_ADDEDSF','Vellykket!');
DEFINE('_NOPWDCHANGE','Greide ikke å bytte '.strtolower($UI_CW_Pw).': ');
DEFINE('_NOUSER','Brukeren eksisterer ikke!');
DEFINE('_OLDPWD','Det gamle '.strtolower($UI_CW_Pw).'et er feil!');
DEFINE('_PWDCANT','Greide ikke å bytte '.strtolower($UI_CW_Pw).': ');
DEFINE('_PWDDONE',$UI_CW_Pw.'et er endret!');
DEFINE('_ROLEEXIST','Rollen eksisterer allerede');
// TD Migration Hack
if ($UI_Spacing == 1){
	$glue = ' ';
}else{
	$glue = '';
}
DEFINE('_ROLEIDEXIST',implode($glue, $UI_AD_RID)." eksisterer allerede");
DEFINE('_ROLEADDED',"$UI_CW_Role lagt til");

//base_roleadmin.php
DEFINE('_ROLEADMIN','BASE Rolleadministrasjon');
DEFINE('_UPDATEROLE','Update Role'); //NEW
DEFINE('_FRMROLENAME','Rollenavn:');

//base_useradmin.php
DEFINE('_USERADMIN','BASE Brukeradministrasjon');
DEFINE('_FRMFULLNAME','Fullt navn:');
DEFINE('_SUBMITQUERY','Submit Query'); //NEW
DEFINE('_UPDATEUSER','Update User'); //NEW
DEFINE('_FRMUID','Bruker ID:');

//admin/index.php
DEFINE('_BASEADMIN','BASE Administrasjon');
DEFINE('_BASEADMINTEXT','Vennligst gjr et valg til venstre.');

//base_action.inc.php
DEFINE('_NOACTION','No action was specified on the alerts');
DEFINE('_INVALIDACT',' is an invalid action');
DEFINE('_ERRNOAG','Could not add alerts since no AG was specified');
DEFINE('_ERRNOEMAIL','Could not email alerts since no email address was specified');
DEFINE('_ACTION','ACTION');
DEFINE('_CONTEXT','context');
DEFINE('_ADDAGID','ADD to AG (by ID)');
DEFINE('_ADDAG','ADD-New-AG');
DEFINE('_ADDAGNAME','ADD to AG (by Name)');
DEFINE('_CREATEAG','Create AG (by Name)');
DEFINE('_CLEARAG','Clear from AG');
DEFINE('_DELETEALERT','Delete alert(s)');
DEFINE('_EMAILALERTSFULL','Email alert(s) (full)');
DEFINE('_EMAILALERTSSUMM','Email alert(s) (summary)');
DEFINE('_EMAILALERTSCSV','Email alert(s) (csv)');
DEFINE('_ARCHIVEALERTSCOPY','Archive alert(s) (copy)');
DEFINE('_ARCHIVEALERTSMOVE','Archive alert(s) (move)');
DEFINE('_IGNORED','Ignored ');
DEFINE('_DUPALERTS',' duplicate alert(s)');
DEFINE('_ALERTSPARA',' alert(s)');
DEFINE('_NOALERTSSELECT','No alerts were selected or the');
DEFINE('_NOTSUCCESSFUL','was not successful');
DEFINE('_ERRUNKAGID','Unknown AG ID specified (AG probably does not exist)');
DEFINE('_ERRREMOVEFAIL','Failed to remove new AG');
DEFINE('_GENBASE','Generated by BASE');
DEFINE('_ERRNOEMAILEXP','EXPORT ERROR: Could not send exported alerts to');
DEFINE('_ERRNOEMAILPHP','Check the mail configuration in PHP.');
DEFINE('_ERRDELALERT','Error Deleting Alert');
DEFINE('_ERRARCHIVE','Archive error:');
DEFINE('_ERRMAILNORECP','MAIL ERROR: No recipient Specified');

//base_cache.inc.php
DEFINE('_ADDED','Lagt til ');
DEFINE('_HOSTNAMESDNS',' navn til IP DNS cachen');
DEFINE('_HOSTNAMESWHOIS',' navn til WHOIS cachen');
# huh? next line is unclear...
DEFINE('_ERRCACHENULL','Hendelsesliste FEIL: NULL event rad funnet?');
DEFINE('_ERRCACHEERROR','HENDELSELISTE FEIL:');
DEFINE('_ERRCACHEUPDATE','Kunne ikke oppdatere hendelseslisten');
DEFINE('_ALERTSCACHE',' hendelse(r) til hendelseslisten');

//base_db.inc.php
DEFINE('_ERRSQLTRACE','Unable to open SQL trace file');
DEFINE('_ERRSQLCONNECT','Error connecting to DB :');
DEFINE('_ERRSQLCONNECTINFO','<P>Check the DB connection variables in <I>base_conf.php</I> 
              <PRE>
               = $alert_dbname   : MySQL database name where the alerts are stored 
               = $alert_host     : host where the database is stored
               = $alert_port     : port where the database is stored
               = $alert_user     : username into the database
               = $alert_password : password for the username
              </PRE>
              <P>');
DEFINE('_ERRSQLPCONNECT','Error (p)connecting to DB :');
DEFINE('_ERRSQLDB','Database FEIL:');
DEFINE('_DBALCHECK','Checking for DB abstraction lib in');
DEFINE('_ERRSQLDBALLOAD1','<P><B>Error loading the DB Abstraction library: </B> from ');
DEFINE('_ERRSQLDBALLOAD2','<P>Check the DB abstraction library variable <CODE>$DBlib_path</CODE> in <CODE>base_conf.php</CODE>
            <P>
            The underlying database library currently used is ADODB, that can be downloaded
            at ');
DEFINE('_ERRSQLDBTYPE','Invalid Database '.$UI_CW_Type.' Specified');
DEFINE('_ERRSQLDBTYPEINFO1','The variable <CODE>\$DBType</CODE> in <CODE>base_conf.php</CODE> was set to the unrecognized database '.$UI_CW_Type.' of ');
DEFINE('_ERRSQLDBTYPEINFO2','Only the following databases are supported: <PRE>
                MySQL         : \'mysql\'
                PostgreSQL    : \'postgres\'
                MS SQL Server : \'mssql\'
                Oracle        : \'oci8\'
             </PRE>');

//base_log_error.inc.php
DEFINE('_ERRBASEFATAL','BASE FATAL FEIL:');

//base_log_timing.inc.php
DEFINE('_LOADEDIN','Brukte');
DEFINE('_SECONDS','sekunder på å laste siden');

//base_net.inc.php
DEFINE('_ERRRESOLVEADDRESS','Unable to resolve address');

//base_output_query.inc.php
DEFINE('_QUERYRESULTSHEADER','Query Results Output Header');

//base_signature.inc.php
DEFINE('_ERRSIGNAMEUNK','SigNavn ukjent');
DEFINE('_ERRSIGPROIRITYUNK','SigPrioritet ukjent');
DEFINE('_UNCLASS','uklassifisert');

DEFINE('_SHORTJAN','Jan'); //NEW
DEFINE('_SHORTFEB','Feb'); //NEW
DEFINE('_SHORTMAR','Mar'); //NEW
DEFINE('_SHORTAPR','Apr'); //NEW
DEFINE('_SHORTMAY','May'); //NEW
DEFINE('_SHORTJUN','Jun'); //NEW
DEFINE('_SHORTJLY','Jly'); //NEW
DEFINE('_SHORTAUG','Aug'); //NEW
DEFINE('_SHORTSEP','Sep'); //NEW
DEFINE('_SHORTOCT','Oct'); //NEW
DEFINE('_SHORTNOV','Nov'); //NEW
DEFINE('_SHORTDEC','Dec'); //NEW
DEFINE('_DISPSIG','{ signature }'); //NEW
DEFINE('_DISPANYCLASS','{ any Classification }'); //NEW
DEFINE('_DISPANYPRIO','{ any Priority }'); //NEW
DEFINE('_DISPANYSENSOR','{ any Sensor }'); //NEW
DEFINE('_DISPADDRESS','{ adress }'); //NEW
DEFINE('_DISPFIELD','{ field }'); //NEW
DEFINE('_DISPPORT','{ port }'); //NEW
DEFINE('_DISPENCODING','{ encoding }'); //NEW
DEFINE('_DISPCONVERT2','{ Convert To }'); //NEW
DEFINE('_DISPANYAG','{ any Alert Group }'); //NEW
DEFINE('_DISPPAYLOAD','{ payload }'); //NEW
DEFINE('_DISPFLAGS','{ flags }'); //NEW
DEFINE('_SIGEXACTLY','exactly'); //NEW
DEFINE('_SIGROUGHLY','roughly'); //NEW
DEFINE('_SIGCLASS',"$UI_CW_Sig Classification"); //NEW
DEFINE('_SIGPRIO',"$UI_CW_Sig Priority"); //NEW
DEFINE('_SHORTSOURCE','Source'); //NEW
DEFINE('_SHORTDEST','Dest'); //NEW
DEFINE('_SHORTSOURCEORDEST','Src or Dest'); //NEW
DEFINE('_NOLAYER4','no layer4'); //NEW
DEFINE('_INPUTCRTENC','Input Criteria Encoding '.$UI_CW_Type); //NEW
DEFINE('_CONVERT2WS','Convert To (when searching)'); //NEW
//base_state_citems.inc.php
DEFINE('_DENCODED','data encoded as');
DEFINE('_NODENCODED','(no data conversion, assuming criteria in DB native encoding)');

//base_state_common.inc.php
DEFINE('_PHPERRORCSESSION','PHP ERROR: A custom (user) PHP session have been detected. However, BASE has not been set to explicitly use this custom handler.  Set <CODE>use_user_session=1</CODE> in <CODE>base_conf.php</CODE>');
DEFINE('_PHPERRORCSESSIONCODE','PHP ERROR: A custom (user) PHP session hander has been configured, but the supplied hander code specified in <CODE>user_session_path</CODE> is invalid.');
DEFINE('_PHPERRORCSESSIONVAR','PHP ERROR: A custom (user) PHP session handler has been configured, but the implementation of this handler has not been specified in BASE.  If a custom session handler is desired, set the <CODE>user_session_path</CODE> variable in <CODE>base_conf.php</CODE>.');
DEFINE('_PHPSESSREG','Session Registered');

//base_state_criteria.inc.php
DEFINE('_REMOVE','Removing');
DEFINE('_FROMCRIT','from criteria');
DEFINE('_ERRCRITELEM','Invalid criteria element');

//base_state_query.inc.php
# Unsure about next line...
DEFINE('_VALIDCANNED','Valid Canned Query List');
DEFINE('_DISPLAYING','Viser');
DEFINE('_DISPACTION','{ action }'); //NEW
DEFINE('_DISPLAYINGTOTAL','Viser hendelser %d-%d av %d '.$UI_CW_Total);
DEFINE('_NOALERTS','Ingen hendelser funnet.');
DEFINE('_QUERYRESULTS','Resultater fra oppslaget');
DEFINE('_QUERYSTATE','Oppslagstatus');

//base_ag_common.php
DEFINE('_ERRAGNAMESEARCH','The specified AG name search is invalid.  Try again!');
DEFINE('_ERRAGNAMEEXIST','The specified AG does not exist.');
DEFINE('_ERRAGIDSEARCH','The specified AG ID search is invalid.  Try again!');
DEFINE('_ERRAGLOOKUP','Error looking up an AG ID');
DEFINE('_ERRAGINSERT','Error Inserting new AG');

//base_ag_main.php
DEFINE('_AGMAINTTITLE','Hendelsegruppe (AG) vedlikehold');
DEFINE('_ERRAGUPDATE','En feil oppsto ved oppdatering av hendelsesgruppen');
DEFINE('_ERRAGPACKETLIST','En feil oppsto ved sletting av pakkelisten for hendelsesgruppen:');
DEFINE('_ERRAGDELETE','En feil oppsto ved sletting av hendelsesgruppen');
DEFINE('_AGDELETE','SLETTET!');
DEFINE('_AGDELETEINFO','informasjonen er slettet');
DEFINE('_ERRAGSEARCHINV','Kriteriet er feil. Prv igjen!');
DEFINE('_ERRAGSEARCHNOTFOUND','Ingen hendelsesgruppe funnet med det kriteriet.');
DEFINE('_SAVECHANGES','Save Changes'); //NEW
DEFINE('_CONFIRMDELETE','Confirm Delete'); //NEW
DEFINE('_CONFIRMCLEAR','Confirm Clear'); //NEW
DEFINE('_NOALERTGOUPS','Det finnes ingen hendelsesgrupper');
DEFINE('_NUMALERTS','Antall hendelser');
DEFINE('_ACTIONS','Gjøremål');
DEFINE('_NOTASSIGN','ikke lagt til enda');

//base_common.php
DEFINE('_PORTSCAN','Portscan trafikk');

//base_db_common.php
DEFINE('_ERRDBINDEXCREATE','Unable to CREATE INDEX for');
DEFINE('_DBINDEXCREATE','Successfully created INDEX for');
DEFINE('_ERRSNORTVER','It might be an older version.  Only alert databases created by Snort 1.7-beta0 or later are supported');
DEFINE('_ERRSNORTVER1','The underlying database');
DEFINE('_ERRSNORTVER2','appears to be incomplete/invalid');
DEFINE('_ERRDBSTRUCT1','The database version is valid, but the BASE DB structure');
DEFINE('_ERRDBSTRUCT2','is not present. Use the <A HREF="base_db_setup.php">Setup page</A> to configure and optimize the DB.');
DEFINE('_ERRPHPERROR','PHP ERROR');
DEFINE('_ERRPHPERROR1','Incompatible version');
DEFINE('_ERRVERSION','Version');
DEFINE('_ERRPHPERROR2','of PHP is too old.  Please upgrade to version 4.0.4 or later');
DEFINE('_ERRPHPMYSQLSUP','<B>PHP build incomplete</B>: <FONT>the prerequisite MySQL support required to 
               read the alert database was not built into PHP.  
               Please recompile PHP with the necessary library (<CODE>--with-mysql</CODE>)</FONT>');
DEFINE('_ERRPHPPOSTGRESSUP','<B>PHP build incomplete</B>: <FONT>the prerequisite PostgreSQL support required to 
               read the alert database was not built into PHP.  
               Please recompile PHP with the necessary library (<CODE>--with-pgsql</CODE>)</FONT>');
DEFINE('_ERRPHPMSSQLSUP','<B>PHP build incomplete</B>: <FONT>the prerequisite MS SQL Server support required to 
                   read the alert database was not built into PHP.  
                   Please recompile PHP with the necessary library (<CODE>--enable-mssql</CODE>)</FONT>');
DEFINE('_ERRPHPORACLESUP','<B>PHP build incomplete</B>: <FONT>the prerequisite Oracle support required to 
                   read the alert database was not built into PHP.');
DEFINE('_CHARTTYPE','Chart '.$UI_CW_Type.':'); //NEW
DEFINE('_CHARTTYPES','{ chart '.$UI_CW_Type.' }'); //NEW
DEFINE('_CHARTPERIOD','Chart Period:'); //NEW
DEFINE('_PERIODNO','no period'); //NEW
DEFINE('_PERIODWEEK','7 (a week)'); //NEW
DEFINE('_PERIODDAY','24 (whole day)'); //NEW
DEFINE('_PERIOD168','168 (24x7)'); //NEW
DEFINE('_CHARTSIZE','Size: (width x height)'); //NEW
DEFINE('_PLOTMARGINS','Plot Margins: (left x right x top x bottom)'); //NEW
DEFINE('_PLOTTYPE','Plot '.$UI_CW_Type.':'); //NEW
DEFINE('_TYPEBAR','bar'); //NEW
DEFINE('_TYPELINE','line'); //NEW
DEFINE('_TYPEPIE','pie'); //NEW
DEFINE('_CHARTHOUR','{hora}'); //NEW
DEFINE('_CHARTDAY','{dia}'); //NEW
DEFINE('_CHARTMONTH','{mês}'); //NEW
DEFINE('_GRAPHALERTS','Graph Alerts'); //NEW
DEFINE('_AXISCONTROLS','X / Y AXIS CONTROLS'); //NEW

//base_graph_form.php
DEFINE('_CHARTTITLE','Chart Title:');
DEFINE('_CHRTTYPEHOUR','Time (hour) vs. Number of Alerts');
DEFINE('_CHRTTYPEDAY','Time (day) vs. Number of Alerts');
DEFINE('_CHRTTYPEWEEK','Time (week) vs. Number of Alerts');
DEFINE('_CHRTTYPEMONTH','Time (month) vs. Number of Alerts');
DEFINE('_CHRTTYPEYEAR','Time (year) vs. Number of Alerts');
DEFINE('_CHRTTYPESRCIP','Src. IP address vs. Number of Alerts');
DEFINE('_CHRTTYPEDSTIP','Dst. IP address vs. Number of Alerts');
DEFINE('_CHRTTYPEDSTUDP','Dst. UDP Port vs. Number of Alerts');
DEFINE('_CHRTTYPESRCUDP','Src. UDP Port vs. Number of Alerts');
DEFINE('_CHRTTYPEDSTPORT','Dst. TCP Port vs. Number of Alerts');
DEFINE('_CHRTTYPESRCPORT','Src. TCP Port vs. Number of Alerts');
DEFINE('_CHRTTYPESIG','Sig. Classification vs. Number of Alerts');
DEFINE('_CHRTTYPESENSOR','Sensor vs. Number of Alerts');
DEFINE('_CHRTBEGIN','Chart Begin:');
DEFINE('_CHRTEND','Chart End:');
DEFINE('_CHRTDS','Data Source:');
DEFINE('_CHRTX','X Axis');
DEFINE('_CHRTY','Y Axis');
DEFINE('_CHRTMINTRESH','Minimum Threshold Value');
DEFINE('_CHRTROTAXISLABEL','Rotate Axis Labels (90 degrees)');
DEFINE('_CHRTSHOWX','Show X-axis grid-lines');
DEFINE('_CHRTDISPLABELX','Display X-axis label every');
DEFINE('_CHRTDATAPOINTS','data points');
DEFINE('_CHRTYLOG','Y-axis logarithmic');
DEFINE('_CHRTYGRID','Show Y-axis grid-lines');

//base_graph_main.php
DEFINE('_CHRTTITLE','BASE Chart');
DEFINE('_ERRCHRTNOTYPE','No chart '.$UI_CW_Type.' was specified');
DEFINE('_ERRNOAGSPEC','No AG was specified.  Using all alerts.');
DEFINE('_CHRTDATAIMPORT','Starting data import');
DEFINE('_CHRTTIMEVNUMBER','Time vs. Number of Alerts');
DEFINE('_CHRTTIME','Time');
DEFINE('_CHRTALERTOCCUR','Hendelse Occurrences');
DEFINE('_CHRTSIPNUMBER','Source IP vs. Number of Alerts');
DEFINE('_CHRTSIP','Source IP Address');
DEFINE('_CHRTDIPALERTS','Destination IP vs. Number of Alerts');
DEFINE('_CHRTDIP','Destination IP Address');
DEFINE('_CHRTUDPPORTNUMBER','UDP Port (Destination) vs. Number of Alerts');
DEFINE('_CHRTDUDPPORT','Dst. UDP Port');
DEFINE('_CHRTSUDPPORTNUMBER','UDP Port (Source) vs. Number of Alerts');
DEFINE('_CHRTSUDPPORT','Src. UDP Port');
DEFINE('_CHRTPORTDESTNUMBER','TCP Port (Destination) vs. Number of Alerts');
DEFINE('_CHRTPORTDEST','Dst. TCP Port');
DEFINE('_CHRTPORTSRCNUMBER','TCP Port (Source) vs. Number of Alerts');
DEFINE('_CHRTPORTSRC','Src. TCP Port');
DEFINE('_CHRTSIGNUMBER',"$UI_CW_Sig Classification vs. Number of Alerts");
DEFINE('_CHRTCLASS','Classification');
DEFINE('_CHRTSENSORNUMBER','Sensor vs. Number of Alerts');
DEFINE('_GRAPHALERTDATA','Graph Alert Data'); //NEW
DEFINE('_CHRTHANDLEPERIOD','Handling Period if necessary');
DEFINE('_CHRTDUMP','Dumping data ... (writing only every');
DEFINE('_CHRTDRAW','Drawing graph');
DEFINE('_ERRCHRTNODATAPOINTS','No data points to plot');

//base_maintenance.php
DEFINE('_MAINTTITLE','Maintenance');
DEFINE('_MNTPHP','PHP Build:');
DEFINE('_MNTCLIENT','CLIENT:');
DEFINE('_MNTSERVER','SERVER:');
DEFINE('_MNTSERVERHW','SERVER HW:');
DEFINE('_MNTPHPVER','PHP VERSION:');
DEFINE('_MNTPHPAPI','PHP API:');
DEFINE('_MNTPHPLOGLVL','PHP Logging level:');
DEFINE('_MNTPHPMODS','Loaded Modules:');
DEFINE('_MNTDBTYPE','DB '.$UI_CW_Type.':');
DEFINE('_MNTDBALV','DB Abstraction Version:');
DEFINE('_MNTDBALERTNAME','ALERT DB Name:');
DEFINE('_MNTDBARCHNAME','ARCHIVE DB Name:');
DEFINE('_MNTAIC','Hendelse Information Cache:');
DEFINE('_MNTAICTE',$UI_CW_Total.' Events:');
DEFINE('_MNTAICCE','Cached Events:');
DEFINE('_MNTIPAC','IP Address Cache');
DEFINE('_MNTIPACUSIP','Unique Src IP:');
DEFINE('_MNTIPACDNSC','DNS Cached:');
DEFINE('_MNTIPACWC','Whois Cached:');
DEFINE('_MNTIPACUDIP','Unique Dst IP:');

//base_qry_alert.php
DEFINE('_QAINVPAIR','Invalid (sid,cid) pair');
DEFINE('_QAALERTDELET','Hendelse SLETTET');
DEFINE('_QATRIGGERSIG',"Triggered $UI_CW_Sig");
DEFINE('_QANORMALD','Normal Display'); //NEW
DEFINE('_QAPLAIND','Plain Display'); //NEW
DEFINE('_QANOPAYLOAD','Fast logging used so payload was discarded'); //NEW

//base_qry_common.php
DEFINE('_QCSIG','signature');
DEFINE('_QCIPADDR','IP addresses');
DEFINE('_QCIPFIELDS','IP fields');
DEFINE('_QCTCPPORTS','TCP ports');
DEFINE('_QCTCPFLAGS','TCP flags');
DEFINE('_QCTCPFIELD','TCP fields');
DEFINE('_QCUDPPORTS','UDP ports');
DEFINE('_QCUDPFIELDS','UDP fields');
DEFINE('_QCICMPFIELDS','ICMP fields');
DEFINE('_QCDATA','Data');
DEFINE('_QCERRCRITWARN','Criteria warning:');
DEFINE('_QCERRVALUE','A value of');
DEFINE('_QCERRFIELD','A field of');
DEFINE('_QCERROPER','An operator of');
DEFINE('_QCERRDATETIME','A date/time value of');
DEFINE('_QCERRPAYLOAD','A payload value of');
DEFINE('_QCERRIP','An IP address of');
DEFINE('_QCERRIPTYPE','An IP address of '.$UI_CW_Type);
DEFINE('_QCERRSPECFIELD',' was entered for a protocol field, but the particular field was not specified.');
DEFINE('_QCERRSPECVALUE','was selected indicating that it should be a criteria, but no value was specified on which to match.');
DEFINE('_QCERRBOOLEAN','Multiple protocol field criteria entered without a boolean operator (e.g. AND, OR) between them.');
DEFINE('_QCERRDATEVALUE','was selected indicating that some date/time criteria should be matched, but no value was specified.');
DEFINE('_QCERRINVHOUR','(Invalid Hour) No date criteria were entered with the specified time.');
DEFINE('_QCERRDATECRIT','was selected indicating that some date/time criteria should be matched, but no value was specified.');
DEFINE('_QCERROPERSELECT','was entered but no operator was selected.');
DEFINE('_QCERRDATEBOOL','Multiple Date/Time criteria entered without a boolean operator (e.g. AND, OR) between them.');
DEFINE('_QCERRPAYCRITOPER','was entered for a payload criteria field, but an operator (e.g. has, has not) was not specified.');
DEFINE('_QCERRPAYCRITVALUE','was selected indicating that payload should be a criteria, but no value on which to match was specified.');
DEFINE('_QCERRPAYBOOL','Multiple Data payload criteria entered without a boolean operator (e.g. AND, OR) between them.');
DEFINE('_QCMETACRIT','Meta Criteria');
DEFINE('_QCIPCRIT','IP Criteria');
DEFINE('_QCLAYER4CRIT','Layer 4 Criteria'); //NEW
DEFINE('_QCPAYCRIT','Payload Criteria');
DEFINE('_QCTCPCRIT','TCP Criteria');
DEFINE('_QCUDPCRIT','UDP Criteria');
DEFINE('_QCICMPCRIT','ICMP Criteria');
DEFINE('_QCERRINVIPCRIT','Invalid IP address criteria');
DEFINE('_QCERRCRITADDRESSTYPE','was entered for as a criteria value, but the '.$UI_CW_Type.' of address (e.g. source, destination) was not specified.');
DEFINE('_QCERRCRITIPADDRESSNONE','indicating that an IP address should be a criteria, but no address on which to match was specified.');
DEFINE('_QCERRCRITIPADDRESSNONE1','was selected (at #');
DEFINE('_QFRMSORTNONE','none'); //NEW
DEFINE('_QCERRCRITIPIPBOOL','Multiple IP address criteria entered without a boolean operator (e.g. AND, OR) between IP Criteria');

//base_qry_form.php
DEFINE('_QFRMSORTORDER','Sortering');
DEFINE('_QFRMTIMEA','tid (stigende)');
DEFINE('_QFRMTIMED','tid (synkende)');
DEFINE('_QFRMSIG','signatur');
DEFINE('_QFRMSIP','kilde IP');
DEFINE('_QFRMDIP','dest. IP');

//base_qry_sqlcalls.php
DEFINE('_QSCSUMM','Sammenlagt statistikk');
DEFINE('_QSCTIMEPROF','Tidsprofil');
DEFINE('_QSCOFALERTS','hendelser');

//base_stat_alerts.php
DEFINE('_ALERTTITLE','Hendelseliste');

//base_stat_common.php
DEFINE('_SCCATEGORIES','Kategorier:');
DEFINE('_SCSENSORTOTAL','Sensorer/'.$UI_CW_Total.':');
DEFINE('_SCTOTALNUMALERTS',$UI_CW_Total.' antall hendelser:');
DEFINE('_SCSRCIP','Kilde IP addr:');
DEFINE('_SCDSTIP','Dest. IP addr:');
DEFINE('_SCUNILINKS','Unike IP linker');
DEFINE('_SCSRCPORTS','Kildeporter: ');
DEFINE('_SCDSTPORTS','Dest.porter: ');
DEFINE('_SCSENSORS','Sensorer');
DEFINE('_SCCLASS','klassifiseringer');
DEFINE('_SCUNIADDRESS','Unike adresser: ');
DEFINE('_SCSOURCE','Kilde');
DEFINE('_SCDEST','Destinasjon');
DEFINE('_SCPORT','Port');

//base_stat_ipaddr.php
DEFINE('_PSEVENTERR','PORTSCAN HENDELSE FEIL: ');
DEFINE('_PSEVENTERRNOFILE','Ingen fil var oppgitt i $portscan_file variabelen.');
DEFINE('_PSEVENTERROPENFILE','Unable to open Portscan event file');
DEFINE('_PSDATETIME','Dato/Tid');
DEFINE('_PSSRCIP','Kilde IP');
DEFINE('_PSDSTIP','Destinasjon IP');
DEFINE('_PSSRCPORT','Kildeport');
DEFINE('_PSDSTPORT','Destinasjonsport');
DEFINE('_PSTCPFLAGS','TCP flagg');
DEFINE('_PSTOTALOCC','Hendelser<BR> '.$UI_CW_Total);
DEFINE('_PSNUMSENSORS','Antall sensorer');
DEFINE('_PSFIRSTOCC',$UI_CW_First.'<BR> hendelse');
DEFINE('_PSLASTOCC',$UI_CW_Last.'<BR> hendelse');
DEFINE('_PSUNIALERTS','Unike hendelser');
DEFINE('_PSPORTSCANEVE','Portscan hendelser');
DEFINE('_PSREGWHOIS','Oppslag (whois) i');
DEFINE('_PSNODNS','ingen DNS oppslag utfrt');
DEFINE('_PSTOTALHOSTS',$UI_CW_Total.' Hosts Scanned'); //NEW
DEFINE('_PSDETECTAMONG','%d unique alerts detected among %d alerts on %s'); //NEW
DEFINE('_PSALLALERTSAS','all alerts with %s/%s as'); //NEW
DEFINE('_PSSHOW','show'); //NEW
DEFINE('_PSEXTERNAL','external'); //NEW
DEFINE('_PSNUMSENSORSBR','Antall <BR>sensorer');
DEFINE('_PSOCCASSRC','Hendelser <BR>som kilde');
DEFINE('_PSOCCASDST','Hendelser <BR>som dest.');
DEFINE('_PSWHOISINFO','WHOIS informasjon');

//base_stat_iplink.php
DEFINE('_SIPLTITLE','IP Links');
DEFINE('_SIPLSOURCEFGDN','Source FQDN');
DEFINE('_SIPLDESTFGDN','Destination FQDN');
DEFINE('_SIPLDIRECTION','Direction');
DEFINE('_SIPLPROTO','Protocol');
DEFINE('_SIPLUNIDSTPORTS','Unique Dst Ports');
DEFINE('_SIPLUNIEVENTS','Unique Events');
DEFINE('_SIPLTOTALEVENTS',$UI_CW_Total.' Events');

//base_stat_ports.php
DEFINE('_UNIQ','Unike');
DEFINE('_DSTPS','destinasjonsport(er)');
DEFINE('_SRCPS','kildeport(er)');
DEFINE('_OCCURRENCES','Occurrences'); //NEW

//base_stat_sensor.php
DEFINE('SPSENSORLIST','Sensorliste');

//base_stat_time.php
DEFINE('_BSTTITLE','Time Profile of Alerts');
DEFINE('_BSTTIMECRIT','Time Criteria');
DEFINE('_BSTERRPROFILECRIT','<FONT><B>No profiling criteria was specified!</B>  Click on "hour", "day", or "month" to choose the granularity of the aggregate statistics.</FONT>');
DEFINE('_BSTPROFILEBY','Profile by'); //NEW
DEFINE('_TIMEON','on'); //NEW
DEFINE('_TIMEBETWEEN','between'); //NEW
DEFINE('_PROFILEALERT','Profile Alert'); //NEW
DEFINE('_BSTERRTIMETYPE','<FONT><B>The '.$UI_CW_Type.' of time parameter which will be passed was not specified!</B>  Choose either "on", to specify a single date, or "between" to specify an interval.</FONT>');
DEFINE('_BSTERRNOYEAR','<FONT><B>No Year parameter was specified!</B></FONT>');
DEFINE('_BSTERRNOMONTH','<FONT><B>No Month parameter was specified!</B></FONT>');
DEFINE('_BSTERRNODAY','<FONT><B>No Day parameter was specified!</B></FONT>');

//base_stat_uaddr.php
DEFINE('_UNISADD','Unik(e) kildeadress(er)');
DEFINE('_SUASRCIP','Kilde IP adresse');
DEFINE('_SUAERRCRITADDUNK','FEIL KRITERIE: ukjent adresse'.$UI_CW_Type.' -- benytter destinasjons adresse');
DEFINE('_UNIDADD','Unik(e) destinasjonsadress(er)');
DEFINE('_SUADSTIP','Dest. IP adresse');
DEFINE('_SUAUNIALERTS','Unike&nbsp;hendelser');
DEFINE('_SUASRCADD','Kilde&nbsp;Adr.');
DEFINE('_SUADSTADD','Dest.&nbsp;Adr.');

//base_user.php
DEFINE('_BASEUSERTITLE','BASE Brukerpreferanser');
DEFINE('_BASEUSERERRPWD',$UI_CW_Pw.'et kan ikke være blankt, eller '.strtolower($UI_CW_Pw).'ene du oppgav var ikke like!');
DEFINE('_BASEUSEROLDPWD','Gammelt '.strtolower($UI_CW_Pw).':');
DEFINE('_BASEUSERNEWPWD','Nytt '.strtolower($UI_CW_Pw).':');
DEFINE('_BASEUSERNEWPWDAGAIN','Nytt '.strtolower($UI_CW_Pw).' igjen:');

DEFINE('_LOGOUT','Logout');
?>
