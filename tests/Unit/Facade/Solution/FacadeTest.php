<?php

declare(strict_types=1);

namespace Tests\Unit\Facade\Solution;

use PHPUnit\Framework\TestCase;
use Shenlink\DesignPattern\Facade\Solution\CipherMachine;
use Shenlink\DesignPattern\Facade\Solution\FileReader;
use Shenlink\DesignPattern\Facade\Solution\FileWriter;
use Tests\Support\OutputCapture;

// 外观测试类
class FacadeTest extends TestCase
{
    public function testFacade()
    {
        $cipherMachine = new CipherMachine();
        $fileReader = new FileReader();
        $content = $fileReader->readFile('from.txt');
        $this->assertEquals('from.txt的文件内容', $content);
        $encryptContent = $cipherMachine->encrypt($content);
        $this->assertEquals('加密后的文本：from.txt的文件内容', $encryptContent);

        $fileWriter = new FileWriter();
        $output = OutputCapture::capture(fn() => $fileWriter->write('to.txt', $encryptContent));
        $this->assertEquals('写入加密后的文本：from.txt的文件内容到文件：to.txt' . PHP_EOL, $output);
    }
}
