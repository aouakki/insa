<?php
/**
 * Gestion de poneys
 */

 include_once 'NegativePoneysCountException.php' ; 
class Poneys
{
    private $_count = 8;
    const MAX_COUNT = 15 ; 
    /**
     * Retourne le nombre de poneys
     *
     * @return void
     */
    public function getCount(): int
    {
        return $this->_count;
    }

    /**
     * Retire un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function removePoneyFromField(int $number): void
    {
        $this->_count -= $number;
        if($this->_count<0)
            throw new NegativePoneysCountException(); 
    }


     /**
     * ajoute un poney du champ
     *
     * @param int $number Nombre de poneys à retirer
     *
     * @return void
     */
    public function addPoneyFromField(int $number): void
    {
        $this->_count += $number;
    }
    /**
     * Retourne les noms des poneys
     *
     * @return array
     */
    public function getNames(): array
    {

    }

    public function hasMorePoneys(): bool {

        if ($this->_count>=MAX_COUNT)
            return false ; 

        return false ;

    }
}
?>
