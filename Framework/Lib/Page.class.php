<?php
//封装分页类
namespace Lib;
class Page{
	private $recordcount;  //总记录数
	private $pagesize;     //页面大小
	private $pageno;       //当前页
	private $pagecount;    //总页数
	public $startno;      //起始位置

	public function __construct($recordcount,$pagesize=10){
		$this->initParam($recordcount,$pagesize);
	}
	// 计算参数
	private function initParam($recordcount,$pagesize){
		$this->recordcount=$recordcount;
		$this->pagesize=$pagesize;
		$this->pageno=$_REQUEST['pageno']??1;  //获取当前页
		$this->pagecount=ceil($this->recordcount/$this->pagesize);
		if($this->pageno<1){
			$this->pageno=1;
		}
		if($this->pageno>$this->pagecount){
			$this->pageno=$this->pagecount;
		}
		$this->startno=($this->pageno-1)*$this->pagesize;
	}
	//拼接分页字符串
	public function show(){
		$str="<div class='pagebar'>";
		$str.="<span>当前一共有{$this->recordcount}条记录,当前每页显示{$this->pagesize}条记录,当前是第{$this->pageno}页</span>&nbsp;&nbsp;";
		$url="index.php?p=".PLATFORM_NAME."&c=".CONTROLLER_NAME."&a=".ACTION_NAME;
		$str.="<a href='$url&pageno=1'>首页</a>&nbsp;&nbsp;";
		$str.="<a href='$url&pageno=".($this->pageno-1)."'>上一页</a>&nbsp;&nbsp;";
		$str.="<a href='$url&pageno=".($this->pageno+1)."'>下一页</a>&nbsp;&nbsp;";
		$str.="<a href='$url&pageno={$this->pagecount}'>末页</a>&nbsp;&nbsp;";
		for($i=1;$i<=$this->pagecount;$i++){
			$str.="<a href='$url&pageno={$i}'>{$i}</a>&nbsp;&nbsp;";
		}
		$str.="</div>";
		return $str;
	}
}
