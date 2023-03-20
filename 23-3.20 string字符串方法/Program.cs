using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp4
{
    class Program
    {
        static void Main(string[] args)
        {
            //字符串常用方法
            #region 可以将一个字符串看成一个只读类型的char类型的数组
            //string str = "abcdefg";
            //char[] charStr = str.ToCharArray();
            //charStr[0] = 'b';
            //str = new string(charStr);
            //Console.WriteLine(str);
            //Console.WriteLine(str[2]);
            #endregion


            #region StringBuilder类
            //StringBuilder sb = new StringBuilder();//00:00:00.0006460
            //Stopwatch sw = new Stopwatch();
            //string s = null;//00:00:00.0292386
            //sw.Start();
            //for (int i = 0; i < 10000; i++)
            //{
            //    //s += i;
            //    sb.Append(i);
            //}
            //sw.Stop();
            //Console.WriteLine(sw.Elapsed);
            //Console.WriteLine(sb.ToString());
            #endregion


            #region 字符串比较
            //string s1 = "asdf";
            //string s2 = "Asdf";
            //if (s1.Equals(s2,StringComparison.OrdinalIgnoreCase))
            //{
            //    Console.WriteLine("两个字符串相同");
            //}
            //else
            //{
            //    Console.WriteLine("两个字符串不同");
            //}
            #endregion


            #region 分割字符串方法
            //string strs = "ab * - cj fkl  a,,,al;0-=0sjkl";
            //char[] chs = { '*','-',' ',',',';','='};
            //string[] sArray = strs.Split(chs,StringSplitOptions.RemoveEmptyEntries);

            //string strs ="2022-11-24";
            //string[] strArray = strs.Split(new char[]{'-'},StringSplitOptions.RemoveEmptyEntries);
            //for (int i = 0; i < strArray.Length; i++)
            //{
            //    Console.Write(strArray[i]);
            //}
            #endregion


            #region 字符串截取方法
            //string sss = "今天天气很晴朗，处处好风光！";
            //sss = sss.Substring(1,4);
            //Console.WriteLine(sss);
            #endregion


            #region IndexOf()、LastIndexOf()方法
            string sss = "我是一个字符串串";
            int index = sss.LastIndexOf('串');
            Console.WriteLine(index);
            #endregion


            #region Join方法
            //string[] names = { "张三","李四","王五","赵六","田七"};
            //string strNew = string.Join("|", names);
            //Console.WriteLine(strNew);
            #endregion



            #region 字符串练习1：倒序输出一个字符串
            

            #endregion
            Console.ReadKey();
        }
    }
}
