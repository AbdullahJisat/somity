<?php

use App\Lib\FileManager;

function fileUploader($file, $location, $size = null, $old = null, $thumb = null)
{

    $fileManager = new FileManager($file);
    $fileManager->path = $location;
    $fileManager->size = $size;
    $fileManager->old = $old;
    $fileManager->thumb = $thumb;
    $fileManager->upload();
    return $fileManager->filename;
}

function deleteFile($file)
{
    return file_exists($file) && is_file($file) ? @unlink($file) : false;
}

function fileManager()
{
    return new FileManager();
}

function getFilePath($key)
{
    return fileManager()->$key()->path;
}

function getFileSize($key)
{
    return fileManager()->$key()->size;
}

function getFileExt($key)
{
    return fileManager()->$key()->extensions;
}

function fileInfo()
{
    $data['user'] = [
        'path'      => 'assets/images/user',
        'size'      => '350x300',
    ];
    return $data;
}

function maskedPhone($phoneNumber)
{
    // phone number 01516387200
    return substr($phoneNumber, 0, 3) // Get the first two digits 015
        . str_repeat('*', (strlen($phoneNumber) - 4)) // Apply enough asterisks to cover the middle numbers
        . substr($phoneNumber, -2); // Get the last two digits 00
}

function actionMessage(string $message,  $error = "")
{
    return !is_null($error) ? "Data $message successfully" :  "Something is wrong";
}

function userList($userId = "")
{
    // $name = "jaw";
    // dd("Can I have $name's drink?", 'Can I have ' . $name . '\'s drink?', "Can I have ${name}'s drink?");
    $option = "<option>Select User</option>";
    foreach (\App\Models\User::select('id', 'name')->get() as $value) {
        $option .= "<option @$value->id == $userId ? 'selected' : '' value='$value->id'>$value->name</option>";
    }
    return $option;
}

function paymentMethodList()
{
    $paymentMethods = collect([1 => 'Cash', 2 => 'Credit Card', 3 => 'Cheque', 4 => 'Bank Transfer', 5 => 'Bkash', 6 => 'Nagad']);
    $option = "<option value='0'>Select Payment</option>";
    foreach ($paymentMethods as $key => $value) {
        $option .= "<option value='$key'>$value</option>";
    }
    return $option;
}
