# googleSheetsSimpleCache
Simple project for a local cache of a google spreadsheet.
This application arose from a need to use google spreadsheets without worrying about limiting requests.
You can improve by creating a microservice and automating with a cronjob.

## usage:
 - fill in the environment variables in source/config.php;
 - use getSheetFromGoogle() to access the online spreadsheet;
 - use generateCache() to generate cache/cache.csv file;
 - use getCache() to get values from cache file
