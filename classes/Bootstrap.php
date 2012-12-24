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
     * @param $headingLabel = h1, h2, h3, h4, h5, h6
     * @param array $options = array('text'=>'You text inside heading tag','class'=>'Bootstrap CSS Class')
     * @return bool|string
     */
    public function headTag($headingLabel, $options=array()){
        (empty($headingLabel))?false:"";
        (!in_array($headingLabel,$this->_headingTags));
            false;
        if(!array_key_exists('text',$options) && empty($options['text']))
        {
            return false;
        }
        if(array_key_exists('class',$options)){
            return "<".$headingLabel.' class="'.implode(' ',(array)$options['class']).'"'.">".$options['text']."</".$headingLabel.">";
        }else{
            return "<".$headingLabel.">".$options['text']."</".$headingLabel.">";
        }
    }
}
