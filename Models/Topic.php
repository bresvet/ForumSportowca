<?php
class Topic
{
    private $image;
    private $name;
    private $lastDate;

    public function __construct(string $image, int $name, int $lastDate)
    {
        $this->image = $image;
        $this->name = $name;
        $this->lastDate=$lastDate;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getName(): int
    {
        return $this->name;
    }

    public function getLastDate(): int
    {
        return $this->lastDate;
    }
}
