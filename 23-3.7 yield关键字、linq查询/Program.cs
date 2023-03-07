using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp
{

    class Program
    {

        //https://cloud.tencent.com/developer/article/1834486
        //当声明一个对象的时候，可以在括号后面加上花括号即可对类中的公有变量以及可写属性进行快速赋值。当调用无参构造函数，可以将小圆括号去除。
        static void Main(string[] args)
        {
            //    Goods goods = new Goods{ Name="张三",Price=3.14};
            //    Console.WriteLine(goods.Name);

            //    List<Goods> listGoods = new List<Goods>()
            //    {
            //        new Goods{Name="奥利奥",Price=12.5},
            //        new Goods{Name="奥利给",Price=5},
            //        new Goods{Name="铁观音",Price=150.3},
            //        new Goods{Name="巧克力",Price=35.8},
            //        new Goods{Name="无骨鸡爪",Price=53.5}
            //    };
            Goods[] arrGoods = {
                new Goods{Name="奥利奥*",Price=12.5},
                new Goods{Name="奥利给*",Price=5},
                new Goods{Name="铁观音*",Price=150.3},
                new Goods{Name="巧克力*",Price=35.8},
                new Goods{Name="无骨鸡爪*",Price=53.5}
            };

            //linq查询
            var res = from p in arrGoods
                      where p.Price > 30
                      select p;
            foreach (var item in res)
            {
                //Console.WriteLine($"商品名称：{item.Name}，商品价格：{item.Price}");
            }
            //    foreach (var item in GoodsMethod(arrGoods,20))
            //    {
            //        Console.WriteLine($"物品名称是：{item.Name},价格是：{item.Price}");
            //    }





            //查询  分组查询
            //查询
            IEnumerable<Product> list = new List<Product> {
                new Product{ ProductName="李宁",Category="鞋子",Number=100},
                new Product{ ProductName="耐克",Category="鞋子",Number=1100},
                new Product{ ProductName="猫哆哩",Category="食品",Number=1200},
                new Product{ ProductName="可乐",Category="饮料",Number=1300},
                new Product{ ProductName="王老吉",Category="饮料",Number=1500},
                new Product{ ProductName="子弟土豆片",Category="食品",Number=1700},
                new Product{ ProductName="农夫山泉",Category="饮料",Number=2100},
                new Product{ ProductName="鲜橙多",Category="饮料",Number=3100},
               new Product{ ProductName="火腿",Category="食品",Number=1800}
           };
            var content = from p in list
                          where p.Category == "食品"
                          select p;
            foreach (var item in content)
            {
                //Console.WriteLine($"产品名称:{item.ProductName},种类：{item.Category}，数量：{item.Number}");

            }
            //分组查询 分组语句
            var groupContent = from p in list
                               group p by p.Category;
            int index = 0;
            foreach (var item in groupContent)
            {
                //Console.WriteLine($"第{++index}组的类别：{item.Key}，数量：{item.Count()}：");
                foreach (var obj in item)
                {
                    //Console.WriteLine($"    产品的名称：{obj.ProductName},产品的种类：{obj.Category}，产品的数量：{obj.Number}");
                }
            }
            //into语句
            var groupC = from p in list
                         group p by p.Category into g
                         select new { Title = g.Key, count = g.Count() };
            foreach (var item in groupC)
            {
                //Console.WriteLine($"产品的类别：{item.Title}，产品的数量：{item.count}");
            }



            //orderby排序语句
            var queryOrder = from t in list
                             orderby t.Number descending
                             select t;
            for (int i = 0; i < queryOrder.Count(); i++)
            {
                var a = queryOrder.ElementAt(i);
                Console.WriteLine($"产品的名称：{a.ProductName}，产品的种类：{a.ProductName}，产品的数量：{a.Number}");
            }
            Console.ReadKey(false);
        }



        //IEnumerable类是List和数组的父类
        public static IEnumerable<Goods> GoodsMethod(IEnumerable<Goods> goods,double price)
        {
            //List<Goods> newGoods = new List<Goods>() { };
            //使用Yeild关键字
            foreach (var item in goods)
            {
                if (item.Price>price)
                {
                    yield return item;
                    //newGoods.Add(item);
                }           
            }
            //return newGoods;
        }
    }
}
