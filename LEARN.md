## Image Upload

```
$model = new Student();
// print_r(time());exit;
if(!empty($_FILES)){
    $file = \yii\web\UploadedFile::getInstance($model, 'bProfile');
    // print_r($file->fullPath);exit;
    if(!$model->upload($file, $file->fullPath)){
        return $this->render('student_form', ['model', $model]);
    }
    // print_r($file);exit;
    // $fp = fopen($file->tempName, 'r');
    // $content = fread($fp, filesize($file->tempName));
    // fclose($fp);
    // $model->bProfile = $content;
}

public function upload($file, $imagename){
    $this->vImagePath = Yii::getAlias('@frontend') . '/web/uploads/images/' . md5(time()) . $imagename;
    // print_r($file);exit;
    return $file->saveAs($this->vImagePath);
}
```
