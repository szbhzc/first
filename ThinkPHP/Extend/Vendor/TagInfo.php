<?php

class Tag {
	const CL				=	0x00000001;
	const LINE				=	0x00000002;
	const DI				=	0x00000004;
	const RDI				=	0x00000008;
	const NODISP			=	0x00000010;
	const CHECK				=	0x00000020;
	const DRAWR				=	0x00000040;
	const UO				=	0x00000080;
	const ABBREV			=	0x00000100;
	const IMG				=	0x00000200;
	const TBL				=	0x00000400;
	const CONJ				=	0x00000800;
	const TITLE				=	0x00001000;
	
	const TAG_NONE			=	0x00010000;
	const TAG_BGN			=	0x00020000;
	const TAG_END			=	0x00040000;
	const TAG_IGNORE		=	0x00080000;

	///////////////////////////////////////////////
	public $dispAttr;
	public $lbindent;
	public $ldindent;
	public $lcindent;
	public $tag				= 	'';
	public $prefix			= 	'';
	public $suffix			= 	'';
	public $fill			= 	'';
	
	public function TAG_ND() {
		return ($this->dispAttr & self::NODISP) != 0;
	}
	
	public function TAG_LINE() {
		return ($this->dispAttr & self::LINE) != 0;
	}
	
	public function TAG_CL(){
		return ($this->dispAttr & self::CL) != 0;
	}
	
	public function TAG_DI() {
		return ($this->dispAttr & self::DI) != 0;
	}
	
	public function TAG_RDI() {
		return ($this->dispAttr & self::RDI) != 0;
	}
	
	public function TAG_DRAWR()	{
		return ($this->dispAttr & self::DRAWR) != 0;
	}
	
	public function TAG_CHECK()	{
		return ($this->dispAttr & self::CHECK) != 0;
	}
	
	public function TAG_UO() { 
		return ($this->dispAttr & self::UO) != 0;
	}
	
	public function TAG_ABBREV() {
		return ($this->dispAttr & self::ABBREV) != 0;
	}
	public function TAG_IMG() {
		return ($this->dispAttr & self::IMG) != 0;
	}
	
	public function TAG_TBL() {
		return ($this->dispAttr & self::TBL) != 0;
	}
	
	public function TAG_CONJ() {
		return ($this->dispAttr & self::CONJ) != 0;
	}
	
	public function TAG_TITLE()	{
		return ($this->dispAttr & self::TITLE) != 0;
	}
	
	public function TAG_LBI() {
		return $this->lbindent;
	}
	
	public function TAG_LDI() {
		return $this->ldindent;
	}
	
	public function TAG_LCI() {
		return $this->lcindent;
	}
    
    /**
     * 构造函数
     * 取得DB类的实例对象 字段检查
     * @access public
     * @param TTag $name 模型名称
     */
    public function Tag($obj) {
		$this->dispAttr	= $obj->dispAttr;
		$this->lbindent	= $obj->LBIndent;
		$this->ldindent	= $obj->LDIndent;
		$this->lcindent	= $obj->LCIndent;
		$this->tag			= $obj->tag;
		$this->prefix		= $obj->prefix;
		$this->suffix		= $obj->suffix;
		$this->fill		= $obj->fill;
    }    
}
