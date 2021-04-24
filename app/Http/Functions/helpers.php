<?php

use Illuminate\Database\Eloquent\Model;
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


