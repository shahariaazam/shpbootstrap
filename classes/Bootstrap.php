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
    public function TextHeading($headingLabel, $options=array()){
        array_walk($options,array($this, 'AllowableHeadingTag'));
        return in_array($headingLabel,$this->_headingTags);
//        $options .= array('escape' => true);
        /*$headingLabel=array_filter($this->_headingTags,function ($headingLabel){
//            return ($headingLabel!==$this->_headingTags)?false:true;
            foreach($this->_headingTags as $tags){
                ($headingLabel!==$tags)?false:true;
                break;
            }
        });
        (!is_array($options))?false:true;
        (!array_key_exists('text',$options))?false:true;
        if(array_key_exists('class',$options)){
            $styleClasses=implode(' ',$options['class']);
            return '<'.$headingLabel. 'class='.$styleClasses.'>';
        }
        else
        {
            return '<'.$headingLabel.'>';
        }*/
    }
    function AllowableHeadingTag($tags,$key){
//        (!array_key_exists($tags,$key))?false:true;
    }

}
