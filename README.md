# test_ele
订餐系统
1,
2,
3,
4,
5,
6,

# TODO
    1, shoplist页面的点击显示更多商家的完善
    2, shoplist页面的当前位置信息的完善，涉及到session，session里面的位置信息（location）应该是一个数组，
       包含多个位置信息，给用户待选，这里还涉及到登录用户的位置显示和未登录用户的位置显示，登录的用户才有多个location可选
    3, 切换地址里面的待选选项的指向链接要带经纬度信息，以get方式
    4, 商家分类要遍历表（或是从redis里面拿）
    5, 点击商家分类，下面的商家list要重新生成（主要涉及到js）
    6, 主体的内容部分用js在前台生成，数据从服务器以json格式传过来，简化服务器模板

    7, 评论模块。模板，控制类，model类，数据库表
    8, 购物车。
    9, redis。用于验证用户名等是否可用，验证登录，存放session，存放商家基本信息