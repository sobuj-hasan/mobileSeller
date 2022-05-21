<?php

namespace App\Helpers;

use Illuminate\Http\UploadedFile;

/**
 * Name     :   Easy file managing class for a particular model
 * Author   :   Emon Khan
 * Date     :   12/05/2022
 */

trait FileUploadHelper
{
    /**
     * Store a newly created resource in storage according to the model.
     * 
     * @param \Illuminate\Http\UploadedFile $file
     * @param string $module
     * @param int $uid
     * @param string $type
     * @param string $path_prefix
     * @return string
     */
    public function upload(UploadedFile $file, $module, $uid = null, $type = 'images', $path_prefix = 'uploads'): string
    {
        $file_name = $module . '-' . ($uid ?? uniqid()) . '.' . $file->extension();
        $file_path = $path_prefix . '/' . $type . '/' . $module . '/';
        $file->move(public_path($file_path), $file_name);
        return $file_path . $file_name;
    }

    /**
     * Get the full path of the model files
     * 
     * @param string $property_name
     * @return string
     */
    public function urlOf($property_name)
    {
        $no_image_path = 'assets/img/no-image.png';
        return asset($this->$property_name ?? $no_image_path);
    }

    /**
     * Remove the specified resource from storage according to the model.
     * 
     * @param string $property_name
     * @return bool
     * 
     */
    public function deleteWith($property_name): bool
    {
        $file = public_path($this->$property_name);
        if (file_exists($file)) {
            unlink($file);
        }
        return $this->delete();
    }
}
