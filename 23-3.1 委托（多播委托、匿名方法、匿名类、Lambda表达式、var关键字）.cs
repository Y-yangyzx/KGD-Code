using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp2
{
    class Program
    {
        //委托
        public delegate void MultiDelegate();
        static void Main(string[] args)
        {
            #region  多播委托、匿名方法、匿名类
            //非静态方法属于对象所有 Program类的实例所有
            MultiDelegate multi =new Program().Dinner;
            multi += Devliery;
            //multi();
           

            //var obj = new { Name = "张昕阳", Age = 18, Gender = "男", IsJ = false };

            //这样写需要写一个类 然后实例化这个类的对象 可以多次的实例化这个类的对象
            Car car = new Car("奔驰大G", 3, "很不错的装X车");
            //Console.WriteLine(car.Age);
            //Console.WriteLine(car.Name);
            //Console.WriteLine(car.Introduct);

            //声明一个对象 用虚拟类来给里面的属性值赋值
            //好处：很简便  使用条件：只使用一次！！！
            var obj = new { Name ="宝马A6",Age=20};
            var objj = new { Name = "奥迪", Age = 18 };
            var objjj = new { Name = "比亚迪" };
            //Console.WriteLine(obj.GetType());
            //Console.WriteLine(objj.GetType());
            //Console.WriteLine(objjj.GetType());

            //Console.WriteLine(obj.Name);
            //Console.WriteLine(obj.Age);
            #endregion

            //倒序输出这个集合中所有大于70的
            var weight = new List<double>{ 50, 55, 60, 65, 70, 75, 80, 100 };
            var empty = new List<double> { };
            for (int i = 0; i < weight.Count; i++)
            {
                if (weight[i]>70)
                {
                    empty.Add(weight[i]);
                }
            }
            for (int i = empty.Count-1; i >=0; i--)
            {
                //Console.WriteLine(empty[i]);
            }


            //简单方法：Lambda表达式
            var w = weight.Where(j=>j>70).ToList();
            var ww = w.OrderByDescending(j => j).ToList();
            foreach (var item in w)
            {
                Console.WriteLine(item);
            }
            for (int i = 0; i < ww.Count; i++)
            {
                Console.WriteLine(ww[i]);
            }
            Console.ReadKey();
        }

        #region 两个方法
        //方法1
        public void Dinner()
        {
            Console.WriteLine("带一份饭"); 
        }
        //方法2
        public static void Devliery()
        {
            Console.WriteLine("拿一个1-3-5120号码的快递"); 
        }
        #endregion


        #region 小结及总结
        //反思：学习任何一个知识他一定是有适用条件的，只要是满足这个适用条件你要激灵一下
        //所以说任何知识必问的三个问题：1.是基于什么需求产生的？2.适用条件是什么呢？(什么样的
        //题目可以应用这个知识来结局呢？）  3.举的什么例子来解释这个知识的呢？
        //1、2 好像一个正向思维一个逆向思维  第二个是必须极其清楚的！

        //用这一组思想来反思今天复习的 多播委托 匿名函数 匿名类 var关键字 Lambda表达式
        //1.多播委托
        //1）想要利用一个委托同时调用多个方法
        //2）一个委托有多个符合条件的方法可以同时利用这个委托调用
        //3）winform中button控件双击产生事件 利用的就是委托 点击按钮可以同时触发多个方法
        //2.匿名函数匿名类
        //1）写方法的目的为了重复使用 而如果我只用一次写一个方法就太浪费了
        //2）一次性使用方法的需求 
        //3）写一个方法 再写一个匿名方法进行对比 匿名类同理 重点：语法格式是重点
        //3.var关键字
        //1）如果有类型不清楚 还需要定义这个变量 
        //2）变量类型不清楚 就可以使用var关键字 
        //3）定义集合 var list = new List<int>{1,3,5};
        //4.Lambda表达式
        //1）有的书写方式过于繁琐，想要简化书写减少代码量
        //2）用于简化C#中委托的匿名语法  简化语法
        //3）一个集合weight 倒序输出这个集合中所有大于70的数

        #endregion

    }

    class Car
    {
        public Car(string name, int age, string introduct)
        {
            this.Name = name;
            this.Age = age;
            this.Introduct = introduct;
        }
        public string Name { get; set; }
        public int Age { get; set; }
        public string Introduct { get; set; }
    }
}
