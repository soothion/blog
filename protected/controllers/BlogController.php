<?php

class BlogController extends Controller{
    public function actionIndex(){
        $criteria=new CDbCriteria;
        $criteria->order='recommend desc,sort desc,addtime desc';
        if(isset($_REQUEST['alias'])&&$_REQUEST['alias']!='')  {
            $criteria->addCondition("alias=:alias");
            $criteria->params=array('alias'=>$_REQUEST['alias']);
        }
        $blog=  Blog::model()->find($criteria);

        if($blog===null)
			throw new CHttpException(404,'The requested page does not exist.');
        $markdownParser = new dflydev\markdown\MarkdownParser();
        $content=$markdownParser->transformMarkdown($blog->content);
        
        $criteria=new CDbCriteria;
        $criteria->order='sort desc';
        $criteria->condition='display=1';
        $categorys= Category::model()->findAll($criteria);
        
        $this->title=$blog->title;
        $this->render('index',array(
            'content'=>$content,
            'categorys'=>$categorys,
        ));
    }
}

