<?php

namespace CODE;

class HtmlTest extends \PHPUnit\Framework\TestCase
{
    public function testRenderizaUmaImagem()
    {
        // $this->assertTrue(true);
        $html = new Html;
        $img = $html->img('images/photo.jpg');

        $this->assertEquals("<img src=\"images/photo.jpg\">", $img);
    }

    public function testCriaUmLinkComImagem()
    {
        $html = new Html;
        $img = $html->img('images/photo.jpg');
        $link = $html->a('todev.com.br', $img);


        $this->assertEquals("<a href=\"todev.com.br\"><img src=\"images/photo.jpg\"></a>", $link);
    }

    public function testListaNaoOrdenada()
    {
        $html = new Html;
        $list = $html->ul('salumao');
        $this->assertEquals("<ul><li>salumao</li></ul>", $list);
    }
}