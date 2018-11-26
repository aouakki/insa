<?php
use PHPUnit\Framework\TestCase;

require_once 'src/Poneys.php';
require_once 'src/NegativePoneysCountException.php';

/**
 * Classe de test de gestion de poneys
 */
class PoneysTest extends TestCase
{
    /**
     * @dataProvider removePoneyDataProvider
     */
    public function testRemovePoneyFromField($a,$expected)
    {
        // Setup
        $Poneys = new Poneys();

        // Action
        $Poneys->removePoneyFromField($a);

        // Assert
        $this->assertEquals($expected, $Poneys->getCount());

    }


    public function testAddPoneyFromField(){
        $Poneys = new Poneys();
        $Poneys->addPoneyFromField(3);
        $this->assertEquals(11, $Poneys->getCount());
    }

    public function testRemovePoneyFromFieldExcetption(){

        $this->expectException(NegativePoneysCountException::class);
        $Poneys = new Poneys();
        $Poneys->removePoneyFromField(12);

    }

    public function removePoneyDataProvider(){
        return [ 
            [1,7], 
            [3,5] 
            ] ; 
    }
    
}
?>
