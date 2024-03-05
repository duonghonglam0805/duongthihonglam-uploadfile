<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFileController extends Controller
{
    //
    public function uploadFile()
    {
        return view('uploadFile');
    }

    public function handleuploadFile(Request $request)
    {
        $namefile = 'duongthihonglam';
        if (!$request->hasFile('fileToUpload')) {
            return ("Vui lòng chọn tệp cần upload");
        }
        if ($request->file('fileToUpload')->isValid()) {
            $duoi = $request->file('fileToUpload')->extension();
            $filename = "duongthihonglam.".$duoi;
            $namefile = $request->file('fileToUpload')->storeAs('images', 'duongthihonglam.');
        }
        return ('Tên file và loại file:' . $filename ) ."<br>".'ten ext: ' .$duoi;
    }
}