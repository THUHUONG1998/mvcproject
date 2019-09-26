<?php 
require_once 'BaseController.php';
require_once 'models/indexModel.php';
class IndexController extends  BaseController{

    function Home(){
        $db= new indexModel();
        $slide = new indexModel();
        $seller = new indexModel();
       $r = $db->getFeatureProduct();
       $s = $slide->getdataSlide();
    //    print_r ($r);
        $ts = $seller->getdataBestSeller();
    $data = ['featureProduct'=>$r, 'slide'=> $s, 'seller'=>$ts];
    $this->callView('home', $data);// truyen cho $data bien $r
    }
}
// $x=new IndexController();
// $x->Home();
?>