# PHP 设计模式实践

本项目是一个基于原生 PHP 实现的 **设计模式（Design Patterns）** 示例库，旨在帮助开发者更好地理解如何在 PHP 中应用常见的设计模式。

## 📚 简介

本项目旨在帮助开发者理解并实践常用的 **设计模式（如工厂模式、单例模式、策略模式、观察者模式等）** 在 PHP 中的使用方式。该项目灵感来源于 [设计模式 Java 实现](https://github.com/quanke/design-pattern-java)，并在此基础上进行了原生 PHP 版本的实现，同时也做了一些扩展。另外一个项目是使用的 laravel 框架实现：[设计模式PHP版](https://gitee.com/shenlink/design-patterns-for-php)，两个项目的核心代码完全一样。

## 🧩 支持的设计模式

- ✅ 简单工厂模式（Simple Factory Pattern）
- ✅ 工厂方法模式（Factory Method Pattern）
- ✅ 抽象工厂模式（Abstract Factory Pattern）
- ✅ 单例模式（Singleton Pattern）
- ✅ 建造者模式（Builder Pattern）
- ✅ 原型模式（Prototype Pattern）
- ✅ 适配器模式（Adapter Pattern）
- ✅ 桥接模式（Bridge Pattern）
- ✅ 组合模式（Composite Pattern）
- ✅ 装饰器模式（Decorator Pattern）
- ✅ 外观模式（Facade Pattern）
- ✅ 享元模式（Flyweight Pattern）
- ✅ 代理模式（Proxy Pattern）
- ✅ 观察者模式（Observer Pattern）
- ✅ 策略模式（Strategy Pattern）
- ✅ 模板方法模式（Template Method Pattern）
- ✅ 责任链模式（Chain of Responsibility Pattern）
- ✅ 命令模式（Command Pattern）
- ✅ 解释器模式（Interpreter Pattern）
- ✅ 迭代器模式（Iterator Pattern）
- ✅ 中介者模式（Mediator Pattern）
- ✅ 备忘录模式（Memento Pattern）
- ✅ 状态模式（State Pattern）
- ✅ 访问者模式（Visitor Pattern）

> 每个模式都位于 `src/` 目录下，并且在tests目录下都有详细的测试用例，确保代码的正确性和可维护性。

## 🛠️ 安装

1. 克隆项目到本地：

- gitee
```bash
git clone https://gitee.com/shenlink/design-patterns-php.git
cd design-patterns-php
```

- github
```bash
git clone https://github.com/shenlink/design-patterns-php.git
cd design-patterns-php
```  

2. 安装依赖：

```bash
composer install
```

3. 配置自动加载：

本项目采用 Composer 的 PSR-4 自动加载方式，所有类文件都在 `src/` 目录下。

```json
"autoload": {
    "psr-4": {
        "Shenlink\\DesignPattern\\": "src/"
    }
}
```

运行以下命令更新自动加载：

```bash
composer dump-autoload
```

## 📁 项目结构说明

```plaintext
.
├── src/
│   ├── FactoryMethod/         # 工厂方法模式实现
│   └── SimpleFactory/         # 简单工厂模式实现
|   |__ ...
├── tests/                     # 单元测试
├── shenlink                   # 命令行文件
├── LICENSE                    # 许可证
├── README.md                  # 当前文档
├── composer.json              # Composer 配置
└── phpunit.xml                # PHPUnit 测试配置
```

## 🧪 测试

本项目使用 PHPUnit 编写单元测试，你可以通过以下命令运行测试：

```bash
php shenlink test
```

或者使用 Composer 提供的快捷命令：

```bash
composer test
```

## 📄 许可证

本项目采用 MIT 许可证。