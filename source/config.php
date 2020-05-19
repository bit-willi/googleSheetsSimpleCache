<?php

// location -> programPath/source/credentials.json
define("credentialsPath", __DIR__ . "/credentials.json");

// location -> programPath/source/token.json
define("tokenPath", __DIR__ . "/token.json");

// location -> programPath/cache/cache.csv
define("cachePath", __DIR__ . "/../cache/cache.csv");

//this is a standard google spreadsheet, replace it with yours
define("sheetId", "1BxiMVs0XRA5nFMdKvBdBZjgmUUqptlbs74OgvE2upms");

//this is the range, that is, which column can be checked from, check the official google API v4 documentation for more details
define("sheetRange", "A:E");