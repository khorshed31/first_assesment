<?php


namespace App\classes;


class ImageUpload
{
    protected $file;
    protected $directory;
    protected $description;
    protected $imageName;
    protected $tempPath;

    public function __construct($file = null)
    {
        $this->file = $file;
        $this->imageName = $file['image']['name'];
        $this->tempPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/upload/'.$this->imageName;

    }

    public function uploadImage(){

        move_uploaded_file($this->tempPath, $this->directory);
        return 'Image Upload Successfully';
    }
}