<?php

// 常量定义
define("DS", DIRECTORY_SEPARATOR);     //动态目录分割符
define("ROOT_PATH", getcwd().DS);       //当前目录
define("APP_PATH", ROOT_PATH."Home".DS);
// 包含框架初始类
require_once(ROOT_PATH."Frame".DS."Frame.class.php");
// 调用框架初始化方法
Frame\Frame::run();

//创建PDOWrapper对象
$pdo = new Frame\Vendor\PDOWrapper();

-----BEGIN RSA PRIVATE KEY-----
MIIEpAIBAAKCAQEArQNcK6KB69BkgYCndMcFtQ0QjMXBx5hLy4s4Y70dd63fdMahbRuNZeCAPeic
Z0pSCEJDZFgSQWxVvJ3WTsW5PL6Mk4GSJkcPc00QZ8XSiWWbSyjdu56qjh7iq+ahHiwxIxokrhRY
yw4EIXob8sUfbiRxNV13+HsmK+fG2lbuQflQEzhAX2O+t6WjWajmcIMkd6nP28rmtgze8+b/wtv6
6lsmKjXZZtkztjBvXHAJIfcVpTilZohAOWUR0ZOHUThYaAkILMWraemnQRK9VO9b7/AFsJb4iaal
FKrweA22DI06OsEH+Acfu+SdbYx07WKJosgnMveDPbpiUnmzlsnZoQIDAQABAoIBAQCY5vJLQehu
PpLEfK4Bn25kzrIEpzUVr3u03Eouo1Dqlwh4DJ9XbNUu5xSPIgcvpdgPongqs0cW+KZg9mES5t1J
WOGl7wn5uC1oagAIpiTl9p0i9G/Zw2TaC2OqJj3YC5g1fIJUMnkyoyV1bJRMnnejgKNoVT2UpUlb
3g+4oMEaHcPz+ecmyM7RNBmNNjtQjgNtlJyC0Es0oYJuT7HQ4fkE4HoJgwxrcG3qqhtYauTOZLJ0
Na280mDRDSaKadt8pI8UDnGZNBSy0Zw3cspI5GumXeH8uL5oWgwo0OZ2mlwb0mgdTMUaHRhiJtID
CTmlV9bt+8Z0GNluH6AdVo59YM/RAoGBAO7eMlApwCa/7FzkjPiy014pr8s4Vd0ZHYWZSJftrulE
iRnjIS7+1b2ewY35briF55CH5CdmMBaKbQAsPWAByzU7X8mBUWG43IsUmEP0Yp2TPnHTXc09wBaZ
5YxDDwtWLnHKORbXcu15kVVcqzLOgV+FI/1RL+4TaYcSFewBcD21AoGBALlsBF0/Pmnc6sDfF4zy
9qPYCv2JxOpDNf46dEGY81X1fz2C/1XPd8jNTAQDzWxqErCUt5esuhoebo6HjHLoOo+bVJBvrhe0
53BDaeDauAxLvaEYSLoR3m4u+QmZk4l4EYx76bbVNXF9ciU5VtgTBMVDBI6ELBhEGge3byTkwf+9
AoGAAcKrdkHIg8CYWlro2xBeVGxUOlgw8c80k358tXnv9xIlPIabAQCpzJr17DjxYvTBryQBP3UW
V6Qvh3fMAAAjYkIMw6xrUCAPqAq/0Ihljam/JRGcuF2DI+eAdJct7jR1ZStLXmq6Exv5QTrMnDQ/
adfOWxiVFNkZxwAQH0wnap0CgYBCEyXy/KiHHPxiwp0n0yTk+gXgl4meWVkSQU5QWerMxPEUwGuw
7n+nBNGD1L8NVTdXyYcq+5hN2m5XSCJaiDrmFdoqpkGJnSOkM8G1KPvRFeR7VaYE+H0lEoQYUavr
nufSAg4k4xFqYeOdNDOoSA65JMqo5py4APytp0ZqBULEmQKBgQCrW2T3GYGH2NuRT45+OOgoSfKx
AY/1LGsj+KlYu30Xw/IUYXHUCEbHOwoq7p5ZmosNlEPnrneyhwvhlm6GykTekXeiXi/dDwQIG1ax
i21XFOH4ZKB6orPNm2+wketRKMnuYuGajbojLynq/oZ7o0pJEFJKxakDd8vbNWXhMWOr/w==
-----END RSA PRIVATE KEY-----


chmod 400 myaws.pem

ssh -i "myaws.pem" ec2-user@ec2-18-212-178-27.compute-1.amazonaws.com