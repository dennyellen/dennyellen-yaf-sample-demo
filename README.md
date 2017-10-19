# Yaf Sample Demo

## Yaf Sample Demo Project

### 可以按照以下步骤来部署和运行程序

- 请确保机器已经安装了Yaf框架, 并且已经加载入PHP

- 请确保机器已经安装了Composer安装依赖

```shell
    composer install
```

- 需要在php.ini里面启用如下配置,生产的代码才能正确运行

```conf
   yaf.environ="product"
   yaf.use_namespace = True
   yaf.use_spl_autoload = True
```

- 快速测试安装

```shell
    php -S localhost:8000 -t public
```
