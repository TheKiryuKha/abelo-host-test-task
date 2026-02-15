<?php

declare(strict_types=1);

namespace App\Domain;

final class Image
{
    private ?int $id = null;

    private ?string $path = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getPath(): ?string
    {
        return $this->path;
    }

    public function setPath(string $path): void
    {
        $this->path = $path;
    }
}
