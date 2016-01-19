<?php
### scraps the results of http://eco.iarc.fr/EUREG/AnalysisT.aspx
### not returning the right page for an unknown reason at this stage
### (their javascript should be investigated perhaps).
### The eventvalidation and viewstate strings used are/were correct as changing one bit of them leads to errors.

$ch = curl_init('http://eco.iarc.fr/EUREG/AnalysisT.aspx');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
'__EVENTVALIDATION' => ('VKxVmDGEwdcqnz8+1Dw14j2dkL/s1qOTtxqpmelQCzTPOwMkrbKRFbzR6cNKeo1fZXH7D6eA7ZCEsh5JFqWO5K3iKac3Th4mYA8boVVeIucpjo+F5z1PqT614oeM0hqveFi9vM1H/x8mOF1mhpZAb2mDlAQQo0OyB1IwrN7YIc90ZWIUERcmQiSC0TWC+B2nsBwTchqub8GEASpOXN6YZ++HsDS7PQwI0B3u9J7zqKkk8Bso0NpHKOjmCrurWBuT7k+ADg5ihsadSKT035LBSKcTPFR4zPrre1pBrdYOHaQ2OBKXszM0z/hEsR3fx048NoVneGaeNcrGAnnyOZXebqFLBm64+9nLQ76xjE0R6MRfXdU1P2Hj3b6V5BfLLdBfq0dOGAOKInKh7aT485gy6LhaQZyw2A7zm38BUtOhLA93yqcwGJFGetlxAkfLJyJF5H70kE7hrVdj3R57oqrt3IY7vQD/2nSuHCCxqLFsgtsxa5iMRk+YJ44tLj1ALxRNVKLYVYIyKG9WEcVAvUoMww52TjMEF4cr84nLz4bQttCcZpXUDLqAA0VsMEQOeQSE7OJ/HZiUalNEQ6KFWHBGGDfPNzssEdU308tRVaNVKP9nkKUwUu495RzS2v5AEzNbfbZ/4rJcyCn2cePKDGndJ1TOX25uclPl0Adq2vsPb2+pItmm2YJWlQrBUeA8+BWQp6FmdIN3K9hXVFms9FMbM+SuNb5ZJxl9Ba7moOYnXWj4GNq4B6k6efPx7aQw69X2+1HWXT3BldiDK9/uMzbV1T+fzn6MQf2Tr6ZEMJkvQ13CnwLyMUwl3GAmrNlbri1X8Ym81wJI/MJ61EGJJcqS/1o69dg269tMaKDoYM4nN2Umyk5Pd0/Ze0v8TRdiwXax7P+VMhYTLX7gh+b6Q4GJJqhr6vRURm4ztz3gnZPbCxFlrqGP297PeQaqqYc8L4D8BOOzxslSwhzwFfJ5qQrErrihzgbe8ljSgREOPCex2QuDwuC65taZDdIOBCZLNrrC2Qbkqocm3avNWYjlEepw4e5rINwHwPGI8LxOQFfPA3mcHOKKGOmsAvvVUgyFGczryZpk4KsSUbcadhHj8D0oEI2qJw77lyMrOl21/S+pHlNKqxazoD/vtQIJlygfl7kCTY8Zb/NdhL2FeqeNiaUWHRiT4v3WEW42AnQXIb2eAMbS9OFs+8gPEqeDOsMQtK9z9rrAJfEI7V85GWFOJyYb8eIyrL/wEvbvIvN2teYWxJB2R0+mojDvQYHKMpY6xZQ+L1KFYsNau2aVA7mHG67Ma7TEYddpshI7uav9smx5WYBEDXzOyOZgqmBtcO3b4/R+urqlGD+79/haYG8mvVD+xif/+WUfDul28ErJSdfN10akQH+tzB6MbtOWgMeZ6giLP8bWcBYktT2juNmaY8pVXRbXLWKaRzssGTMfcIGwBgCWwahpQ95ONwDxRaaSztkK//Q6mzWfYW7PEPDss+a93n4ojPFJb5Wm4mNILYuQ2E1IrWd3Xy+BuUGpvTABVe3563f4MWDLxsocKmetFiTrudUwQKoSqBOvYIqOEQxRMldlPa/yp9iaM3Bk4yvzxz3z42cvGbESHRSKMlsNtUYRiA1RSBZYeGa56r+Y5l8kcjKuvewCLo5KqiCwxh53OKbEmIOeYDJGvc1wW/nfPSS/B+eIoeB5hYb4LNSHmn9rpRvEliQBn34ytTO8xcnmycbV80NdWawfRYlYwhAjH6zz9lAkL58FCzRTi1aernfEldOaMS+rrhJh95gs02nyxFr5nr2B57F3iXsA2zfo7wAAeBNJyc9L45RjEq1O6fT6rjfHH/io7vz5PLLik4ZUfWawFqgAS6Wua0gtj4AfkHcs/zOUIM0='),
'__VIEWSTATE' => ('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'),
'__VIEWSTATEENCRYPTED' => '', '__VIEWSTATEGENERATOR' => '76CA81C3', '__LASTFOCUS' => '', '__EVENTARGUMENT' => '', 'ctl00$mainContent$Loc' => 'rbLocation', 'ctl00$mainContent$ddlCustomCountry' => '40', 'ctl00$mainContent$ddlRegistries' => 'EUAUTSAL', 'ctl00$mainContent$ddlYearsByRegistry' => '2009', 'ctl00$mainContent$rblSex' => '1', 'ctl00$mainContent$rblStatistic' => '0', 'ctl00$mainContent$btnSearch' => 'Get'
)));
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
$response = curl_exec($ch);
curl_close($ch);

echo $response;
?>