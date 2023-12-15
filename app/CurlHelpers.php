<?php

use GuzzleHttp\Client;

// Call an API via GET Request
function httpGetRequest($url)
{   
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Accept: */*",
        "Accept-Encoding: gzip, deflate",
        "Cache-Control: no-cache",
        "Connection: keep-alive",
        "neocomz-api-key: ".env('NEOCOMZ_API_KEY'),
        "cache-control: no-cache"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    $response = json_decode($response);

    curl_close($curl);

    if ($err) 
        return $err;
    else 
         return $response;
}

// Call an API via POST Request
function httpPostRequest($url, $params)
{   
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => $url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "POST",
      CURLOPT_POSTFIELDS => $params,
      CURLOPT_HTTPHEADER => array(
        "Accept: */*",
        "Accept-Encoding: gzip, deflate",
        "Cache-Control: no-cache",
        "Connection: keep-alive",
        "neocomz-api-key: ".env('NEOCOMZ_API_KEY'),
        "cache-control: no-cache"
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    $response = json_decode($response);

    curl_close($curl);

    if ($err) 
        return $err;
    else 
         return $response;
}





/*
|--------------------------------------------------------------------------
| PAGES
|--------------------------------------------------------------------------
*/

/**
 * Return all the pages with its sub pages and its components
 *
 * - All Pages
 * -- Sub pages
 * --- Sub Page (selected)
 * ---- Components
 * ----- Component (selected)
 *
 * @param $sorting  ('ASC', 'DESC', 'POS')
 * @return array $allPages
 */

function getAllPagesData($sorting)
{ 
    $url = env('API_URL')."/api/allpages/".$sorting;

    return $response = httpGetRequest($url);
}



/**
 * Return all the pages with its sub pages and its components
 *
 * - Pages
 * -- Sub pages
 * --- Sub Page (selected)
 * ---- Components
 * ----- Component (selected)
 *
 * @param $page_id
 * @param $sorting  ('ASC', 'DESC', 'POS')
 * @return array $allPages
 */
function getPageData($page_id, $sorting)
{ 
    $url = env('API_URL')."/api/pages/".$page_id."/".$sorting;

    return $response = httpGetRequest($url);
}


/**
* Return a list of pages based on a specific keyword
*
* - Pages
*
* @param $keywords
* @return array $page
*/
function getPageDataByKeywords($keywords)
{ 
    $url = env('API_URL')."/api/pages-search/".$keywords;

    return $response = httpGetRequest($url);
}



