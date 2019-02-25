<?php

/** 
 * SHow info
 * name
 * bio
 * website
 * followers
 * following
 * profile_pic
 * instagram page
*/
function crInstShowInfo( $data, $args=array(), $width="150" )
{
    $infos = '<div class="instagram-autor">';

    $infos .= '<div class="instagram-stat">';

    if ($args['media'] == "true"):
        $infos .= '<span class="inst-photos"><span class="numb">' . $data['data']['counts']['media'] . '</span><div class="diopinfo">' . __('photos', 'crum') . '</div></span>';
    endif;

    if ($args['followers'] == "true"):
        $infos .= '<span class="inst-follower"><span class="numb">' . $data['data']['counts']['followed_by'] . '</span><div class="diopinfo">' . __('followers', 'crum') . '</div></span>';
    endif;

    if ($args['following'] == "true"):
        $infos .= '<span class="inst-follow"><span class="numb">' . $data['data']['counts']['follows'] . '</span><div class="diopinfo">' . __('follows', 'crum') . '</div></span>';
    endif;

    $infos .= '</div>';

    if ($args['profile_pic'] == "true"):
        $infos .= '<a href="http://instagram.com/'.$data['data']['username'].'/"><img src="' . $data['data']['profile_picture'] . '" style="width: ' . $width . 'px;"/></a>';
    endif;

    if( $args['name'] == "true" ):
        $infos .= '<div class="box-name">' . $data['data']['full_name'] . '</div>';
    endif;

    if( $args['bio'] == "true" ):
        $infos .= '<div class="diopinfo">' . $data['data']['bio'] . '</div>';
    endif;

    $infos .= '</div>';

	echo $infos;
}

/**
* Get self feed
*/
function crInstGetSelfFeed( $access_token )
{
	$apiurl = 'https://api.instagram.com/v1/users/'.user_id().'/media/recent/?access_token=' . $access_token ;
	
	if(function_exists('curl_exec') && function_exists('curl_init')):
	
          	$curl = curl_init();               
                curl_setopt($curl, CURLOPT_URL, $apiurl);
                curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);               
                $response = curl_exec($curl);               
                curl_close($curl);
               
                $data = json_decode( $response, true );
        else:
                $response = wp_remote_get( $apiurl, array('timeout' => 20 ) );
		        $data = json_decode( $response['body'], true );
        endif;
       	
       	//file_put_contents( crum_simple_instagram_plugin_path . 'cache-api/selffeed.txt', $data );
	
	return $data;
}

