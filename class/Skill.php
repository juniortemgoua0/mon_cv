<?php 

class  Skill {

    private $title ;
    private $allSkill ;
    private $level;

    public function __construct(string $title , string $allSkill, int $level)
    {
        $this->title = $title ;
        $this->allSkill = $allSkill ;
        $this->level = $level ;
    }

    public function getTitle() : string 
    {
        return $this->title;
    }


    public function getAllSkill() : string 
    {
        return $this->allSkill ;
    }


    public function getLevel() : int
    {
        return $this->level ;
    }
}


?>