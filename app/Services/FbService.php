<?php
namespace App\Services;

use App\Exceptions;

class FbService implements FbServiceInterface
{
	/**
     * @const string The name of the environment variable that contains the app ID.
     */
    const APP_ID_ENV_NAME = 'FB_APP_ID';

    /**
     * @const string The name of the environment variable that contains the app secret.
     */
    const FB_SECRET_KEY = 'FB_SECRET_KEY';

    /**
     * @const string The name of the environment variable that contains the facebook id.
     */
    const APP_FB_ID_ENV_NAME = 'FB_ID';

    /**
     * @var array $config.
     */
    protected $config;

	/**
     * Get Facebook posts
     *
     * @param array $config
     *
     * @throws FacebookSDKException
     */
    public function __construct(array $config = [])
    {
        if (!$config['app_id']) {
            throw new FacebookNoAppIdException('Required "app_id" key not supplied in config and could not find fallback environment variable "' . static::APP_ID_ENV_NAME . '"');
        }
        if (!$config['app_secret']) {
            throw new FacebookNoAppSecretException('Required "app_secret" key not supplied in config and could not find fallback environment variable "' . static::APP_SECRET_ENV_NAME . '"');
        }
        if (!$config['fb_id']) {
            throw new FacebookNoIdException('Required "fb_id" key not supplied in config and could not find fallback environment variable "' . static::APP_SECRET_ENV_NAME . '"');
        }

        $this->config = $config;
    }

    public function getFbPosts()
    {
        $url = "https://graph.facebook.com/".$this->config['fb_id']."/feed?limit=3";
    	$url.= '&access_token='.$this->config['app_id'].'|'.$config['app_secret'];

    	var_dump($url);
	 	die();

	    //load and setup CURL
	    $c = curl_init($url);
	    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	    //get data from facebook and decode JSON
	    $page = json_decode(curl_exec($c));
	    //close the connection
	    curl_close($c);

	    var_dump($page);
	 	die();
	 	if (!isset($page->data)) {
	 		return false;
	 	}
	    //return the data as an object
	     return $page->data;
    }

    public function getFbEvents()
    {
        $url = "https://graph.facebook.com/".$this->config['fb_id']."/feed?limit=3";
    	$url.= '&access_token='.$this->config['app_id'].'|'.$config['app_secret'];

    	var_dump($url);
	 	die();

	    //load and setup CURL
	    $c = curl_init($url);
	    curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	    //get data from facebook and decode JSON
	    $page = json_decode(curl_exec($c));
	    //close the connection
	    curl_close($c);

	    var_dump($page);
	 	die();
	 	if (!isset($page->data)) {
	 		return false;
	 	}
	    //return the data as an object
	     return $page->data;
    }
}