/**
* Show data in widget form
*/
function crInstShowWidgetData( $data, $count='5', $width='179', $customRel="sIntWidget", $displayCaption="true" )
{
	/**
	 * Determine query return
	 * next query used to avoid
	 * blank return when display value is 
	 * greater than API return
	*/
	
	if( count( $data['data'] ) > $count ):
		$query = $count;
	else:
		$query = count( $data['data'] );
	endif;

    echo '<div class="intagram-gallery">';

 	for( $i = 0; $i < $query; $i++ ):

        if($i == '0'){
            $output = '<span class="big-item"><a href="' . $data['data'][$i]['images']['standard_resolution']['url'] . '" rel="' . $customRel . '[instagram]" title="' . htmlspecialchars( $data['data'][$i]['caption']['text'], ENT_QUOTES ). '">';

            $output .= '<div class="si-content" style=" display: none; margin: 10px; "><div class="clear"></div>';

            /**
             * Option to display caption.
             * Page often breaks when caption is to long
             * because prettyPhot can't handle it.
             */
            if(  $displayCaption == "true" ):
                $output .= htmlspecialchars( $data['data'][$i]['caption']['text'], ENT_QUOTES ). '<div class="clear"></div>';
            endif;

            $output .= '<div class="content-info"> <img class="front-photo" src="' . $data['data'][$i]['caption']['from']['profile_picture'] . '" width="15" height="15" alt="" />' . $data['data'][$i]['caption']['from']['username'] . '</div>';
            $output .= '<div class="content-info"> <img src="' . plugins_url('/crum-instagram/images/instagram-like.png') . '" width="19" height="19" style="vertical-align: middle;" alt="" /> ' . $data['data'][$i]['likes']['count'] . '</div>';
            $output .= '<div class="content-info"> <img src="' . plugins_url('/crum-instagram/images/instagram-comment.png') . '" width="19" height="19" style="vertical-align: middle;" alt="" /> ' . $data['data'][$i]['comments']['count'] . '</div>';
            $output .= '<div class="clear"></div></div>';

            $output .= '<img src="' . crInstCache( $data['data'][$i]['images']['thumbnail']['url'], $width ) . '" width="' . $width .'" height="' . $width . '" title="' . $data['data'][$i]['caption']['text'] . '" alt="">';
            $output .= "</a></span>";

        } else {
            $output = '<span class="normal-item"><a href="' . $data['data'][$i]['images']['standard_resolution']['url'] . '" rel="' . $customRel . '[instagram]" title="' . htmlspecialchars( $data['data'][$i]['caption']['text'], ENT_QUOTES ). '">';

            $output .= '<div class="si-content" style=" display: none; margin: 10px; "><div class="clear"></div>';

            /**
             * Option to display caption.
             * Page often breaks when caption is to long
             * because prettyPhot can't handle it.
             */
            if(  $displayCaption == "true" ):
                $output .= htmlspecialchars( $data['data'][$i]['caption']['text'], ENT_QUOTES ). '<div class="clear"></div>';
            endif;

            $output .= '<div class="content-info"><img class="front-photo" src="' . $data['data'][$i]['caption']['from']['profile_picture'] . '" width="15" height="15" alt=""/>' . $data['data'][$i]['caption']['from']['username'] . '</div>';
            $output .= '<div class="content-info"><img src="' . plugins_url('/crum-instagram/images/instagram-like.png') . '" width="19" height="19" style="vertical-align: middle;" alt="" /> ' . $data['data'][$i]['likes']['count'] . '</div>';
            $output .= '<div class="content-info"><img src="' . plugins_url('/crum-instagram/images/instagram-comment.png') . '" width="19" height="19" style="vertical-align: middle;" alt="" /> ' . $data['data'][$i]['comments']['count'] . '</div>';
            $output .= '<div class="clear"></div></div>';

            $width = '97';
            $height = '88';

            $output .= '<img class="front-photo" src="' . crInstCache( $data['data'][$i]['images']['thumbnail']['url'], $width ) . '" style = "width:' . $width .'px; height:' . $height . 'px;" title="' . $data['data'][$i]['caption']['text'] . '" alt="">';
            $output .= "</a></span>";
        }

        echo $output;

	endfor;
    echo '</div>';

}
/**
 * Check if access token exist
 * return null otherwise
 */
function access_token()
{
    global $wpdb;

    $getAccessToken = get_option('si_access_token');
    if( $getAccessToken ):
        return $getAccessToken;
    else:
        return null;
    endif;
}

/**
 * Check if user_is exist
 * return null otherwise
 */
function user_id()
{
    global $wpdb;

    $getUserID = get_option('si_user_id');
    if( $getUserID ):
        return $getUserID;
    else:
        return null;
    endif;
}

/**
 * Get the list of users this user follows.
 */
function crInstGetFollowing( $user_id, $access_token )
{
    $apiurl = "https://api.instagram.com/v1/users/" . $user_id . "/follows?access_token=" . $access_token;

    if(function_exists('curl_exec') && function_exists('curl_init')):

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode( $response, true );
    else:
        $response = wp_remote_get( $apiurl, array('timeout' => 20 ) );
        $data = json_decode( $response['body'], true );
    endif;


    return $data;
}


/**
 * Get the list of users this user is followed by.
 */
function crInstGetFollowers( $user_id, $access_token )
{
    $apiurl = "https://api.instagram.com/v1/users/" . $user_id . "/followed-by?access_token=" . $access_token;

    if(function_exists('curl_exec') && function_exists('curl_init')):

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode( $response, true );
    else:
        $response = wp_remote_get( $apiurl, array('timeout' => 20 ) );
        $data = json_decode( $response['body'], true );
    endif;


    return $data;
}

