# Yaf Sample Demo

## 安装
> 由于依赖了 yuyang/yaf-plugin 来兼容 yaf 和 composer 的自动载入机制，
目前 Windows 环境可能出现问题

- 安装Yaf框架扩展, 并且已经加载入PHP
```shell
    $php -m |grep yaf
    yaf
```

- 安装Composer, Composer 版本需 >=1.2 ,推荐使用Phar方式
```shell
    $composer -V
    Composer version 1.5.2 2017-09-11 16:59:25
```
- 安装项目依赖

```shell
    $composer install
```

- 需要在php.ini里面启用如下配置,生产的代码才能正确运行

```conf
   yaf.environ="product"
   yaf.use_namespace = True
   yaf.use_spl_autoload = True
```

- 快速测试安装

```shell
    $php -S localhost:8000 -t public
```
