<?php



function saveImage($image, $directory, $modelImagePath = null)
{
    if($image)
    {
        if(isset($modelImagePath))
        {
            if(file_exists($modelImagePath))
            {
                unlink($modelImagePath);
            }
        }

        $imageName = rand(10, 1000).$image->getClientOriginalName();

        $image->move($directory, $imageName);
        $imageUrl = $directory.$imageName;
    }
    else
    {
        $imageUrl = $modelImagePath;
    }
    return $imageUrl;
}
