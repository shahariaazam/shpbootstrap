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
    public function __construct(){
        $this->name="Bootstrap";
    }
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

    /**
     * @param null $text
     * @param array $options = class, cite=>identifer|source_name,
     * @return string
     */
    public function blockQuote($text=null,$options=array()){
        (empty($text))?false:"";
        if(array_key_exists('class',$options)){
            $tag="<blockquote class='".implode(" ",(array)$options['class'])."'>";
        }else{
            $tag="<blockquote>";
        }
        (empty($tag))?$tag="<blockquote>":"";
        if(array_key_exists('cite',$options)){
            if(array_key_exists('identifier',$options['cite']) && array_key_exists('source_name',$options['cite'])){
                return sprintf($tag."<p>{$text}<small>{$options['cite']['identifier']} <cite title='{$options['cite']['source_name']}'>{$options['cite']['source_name']}</cite></small></p></blockquote>");
            }else{
                return sprintf("<blockquote><p>{$text}</p></blockquote>");
            }
        }else{
            return sprintf("<blockquote><p>{$text}</p></blockquote>");
        }
//        <small>Someone famous <cite title="Source Title">Source Title</cite></small>
//        return sprintf("<blockquote><p>{$text}</p></blockquote>");
    }
}
