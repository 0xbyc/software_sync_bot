生成一个SSH公私钥

```
ssh-keygen -t rsa -f /path/to/gitee_id_rsa
```

`known_hosts`里面内容要怎么写

```
ssh-keyscan gitee.com
```

会返回3个,对应不同加密方法:

```
# gitee.com:22 SSH-2.0-Basalt-1.2.12
gitee.com ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDMzG3r+88lWSDK9fyjcZmYsWGDBDmGoAasKMAmjoFloGt9HRQX2Qp4f9FY2XK/hsHYinvoh5Xytl9iaUNUWMfYR8q6VEMtOO87DgoAFcfKZHt0/nbAg9RoNTKYt6v8tPwYpr7N0JP/01nE4LFsNDnstr6H0bXSAzbKWCETLZfdPV4l2uSpRn3bU0ugoZ0aSKz5Dc/IloBfGCTvkSsxUydMRd/Chpjt6VxncDbp+Fa6pzsseK8OQzrg6Fgc5783EN3EQqZ2skqyCwExtx95BJlfx1B3luZnWfpkwNDnrZRT/Qx0OrWqyf0q6f9uQr+UG1S8qDcUn3e/9onq3rwBri8/
# gitee.com:22 SSH-2.0-Basalt-3.0.0
gitee.com ecdsa-sha2-nistp256 AAAAE2VjZHNhLXNoYTItbmlzdHAyNTYAAAAIbmlzdHAyNTYAAABBBMuEoYdx6to5oxR60IWj8uoe1aI0X1fKOHWOtLqTg1tsLT1iFwXV5JmFjU46EzeMBV/6EmI1uaRI6HiEPtPtJHE=
# gitee.com:22 SSH-2.0-Basalt-3.0.0
gitee.com ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIEKxHSJ7084RmkJ4YdEi5tngynE8aZe2uEoVVsB/OvYN
```

我们使用的ssh公私钥是rsa加密,所以复制第一个就是`known_hosts`的内容了

```
gitee.com ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDMzG3r+88lWSDK9fyjcZmYsWGDBDmGoAasKMAmjoFloGt9HRQX2Qp4f9FY2XK/hsHYinvoh5Xytl9iaUNUWMfYR8q6VEMtOO87DgoAFcfKZHt0/nbAg9RoNTKYt6v8tPwYpr7N0JP/01nE4LFsNDnstr6H0bXSAzbKWCETLZfdPV4l2uSpRn3bU0ugoZ0aSKz5Dc/IloBfGCTvkSsxUydMRd/Chpjt6VxncDbp+Fa6pzsseK8OQzrg6Fgc5783EN3EQqZ2skqyCwExtx95BJlfx1B3luZnWfpkwNDnrZRT/Qx0OrWqyf0q6f9uQr+UG1S8qDcUn3e/9onq3rwBri8/
```

测试连接:
```
ssh -T git@gitee.com
```