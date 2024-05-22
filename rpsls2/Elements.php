<?php

class Elements
{
    private string $name;
    private string $win1;
    private string $win2;

    public function __construct(string $name, string $win1, string $win2)
    {
        $this->name = $name;
        $this->win1 = $win1;
        $this->win2 = $win2;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getWin(): array
    {
        return [$this->win1, $this->win2];
    }
}