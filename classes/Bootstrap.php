<?php
/**
 * @property Bootstrap
 * @created Shaharia Azam (shaharia.azam@gmail.com)
 * @url http://www.shahariaazam.com
 * @description Twitter Bootstrap CSS framework developed in PHP
 * @license Open-Source
 */
class Bootstrap
{
    public $name='Bootstrap';
    protected $_cssClasses=array(
        'h1',
        'h2',
        'h3',
        'h4',
        'h5',
        'h6'
    );
    protected $_headingTags=array(
        'h1',
        'h2',
        'h3',
        'h4',
        'h5',
        'h6'
    );
    /**
     * @param $headingLabel
     * @param array $options
     */
    public function headTag($headingLabel, $options=array()){
        (empty($headingLabel))?false:"";
        (!in_array($headingLabel,$this->_headingTags));
            false;
        (!array_key_exists('text',$options));
            false;
        (!array_key_exists('class',$options));
            echo "<".$headingLabel.">".$options['text']."</".$headingLabel.">";
        else
            echo "<".$headingLabel.implode(' ',$options['class']).">".$options['text']."</".$headingLabel.">";

//            echo "<".$headingLabel.">".$options['text']."</".$headingLabel.">";

    }
}
