# googleSheetsSimpleCache
Simple project for a local cache of a google spreadsheet.
This application arose from a need to use google spreadsheets without worrying about limiting requests.
You can improve by creating a microservice and automating with a cronjob.

## usage:
 - fill in the environment variables in source/config.php;
 - use getSheetFromGoogle() to access the online spreadsheet;
 - use generateCache() to generate cache/cache.csv file;
 - use getCache() to get values from cache file

## config file example:
>  - location -> programPath/source/credentials.json
> define("credentialsPath", __DIR__ . "/credentials.json");
> 
> - location -> programPath/source/token.json
> - if it's your first time running, use the etSheetFromGoogle () function to create a valid token.json
> define("tokenPath", __DIR__ . "/token.json");
> 
> - location -> programPath/cache/cache.csv
> define("cachePath", __DIR__ . "/../cache/cache.csv");
> 
> -this is a standard google spreadsheet, replace it with yours
> define("sheetId", "1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms");
>
> - this is the range, that is, which column can be checked from, check the official google API v4 documentation for more details
>define("sheetRange", "A:E");