<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

if (! function_exists('getFillable')){

    /**
     * Model filable deyerini geri donerir ve yeni flable deyeri elave eder
     * @param $model
     * @param mixed ...$column
     * @return array
     */
    function getFillable(Model $model,...$column){
        $filable = $column ? array_merge($model->getFillable(), $column) : $model->getFillable();
        return $filable;
    }
}

if (! function_exists('getTranslateFillable')){

    /**
     * Model translate filable deyerini geri donerir ve yeni flable deyeri elave eder
     * @param $model
     * @param mixed ...$column
     * @return array
     */
    function getTranslateFillable(Model $model,...$column){
        $filable = $column ? array_merge($model->translatedAttributes, $column) : $model->translatedAttributes;
        return $filable;
    }
}


if (! function_exists('column_active')){
    /**
     * Bu funksiya tablolarin hader qisminde sort islemine gore column renglendirir
     * @param string $column
     * @return string
     */
    function column_active($column = 'id'){
        $query = request()->query();
        $q_column = array_key_exists('column',$query) ? $query['column'] : 'id';
        return ($q_column == $column) ? 'text-warning' : '';
    }
}

if (! function_exists('sort_url')){
    /**
     * Sorter urlsı düzeldir..
     * @param $column
     * @return string
     */
    function sort_url($column){

        $query = request()->query();

        $url = request()->url()."?";

        $query['column'] = $column;


        if (array_key_exists('order', $query)){

            $query['order'] = $query['order'] == 'ASC' ? 'DESC' : 'ASC';

        }else{
            $query['order'] = 'ASC';
        }

        foreach ($query as $key=>$value){
            $url .=$key ? "&".$key."=".$value : $key."=".$value;
        }

        return $url;
    }
}



if (! function_exists('app_config')){

    /**
     * Bu funksiya config funkiyasidir proje ayarlarini bunla cagira bilerik
     * @param $key
     */
    function app_config($key){

        $app_config = \App\Models\AppConfig::where('key',$key)->first();

        return $app_config ? $app_config->value : null;
    }
}


if (! function_exists('_sessionmessage')){

    /**
     * Proses sonunda withle bu funksiyani dondere bilerik.
     * @param null $message
     * @return array
     */
    function _sessionmessage($title = null,$message = null,$type = null,$reload = false, $reloadtime = 800){

        $arr = [
            'title' => $title ?? _('Title'),
            'message' => $message ? $message : _('The operation was successful.'),
            'type'    => $type ?? 'success',
            'localtionreload'  => $reload,
            'reloadtime'    => $reloadtime
        ];

        return $arr;
    }
}

if (! function_exists('mysql_escape_mimic')){

    /**
     * @param null $message
     * @return array
     */
    function mysql_escape_mimic($inp){

        if(!empty($inp) && is_string($inp)) {
            return str_replace(array('\\', "\0", "\n", "\r", "'", '"', "\x1a"), array('\\\\', '\\0', '\\n', '\\r', "\\'", '\\"', '\\Z'), $inp);
        }

        return $inp;
    }
}

if (! function_exists('esp')){

    /**
     * @param null $message
     * @return array
     */
    function esp($str,$anyway=false)
    {
        /*
		if(!get_magic_quotes_gpc() || $anyway==true)
		{
			$str = addslashes($str);
		}
		return $str;
         */
        return mysql_escape_mimic($str);
    }
}

if (! function_exists('clear')){

    /**
     * @param null $message
     * @return array
     */
    function clear($str)
    {
        return esp(trim($str));
    }
}

if (! function_exists('UnixNow')){

    /**
     * @param null $message
     * @return array
     */
    function UnixNow()
    {
        @date_default_timezone_set('Asia/Baku');
        return strtotime(date('Y-m-d H:i:s'));
    }
}

if (! function_exists('delete_old_files')){

    /**
     * @param null $message
     * @return array
     */
    function delete_old_files($path)
    {
        if(File::exists($path)) {
            File::delete($path);
        }

        return true;
    }
}

