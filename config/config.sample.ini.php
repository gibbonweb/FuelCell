<?php $ini = <<<'EOF'
;*************************************************************************
; Hydrogen Configuration
;*************************************************************************

[general]
app_url = "http://localhost/path/to/app"
site_title = "FuelCell Site"

[cache]
engine = "No"

[database]
engine = "MysqlPDO"
host = "localhost"
port = 3306
socket = 
database = "fuelcellapp"
username = "fuelcellapp"
password = "password"
table_prefix = "fuelcell_"

[recache]
unique_name = 'FuelCell'

[semaphore]
engine = "No"

[errorhandler]
log_errors = 1

[log]
engine = TextFile
logdir = cache
fileprefix = "fuelcell_"
; 0 = No logging
; 1 = Log Errors
; 2 = Log Warnings & worse
; 3 = Log Notices & worse
; 4 = Log Info & worse
; 5 = Log Debug messages & worse
loglevel = 5

;*************************************************************************
EOF;
?>