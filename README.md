# SM4算法PHP版本及Java版本
## 结构说明：
```
├─Java
│  ├─lib
│  │      bcprov-jdk15on-166.jar  java加密依赖包
│  │      
│  └─src
│          Sm4Util.java   加密类
│          Test.java    测试文件
│          
└─PHP
        SM4Test.php   测试文件
        SM4Util.php  加密类

```
## PHP版本
php版本是在lyfing/SM3（https://github.com/lyfing/SM4）
基础上加了字符串转15进制方法得改造版，使得运用更加方便。
## Java版本
详见注释
## 注意
php版本和java版本可互相加解密。