/**
 * See the authenticated user's list of media they've liked.
 * Note that this list is ordered by the order in which the user liked the media.
 * Private media is returned as long as the authenticated user has permission to view that media.
 * Liked media lists are only available for the currently authenticated user.
 */
function crInstGetLikes( $access_token )
{
    $apiurl = "https://api.instagram.com/v1/users/self/media/liked?access_token=" . $access_token;

    if(function_exists('curl_exec') && function_exists('curl_init')):

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode( $response, true );
    else:
        $response = wp_remote_get( $apiurl, array('timeout' => 20 ) );
        $data = json_decode( $response['body'], true );
    endif;


    return $data;
}

/**
 * Get the most recent media published by a user.
 */
function crInstGetRecentMedia( $user_id, $access_token )
{
    $apiurl = "https://api.instagram.com/v1/users/" . $user_id . "/media/recent/?access_token=" . $access_token;

    if(function_exists('curl_exec') && function_exists('curl_init')):

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode( $response, true );
    else:
        $response = wp_remote_get( $apiurl, array('timeout' => 20 ) );
        $data = json_decode( $response['body'], true );
    endif;


    return $data;
}

/**
 * See the authenticated user's feed.
 */
function simply_instagram_get_feed( $access_token )
{
    $apiurl = "https://api.instagram.com/v1/users/self/feed?access_token=" . $access_token;

    if(function_exists('curl_exec') && function_exists('curl_init')):

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode( $response, true );
    else:
        $response = wp_remote_get( $apiurl, array('timeout' => 20 ) );
        $data = json_decode( $response['body'], true );
    endif;


    return $data;
}

/**
 * Get basic information about a user.
 */
function crInstGetInfo( $user_id, $access_token )
{
    $apiurl = "https://api.instagram.com/v1/users/" . $user_id . "/?access_token=" . $access_token;

    if(function_exists('curl_exec') && function_exists('curl_init')):

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode( $response, true );
    else:
        $response = wp_remote_get( $apiurl, array('timeout' => 20 ) );
        $data = json_decode( $response['body'], true );
    endif;


    return $data;
}

/**
 * most-popular.
 */
function crInstGetMostPopular( $media, $access_token )
{
    $apiurl = "https://api.instagram.com/v1/media/" . $media . "?access_token=" . $access_token;

    if(function_exists('curl_exec') && function_exists('curl_init')):

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode( $response, true );
    else:
        $response = wp_remote_get( $apiurl, array('timeout' => 20 ) );
        $data = json_decode( $response['body'], true );
    endif;

    file_put_contents( simply_instagram_plugin_path . '/cache-api/selffeed.txt', serialize( $response )  );
    return $data;
}

/**
 * Check if already following
 */
function crInstGetFollowingInfo( $user_id, $access_token )
{
    $apiurl = "https://api.instagram.com/v1/users/" . $user_id . "/relationship?access_token=" . $access_token;

    if(function_exists('curl_exec') && function_exists('curl_init')):

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $apiurl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode( $response, true );
    else:
        $response = wp_remote_get( $apiurl, array('timeout' => 20 ) );
        $data = json_decode( $response['body'], true );
    endif;


    return $data;
}


/**
 * Function login to instagram for wp-administrator
 */
function crInstLogin( $return_uri )
{
    $baseURL = "https://api.instagram.com/oauth/authorize/";
    $client_id = "39170cdd8ebf4a159f01fdfd31b989b8";
    $redirect_uri = "http://www.rollybueno.info/plugins/simply-instagram.php";
    $response = "code";
    $scope = "likes+comments+relationships+likes";

    return $baseURL . '?client_id=' . $client_id . '&redirect_uri=' . $redirect_uri . $return_uri . '&response_type=' . $response . '&scope=' . $scope ;
}


/** Caching module */
function crInstCache( $image, $width ){
    return $image;
}

/** Clearing cache folder */
function sIntClearCache(){
    $path = simply_instagram_plugin_path . "cache/";

    foreach(glob($path ."*.*") as $file) {
        unlink($file); // Delete each file through the loop
    }
}
