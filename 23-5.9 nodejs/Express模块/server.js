// 1、导入express模块
const express = require('express')
// 2、创建web服务器   express对象实例    express方法接收返回值
const app = express()

// 4、监听客户端的 GET 和 POST 请求，并向客户端响应具体的内容
app.get('/user',(req,res)=>{
    // 调用express提供的res.send()方法，向客户端响应一个JSON对象
    res.send({name:'zs',age:20,gender:'男'})
})

app.post('/user',(req,res)=>{
    // 调用express提供的res.send()方法，向客户端响应一个字符串
    res.send('请求成功！')
})


// 3、启动web服务器
app.listen(8888,()=>{
    console.log('服务器已启动 http://127.0.0.1:8888');
})

// req.params是动态匹配参数
app.get('/user/:id',(req,res)=>{
    // req.params是动态匹配到的参数  默认也是一个空对象
    console.log(req.params);
    res.send(req.params)
})
