<?php declare(strict_types=1);

namespace IconLanguageServices\SoftwareEngineerTechnicalTest2021\Part1;

class Solution
{
    protected const FloorUpCharacter = '(';
    protected const FloorDownCharacter = ')';
    /**
     * @var string A series of characters used to tell the man if he should go up or down a floor.
     *      Open parenthesis `(` indicates going UP a floor
     *      Closing parenthesis ')' indicates going DOWN a floor
     *      See the `input` folder for examples
     */
    private string $instructions;

    public function __construct(string $instructions)
    {
        $this->instructions = $instructions;
    }

    /**
     * @return int The floor number that the man will arrive at after starting at floor 0 and following all of the instructions
     */
    public function getAnswer(): int
    {
        $floorNumber = 0;
        $length = strlen($this->instructions);
        for ($i = 0; $i < $length; $i++) {
            switch ($this->instructions[$i]) {
                case self::FloorUpCharacter:
                    $floorNumber++;
                    break;
                case self::FloorDownCharacter:
                    $floorNumber--;
                    break;
                default:
                    break;
            }
        }
        return $floorNumber;
    }
}