if (! function_exists('slugGenerator')){

    /**
     * @param null $message
     * @return array
     */
    function slugGenerator($slug,$space='-',$onlyEnglish=true,$lang_name='az'){
        if($onlyEnglish==true){
            $from=array('ü','ö','ğ','ı','ə','ç','ş'); $to=array('u','o','g','i','e','c','s');
            $slug=str_replace($from,$to,$slug);
        }
        $slug=strtolower_($slug,false,$lang_name);

        $slug=str_replace('&amp;','-',$slug); $slug=str_replace('&','-',$slug); $slug=str_replace('quot','',$slug);
        $slug=decode_text($slug,true);
        $slug=strip_tags($slug);
        $lettersNumbersSpacesHyphens = '/[^\-\s\pN\pL]+/u';
        $spacesDuplicateHypens = '/[\-\s]+/';
        $slug = preg_replace($lettersNumbersSpacesHyphens, '', $slug);
        $slug = preg_replace($spacesDuplicateHypens, $space, $slug);
        $slug = trim($slug, '-');
        if(strlen($slug)>190) $slug=mb_substr($slug,0,190,"UTF-8");
        $slug=str_replace(' ','',$slug);
        return $slug;
    }
}

if (! function_exists('strtolower_')) {

    /**
     * @param null $message
     * @return array
     */
    function strtolower_($str,$ucfirst=false,$lang='az'){
        $from=array('Q','Ü','E','R','T','Y','U','İ','O','P','Ö','Ğ','A','S','D','F','G','H','J','K','L','I','Ə','Z','X','C','V','B','N','M','Ç','Ş','W');
        $to=array('q','ü','e','r','t','y','u','i','o','p','ö','ğ','a','s','d','f','g','h','j','k','l','ı','ə','z','x','c','v','b','n','m','ç','ş','w');
        if($lang=='az' || $lang=='tr') $str=str_replace($from,$to,$str);

        $from=array("Й","Ц","У","К","Е","Н","Г","Ш","Щ","З","Х","Ъ","Ф","Ы","В","А","П","Р","О","Л","Д","Ж","Э","Я","Ч","С","М","И","Т","Ь","Б","Ю","Ё");
        $to=array("й","ц","у","к","е","н","г","ш","щ","з","х","ъ","ф","ы","в","а","п","р","о","л","д","ж","э","я","ч","с","м","и","т","ь","б","ю","ё");
        $str=str_replace($from,$to,$str);

        if($lang=='en') $str=strtolower($str);

        if($ucfirst==true) $str=ucfirst_($str,"strtolower_");
        return $str;
    }
}

if (! function_exists('decode_text')) {

    /**
     * @param null $message
     * @return array
     */
    function decode_text($value,$runHtml=false,$strip=false,$trim=true){
        if($trim){
            $value=str_replace("&nbsp;", " ", $value);
            $value=trim($value);
        }
        $from=array('&single_quot;','\\\\'," ","  "); $to=array("'",'\\'," "," "); $value=str_replace($from, $to, $value);
        if($runHtml) $value=html_entity_decode($value); else $value=htmlentities($value);
        if($strip) $value=strip_tags($value);
        return $value;
    }
}

if (! function_exists('radius_promote')) {

    /**
     * @param null $message
     * @return array
     */
    function radius_promote(){

        $radiusPromote = [];
        for($i = 0; $i <= 10000; $i+=500)
        {
            $radiusPromote[$i] = $i / 1000;
        }

        return $radiusPromote;
    }
}

if (! function_exists('calDistance')) {

    /**
     * @param null $message
     * @return array
     */
    function calDistance($lat1, $lon1, $lat2, $lon2)
    {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;

        return sprintf("%.2f", ($miles * 1.609344)) . ' Km';
    }
}

if (! function_exists('get_admin_guard_name')) {

    /**
     * @param null $message
     * @return array
     */

    function get_admin_guard_name(){

        $guard = 'admin';

        if(Auth::guard('admin')->check()) {
            $guard = 'admin';
        }
        elseif(Auth::guard('cms')->check()) {
            $guard = 'cms';
        }
        elseif(Auth::guard('subadmin')->check()) {
            $guard = 'subadmin';
        }

        return $guard;

    }
}

if (! function_exists('get_cms_user_store_ids')) {

    /**
     * @param null $message
     * @return array
     */

    function get_cms_user_store_ids($userId){

        $userData = \App\Models\CmsUsers::find($userId);

        $storeIds = [];
        if (!empty($userData)) {
            $storeIds = explode(",",$userData->store_ids);
        }

        return $storeIds;

    }
}
