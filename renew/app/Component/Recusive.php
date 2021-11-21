<?php
namespace App\Component;
use App\Models\Category;
class Recusive{
    private $data;
    private $htmlSelect;
    public function __construct($data)
    {
        $this->data= $data;
    }
    function permissionRecusive($parentid, $id='0', $text= ''){
        foreach($this->data as $value){
            if($value['parent_id']==$id){
                if(!empty($parentid)&& $parentid==$value['id']){
                    $this->htmlSelect.= "<option selected value=".$value['id'].">".$text. $value['name']."</option>";
                }
                else 
                    $this->htmlSelect.= "<option value=".$value['id'].">".$text. $value['name']."</option>";

                $this->permissionRecusive($parentid, $value['id'],$text.'--');
                // $text= $text.'-';
            }
        }
        return $this->htmlSelect;
    }
}