<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\models;

use yii\base\Model;
/**
 * Description of UploadImage
 *
 * @author Anton
 */
class UploadImage extends Model{
    
    public $imageFile;
    public $imageName;
    
    
    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }
    
    public function upload($folder = '')
    {
        if ($this->validate()) {
            $this->imageName = $this->imageFile->baseName . '.' . $this->imageFile->extension;
            $source = '@img/'. trim($folder, '/') . '/' . $this->imageName;
            $this->imageFile->saveAs($source);
            return true;
        } else {
            return false;
        }
    }
    
}
