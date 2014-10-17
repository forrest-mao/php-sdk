<?php

//$filename='SP_yTqQUMhvKJvC6QNOIuqVFgwlH.amr';

require_once('qiniu/conf.php');
  require_once('qiniu/io.php');
  require_once('qiniu/rs.php');
  require_once('qiniu/pfop.php');
  require_once('qiniu/http.php');
  //require_once('dqwb1688_qiniu_funclass.php');
  $filename='forum/201410/15/SP_yTqQUMhvKJvC6QNOIuqVFgwlH.amr';
  $client = new Qiniu_MacHttpClient(null);
  $pfop = new Qiniu_Pfop();
  $pfop->Bucket = "xar168";
  $pfop->Force = 1;
  $pfop->Key = $filename;
  $pfop->NotifyURL = "http://www.dqwb1688.com/";
  $newname=str_replace(".amr",".mp3",$filename);
  $newname=str_replace(".aud",".mp3",$newname);
  $savedKey = $newname;
  $savedEntry = Qiniu_Encode("$pfop->Bucket:$savedKey");
  $pfop->Fops = "avthumb/mp3/ab/64k|saveas/$savedEntry";
  $pfop->Pipeline = "mpsdqwb1688";
  list($ret, $err) = $pfop->MakeRequest($client);
  var_dump($ret);
  var_dump($err);
  die();
  if($err !== null){
                 $jgft7niu = array("czjg" =>'no',"newname" =>'',"outtext" =>'对不起，上传失败',);
                 return $jgft7niu;  
  }else{
                 //$killjgstr=killphoto7niu($filename);
                 if($killjgstr=="yes"){
                    $tpouttext="呵呵，上传成功，可以继续发送语音";
                 }else{
                    $tpouttext="呵呵，上传失败，可以重新发送语音";
                 }
                 $outtext="呵呵，文件上传成功！";
                 $return_size = get7niufileinfo($newname);
		         $t_pathinfo = pathinfo($newname);
                 $filename=$t_pathinfo['basename'];
	             return array('url'=>$newname, 'size'=>$return_size, 'remote'=>'1', 'width'=>0, 'isimage'=>'0', 'filename'=>$filename, "czjg" =>'yes', "newname" =>$newname, "outtext" =>$outtext,);
  }