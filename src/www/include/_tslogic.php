<?php
/*		
 *		Filename: _tslogic.php
 *		Description:
 * 		Author: Beau Bouchard (@BeauBouchard)
 *		Part of Repo: https://github.com/BeauBouchard/bbframework
 *		Version: 1.0.0.0
 *		
 */

//------------------------------------------------------------------------------------------------------------------------------------------------------
//				OBJECTS				
//------------------------------------------------------------------------------------------------------------------------------------------------------	

class Page{
	private $this->$title = "";
	private $this->$subtitle = "";
	private $this->$dir="";
	public function __construct($inctitle,$incsubtitle,$incdir)  {
		$this->setTitle($inctitle);
		$this->setSubtitle($incsubtitle);
		$this->setDir($incdir);
	}
	public function __toString()  {      
        return "title:".$this->title." :: subtitle:".$this->subtitle." :: dir:".$this->dir;  
    } 
	public function setTitle($incval)	{
		$this->title = $incval;
	}
	public function setSubtitle($incval)	{
		$this->subtitle = $incval;
	}
	public function setDir($incval)	{
		$this->dir = $incval;
	}
	public function getTitle()	{
		return $this->title;
	}
	public function getSubtitle()	{
		return $this->subtitle;
	}
	public function getDir()	{
		return $this->dir;
	}
}

class Map extends Page {
	private ;
}

class tweet{
	private $this->$msg = "";
	private $this->$lat = "";
	private $this->$lon="";
	public function __construct($incmsg,$inclat,$inclon)  {

	}
	public function __toString()  {      
       
    } 
}

//------------------------------------------------------------------------------------------------------------------------------------------------------
// 							FUNCTIONS/LOGIC
//------------------------------------------------------------------------------------------------------------------------------------------------------
function generatePage()
{

 
}

function displayPage() 
{

}





?>
