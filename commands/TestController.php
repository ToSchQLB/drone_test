<?php


namespace app\commands;


use yii\console\Controller;

class TestController extends Controller
{
    public $api = '';
    public function actionTest(){
        var_dump($this->getDirContents(DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'drone' . DIRECTORY_SEPARATOR . 'tests' . DIRECTORY_SEPARATOR . 'output'));
    }
    
    public function actionUpload(){
        $ch = curl_init($this->api);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, [
            'xmlReport' => new \CURLFile('/drone/src/tests/_output/report.xml'),
            'htmlReport' => new \CURLFile('/drone/src/tests/_output/report.html'),
        ]);

    }

    private function getDirContents($dir, &$results = array()){
        $files = scandir($dir);

        foreach($files as $key => $value){
            $path = realpath($dir.DIRECTORY_SEPARATOR.$value);
            if(!is_dir($path)) {
                $results[] = $path;
            } else if($value != "." && $value != "..") {
                $this->getDirContents($path, $results);
                $results[] = $path;
            }
        }

        return $results;
    }


}