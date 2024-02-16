<?php

namespace App\Helpers;

use CodeIgniter\Files\File;

class FileUploader
{
    public static function uploadFile($file, $folder)
    {
        // Get the public directory path
        $publicPath = FCPATH;

        // Sanitize the folder name to prevent directory traversal attacks
        $folder = basename($folder);

        // Set the upload directory within the public folder
        $uploadDir = $publicPath . 'public/uploads/' . $folder;

        // Create the upload directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        // Generate a unique filename to prevent overwriting existing files
        $filename = self::generateUniqueFilename($uploadDir, $file->getName());

        // Move the uploaded file to the upload directory
        $file->move($uploadDir, $filename);

        // Return the path to the uploaded file
        return 'uploads/' . $folder . '/' . $filename;
    }

    private static function generateUniqueFilename($uploadDir, $filename)
    {
        $file = new File($uploadDir . DIRECTORY_SEPARATOR . $filename);

        // If file already exists, generate a unique filename
        $counter = 1;
        while ($file->isFile()) {
            $filename = pathinfo($filename, PATHINFO_FILENAME) . '_' . $counter . '.' . $file->getExtension();
            $file = new File($uploadDir . DIRECTORY_SEPARATOR . $filename);
            $counter++;
        }

        return $filename;
    }
}
