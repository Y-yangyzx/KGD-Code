<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>新闻首页</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.js"></script>

</head>

<body>
    <!-- 导航开始 -->
    <!--导航-->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">新闻管理系统</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">首页</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">添加新闻</a>
            </li>
            <li class="nav-item active" style="margin-left: 100px;">
                <a class="nav-link" href="#">
                    <?php 
                    include('./php/show.php');
                    ?>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="./php/reset.php">退出</a>
            </li>
        </ul>
    </nav>
    <!--导航-->
    <!-- 导航结束 -->




    <!-- 具体内容 -->
    <div class="mask1">
        <div class="container">
            <h1>新闻系统</h1>
            <!-- 新闻列表开始 -->
            <div class="news-list">
                <!-- 新闻列表左边开始 -->
                <div class="news-list-left">
                    <!-- 列表项开始 -->
              
                    <div class="news-list-item">
                        <!-- 作者以及发布时间 -->
                        <div class="author-time"> <span>wangtong</span> 发表于 <span>2021-12-1</span> </div>
                        <!-- 新闻详情 -->
                        <div class="news-des">
                            <!-- 新闻标题 -->
                            <h3 class="news-title" style='float: left;'>
                                <i></i>
                                <a href="#">
                                    茶饮市场的霸主地位并未改变
                                </a>
                            </h3>

                            <!-- 编辑,删除 -->
                            <div class="operate">
                                <a href="#">编辑</a>&nbsp;&nbsp;<a href="#">删除</a>
                            </div>

                            <div style='clear:both'></div>

                            <!-- 新闻内容 -->
                            <div class="news-content-des ellipsis">
                                1997年，立顿位居中国百家商城报告中的茶包销售额第一，且占有国内袋泡茶市场6成以上份额。也就有了“你的心脏每跳动一次，全球就有1252杯立顿红茶被饮用，119罐立顿冰红茶被消费”之说。
                            </div>
                        </div>
                    </div>
                    
                    <!--第二组-->
                    <div class="news-list-item">
                        <!-- 作者以及发布时间 -->
                        <div class="author-time"> <span>wangtong</span> 发表于 <span>2021-12-1</span> </div>
                        <!-- 新闻详情 -->
                        <div class="news-des">
                            <!-- 新闻标题 -->
                            <h3 class="news-title" style='float: left;'>
                                <i></i>
                                <a href="#">
                                    茶饮市场的霸主地位并未改变
                                </a>
                            </h3>

                            <!-- 编辑,删除 -->
                            <div class="operate">
                                <a href="#">编辑</a>&nbsp;&nbsp;<a href="#">删除</a>
                            </div>

                            <div style='clear:both'></div>

                            <!-- 新闻内容 -->
                            <div class="news-content-des ellipsis">
                                1997年，立顿位居中国百家商城报告中的茶包销售额第一，且占有国内袋泡茶市场6成以上份额。也就有了“你的心脏每跳动一次，全球就有1252杯立顿红茶被饮用，119罐立顿冰红茶被消费”之说。
                            </div>
                        </div>
                    </div>
                    
                    <!--第三组-->
                    <div class="news-list-item">
                        <!-- 作者以及发布时间 -->
                        <div class="author-time"> <span>wangtong</span> 发表于 <span>2021-12-1</span> </div>
                        <!-- 新闻详情 -->
                        <div class="news-des">
                            <!-- 新闻标题 -->
                            <h3 class="news-title" style='float: left;'>
                                <i></i>
                                <a href="#">
                                    茶饮市场的霸主地位并未改变
                                </a>
                            </h3>

                            <!-- 编辑,删除 -->
                            <div class="operate">
                                <a href="#">编辑</a>&nbsp;&nbsp;<a href="#">删除</a>
                            </div>

                            <div style='clear:both'></div>

                            <!-- 新闻内容 -->
                            <div class="news-content-des ellipsis">
                                1997年，立顿位居中国百家商城报告中的茶包销售额第一，且占有国内袋泡茶市场6成以上份额。也就有了“你的心脏每跳动一次，全球就有1252杯立顿红茶被饮用，119罐立顿冰红茶被消费”之说。
                            </div>
                        </div>
                    </div>
                    
                     <!--第四组-->
                     <div class="news-list-item">
                        <!-- 作者以及发布时间 -->
                        <div class="author-time"> <span>wangtong</span> 发表于 <span>2021-12-1</span> </div>
                        <!-- 新闻详情 -->
                        <div class="news-des">
                            <!-- 新闻标题 -->
                            <h3 class="news-title" style='float: left;'>
                                <i></i>
                                <a href="#">
                                    茶饮市场的霸主地位并未改变
                                </a>
                            </h3>

                            <!-- 编辑,删除 -->
                            <div class="operate">
                                <a href="#">编辑</a>&nbsp;&nbsp;<a href="#">删除</a>
                            </div>

                            <div style='clear:both'></div>

                            <!-- 新闻内容 -->
                            <div class="news-content-des ellipsis">
                                1997年，立顿位居中国百家商城报告中的茶包销售额第一，且占有国内袋泡茶市场6成以上份额。也就有了“你的心脏每跳动一次，全球就有1252杯立顿红茶被饮用，119罐立顿冰红茶被消费”之说。
                            </div>
                        </div>
                    </div>

                    <!--第五组-->
                    <div class="news-list-item">
                        <!-- 作者以及发布时间 -->
                        <div class="author-time"> <span>wangtong</span> 发表于 <span>2021-12-1</span> </div>
                        <!-- 新闻详情 -->
                        <div class="news-des">
                            <!-- 新闻标题 -->
                            <h3 class="news-title" style='float: left;'>
                                <i></i>
                                <a href="#">
                                    茶饮市场的霸主地位并未改变
                                </a>
                            </h3>

                            <!-- 编辑,删除 -->
                            <div class="operate">
                                <a href="#">编辑</a>&nbsp;&nbsp;<a href="#">删除</a>
                            </div>

                            <div style='clear:both'></div>

                            <!-- 新闻内容 -->
                            <div class="news-content-des ellipsis">
                                1997年，立顿位居中国百家商城报告中的茶包销售额第一，且占有国内袋泡茶市场6成以上份额。也就有了“你的心脏每跳动一次，全球就有1252杯立顿红茶被饮用，119罐立顿冰红茶被消费”之说。
                            </div>
                        </div>
                    </div>
                    <!-- 列表项结束 -->

                </div>
                <!-- 新闻列表左边结束 -->

                <!-- 新闻列表右边-关于我们开始 -->
                <div class="news-list-right">
                    <div class="about">
                        <h4>新闻系统--项目简介</h4>
                        <div class="about-des">
                            <p>本项目将会完成"新闻管理系统"的数据库设计，新闻数据的增加、删除、修改、查询等操作。</p>
                        </div>
                    </div>
                </div>
                <!-- 新闻列表右边-关于我们结束 -->

                <div style='clear:both;'></div>


                <!-- 分页 -->
                <div class="page">
                    
                </div>

                <!-- 底部开始 -->
                <footer class="copyright">Copyright 2021 Miss.Wang All rights reserved.</footer>
                <!-- 底部结束 -->
            </div>
            <!-- 新闻列表结束 -->
        </div>
    </div>
</body>

</html>