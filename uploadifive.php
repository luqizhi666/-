<?php
/*
UploadiFive
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
*/

// Set the uplaod directory
$uploadDir = '/uploads/';

// Set the allowed file extensions
$fileTypes = array('jpg', 'jpeg', 'gif', 'png','html','mp4','mp3','ppt','pptx','zip','rar','7z','.*','txt','doc','doxc','xls','xlsx','sb3','pdf','exe','apk'); // Allowed file extensions

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile   = $_FILES['Filedata']['tmp_name'];
	$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
	$targetFile = $uploadDir . $_FILES['Filedata']['name'];
	// Validate the filetype
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	if (in_array(strtolower($fileParts['extension']), $fileTypes)) {

		// Save the file
		move_uploaded_file($tempFile, $targetFile);
		
        
        if ($_COOKIE["number"]!=""){
            $a=$_COOKIE["number"];
        }else{
            $a=mt_rand(100000,999999);
            setcookie("number",$a,time()+600);
        }

        $b=intval($a);
        echo $b;

        


        if(!is_dir('./s/'.$a)){ //需要先判断文件夹是否存
            @mkdir('./s/'.$a); //@符号来屏蔽代码执行时出现的错误
        }



        
        

        header("Content-type:text/html;charset=utf-8");
        $file = './uploads/'.$_FILES['Filedata']['name'];
        $newfile = './s/'.$a.'/'.$_FILES['Filedata']['name'];
        
        if(copy($file, $newfile)){
        echo '文件复制成功！';
        }else{
        echo '文件复制失败！';
        }
        
        unlink('./s/'.$a.'/index.html');
        unlink('./s/'.$a.'/index.htm');
        header("Content-type:text/html;charset=utf-8");
        $file = './copy/shower.php';
        $newfile = './s/'.$a.'/index.php';
        echo 'manchuan.is-best.net/s/'.$a.'/index.php';
        if(copy($file, $newfile)){
        echo '文件复制成功！';
        }else{
        echo '文件复制失败！';
        }

        unlink('./uploads/'.$_FILES['Filedata']['name']);

        echo 1;
        
                
        


	} else {

		// The file type wasn't allowed
		echo 'Invalid file type.';

	}
}



?>
