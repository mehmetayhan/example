<?php
namespace Mehmet;

 class Example {

	public static function css()
    {
        return '<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">';
    }
	
	public static  function createAttribute($attribute, $value)
    {
        return $attribute.'="'.$value.'" ';
    }
	
	public static  function getIcon($library,$icon,$attributes=[])
    {
        if (isset($attributes['class'])){
            $exClass  = $attributes['class'];
            unset($attributes['class']);
        }else{
            $exClass = '';
        }
		
        $attr = '';
        foreach ($attributes as $key => $attribute){
            $attr.= self::createAttribute($key,$attribute);
        }
        switch ($library){
            case 'material':
                $s = '<i class="material-icons '.$exClass.'" '.$attr.'>'.$icon.'</i>';
                break;
            case 'font-awesome':
                $s = '<i class="fa fa-'.$icon.' '.$exClass.'" '.$attr.'></i>';
                break;
            case 'glyphicon':
                $s = '<i class="glyphicon glyphicon-'.$icon.' '.$exClass.'" '.$attr.'></i>';
                break;
            case 'ionicons':
                $s = '<i class="ionicons ion-'.$icon.' '.$exClass.'" '.$attr.'></i>';
                break;
        }
        return $s;
    }

 }
 
 ?>