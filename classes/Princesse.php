<?php

class Princesse extends Personnage
{
    /**
     * @return int
     */
    public function getSaved(): int
    {
        return $this->saved;
    }

    /**
     * @param int $saved
     */
    public function setSaved(int $saved): void
    {
        $this->saved = $saved;
    }
    private int $saved;
    public function __construct() {
        parent::__construct();
        $this->saved = 0;
        $this->x = 450;
        $this->y = 450;
    }
}