<?php

declare(strict_types=1);

namespace Tests\Unit\Bridge\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Bridge\Solution\BMPImage;
use Shenlink\DesignPattern\Bridge\Solution\GIFImage;
use Shenlink\DesignPattern\Bridge\Solution\Image;
use Shenlink\DesignPattern\Bridge\Solution\IOperatingSystem;
use Shenlink\DesignPattern\Bridge\Solution\JPGImage;
use Shenlink\DesignPattern\Bridge\Solution\Linux;
use Shenlink\DesignPattern\Bridge\Solution\Unix;
use Shenlink\DesignPattern\Bridge\Solution\Windows;
use Tests\Support\OutputCapture;

// 桥接测试类
class BridgeTest extends TestCase
{
    private Image $image;
    private IOperatingSystem $os;

    public function testParseBMPImageFileOnLinux()
    {
        $this->os = new Linux();
        $this->image = new BMPImage($this->os);
        $output = OutputCapture::capture(fn() => $this->image->parseFile('test.bmp'));
        $this->assertSame('在linux操作系统中显示图像，test.bmp格式为：BMP', $output);
    }

    public function testParseBMPImageFileOnUnix()
    {
        $this->os = new Unix();
        $this->image = new BMPImage($this->os);
        $output = OutputCapture::capture(fn() => $this->image->parseFile('test.bmp'));
        $this->assertSame('在unix操作系统中显示图像，test.bmp格式为：BMP', $output);
    }

    public function testParseBMPImageFileOnWindows()
    {
        $this->os = new Windows();
        $this->image = new BMPImage($this->os);
        $output = OutputCapture::capture(fn() => $this->image->parseFile('test.bmp'));
        $this->assertSame('在windows操作系统中显示图像，test.bmp格式为：BMP', $output);
    }

    public function testParseGIFImageFileOnLinux()
    {
        $this->os = new Linux();
        $this->image = new GIFImage($this->os);
        $output = OutputCapture::capture(fn() => $this->image->parseFile('test.gif'));
        $this->assertSame('在linux操作系统中显示图像，test.gif格式为：GIF', $output);
    }

    public function testParseGIFImageFileOnUnix()
    {
        $this->os = new Unix();
        $this->image = new GIFImage($this->os);
        $output = OutputCapture::capture(fn() => $this->image->parseFile('test.gif'));
        $this->assertSame('在unix操作系统中显示图像，test.gif格式为：GIF', $output);
    }

    public function testParseGIFImageFileOnWindows()
    {
        $this->os = new Windows();
        $this->image = new GIFImage($this->os);
        $output = OutputCapture::capture(fn() => $this->image->parseFile('test.gif'));
        $this->assertSame('在windows操作系统中显示图像，test.gif格式为：GIF', $output);
    }

    public function testParseJPGImageFileOnLinux()
    {
        $this->os = new Linux();
        $this->image = new JPGImage($this->os);
        $output = OutputCapture::capture(fn() => $this->image->parseFile('test.jpg'));
        $this->assertSame('在linux操作系统中显示图像，test.jpg格式为：JPG', $output);
    }

    public function testParseJPGImageFileOnUnix()
    {
        $this->os = new Unix();
        $this->image = new JPGImage($this->os);
        $output = OutputCapture::capture(fn() => $this->image->parseFile('test.jpg'));
        $this->assertSame('在unix操作系统中显示图像，test.jpg格式为：JPG', $output);
    }

    public function testParseJPGImageFileOnWindows()
    {
        $this->os = new Windows();
        $this->image = new JPGImage($this->os);
        $output = OutputCapture::capture(fn() => $this->image->parseFile('test.jpg'));
        $this->assertSame('在windows操作系统中显示图像，test.jpg格式为：JPG', $output);
    }
}