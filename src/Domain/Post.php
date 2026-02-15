<?php

declare(strict_types=1);

namespace App\Domain;

final class Post
{
    private ?int $id = null;

    private ?string $title = null;

    private ?string $description = null;

    private ?string $text = null;

    private int $views = 0;

    private ?Image $image = null;

    /** @var Category[] */
    private array $categories = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getViews(): int
    {
        return $this->views;
    }

    public function view(): void
    {
        ++$this->views;
    }

    public function getImage(): ?Image
    {
        return $this->image;
    }

    public function setImage(Image $image): void
    {
        $this->image = $image;
    }

    public function addCategory(Category $category): void
    {
        $this->categories[] = $category;
    }

    /**
     * @return Category[]
     */
    public function getCategories(): array
    {
        return $this->categories;
    }
}
