<?php
/* $Id: serbian_cyrillic-windows-1251.inc.php,v 1.4.2.1 2003/08/18 10:44:09 nijel Exp $ */

/**
 * Translated by:
 *     Igor Mladenovic <mligor@zimco.com>, David Trajkovic <tdavid@ptt.yu>
 *     Mihailo Stefanovic <mst@mikis.org>, Branislav Jovanovic <fangorn@eunet.yu>
 */

$charset = 'windows-1251';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('������', '��', '��', '��', '��', '��', '��');

$day_of_week = array('���', '���', '���', '���', '���', '���', '���');
$month = array('���', '���', '���', '���', '��', '���', '���', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B %Y. � %H:%M';
$timespanfmt = '%s ����, %s ����, %s ������ � %s �������';

$strAPrimaryKey = '�������� ��� �� ������ ����� %s';
$strAbortedClients = '���������';
$strAbsolutePathToDocSqlDir = '������� ��������� ������ �� ������������ docSQL �� ��� �������';
$strAccessDenied = '������� ������';
$strAccessDeniedExplanation = 'phpMyAdmin �� ������� �� �� ������ �� MySQL ������, ��� �� ������ ����� ����������. ��������� ����� ��������, ���������� ��� � ������� � config.inc.php � ������� �� �� ��������� �������� ��� ��� ������ �� �������������� MySQL �������.';
$strAction = '�����';
$strAddAutoIncrement = '���� AUTO_INCREMENT ��������';
$strAddDeleteColumn = '����/������ ������';
$strAddDeleteRow = '����/������ ��� �� ���������';
$strAddDropDatabase = '���� DROP DATABASE';
$strAddIntoComments = '���� � ���������';
$strAddNewField = '���� ���� ���';
$strAddPriv = '���� ���� ����������';
$strAddPrivMessage = '������ ��� ���� ����������.';
$strAddPrivilegesOnDb = '���� ���������� �� ������ ����';
$strAddPrivilegesOnTbl = '���� ���������� �� ������ ������';
$strAddSearchConditions = '���� ������ ������������ (��� "WHERE" �����):';
$strAddToIndex = '���� � ��� &nbsp;%s&nbsp;������(�)';
$strAddUser = '���� ����� ���������';
$strAddUserMessage = '������ ��� ����� ���������.';
$strAddedColumnComment = '����� �� �������� ������';
$strAddedColumnRelation = '������ �� ������� ������';
$strAdministration = '�������������';
$strAffectedRows = '���������� ������:';
$strAfter = '����� %s';
$strAfterInsertBack = '����� �� ��������� ������';
$strAfterInsertNewInsert = '���� ��� ����� ���� ���';
$strAll = '���';
$strAllTableSameWidth = '������ ���� ������ ���� ������?';
$strAlterOrderBy = '������� �������� � ������';
$strAnIndex = 'ʚ�� �� ������ ����� %s';
$strAnalyzeTable = '��������� ������';
$strAnd = '�';
$strAny = '���� ���';
$strAnyColumn = '���� ��� ������';
$strAnyDatabase = '���� ��� ���� ��������';
$strAnyHost = '���� ��� �������';
$strAnyTable = '���� ��� ������';
$strAnyUser = '���� ��� ��������';
$strArabic = '�������';
$strArmenian = '���������';
$strAscending = '������';
$strAtBeginningOfTable = '�� ������� ������';
$strAtEndOfTable = '�� ���� ������';
$strAttr = '��������';
$strAutodetect = '����������';
$strAutomaticLayout = '���������� ��������';

$strBack = '�����';
$strBaltic = '��������';
$strBeginCut = '������� ���';
$strBeginRaw = '������� ������';
$strBinary = '�������';
$strBinaryDoNotEdit = '������� - �� ���';
$strBookmarkDeleted = '���������� �� ������ �������.';
$strBookmarkLabel = '�����';
$strBookmarkQuery = '�������� SQL-����';
$strBookmarkThis = '������� SQL-����';
$strBookmarkView = '���� ����';
$strBrowse = '�������';
$strBrowseForeignValues = '�������� ������ ���������';
$strBulgarian = '��������';
$strBzError = 'phpMyAdmin ��� ����� �� ��������� ������ ���� ���� ���������� BZ2 ��������� � ��� ������ PHP-�. ���������� �� �� �������� <code>$cfg[\'BZipDump\']</code> ��������� � ����� phpMyAdmin ��������������� ���� �� <code>FALSE</code>. ��� ������ �� ��������� ��������� BZ2 ���������, ������� �� �� ������ �� ����� ������ PHP-�. ������ PHP ������� � �������� %s �� ������.';
$strBzip = '"����-�����"';

$strCSVOptions = 'CSV �����';
$strCannotLogin = '�� ���� �� �� ������� �� MySQL ������';
$strCantLoad = '�� ���� �� ������ ��������� %s,<br />����� ��������� PHP ������������';
$strCantLoadMySQL = '�� ���� �� ������ MySQL ���������,<br /> ����� ��������� PHP ������������.';
$strCantLoadRecodeIconv = '�� ���� �� ������ iconv ��� recode ��������� �������� �� ��������� ������� �������, �������� PHP �� ������� �������� ���� ��������� ��� ���������� ��������� ������� ������� � phpMyAdmin-�.';
$strCantRenameIdxToPrimary = '�� ���� �� �������� ��� � PRIMARY (��������) !';
$strCantUseRecodeIconv = '�� ���� �� �������� iconv ��� libiconv ��� recode_string ������� ���� ��������� ������� �� �� �������. ��������� ���� PHP ������������.';
$strCardinality = '������������';
$strCarriage = '���� ��� (carriage return): \\r';
$strCaseInsensitive = '�� �������� ���� � ������ �����';
$strCaseSensitive = '�������� ���� � ������ �����';
$strCentralEuropean = '�����������������';
$strChange = '�������';
$strChangeCopyMode = '������� ����� ��������� �� ����� ������������ � ...';
$strChangeCopyModeCopy = '... ������ �����.';
$strChangeCopyModeDeleteAndReload = ' ... ������ ������ �� ������ ��������� � ����� ������ ����� ����������.';
$strChangeCopyModeJustDelete = ' ... ������ ����� �� ������ ���������.';
$strChangeCopyModeRevoke = ' ... �������� ��� ���������� ������ ��������� � ����� �� ������.';
$strChangeCopyUser = '������� ���������� � ������ / ������ ���������';
$strChangeDisplay = '������� ��� �� ������';
$strChangePassword = '������� �������';
$strCharset = '�������� ���';
$strCharsetOfFile = '�������� ��� ��������:';
$strCharsets = '����� ������';
$strCharsetsAndCollations = '�������� ������ � ���������';
$strCheckAll = '������ ���';
$strCheckDbPriv = '������� ���������� ���� ��������';
$strCheckPrivs = '������� ����������';
$strCheckPrivsLong = '������� ���������� �� ���� &quot;%s&quot;.';
$strCheckTable = '������� ������';
$strChoosePage = '��������� ������ ��� �����';
$strColComFeat = '��������� ��������� ������';
$strCollation = '���������';
$strColumn = '������';
$strColumnNames = '����� ������';
$strColumnPrivileges = '���������� ������ �� ������';
$strCommand = '�������';
$strComments = '���������';
$strCompleteInserts = '��������� INSERT (�� ������� ���)';
$strCompression = '���������';
$strConfigFileError = 'phpMyAdmin ��� ����� �� ������� ��� �������������� ���!<br />��� �� ���� ������� ��� PHP ���� ������ � ����������� ��� �� ���� �� ������� ���.<br />�������� �������������� ��� �������� �������� ��� ���� � ��������� ������ � ������ ��� �������. � ����� �������� ����� �������� �������� ��� �����-�����.<br />��� ������� ������ ������, ��� �� � ����.';
$strConfigureTableCoord = '�������� ���������� �� ������ %s';
$strConfirm = '�� �� ������� ������ �� �� �������?';
$strConnections = '��������';
$strCookiesRequired = '������� (Cookies) ����� � ���� ������ ���� �������.';
$strCopyTable = '������ ������ � (����<b>.</b>������):';
$strCopyTableOK = '������ %s �� �������� � %s.';
$strCopyTableSameNames = '�� ���� �� ������� ������ � ���� ����!';
$strCouldNotKill = 'phpMyAdmin ��� ����� �� ������� ������ %s. ��������� �� �� ��������.';
$strCreate = '�������';
$strCreateIndex = '������� ��� ��&nbsp;%s&nbsp;������';
$strCreateIndexTopic = '������� ���� ���';
$strCreateNewDatabase = '������� ���� ���� ��������';
$strCreateNewTable = '������� ���� ������ � ���� %s';
$strCreatePage = '������� ���� ������';
$strCreatePdfFeat = '������ PDF-ova';
$strCriteria = '���������';
$strCroatian = '��������';
$strCyrillic = '���������';
$strCzech = '�����';

$strDBComment = '�������� ����:';
$strDBGContext = '��������';
$strDBGContextID = '�������� ��';
$strDBGHits = '��������';
$strDBGLine = '�����';
$strDBGMaxTimeMs = 'Max �����, ��';
$strDBGMinTimeMs = '��� �����, ��';
$strDBGModule = '�����';
$strDBGTimePerHitMs = '�����/�������, ��';
$strDBGTotalTimeMs = '������ �����, ��';
$strDanish = '������';
$strData = '������';
$strDataDict = '������ ��������';
$strDataOnly = '���� ������';
$strDatabase = '���� ��������';
$strDatabaseExportOptions = '����� �� ����� ����';
$strDatabaseHasBeenDropped = '���� %s �� ��������.';
$strDatabaseNoTable = '���� �� ������ ������!';
$strDatabaseWildcard = '���� (����� ����� ��������):';
$strDatabases = '����';
$strDatabasesDropped = '%s ���� �� ������� ��������.';
$strDatabasesStats = '���������� ����';
$strDatabasesStatsDisable = '������ ����������';
$strDatabasesStatsEnable = '����� ����������';
$strDatabasesStatsHeavyTraffic = '��������: ��������� ���������� ���� ������������� ������ �������� ����� ��� � MySQL �������.';
$strDbPrivileges = '���������� ������ �� ����';
$strDbSpecific = '���������� �� ����';
$strDefault = '�������������';
$strDefaultValueHelp = '�� ������������� ��������, ������� ���� ����� ��������, ��� ����� ���� ��� ��������� � ���� ������: �';
$strDelOld = '�������� ������ ��� ��������� �� ������ ��� ���� �� ������. ������ �� �� �������� �� ���������?';
$strDelete = '������';
$strDeleteAndFlush = '������ ��������� � ������ ����� ����������.';
$strDeleteAndFlushDescr = '��� �� �������� �����, ��� ������� ��������� ����������� ���� �� ������.';
$strDeleteFailed = '������� ��� ������!';
$strDeleteUserMessage = '������ ��� �������� ���������: %s.';
$strDeleted = '��� �� �������';
$strDeletedRows = '�������� ������:';
$strDeleting = '������ %s';
$strDescending = '�������';
$strDescription = '����';
$strDictionary = '������';
$strDisabled = '����������';
$strDisplay = '�������';
$strDisplayFeat = '������� �������';
$strDisplayOrder = '�������� �������:';
$strDisplayPDF = '������� PDF �����';
$strDoAQuery = '������� "���� �� �������" (�����: "%")';
$strDoYouReally = '�� �� ������� ����� �� ';
$strDocu = '������������';
$strDrop = '������';
$strDropDB = '������ ���� %s';
$strDropSelectedDatabases = '������ �������� ����';
$strDropTable = '������ ������';
$strDropUsersDb = '������ ���� ��� �� ���� ���� ��� ���������.';
$strDumpComments = '����� ��������� ������ ��� ��������� ������ SQL-a';
$strDumpSaved = '������ ���� �� ������� � ��� %s.';
$strDumpXRows = '������� %s ������ ������� �� ���� %s.';
$strDumpingData = '������ �������� ������';
$strDynamic = '���������';

$strEdit = '�������';
$strEditPDFPages = '������ PDF ������';
$strEditPrivileges = '������� ����������';
$strEffective = '���������';
$strEmpty = '��������';
$strEmptyResultSet = 'MySQL �� ������ ������ �������� (���� ������).';
$strEnabled = '��������';
$strEnd = '���';
$strEndCut = '���� ���';
$strEndRaw = '���� ������';
$strEnglish = '��������';
$strEnglishPrivileges = ' ��������: MySQL ����� ���������� ����� �� ���� �� ��������� ';
$strError = '������';
$strEstonian = '��������';
$strExcelOptions = 'Excel �����';
$strExecuteBookmarked = '������ ������ ����';
$strExplain = '������ SQL';
$strExport = '�����';
$strExportToXML = '����� � XML ������';
$strExtendedInserts = '��������� INSERT';
$strExtra = '�������';

$strFailedAttempts = '��������� �������';
$strField = '���';
$strFieldHasBeenDropped = '��� %s �� ��������';
$strFields = '���';
$strFieldsEmpty = ' ��� ��� �� ����! ';
$strFieldsEnclosedBy = '��� ���������� ��';
$strFieldsEscapedBy = '����� �������� &nbsp; &nbsp; &nbsp;';
$strFieldsTerminatedBy = '��� ��������� ��';
$strFileAlreadyExists = '�������� %s �� ������ �� �������, ��������� ��� �������� ��� ������� ����� �����������.';
$strFileCouldNotBeRead = '�������� ��� ����� ���������';
$strFileNameTemplate = '������ ����� ��������';
$strFileNameTemplateHelp = '������� __DB__ �� ��� ����, __TABLE__ �� ��� ������  � %s���� ��� strftime%s ����� �� ������������ �������, � ��������� �� ���������� ���� ������. ��� ������ ����� ��� �������.';
$strFileNameTemplateRemember = '������� ������';
$strFixed = '������';
$strFlushPrivilegesNote = '��������: phpMyAdmin ����� ���������� ��������� �������� �� MySQL ������ ����������. ������ ��� ������ ���� �� ����������� �� ���������� ��� ������ ������� ��� �� ������ ����� ������. � ��� ������ %s������ ������� ����������%s ��� ���� ��� ���������.';
$strFlushTable = '������ ������ ("FLUSH")';
$strFormEmpty = '�������� �������� � �������!';
$strFormat = '������';
$strFullText = '��� �����';
$strFunction = '�������';

$strGenBy = '���������';
$strGenTime = '����� ��������';
$strGeneralRelationFeat = '����� ������� �������';
$strGerman = '�������';
$strGlobal = '��������';
$strGlobalPrivileges = '�������� ����������';
$strGlobalValue = '�������� ��������';
$strGo = '�����';
$strGrantOption = '������';
$strGrants = '������';
$strGreek = '�����';
$strGzip = '"����-�����"';

$strHasBeenAltered = '�� �������(�).';
$strHasBeenCreated = '�� �������(�).';
$strHaveToShow = '������ �������� ��� ����� ������ �� ������';
$strHebrew = '��������';
$strHome = '������� ������';
$strHomepageOfficial = 'phpMyAdmin ��� ���';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download ��������';
$strHost = '�������';
$strHostEmpty = '��� �������� �� ������!';
$strHungarian = '��������';

$strId = 'ID';
$strIdxFulltext = '����� ���';
$strIfYouWish = '��� ������ �� ��������� ���� ���� ������ � ������, �������� �� ��������� �������';
$strIgnore = '��������';
$strIgnoringFile = '��������� ��� %s';
$strImportDocSQL = '���� docSQL ������';
$strImportFiles = '���� ������';
$strImportFinished = '���� �������';
$strInUse = '�� �������';
$strIndex = 'ʚ��';
$strIndexHasBeenDropped = 'ʚ�� %s �� �������';
$strIndexName = '��� ���� :';
$strIndexType = '��� ���� :';
$strIndexes = 'ʚ�����';
$strInnodbStat = 'InnoDB ������';
$strInsecureMySQL = '��� �������������� ��� ������ ���������� (root ��� �������) ��� ��������� ����������� MySQL �������������� ������. ��� MySQL ������ ���� �� ���� ������������, ������� �� �� �����, � ������ ����� �� ��������� ��� ���������� �����.';
$strInsert = '���� �����';
$strInsertAsNewRow = '����� ��� ���� ���';
$strInsertNewRow = '����� ���� ���';
$strInsertTextfiles = '����� ������� �� ���������� ��������';
$strInsertedRowId = 'ID ��������� ������:';
$strInsertedRows = '������� ������:';
$strInstructions = '��������';
$strInvalidName = '"%s" �� ����������� ���, \n�� ������ �� ��������� ��� ��� ���, ������ ��� ����.';

$strJapanese = '��������';
$strJumpToDB = '���� �� ���� &quot;%s&quot;.';
$strJustDelete = '���� ������ ��������� �� ������ ����������.';
$strJustDeleteDescr = '&quot;��������&quot; ��������� �� � ���� ����� ������� ������� ��� ���������� �� ���� ������ �������.';

$strKeepPass = '���� �� ���� �������';
$strKeyname = '��� ����';
$strKill = '��������';
$strKorean = '�������';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX �����';
$strLandscape = '��������';
$strLength = '������';
$strLengthSet = '������/��������*';
$strLimitNumRows = '��� ������ �� ������';
$strLineFeed = '������ �� ��� �����: \\n';
$strLines = '�����';
$strLinesTerminatedBy = '����� �� ��������� ��';
$strLinkNotFound = '���� ��� ���������';
$strLinksTo = '���� ��';
$strLithuanian = '���������';
$strLoadExplanation = '����� ����� �� �� �������, ��� �� ������ ��������� ��� �� ����.';
$strLoadMethod = 'LOAD �����';
$strLocalhost = '�������';
$strLocationTextfile = '������� ���������� ��������';
$strLogPassword = '�������:';
$strLogUsername = '���������� ���:';
$strLogin = '����������';
$strLoginInformation = '������ � ������';
$strLogout = '���������';

$strMIME_MIMEtype = 'MIME-������';
$strMIME_available_mime = '�������� MIME-������';
$strMIME_available_transform = '�������� �������������';
$strMIME_description = '����';
$strMIME_file = '��� ��������';
$strMIME_nodescription = '���� ����� �� ��� �������������.<br />������ ������ ������ ��� %s ����.';
$strMIME_transformation = '������������ ������';
$strMIME_transformation_note = '�� ����� ��������� ����� ������������� � ������ ������������� MIME-������, �������� �� %s����� �������������%s';
$strMIME_transformation_options = '����� �������������';
$strMIME_transformation_options_note = '������ ������� ��������� �� ����� ������������� �������� ��� �����: \'a\',\'b\',\'c\'...<br />��� ����� �� ������� ������� ���� ���� ("\\") ��� �������� ("\'") � �� ���������, ������� ������� ���� ���� ������ ��� (�� ������ \'\\\\xyz\' ��� \'a\\\'b\').';
$strMIME_without = 'MIME-������ ��������� � ������� ����� ������� ������� �������������.';
$strMissingBracket = '�������� �������';
$strModifications = '������ �� ��������';
$strModify = '�������';
$strModifyIndexTopic = '������ ���';
$strMoreStatusVars = '��� ��������� ����������';
$strMoveTable = '������ ������ � (����<b>.</b>������):';
$strMoveTableOK = '������ %s �� �������� � %s.';
$strMoveTableSameNames = '�� ���� �� ��������� ������ � ���� ����!';
$strMultilingual = '����������';
$strMustSelectFile = '������ �������� �������� ��� ������ �� ��������.';
$strMySQLCharset = 'MySQL ��� ���������';
$strMySQLReloaded = 'MySQL ������ ��������.';
$strMySQLSaid = 'MySQL ����: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �������� �� %pma_s2%, ������� ��� %pma_s3%';
$strMySQLShowProcess = '������� ����� �������';
$strMySQLShowStatus = '������� MySQL ���������� � ���� ����';
$strMySQLShowVars = '������� MySQL ��������� ���������';

$strName = '���';
$strNext = '������';
$strNo = '��';
$strNoDatabases = '���� �� ������';
$strNoDatabasesSelected = '��� �������� �� ����� ����.';
$strNoDescription = '���� �����';
$strNoDropDatabases = '"DROP DATABASE" ������� �� ����������.';
$strNoExplain = '�������� ���������� SQL-a';
$strNoFrames = 'phpMyAdmin ��������� ������ ��� ��������� ������.';
$strNoIndex = 'ʚ�� ��� ���������!';
$strNoIndexPartsDefined = '������ ���� ���� ����������!';
$strNoModification = '���� ������';
$strNoOptions = '�� ������ ����� �� ��� ������';
$strNoPassword = '���� �������';
$strNoPermission = '��� ������� ��� �������� �� ������ �������� %s.';
$strNoPhp = '��� PHP ����';
$strNoPrivileges = '���� ����������';
$strNoQuery = '���� SQL �����!';
$strNoRights = '��� ��� �������� �� ������ ����!';
$strNoSpace = '�������� �������� �� ������� �������� %s.';
$strNoTablesFound = '������ ���� ��������� � ����.';
$strNoUsersFound = '�������� ��� �����.';
$strNoUsersSelected = '�������� ��� �������.';
$strNoValidateSQL = '�������� ������� SQL-a';
$strNone = '����';
$strNotNumber = '��� ��� ���!';
$strNotOK = '��� � ����';
$strNotSet = '<b>%s</b> ������ ��� ��������� ��� ��� ��������� � %s';
$strNotValidNumber = '��� ���������� ��� ������!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s �������� ������ ������ <i>%s</i>';
$strNumSearchResultsTotal = '<b>������:</b> <i>%s</i> ��������';
$strNumTables = '������';

$strOK = '� ����';
$strOftenQuotation = '��������� ��� �� �������. ������� �� ����� �� ���� ��� ����, ��� �� ����� �� ���� ��� ������� ������.';
$strOperations = '��������';
$strOptimizeTable = '�������� ������';
$strOptionalControls = '�������. ���� ��� �������� ���������� �������.';
$strOptionally = '�������';
$strOptions = '�����';
$strOr = '���';
$strOverhead = '����������';
$strOverwriteExisting = '������� ������� ������';

$strPHP40203 = '��������� PHP 4.2.3, ��� ��� ������ ��� �� ���������� ����������� (mbstring). ��������� ������� � ������ ��. 19404. ��� ������ PHP-a �� �� ���������� �� �������� �� phpMyAdmin.';
$strPHPVersion = '������ PHP-a';
$strPageNumber = '��� ������:';
$strPaperSize = '�������� ������';
$strPartialText = '��� ������';
$strPassword = '�������';
$strPasswordChanged = '������� �� %s �� ������� ��������.';
$strPasswordEmpty = '������� �� ������!';
$strPasswordNotSame = '������� ���� ���������!';
$strPdfDbSchema = '����� ���� "%s" - ������ %s';
$strPdfInvalidPageNum = '����������� ��� PDF ������!';
$strPdfInvalidTblName = '������ "%s" �� ������!';
$strPdfNoTables = '���� ������';
$strPerHour = '�� ���';
$strPerMinute = '� ������';
$strPerSecond = '� �������';
$strPhoneBook = '���������� ������';
$strPhp = '������� PHP ���';
$strPmaDocumentation = 'phpMyAdmin ������������';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> ��������� ���� ���� �������� � �������������� ��������!';
$strPortrait = '��������';
$strPos1 = '�������';
$strPrevious = '���������';
$strPrimary = '��������';
$strPrimaryKey = '�������� ���';
$strPrimaryKeyHasBeenDropped = '�������� ��� �� �������';
$strPrimaryKeyName = '��� ��������� ���� ���� �� ����... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>����</b> ���� ��� <b>����</b> ��������� ����!)';
$strPrint = '������';
$strPrintView = '�� ������';
$strPrivDescAllPrivileges = '������ ��� ���������� ���� GRANT.';
$strPrivDescAlter = '�������� ������ ��������� �������� ������.';
$strPrivDescCreateDb = '�������� �������� ����� ���� � ������.';
$strPrivDescCreateTbl = '�������� �������� ����� ������.';
$strPrivDescCreateTmpTable = '�������� �������� ����������� ������..';
$strPrivDescDelete = '�������� ������� ��������.';
$strPrivDescDropDb = '�������� ���������� ���� � ������.';
$strPrivDescDropTbl = '�������� ���������� ������.';
$strPrivDescExecute = '�������� ��������� ��������� ���������. ���� ������ � ��� ������ MySQL-a.';
$strPrivDescFile = '�������� ���� �������� � ����� ����� � ��������.';
$strPrivDescGrant = '�������� �������� ��������� � ���������� ��� �������� ��������� ������ ����������.';
$strPrivDescIndex = '�������� �������� � ������� ������.';
$strPrivDescInsert = '�������� ������� � ������ ��������.';
$strPrivDescLockTables = '�������� ���������� ������ ������ ���������.';
$strPrivDescMaxConnections = '���������� ��� ����� �������� ��� �������� ���� �� ������ �� ���.';
$strPrivDescMaxQuestions = '���������� ��� ����� ��� �������� ���� �� ����� ������� �� ���.';
$strPrivDescMaxUpdates = '���������� ��� ������� ��� ���� ������ ��� ���� ��� �������� ���� �� ������ �� ���.';
$strPrivDescProcess3 = '�������� ��������� ������� ������ ���������.';
$strPrivDescProcess4 = '�������� ������� ���������� ����� � ����� �������.';
$strPrivDescReferences = '���� ������ � ��� ������ MySQL-a.';
$strPrivDescReload = '�������� ������� ��������� ���������� ������� � ������ ���� �������.';
$strPrivDescReplClient = '��� ����� ��������� �� ���� ��� �� ������/������ �������.';
$strPrivDescReplSlave = '�������� ���� ������� ������� �� ����������.';
$strPrivDescSelect = '�������� ������ ��������.';
$strPrivDescShowDb = '��� ������� ��������� ����� ����.';
$strPrivDescShutdown = '�������� ����� �������.';
$strPrivDescSuper = ' �������� ���������� ���� �� ��������� ���������� ��� ��������� ����; ��������� �� ����� ���������������� ����� ��� ��� �� ���������� ��������� ���������� ��� ��������� ������� ������� ���������.';
$strPrivDescUpdate = '�������� ������ ��������.';
$strPrivDescUsage = '���� ����������.';
$strPrivileges = '����������';
$strPrivilegesReloaded = '���������� �� ������� ������ �������.';
$strProcesslist = '����� �������';
$strProperties = '�������';
$strPutColNames = '����� ����� ��� � ���� ���';

$strQBE = '���� �� �������';
$strQBEDel = 'Del';
$strQBEIns = 'Ins';
$strQueryFrame = '������ �� �����';
$strQueryFrameDebug = 'Debugging ����������';
$strQueryFrameDebugBox = '������� ��������� �� �������� �� ������:\n��: %s\n������: %s\n������: %s\n\n�������� ��������� �� �������� �� ������:\n��: %s\n������: %s\n������: %s\n\n������� �� ��� �� ��������: %s\n������� ������: %s.';
$strQueryOnDb = 'SQL ���� �� ���� <b>%s</b>:';
$strQuerySQLHistory = 'SQL ��������';
$strQueryStatistics = '<b>���������� �����</b>: %s ����� �� ��������� ������� �� ������� ���������.';
$strQueryTime = '���� �� ����� %01.4f �������';
$strQueryType = '����� �����';
$strQueryWindowLock = '�� ������� ��� ���� ����� �������';

$strReType = '�������� ����';
$strReceived = '�������';
$strRecords = '������';
$strReferentialIntegrity = '������� ������������� ����������:';
$strRelationNotWorking = '������� ��������� �� ��� �� ��������� �������� �� ��������. �� ����� ������� �����, �������� %s����%s.';
$strRelationView = '��������� ������';
$strRelationalSchema = '��������� �����';
$strRelations = '�������';
$strReloadFailed = '������� ��������� MySQL-a ��� ������.';
$strReloadMySQL = '������ ������� MySQL';
$strReloadingThePrivileges = '������ �������� ����������';
$strRememberReload = '�� ���������� �� ������ ��������� ������.';
$strRemoveSelectedUsers = '������ �������� ���������';
$strRenameTable = '������� ��� ������ � ';
$strRenameTableOK = '������ %s �������� ��� � %s';
$strRepairTable = '������� ������';
$strReplace = '������';
$strReplaceNULLBy = '������ NULL ��';
$strReplaceTable = '������ ������� � ������ �� �������� �� ��������';
$strReset = '������';
$strResourceLimits = '��������� �������';
$strRevoke = '�������';
$strRevokeAndDelete = '�������� ��� ������� ���������� ��������� � ����� �� ������.';
$strRevokeAndDeleteDescr = '��������� �� � ���� ����� USAGE ���������� ��� �� ���������� ������ �� ������.';
$strRevokeGrant = '������� GRANT';
$strRevokeGrantMessage = '��������� ��� GRANT ���������� ��  %s';
$strRevokeMessage = '��������� ��� ���������� �� %s';
$strRevokePriv = '������� ����������';
$strRowLength = '������ ����';
$strRowSize = '�������� ����';
$strRows = '������';
$strRowsFrom = ' ������ ����� �� ����';
$strRowsModeFlippedHorizontal = '������������� (�������� �������)';
$strRowsModeHorizontal = '�������������';
$strRowsModeOptions = '� %s ���� � ������ ������� ����� ������ %s ����';
$strRowsModeVertical = '�����������';
$strRowsStatistic = '���������� ����';
$strRunQuery = '������ SQL ����';
$strRunSQLQuery = '������ SQL ����(�) �� ���� %s';
$strRunning = '�� ������� %s';
$strRussian = '�����';

$strSQL = 'SQL';
$strSQLOptions = 'SQL �����';
$strSQLParserBugMessage = '������ �������� �� ��� �������� ��� � SQL �������. ������ �������� ��� ���� ������, � ��������� �� �� ��������� �������� � �� �� ��������. ������ ����� ������� ������ ���� ���� �� ��� ������� ������� ��� ��� ������� �� ������ �����. ������ ������� ��� ���� � MySQL ��������� �������� �����. ��� ������ � ������ MySQL �������, ��� �� ���, ���� ��� ����� � ��������� ��������. ��� � ���� ����� �������� ��� ��� ������ �� ������ ���� ��� ������ �������� �������� �����, ������� ��� SQL ���� �� ����� ������ ���� ��� ������ �������� � �������� ��� ������� � ������ �� ����� ���� � ��� ��� ������:';
$strSQLParserUserError = '������� �� ������ ������ � ����� SQL �����. ���� �� ������ � ������ MySQL �������, ��� ��� ���� ����� � ��������� ��������';
$strSQLQuery = 'SQL ����';
$strSQLResult = 'SQL ��������';
$strSQPBugInvalidIdentifer = '���������� �������������';
$strSQPBugUnclosedQuote = '�������� ��� ��������';
$strSQPBugUnknownPunctuation = '�������� ������ ������������';
$strSave = '������';
$strSaveOnServer = '������ �� ������ � ����������� %s';
$strScaleFactorSmall = '������ ������ �� ������� �� �� ����� ����� �� ����� ������';
$strSearch = '������������';
$strSearchFormTitle = '������������ ����';
$strSearchInTables = '������ ������:';
$strSearchNeedle = '���� ��� ��������� ��� �� ����� (�����: "%"):';
$strSearchOption1 = '��� ����� �� ����';
$strSearchOption2 = '��� ����';
$strSearchOption3 = '����� �����';
$strSearchOption4 = '��� ��������� �����';
$strSearchResultsFor = '��������� �������� �� "<i>%s</i>" %s:';
$strSearchType = '�����:';
$strSecretRequired = '�������������� �������� ������� ���� ������� (blowfish_secret).';
$strSelect = '��������';
$strSelectADb = '��������� ����';
$strSelectAll = '������� ���';
$strSelectFields = '������� ��� (������ �����)';
$strSelectNumRows = '� �����';
$strSelectTables = '������� ������';
$strSend = '������ ��� ��������';
$strSent = '�������';
$strServer = '������ %s';
$strServerChoice = '����� �������';
$strServerStatus = '���������� � ���� ����';
$strServerStatusUptime = '��� MySQL ������ ���� �� %s. �������� �� %s.';
$strServerTabProcesslist = '�������';
$strServerTabVariables = '���������';
$strServerTrafficNotes = '<b>�������� �������</b>: ������ ������� ���������� ������� ��������� �� ���� MySQL ������� �� ������� ���������.';
$strServerVars = '��������� ��������� � ����������';
$strServerVersion = '������ �������';
$strSessionValue = '�������� �����';
$strSetEnumVal = '��� �� ��� "enum" ��� "set", ������� ��������� � �������: \'a\',\'b\',\'c\'...<br />��� ��� ����� ������� ���� ���� ("\\") ��� �������� ("\'") ��������� �� � "����������" (escaped) ������ (�� ������ \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '�������';
$strShowAll = '������� ���';
$strShowColor = '������� ���';
$strShowCols = '������� ������';
$strShowDatadictAs = '������ ������� ��������';
$strShowFullQueries = '������� ��������� �����';
$strShowGrid = '������� �����';
$strShowPHPInfo = '������� ���������� � PHP-u';
$strShowTableDimension = '������� �������� ������';
$strShowTables = '������� ������';
$strShowThisQuery = '������� ������ ��� ����';
$strShowingRecords = '������ ������';
$strSimplifiedChinese = '������������� �������';
$strSingly = '(�� ������ ���)';
$strSize = '��������';
$strSort = '���������';
$strSpaceUsage = '������';
$strSplitWordsWithSpace = '���� �� ������ �������� (" ").';
$strStatCheckTime = '������� �������';
$strStatCreateTime = '���������';
$strStatUpdateTime = '������� ������';
$strStatement = '���';
$strStatus = '������';
$strStrucCSV = 'CSV ������';
$strStrucData = '��������� � ������';
$strStrucDrop = '���� \'DROP TABLE\'';
$strStrucExcelCSV = 'CSV �� MS Excel';
$strStrucOnly = '���� ���������';
$strStructPropose = '�������� ��������� ������';
$strStructure = '���������';
$strSubmit = '������';
$strSuccess = '��� SQL ���� �� ������� �������';
$strSum = '������';
$strSwedish = '�������';
$strSwitchToTable = '���� �� �������� ������';

$strTable = '������';
$strTableComments = '��������� ������';
$strTableEmpty = '��� ������ �� ������!';
$strTableHasBeenDropped = '������ %s �� ��������';
$strTableHasBeenEmptied = '������ %s �� ���������';
$strTableHasBeenFlushed = '������ %s �� ��������';
$strTableMaintenance = '���� �� ������';
$strTableOfContents = '������';
$strTableOptions = '����� ������';
$strTableStructure = '��������� ������';
$strTableType = '��� ������';
$strTables = '%s ������';
$strTblPrivileges = '���������� ������ �� ������';
$strTextAreaLength = '���� ������ ��������, ���<br />����� ����� ��� �� ��������';
$strThai = '�����';
$strTheContent = '������ �������� �� ����� � ����.';
$strTheContents = '������� �������� � ������ ������ �� �������� �� �������� ��� ���� ��������� �������� � ����������� (unique) ������.';
$strTheTerminator = '��������� ��� � ��������.';
$strThisHost = '��� ������';
$strThisNotDirectory = '��� ��� �����������';
$strThreadSuccessfullyKilled = '������ %s �� ������� ��������.';
$strTime = '�����';
$strToggleScratchboard = '������/������� scratchboard';
$strTotal = '������';
$strTotalUC = '������';
$strTraditionalChinese = '������������� �������';
$strTraffic = '��������';
$strTransformation_image_jpeg__inline = '�������� ������� ����� �� ��� �� ����� ��������; �����: ������, ������ � ��������� (���� ���������� �����)';
$strTransformation_image_jpeg__link = '�������� ���� �� ��� ������ (���. �������� ���������� �� BLOB-�).';
$strTransformation_image_png__inline = '������� JPEG ����� �� ������';
$strTransformation_text_plain__dateformat = '����� TIME, TIMESTAMP ��� DATETIME ��� � ��������� �� �������� ������� ����� ����������� ������. ���� ����� �� ����� (� ������) ��� �� ����� ��������� ������ (�������������: 0). ����� ����� �� �������� ������ ������ ����� ����������� ��� �� �������� �� PHP-ov strftime().';
$strTransformation_text_plain__external = 'SAMO LINUX: ������ �������� ��������� � ������� ������� � ����� ����� ����������� �����. ����� ���������� ����� ���������. ������������� �� Tidy, �� ����� ������ HTML ����. ���� ����������� �������, ������ ����� �������� �������� libraries/transformations/text_plain__external.inc.php � ������ ����� ��� ������ �� ���������. ���� ����� �� ��� �������� ��� ������ �� ���������, � ����� �� ��������� ��������. ��� �� ���� ��������� ������� �� 1 ����� �� ���� ����������� �������� htmlspecialchars() (������������� �� 1). ��� �� ������� ��������� �������� �� 1, NOWRAP �� ���� ������ ����� �� �������� ���� �� �� ����� ���� �������� ��� ������. (������������� 1)';
$strTransformation_text_plain__formatted = '���� ���������� ����������� ���. Escaping �� �� ����.';
$strTransformation_text_plain__imagelink = '�������� ����� � ����, ��� ������ ����� ��������; ���� ����� �� ������� ��� "http://domain.com/", ����� ����� �� ������ � ���������, ���� �� ������.';
$strTransformation_text_plain__link = '�������� ����, ��� ������ ����� ��������; ���� ����� �� ������� ��� "http://domain.com/", ����� ����� �� ������ �� ����.';
$strTransformation_text_plain__substr = '������� ���� ��� �������. ���� ����� �� ����� ��� �������� ��� ����� ����� ����� ������ (������������� 0). ����� ����� �� ����� ��� ������� ������ �� ������ ���� ���������. ��� �� ����, ��� ��������� ����� �� ���� ��������. ���� ����� ������ ��� �� ����� ���� ������ ������ ���� �� ������� ��������� (�������������: ...) .';
$strTransformation_text_plain__unformatted = '�������� HTML ��� ��� HTML ��������. HTML ����������� �� �� ��������.';
$strTruncateQueries = '������� �������� �����';
$strTurkish = '������';
$strType = '���';

$strUkrainian = '���������';
$strUncheckAll = '������';
$strUnicode = '������';
$strUnique = '�����������';
$strUnknown = '��������';
$strUnselectAll = '�����';
$strUpdComTab = '������ ��������� � ������������ ���� �� ������� ������ Column_comments';
$strUpdatePrivMessage = '��������� ��� ���������� �� %s.';
$strUpdateProfile = '������� ������:';
$strUpdateProfileMessage = '������ �� �������.';
$strUpdateQuery = '������� ����';
$strUsage = '������';
$strUseBackquotes = '������� \' �� ������������ ����� ���';
$strUseHostTable = '������� ������ ��������';
$strUseTables = '������� ������';
$strUseTextField = '������� ����� ���';
$strUseThisValue = '������� ��� ��������';
$strUser = '��������';
$strUserAlreadyExists = '�������� %s �� ������!';
$strUserEmpty = '��� ��������� ��� �����!';
$strUserName = '��� ���������';
$strUserNotFound = '�������� �������� ��� �������� � ������ ����������.';
$strUserOverview = '������� ���������';
$strUsers = '���������';
$strUsersDeleted = '�������� ��������� �� ������� ��������.';
$strUsersHavingAccessToDb = '��������� ��� ���� ������� &quot;%s&quot;';

$strValidateSQL = '������� SQL';
$strValidatorError = 'SQL ��������� ��� ����� �� ���� ��������. ��������� �� �� �� ����������� ��������� PHP ��������� ������� �  %s������������%s.';
$strValue = '��������';
$strVar = '���������';
$strViewDump = '������� ������ (�����) ������';
$strViewDumpDB = '������� ������ (�����) ����';
$strViewDumpDatabases = '������� ������ (�����) ����';

$strWebServerUploadDirectory = '����������� �� ����� ��� ������� ';
$strWebServerUploadDirectoryError = '����������� ��� ��� �������� �� ����� ��� ��������';
$strWelcome = '���������� �� %s';
$strWestEuropean = '���������������';
$strWildcard = '�����';
$strWindowNotFound = '��������� ������ ������������ ��� ����� �� ���� ��������. ����� ��� ��������� ������� ������, ��� ��� ����������� ���������� ��������� ��� ��������� ���� ����������� ����������';
$strWithChecked = '��������:';
$strWritingCommentNotPossible = '������ ��������� ��� �����';
$strWritingRelationNotPossible = '��������� ������� ��� �����';
$strWrongUser = '�������� ���������� ���/�������. ������� ������.';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '��������: ��������� ���� ����� �� 0 (����) ������ ������.';
$strZip = '"��������"';

?>
