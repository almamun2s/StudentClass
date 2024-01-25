<?php 

class Students{
    protected string $name;
    public array  $score;
    public string $grade;

    private int $totalScore = 0;
    private int $totalSub;
    private int $avarage;


    public function __construct(string $name, array $score)
    {
        $this->name = $name;
        $this->score = $score;
        $this->totalSub = count($score);
    }


    public function calculateGrade(){

        foreach ($this->score as $value ) {
            $this->totalScore = $this->totalScore + $value;
        }

        $this->avarage = floor($this->totalScore / $this->totalSub);

        if ($this->avarage > 90 ) {
            $this->grade = 'A';
        }elseif ($this->avarage > 80 ) {
            $this->grade = 'B';
        }elseif ($this->avarage > 70 ) {
            $this->grade = 'C';
        }elseif ($this->avarage > 60 ) {
            $this->grade = 'D';
        }elseif ($this->avarage > 0 ) {
            $this->grade = 'F';
        }else {
            $this->grade = 'Some Problem';
        }

        return $this->name.' has gained '.$this->grade;
    }
}