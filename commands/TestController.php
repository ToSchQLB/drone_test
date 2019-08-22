<?php


namespace app\commands;


use yii\console\Controller;

class TestController extends Controller
{
    public function actionTest(){
        var_dump(getDirContents('.' . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . 'output'));
    }

    function getDirContents($dir, &$results = array()){
        $files = scandir($dir);

        foreach($files as $key => $value){
            $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
            if(!is_dir($path)) {
                $results[] = $path;
            } else if($value != "." && $value != "..") {
                getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }


}