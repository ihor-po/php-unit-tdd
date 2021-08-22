<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    protected $article;

    protected function setUp(): void
    {
        $this->article = new App\Article();
    }

    public function testTitleIsEmptyByDefault()
    {
        $this->assertEmpty($this->article->title);
    }

    public function testSlugIsEmptyWithNoTitle()
    {
        $this->assertSame($this->article->getSlug(), "");
    }

    public function titleProvider(): array
    {
        return [
            'Slug has spaces replaced by underscores' => ["An example article", "an_example_article"],
            'Slug has whitespace replaced by single underscore' => ["An       example      \n   article", "an_example_article"],
            'Slug does not start or end with an underscore' => [" An example article  ", "an_example_article"],
            'Slug does not have any non word characters' => ["Read! This! Now!", "read_this_now"],
        ];
    }

    /**
     * Undocumented function
     *
     * @param string $title
     * @param string $slug
     * 
     * @dataProvider titleProvider
     * 
     * @return void
     */
    public function testSlug(string $title, string $slug)
    {
        $this->article->title = $title;

        $this->assertEquals($this->article->getSlug(), $slug);   
    }
}