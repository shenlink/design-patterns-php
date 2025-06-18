<?php

declare(strict_types=1);

namespace Tests\Unit\Composite\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Composite\Solution\Folder;
use Shenlink\DesignPattern\Composite\Solution\ImageFile;
use Shenlink\DesignPattern\Composite\Solution\TextFile;
use Shenlink\DesignPattern\Composite\Solution\VideoFile;
use Tests\Support\OutputCapture;

// 组合测试类
class CompositeTest extends TestCase
{
    public function testComposite(): void
    {
        $textFile = new TextFile('text.txt');
        $imageFile = new ImageFile('image.png');
        $videoFile = new VideoFile('video.mp4');

        $folder = new Folder('folder');
        $folder->add($textFile);
        $folder->add($imageFile);
        $folder->add($videoFile);

        $output = OutputCapture::capture(fn() => $folder->killVirus());
        $this->assertSame("Kill virus for file: text.txt" . PHP_EOL . "Kill virus for file: image.png" . PHP_EOL . "Kill virus for file: video.mp4" . PHP_EOL, $output);
    }
}